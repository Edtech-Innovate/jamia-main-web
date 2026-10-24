<?php

namespace App\Http\Controllers;

use App\Models\Center;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class CenterController extends Controller
{
    public function index()
    {
        $centers = Center::latest()->get();

        // Cache countries list
        $countries = Cache::remember('countries_list', 86400, function () {
            return $this->getApi('https://api.countrystatecity.in/v1/countries');
        });

        foreach ($centers as $center) {
            // Country name
            foreach ($countries as $country) {
                if (strtoupper($country['iso2']) === strtoupper($center->country)) {
                    $center->country = $country['name'];

                    // State name inside the selected country
                    $center->state = $this->getStateName($country['iso2'], $center->state);
                    break;
                }
            }
        }

        return view('content.center', compact('centers'));
    }


    public function indianCenters(Request $request)
    {
        $stateCode = $request->state;
        $district = $request->district;
        $type = $request->type;

        $stateResponse = Http::withHeaders([
            'X-CSCAPI-KEY' => config('services.country_state_city.key')
        ])->get('https://api.countrystatecity.in/v1/countries/IN/states')->json();

        $stateNames = collect($stateResponse)->pluck('name', 'iso2')->toArray();

        $query = Center::query()->where('country', 'India');

        if ($stateCode) $query->where('state', $stateCode);
        if ($district) $query->where('district', $district);
        if ($type) $query->where('type', $type);

        $centers = $query->get();

        return view('web.content.india', compact('centers', 'stateNames'));
    }

    public function ajaxFilterCenters(Request $request)
{
    $district = $request->input('district');   // e.g., "Pune"
    $type = $request->input('type');           // e.g., "center"

    // dd($district, $type);  // Check values being passed from frontend

    // Start query on 'centers' table where country is India
    $query = Center::query()->where('country', 'IN');

    // Apply filters only on district and type
    if (!empty($district)) {
        $query->where('district', $district);
    }

    if (!empty($type)) {
        $query->where('type', $type);
    }

    // Get filtered results
    $centers = $query->get();

    // dd($centers); // Check result of the query

    // Optional: Convert ISO2 state code to full state name using API
    $stateResponse = Http::withHeaders([
        'X-CSCAPI-KEY' => config('services.country_state_city.key')
    ])->get('https://api.countrystatecity.in/v1/countries/IN/states')->json();

    $stateNames = collect($stateResponse)->pluck('state', 'iso2');

// dd($stateNames);
    // Replace ISO2 with full name in each center
    $centers->transform(function ($center) use ($stateNames) {
        $center->state = $stateNames[$center->state] ?? $center->state;
        return $center;
    });

    return response()->json(['centers' => $centers]);
}


    public function overseasCenters(Request $request)
    {
        $query = Center::query()->where('country', '!=', 'IN');

        if ($request->filled('country')) {
            $query->where('country', $request->country);
        }
        if ($request->filled('district')) {
            $query->where('district', $request->district);
        }

        $centers = $query->get();
        return view('web.content.overseas', compact('centers'));
    }
    public function filterOverseas(Request $request)
    {
        // dd($request);
        $query = Center::query()->where('country', '!=', 'IN');
    
        if ($request->filled('country')) {
            $query->where('country', $request->country);
        }
    
        if ($request->filled('district-abroad')) {
            $query->where('district-abroad', $request->district);
        }
    
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }
    
        $centers = $query->get();
    
        return response()->json([
            'centers' => $centers
        ]);
    }
    

    private function getCountryName($iso2)
    {
        $countries = $this->getApi('https://api.countrystatecity.in/v1/countries');

        foreach ($countries as $country) {
            if (strtoupper($country['iso2']) === strtoupper($iso2)) {
                return $country['name'];
            }
        }

        return $iso2; // fallback
    }
    private function getStateName($country_iso2, $state_iso2)
    {
        $states = Cache::remember("states_{$country_iso2}", 86400, function () use ($country_iso2) {
            $url = "https://api.countrystatecity.in/v1/countries/{$country_iso2}/states";
            return $this->getApi($url);
        });

        foreach ($states as $state) {
            if (strtoupper($state['iso2']) === strtoupper($state_iso2)) {
                return $state['name'];
            }
        }

        return $state_iso2;
    }
    public function create()
    {
        // Fetch countries from API
        $countries = $this->getApi('https://api.countrystatecity.in/v1/countries');
        return view('form.center.create', ['countries' => $countries]);
    }

   /* private function getApi($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'X-CSCAPI-KEY: NkhodjdUdEtZNXZlWXdmeks5Q29iN01aZkNQY2NqbkxXMzJTZmtYbA==' // API Key
            ]
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, true); // Decode JSON response
    }*/
  private function getApi($url)
{
    $options = [
        "http" => [
            "header" => "X-CSCAPI-KEY: NkhodjdUdEtZNXZlWXdmeks5Q29iN01aZkNQY2NqbkxXMzJTZmtYbA=="
        ]
    ];

    $context = stream_context_create($options);

    $response = @file_get_contents($url, false, $context);

    if ($response === false) {
        // Handle error or return empty array
        return [];
    }

    return json_decode($response, true);
}


    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'center_name'       => 'required|string|max:255',
            'district'          => 'nullable|string|max:100',
            'district-abroad'   => 'nullable|string|max:100',
            'state'             => 'nullable|string|max:100',
            'country'           => 'required|string|max:100',
            'type'              => 'required|in:center,regional_coordinator',
        ]);

        $ab_district = $request->input('district-abroad');
        $data = [
            'center_name'       => $request->center_name,
            'district'          => $request->district ?? '',
            'district-abroad'   => $ab_district ?? '',
            'state'             => $request->state ?? '',
            'country'           => $request->country,
            'type'              => $request->type,
        ];

        // Save the center
        Center::create($data);
        return ['status' => '200', 'msg' => 'Center Created successfully!'];
    }


    public function edit($id)
    {
        // Fetch the center details by ID
        $center = Center::findOrFail($id);

        // Fetch countries for the edit form
        $countries = $this->getApi('https://api.countrystatecity.in/v1/countries');

        // Return the edit view
        return view('form.center.edit', compact('center', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'center_name' => 'required|string|max:255',
            'district'    => 'nullable|string|max:100',
            'district-abroad' => 'nullable|string|max:100',
            'state'       => 'nullable|string|max:100',
            'country'     => 'required|string|max:100',
            'type'        => 'required|in:center,regional_coordinator',
        ]);

        $center = Center::findOrFail($id);
        $center->update([
            'center_name'     => $request->center_name,
            'district'        => $request->district ?? '',
            'district-abroad' => $request->input('district-abroad') ?? '',
            'state'           => $request->state ?? '',
            'country'         => $request->country,
            'type'            => $request->type,
        ]);

        return ['status' => '200', 'msg' => 'Center Update successfully!'];
    }


    public function destroy($id)
    {
        $center = Center::findOrFail($id);
        $center->delete();
        return ['status' => '200', 'msg' => 'Center deleted successfully!'];
    }
}
