<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\DB;
class LeadController extends Controller
{

    public function index(){
        $lead= Lead::all();
        return view('content.lead',compact('lead'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'programs' => 'required|string',
            'phone' => 'required|string',
            'message' => 'required|string',
            'state'=>  'required|string'
        ]);

        Lead::create($request->all());

       
        return ['status' => '200', 'msg' => 'Center Created successfully!'];
    }

    // Delete a lead
    public function destroy($id)
    {
        // dd($id);
        $lead = Lead::findOrFail($id);
        $lead->delete();
        return ['status' => '200', 'msg' => 'Deleted successfully'];
    }
    
    
    
    // API endpoint for fetching leads (Datatable)
// public function fetchLeads(Request $request)
// {
   
//     try {
//         // $fetchlead=Lead::all();
//         // dd($fetchlead);
//         // Set headers for API response
//         header("Access-Control-Allow-Origin: *");
//         header("Access-Control-Allow-Methods: POST");
//         header("Access-Control-Allow-Headers: Content-Type");
//         header("Content-Type: application/json");

//         // Get request data
//         // $requestData = $request->all();
        
//         // if (empty($requestData)) {
//         //     throw new \Exception("Empty request found");
//         // }

//         // Datatable parameters
//         $draw = $requestData['draw'] ?? 1;
//         $start = $requestData['start'] ?? 0;
//         $length = $requestData['length'] ?? "all";
//         $searchValue = $requestData['searchtext'] ?? "";
//         $orderBy = "id DESC";

//         // Handle sorting
//         if (isset($requestData['order']) && isset($requestData['columns'])) {
//              dd('hello');
//             $columnIndex = $requestData['order'][0]['column'];
//             $columnName = $requestData['columns'][$columnIndex]['data'];
//             $columnSortOrder = $requestData['order'][0]['dir'];
            
//             // Map column names to database fields
//             $columnMapping = [
//                 'ID' => 'id',
//                 'name' => 'name',
//                 'email' => 'email',
//                 'phone' => 'phone',
//                 'subject' => 'programs', // Subject is stored as programs
//                 'created_at' => 'created_at'
//             ];
            
//             $dbColumnName = $columnMapping[$columnName] ?? 'id';
//             $orderBy = "$dbColumnName $columnSortOrder";
//         }

//         // Build query
//         $query = Lead::query();
        
//         // Apply search filter
//         if (!empty($searchValue)) {
//             $query->where(function($q) use ($searchValue) {
//                 $q->where('name', 'LIKE', "%$searchValue%")
//                   ->orWhere('email', 'LIKE', "%$searchValue%")
//                   ->orWhere('phone', 'LIKE', "%$searchValue%")
//                   ->orWhere('programs', 'LIKE', "%$searchValue%");
//             });
//         }

//         // Get total records count
//         $totalRecords = Lead::count();
//         $totalRecordWithFilter = $query->count();

//         // Handle "all" records
//         if ($length == "all") {
//             $length = $totalRecordWithFilter;
//         }

//         // Fetch records with pagination and ordering
//         $leads = $query->orderByRaw($orderBy)
//                       ->skip($start)
//                       ->take($length)
//                       ->get();

//         // Prepare data array
//         $data = [];
//         dd($leads);
//         foreach ($leads as $lead) {
//             $data[] = [
//                 "ID" => $lead->id,
//                 "name" => $lead->name,
//                 "email" => $lead->email,
//                 "phone" => $lead->phone,
//                 "subject" => $lead->programs, // Mapping programs to subject
//                 "message" => $lead->message,
//                 // Employment_Status field doesn't exist in your table
//                 "created_at" => $lead->created_at ? date("d-M-Y", strtotime($lead->created_at)) : ""
//             ];
//         }

//         // Prepare response
//         $response = [
//             "draw" => intval($draw),
//             "iTotalRecords" => $totalRecords,
//             "iTotalDisplayRecords" => $totalRecordWithFilter,
//             "aaData" => $data
//         ];

//         return response()->json($response);

//     } catch (\Exception $e) {
//         return response()->json([
//             'error' => $e->getMessage(),
//             'line' => $e->getLine()
//         ], 500);
//     }
// }
public function fetchLeads(Request $request)
{
    
    $lead=Lead::all();
    
    try {
        // Get request data from X-Custom-Data header
        $requestData = [];
;
        if ($request->header('X-Custom-Data')) {
            $decodedData = base64_decode($request->header('X-Custom-Data'), true);
            if (!empty($decodedData)) {
                $requestData = json_decode($decodedData, true);
            }
        }

        // if (empty($requestData)) {
        //     throw new \Exception("Empty request found");
        // }
// dd($lead);
        // Datatable parameters
        $draw        = $requestData['draw'] ?? 1;
        $start       = $requestData['start'] ?? 0;
        $rowperpage  = $requestData['length'] ?? "all";
        $searchValue = $requestData['searchtext'] ?? "";

        // Handle sorting — map frontend column names to actual DB columns
        $orderBy        = "id";
        $orderDirection = "DESC";

        if (isset($requestData['order'][0])) {
            $columnIndex     = $requestData['order'][0]['column'];
            $columnName      = $requestData['columns'][$columnIndex]['data'] ?? '';
            $columnSortOrder = $requestData['order'][0]['dir'] ?? 'desc';

            // ✅ Mapped to actual DB column names (matching store() method)
            $columnMapping = [
                'ID'         => 'id',
                'name'       => 'name',
                'email'      => 'email',
                'phone'      => 'phone',
                'subject'    => 'programs',
                'message'=>'message',
                'address'=>'address',
                'created_at' => 'created_at',
            ];

            $orderBy        = $columnMapping[$columnName] ?? 'id';
            $orderDirection = strtoupper($columnSortOrder) === 'ASC' ? 'ASC' : 'DESC';
        }

        // Total records without filter
        $totalRecords = Lead::count();

        if ($rowperpage === "all" || $rowperpage == -1) {
            $rowperpage = $totalRecords ?: 1;
        }

        // Build query with search filter
        $query = Lead::query();

        if (!empty($searchValue)) {
            $query->where(function ($q) use ($searchValue) {
                // ✅ Using actual DB column names
                $q->where('name',     'LIKE', "%{$searchValue}%")
                  ->orWhere('email',    'LIKE', "%{$searchValue}%")
                  ->orWhere('phone',    'LIKE', "%{$searchValue}%")
                  ->orWhere('programs', 'LIKE', "%{$searchValue}%")
                  ->orWhere('address',  'LIKE', "%{$searchValue}%")
                  ->orWhere('message',  'LIKE', "%{$searchValue}%");
            });
        }

        // Total records with filter
        $totalRecordwithFilter = $query->count();

        // Fetch records
        $leadsLists = $query->orderBy($orderBy, $orderDirection)
                            ->skip((int) $start)
                            ->take((int) $rowperpage)
                            ->get();

        // Prepare data
        $data = [];
        foreach ($leadsLists as $row) {
            // ✅ Using actual model attribute names
         
            $data[] = [
                "ID"         => $row->id,
                "name"       => $row->name,
                "email"      => $row->email,
                "phone"      => $row->phone,
                "subject"    => $row->programs,  // programs maps to subject in frontend
                "message"    => $row->message,
                "address"=>   $row->state,
                "created_at" => $row->created_at
                                    ? date("d-M-Y", strtotime($row->created_at))
                                    : "",
            ];
        }
   $juaData = $data ?? [];
//  dd($data);
        // Send response
        return response()->json([
            "draw"                 => intval($draw),
            "iTotalRecords"        => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData"               => $juaData,
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'status'  => 400,
            'message' => "Error: " . $e->getMessage() . " on line: " . $e->getLine(),
        ], 400);
    }
}

}
