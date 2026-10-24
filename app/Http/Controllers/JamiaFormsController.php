<?php

namespace App\Http\Controllers;

use App\Models\jamiaForms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class JamiaFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jamia_form = jamiaForms::all();
        return view('content.index', compact('jamia_form'));
    }
    public function centerOfIndia(Request $request)
    {
        $state = $request->input('state');
        $district = $request->input('district');

        // Fetch data based on state and district
        $jamiaForms = JamiaForms::where('state', $state)->where('district_form', $district)->get();

        return response()->json($jamiaForms);
    }
    public function verify($id)
    {
        // Find the specific data by ID
        $data = jamiaForms::findOrFail($id);

        // Update the verification status
        $data->verified_at = now(); // Assuming 'now()' returns current timestamp
        $data->save();

        // Redirect back to the index page or any other appropriate page
        return redirect()->route('content.index')->with('success', 'Data has been verified successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //   dd($request);
        $validated = Validator::make($request->all(), [
            // dd($request),
            'center_code' => '',
            'pp_image' => 'image|mimes:png,jpg,webp,jpeg|max:1048',
            'postal_address_captital' => 'required',
            'name_institution' => 'required',
            'house_bulding_number' => 'required',
            'road_street' => 'required',
            'colony_locality' => 'required',
            'post_office' => 'required',
            'police_station_form' => 'required',
            'landmark_form' => 'required',
            'pincode_form' => 'required',
            'district_form' => 'required',
            'state' => 'required',
            'mobile_form' => 'required',
            'email_form' => 'required',
            'name_center_incharge' => 'required',
            'academic_qualification' => 'required',
            'name_and_address_company' => 'required',
            'under_which_act' => 'required',
            'year_registration' => 'required',
            'registration_no' => 'required',
            'name_designation' => 'required',
            'name_affiliation_body' => 'required',
            'affiliation_year' => 'required',
            'duration_affiation' => 'required',
            'number_room' => 'required',
            'declaration_date' => 'required',
            'declaration_place' => 'required',
            'signature_center_incharge' => 'image|mimes:png,jpeg|max:1048',
            'certificate_endorsement' => 'required',
            'certificate_endorsement1' => 'required',
            'endorsement_date' => 'required',
            'endorsement_signature' => 'image|mimes:png,jpeg|max:1048',
            'affidavit_name' => 'required',
        ]);
        if ($validated->fails()) {
            return response()->json(['status' => 'error', 'msg' => $validated->errors()]);
        }
        $jamiaSave = new jamiaForms;
        $jamiaSave->center_code = $request->center_code;
        $jamiaSave->application_for = $request->application_for;
        // $jamiaSave->old_center_centercode = $request->old_center_centercode;
        // $jamiaSave->old_center = $request->old_center;
        $jamiaSave->postal_address_captital = $request->postal_address_captital;
        $jamiaSave->name_institution = $request->name_institution;
        $jamiaSave->house_bulding_number = $request->house_bulding_number;
        $jamiaSave->road_street = $request->road_street;
        $jamiaSave->colony_locality = $request->colony_locality;
        $jamiaSave->post_office = $request->post_office;
        $jamiaSave->police_station_form = $request->police_station_form;
        $jamiaSave->landmark_form = $request->landmark_form;
        $jamiaSave->pincode_form = $request->pincode_form;
        $jamiaSave->district_form = $request->district_form;
        $jamiaSave->state = $request->state;
        $jamiaSave->mobile_form = $request->mobile_form;
        $jamiaSave->email_form = $request->email_form;
        $jamiaSave->name_center_incharge = $request->name_center_incharge;
        $jamiaSave->academic_qualification = $request->academic_qualification;
        $jamiaSave->level_institution = $request->level_institution;
        $jamiaSave->jamia_student = $request->jamia_student;
        $jamiaSave->medium_instution = $request->medium_instution;
        $jamiaSave->name_and_address_company = $request->name_and_address_company;
        $jamiaSave->company_register = $request->company_register;
        $jamiaSave->under_which_act = $request->under_which_act;
        $jamiaSave->year_registration = $request->year_registration;
        $jamiaSave->registration_no = $request->registration_no;
        $jamiaSave->name_designation = $request->name_designation;
        $jamiaSave->aligarh = $request->aligarh;
        $jamiaSave->affiliation_school_institution = $request->affiliation_school_institution;
        $jamiaSave->name_affiliation_body = $request->name_affiliation_body;
        $jamiaSave->affiliation_year = $request->affiliation_year;
        $jamiaSave->duration_affiation = $request->duration_affiation;
        $jamiaSave->number_room = $request->number_room;
        $jamiaSave->buliding_institution = $request->buliding_institution;
        $jamiaSave->institution_school = $request->institution_school;
        $jamiaSave->existence_boundary = $request->existence_boundary;
        $jamiaSave->institution_electrified = $request->institution_electrified;
        $jamiaSave->availability_furniture = $request->availability_furniture;
        $jamiaSave->availability_of_security = $request->availability_of_security;
        $jamiaSave->availability_invigilator = $request->availability_invigilator;
        $jamiaSave->declaration_date = $request->declaration_date;
        $jamiaSave->declaration_place = $request->declaration_place;
        // $jamiaSave->signature_center_incharge = $request->signature_center_incharge;
        $jamiaSave->certificate_endorsement = $request->certificate_endorsement;
        $jamiaSave->certificate_endorsement1 = $request->certificate_endorsement1;
        $jamiaSave->endorsement_date = $request->endorsement_date;
        // $jamiaSave->endorsement_signature = $request->endorsement_signature;
        $jamiaSave->affidavit_name = $request->affidavit_name;
        if ($request->file('pp_image')) {
            $file = $request->file('pp_image');
            $name = time() . $file->getClientOriginalName();
            $image['filePath'] = $name;
            $file->move(public_path() . '/new-assets/jamiaform/', $name);
            $pp_image = 'new-assets/jamiaform/' . $name;
            $jamiaSave->pp_image = $pp_image;
        }
        if ($request->file('signature_center_incharge')) {
            $file = $request->file('signature_center_incharge');
            $name = time() . '_' . $file->getClientOriginalName();
            $filePath = 'new-assets/jamiaform/' . $name;
            $file->move(public_path('new-assets/jamiaform'), $name);
            $jamiaSave->signature_center_incharge = $filePath;
        }

        if ($request->file('endorsement_signature')) {
            $file = $request->file('endorsement_signature');
            $name = time() . '_' . $file->getClientOriginalName();
            $filePath = 'new-assets/jamiaform/' . $name;
            $file->move(public_path('new-assets/jamiaform'), $name);
            $jamiaSave->endorsement_signature = $filePath;
        }

        $jamiaSave->save();
        // dd($jamiaSave);

        if ($jamiaSave) {
            return response()->json(['status' => 200, 'jamia_form_id' => $jamiaSave->id]);
        } else {
            return response()->json(['status' => 400, 'message' => 'No Data Found']);
        }
    }


    public function printJamiaForm($id)
    {
        // Retrieve all jamiaForms

        $jamia_forms = jamiaForms::where('id', $id)->first();
        // Initialize Fpdi
        $pdf = new Fpdi();
        $check = "checked.png";
        $pdf->SetFont("times", '', 12);
        // Add a page
        $pdf->AddPage();
        // Set the source file (template)
        $pdf->setSourceFile("jamia.pdf");
        // Import page 1
        $tplId = $pdf->importPage(1);
        $pdf->useTemplate($tplId);

        // center code
        $pdf->SetXY(41, 38);
        $pdf->Write(1, Str::title($jamia_forms->center_code));
        //  Application for 
        if ($jamia_forms->application_for == "fresh_center") {
            $pdf->Image($check, 157, 159.5, 6, 6);
        } else if ($jamia_forms->application_for == "old_center") {
            $pdf->Image($check, 157, 171.5, 6, 6);
        }
      $postalAddress = $jamia_forms->postal_address_captital ?? '';
        $chunkedAddress = Str::title(substr($postalAddress, 0, 75));

          if (!empty($postalAddress)) {
            $pdf->SetXY(36.3, 225.8);
            $pdf->Write(1, $chunkedAddress);

            // Check if additional lines are needed for longer addresses
            if (strlen($postalAddress) > 76) {
                $pdf->SetXY(36.3, 239.8);
                $pdf->Write(1, Str::title(substr($postalAddress, 76, 152)));

                if (strlen($postalAddress) > 153) {
                    $pdf->SetXY(36.3, 253.8);
                    $pdf->Write(1, Str::title(substr($postalAddress, 153, 228)));

                    if (strlen($postalAddress) > 229) {
                        $pdf->SetXY(36.3, 266.8);
                        $pdf->Write(1, Str::title(substr($postalAddress, 229, 303)));

                        if (strlen($postalAddress) > 360) {
                            $pdf->SetXY(36.3, 275.8);
                            $pdf->Write(1, Str::title(substr($postalAddress, 304, strlen($postalAddress))));
                        }
                    }
                }
            }
        }
        //add 2 page
        $pdf->AddPage();
        $tplId = $pdf->importPage(2);
        $pdf->useTemplate($tplId);
        // section A
        //Name of Institution
        $pdf->SetXY(45.5, 56);
        $pdf->Write(1, Str::title($jamia_forms->name_institution));
        //Affix recent PP size Photo of Centre Incharge
        $pdf->SetXY(163.5, 47.5);
        $pdf->Image($jamia_forms->pp_image, 164, 48, 37, 40);
        //. H. No./ Name of Building
        $pdf->SetXY(59, 71);
        $pdf->Write(1, Str::title($jamia_forms->house_bulding_number));
        // Road/ Street
        $pdf->SetXY(59, 80);
        $pdf->Write(1, Str::title($jamia_forms->road_street));
        //Colony/Area/Locality
        $pdf->SetXY(59, 89);
        $pdf->Write(1, Str::title($jamia_forms->colony_locality));
        // Post Office
        $pdf->SetXY(59, 98);
        $pdf->Write(1, Str::title($jamia_forms->post_office));
        // Police Station
        $pdf->SetXY(59, 107.4);
        $pdf->Write(1, Str::title($jamia_forms->police_station_form));
        //  Landmark
        $pdf->SetXY(59, 115.5);
        $pdf->Write(1, Str::title($jamia_forms->landmark_form));
        // Place and Pin code
        $pdf->SetXY(59, 125);
        $pdf->Write(1, Str::title($jamia_forms->pincode_form));
        //District
        $pdf->SetXY(59, 133);
        $pdf->Write(1, Str::title($jamia_forms->district_form));
        //State
        $pdf->SetXY(59, 142);
        $pdf->Write(1, Str::title($jamia_forms->state));
        // Mobile No. (Whatsapp No.)
        $pdf->SetXY(59, 151);
        $pdf->Write(1, Str::title($jamia_forms->mobile_form));
        //Email
        $pdf->SetXY(59, 159);
        $pdf->Write(1, Str::title($jamia_forms->email_form));
        //Name of Centre Incharge/ Principal/Academic Head
        $pdf->SetXY(107, 178);
        $pdf->Write(1, Str::title($jamia_forms->name_center_incharge));
        // Academic Qualification (minimum Graduate)
        $pdf->SetXY(89, 186.5);
        $pdf->Write(1, Str::title($jamia_forms->academic_qualification));
        //Up to what level is the Institution / school imparting education?
        //Middle
        if ($jamia_forms->level_institution == "Middle") {
            $pdf->Image($check, 34, 203, 3, 3);
        }

        // Secondary
        if ($jamia_forms->level_institution == "Secondary") {
            $pdf->Image($check, 83, 203, 3, 3);
        }

        // Sr. Secondary
        if ($jamia_forms->level_institution == "Sr.Secondary") {
            $pdf->Image($check, 130, 203, 3, 3);
        }

        //Institution/ School is for
        //boys
        if ($jamia_forms->jamia_student == "boy") {
            $pdf->Image($check, 83, 212, 3, 3);
        }
        //Girl
        if ($jamia_forms->jamia_student == "girl") {
            $pdf->Image($check, 130, 212, 3, 3);
        }
        //Co-educational
        if ($jamia_forms->jamia_student == "co_education") {
            $pdf->Image($check, 192, 212, 3, 3);
        }
        // Medium of instruction of Institution/ school
        if ($jamia_forms->medium_instution == "urdu_language") {
            $pdf->Image($check, 130, 221, 3, 3);
        }
        if ($jamia_forms->medium_instution == "english_language") {
            $pdf->Image($check, 166, 221, 3, 3);
        }
        if ($jamia_forms->medium_instution == "both_language") {
            $pdf->Image($check, 192, 221, 3, 3);
        }
        // Section C
        //Name and address of Trust/ Society/ Company
        $pdf->SetXY(98, 248);
       // $pdf->Write(1, Str::title($jamia_forms->name_and_address_company));
        $pdf->Write(1, Str::title(substr($jamia_forms->name_and_address_company,0,55)));
      
        //Is the Trust/Society/Company Registered 
        // if ($jamia_forms->company_register == "Yes") {
        //     $pdf->Image($check, 180, 145, 3, 3);
        // }
        // if ($jamia_forms->company_register == "No") {
        //     $pdf->Image($check, 185, 145, 3, 3);
        // }
        $pdf->SetXY(107, 257);
        $pdf->Write(1, Str::title($jamia_forms->company_register));
        //If yes, under which Act
        $pdf->SetXY(59, 266);
        $pdf->Write(1, Str::title($jamia_forms->under_which_act));
        //Year of Registration
        $pdf->SetXY(59, 274);
        $pdf->Write(1, Str::title($jamia_forms->year_registration));
        //Registration No.
        $pdf->SetXY(160, 274);
        $pdf->Write(1, Str::title($jamia_forms->registration_no));
        //Name & Designation of Secretary/ Manager/ President/ Chairman/ Chief Functionary of the Society/ Trust/ Company
        // $pdf->SetXY(200, 210);
        // $pdf->Write(1, Str::title($jamia_forms->registration_no));
        //Is there a Resolution of the management to get affiliation of information & guidance centre from Jamia Urdu* :
        //add 3 page
        $pdf->AddPage();
        $tplId = $pdf->importPage(3);
        $pdf->useTemplate($tplId);

        $pdf->SetXY(66, 21.5);
        $pdf->Write(1, Str::title($jamia_forms->name_designation));
        // Is there a Resolution of the management to get affiliation of information & guidance centre from Jamia Urdu
        if ($jamia_forms->aligarh == "Yes") {
            $pdf->Image($check, 35, 35.8, 4, 4);
        }
        if ($jamia_forms->aligarh == "No") {
            $pdf->Image($check, 58, 35.8, 4, 4);
        }
        //RECOGNITION AND AFFILIATION STATUS
        // Is the School/Institution Affiliated with any other Institution/Board/ University
        if ($jamia_forms->affiliation_school_institution == "Yes") {
            $pdf->Image($check, 161, 57.2, 4, 4);
        }
        if ($jamia_forms->affiliation_school_institution == "No") {
            $pdf->Image($check, 182, 57, 4, 4);
        }
        //Name of the Affiliating body
        $pdf->SetXY(75, 74);
        $pdf->Write(1, Str::title($jamia_forms->name_affiliation_body));
        //Affiliation No. & Year of Affiliationw
        $pdf->SetXY(85, 81.5);
        $pdf->Write(1, Str::title($jamia_forms->affiliation_year));
        //Duration of Affiliation (If Any)
        $pdf->SetXY(75, 89);
        $pdf->Write(1, Str::title($jamia_forms->duration_affiation));
        //D. SUITABILITY FOR CONDUCTING PUBLIC EXAMINATIONS (INFRASTRUCTURE)
        //Number of Rooms in the Institution
        $pdf->SetXY(84.9, 112);
        $pdf->Write(1, Str::title($jamia_forms->number_room));
        // The Building of the institution is* :
        if ($jamia_forms->buliding_institution == "Owned") {
            $pdf->Image($check, 126, 119, 3, 3);
        }
        if ($jamia_forms->buliding_institution == "Rental") {
            $pdf->Image($check, 156, 119, 3, 3);
        }
        //Is the Institution/school fit for conducting examinations?
        if ($jamia_forms->institution_school == "Yes") {
            $pdf->Image($check, 126, 127, 3, 3);
        }
        if ($jamia_forms->institution_school == "No") {
            $pdf->Image($check, 156, 127, 3, 3);
        }
        // Existence of boundary wall with gate
        if ($jamia_forms->existence_boundary == "Yes") {
            $pdf->Image($check, 126, 135, 3, 3);
        }
        if ($jamia_forms->existence_boundary == "No") {
            $pdf->Image($check, 156, 135, 3, 3);
        }
        // Institution is electrified and fitted with lights and fans
        if ($jamia_forms->institution_electrified == "Yes") {
            $pdf->Image($check, 126, 142, 3, 3);
        }
        if ($jamia_forms->institution_electrified == "No") {
            $pdf->Image($check, 156, 142, 3, 3);
        }
        // Availability of sufficient furniture

        if ($jamia_forms->availability_furniture == "Yes") {
            $pdf->Image($check, 126, 151, 3, 3);
        }
        if ($jamia_forms->availability_furniture == "No") {
            $pdf->Image($check, 156, 151, 3, 3);
        }
        //Availability of security arrangements
        if ($jamia_forms->availability_of_security == "Yes") {
            $pdf->Image($check, 126, 159, 3, 3);
        }
        if ($jamia_forms->availability_of_security == "No") {
            $pdf->Image($check, 156, 159, 3, 3);
        }
        //Availability of security arrangements
        if ($jamia_forms->availability_invigilator == "Yes") {
            $pdf->Image($check, 126, 166, 3, 3);
        }
        if ($jamia_forms->availability_invigilator == "No") {
            $pdf->Image($check, 156, 166, 3, 3);
        }
        // Availability of invigilator
        // if ($jamia_forms->availability_invigilator == "Yes") {
        //     $pdf->Image($check, 225, 145, 3, 3);
        // }
        // if ($jamia_forms->availability_invigilator == "No") {
        //     $pdf->Image($check, 230, 145, 3, 3);
        // }
        //DECLARATION
        //Date
        $pdf->SetXY(28, 228);
        $pdf->Write(1, Str::title($jamia_forms->declaration_date));
        //place
        $pdf->SetXY(28, 236);
        $pdf->Write(1, Str::title($jamia_forms->declaration_place));
        //Signature of the Centre Incharge
        // $pdf->SetXY(141, 10);
        // $pdf->Write(1, Str::title($jamia_forms->signature_center_incharge));
        $pdf->Image($jamia_forms->signature_center_incharge, 138, 202, 60, 25);
        //add 4 page
        $pdf->AddPage();
        $tplId = $pdf->importPage(4);
        $pdf->useTemplate($tplId);

        //CERTIFICATE OF ENDORSEMENT
        $pdf->SetXY(64, 35);
        $pdf->Write(1, Str::title($jamia_forms->certificate_endorsement));
        $pdf->SetXY(136, 35);
        $pdf->Write(1, Str::title($jamia_forms->certificate_endorsement1));
        //Dated
        $pdf->SetXY(24, 85);
        $pdf->Write(1, Str::title($jamia_forms->endorsement_date));
        //Signature of the Centre Incharge
        // $pdf->SetXY(142, 80);
        // $pdf->Write(1, Str::title($jamia_forms->endorsement_signature));
        if ($jamia_forms->endorsement_signature) {
            $pdf->Image($jamia_forms->endorsement_signature,  145, 68, 50, 15);
        }


        //CHECK LIST FOR ENCLOSURES
        $pdf->SetXY(135, 192);
        $pdf->Write(1, Str::title($jamia_forms->affidavit_name));
        return response($pdf->Output('D', 'Jamia.pdf'))->header('Content-Type', 'application/pdf');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jamiaForms  $jamiaForms
     * @return \Illuminate\Http\Response
     */
    public function show(jamiaForms $jamiaForms)
    {
        return view('web.parts.jamiaform');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jamiaForms  $jamiaForms
     * @return \Illuminate\Http\Response
     */
    public function edit(jamiaForms $jamiaForms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jamiaForms  $jamiaForms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jamiaForms $jamiaForms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jamiaForms  $jamiaForms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Course = jamiaForms::find($id);
        $Course->delete($id);
        if ($Course->image) {
            if (file_exists(public_path() . '/' . $Course->image)) {
                unlink(public_path() . '/' . $Course->image);
            }
        };
        return ['status' => '200', 'msg' => 'content deleted successfully!'];
    }
}
