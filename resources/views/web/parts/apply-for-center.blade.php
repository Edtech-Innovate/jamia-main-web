<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Fill in the Online Form to apply for Center of JUA | Jamia Urdu Aligrah</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content=" The online application form for the grant of the Information & Guidance Center of Jamia Urdu Aligarh is available online on the JUA official website.">
    <link rel="icon" type="image/png" sizes="192x192" href="/website-assets/web/fav.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/website-assets/web/fav.png">
    <link rel="manifest" href="/website-assets/img/favicons/manifest.html">
    <meta name="" content="#ffffff">
    <meta name="" content="/website-assets/web/fav.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;family=Jost:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/website-assets/css/app.min.css">
    <link rel="stylesheet" href="/website-assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="/website-assets/css/form_style.css">
</head>

<body>
    <section class="mt-5">
        <div class="container">
            <form role="form" id="jamia-center" class=" dz-form pb-3">
                @csrf
                <input type="hidden" name="jamia_form_id" id="jamia_form_id" value="" />
                <div class="jamiaform-border">
                    <div class="form-header row d-flex justify-content-center ">
                        <div class="col-md-8">
                            <div class=" top-title-contact text-center">
                                <h1 class="h6 top-title-contact-bg">Contact : <span>9634567824, 9368524609</span><span> | Tel No.-0571-2709662, 2709663 </span><span> | Email: info@jamiaurdualigarh.com</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 ">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <h6 class=" ">Centre Code<span class="text-danger">*</span> :
                                        <input type="text" class="form-control-text " onkeypress="return isNumberKey(event);" name="center_code" id="center_code" style="width: 60% !important;" required>

                                        </h1>

                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 text-center">
                            <img src="/website-assets/web/logo.png" alt="" class="img-fluid ">
                        </div>
                        <!-- <div class="col-md-2 ">

                    </div> -->
                        <div class="col-md-12 text-center ">
                            <!-- <h2>JAMIA URDU ALIGARH</h2> -->
                            <h5>Medical Road, Civil Lines, Aligarh-202001 (UP)</h5>
                            <p class="fw-bold">Recognised by Govt. of India | Member of COBSE </p>
                            <h6>ESTD. 1939 (Established Under Article 30 of the Constitution of India & Section 2(g) of the NCMEI Act 2004)
                            </h6>
                            <h6>
                                Minority Institution Granted by National Commission for Minority Educational Institution, India (NCMEI)

                            </h6>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="top-header-tagline text-center">
                                <h2>APPLICATION FOR GRANT OF</h2>
                                <h2>INFORMATION & GUIDANCE CENTRE </h2>
                                <h2>OF JAMIA URDU ALIGARH</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <h4>Application for </h4>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5>: Fresh Accreditation<span class="text-danger">*</span> </h5>
                                </div>
                                <div class="col-md-4"><input type="checkbox" class="form-check-input " value="yes" name="fresh_accredtation" id="fresh_accredtation"></div>
                                <div class="col-md-8 ">
                                    <h5>: Continuation of Old Study Centre<span class="text-danger">*</span> </h5>
                                    <p class="mb-0 form-content-size">In case of continuation of old study centre:
                                        <br>Name of the Centre/ CentreCode
                                    </p>
                                    <input type="text" class="form-control-plaintext" onkeypress="return isNotNumberKey(event);" name="old_center_centercode" id="old_center_centercode">


                                </div>
                                <div class="col-md-4 mt-2 mt-md-0"> <input type="checkbox" class="form-check-input" name="old_center" id="old_center" value="yes"></div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-8 text-center mt-3 mb-5">
                            <div class="header-title-address p-3 p-md-0">
                                <h4> Complete Postal Address of the Centre<span class="text-danger">*</span> </h4>
                                <h4>(To be filled by the Centre Incharge in <strong> CAPITAL </strong>)</h4>
                                <div class="top-header-postal-address d-flex justify-content-center">
                                    <div class="postal-address mb-md-3">

                                        <textarea class="form-control-plaintext" aria-label="With textarea" name="postal_address_captital" id="postal_address_captital" onkeypress="return isNotNumberKey(event);" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <div class="col-md-10 form-justify-text">
                            <h5>Information for Grant of Information and Guidance Centre Accreditation</h5>
                            <p class="form-content-size">General Instructions</p>
                            <p class="form-content-size">1. All the columns must be filled in CAPITALLetters /Typing. Incomplete application may be rejected</p>
                            <p class="form-content-size">2. Certified copies of all the relevant documents as per the check list given at the end of this form <br>should be enclosed with the application form</p>
                            <h4 class="form-color-text">A. GENERAL INFORMATION ABOUT THE INSTITUTE</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="form-content-size">Name of Institution<span class="text-danger">*</span> :</th>
                                            <td colspan="5"><input type="text" class="form-table-text " onkeypress="return isNotNumberKey(event);" name="name_institution" id="name_institution" required>
                                                <span class="error text-danger institution_name_err"></span>
                                            </td>


                                        </tr>
                                        <tr>
                                            <th scope="row" class="form-content-size">Affix recent
                                                PP size Photo of
                                                Centre Incharge<span class="text-danger">*</span> :</th>

                                            <td colspan="5"> <input class="w-100" type="file" class="form-control" id="pp_image" name="pp_image" aria-describedby="inputGroupFileAddon03" aria-label="Upload" required>
                                                <span class="error text-danger institution_name_err"></span>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                                <h5>Address of the Institution<span class="text-danger">*</span> :</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered ">
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="form-content-size">1. H. No./ Name of Building<span class="text-danger">*</span> :</th>
                                                <td>
                                                    <input type="text" class="form-table-text " onkeypress="return isNotNumberKey(event);" name="house_bulding_number" id="house_bulding_number" required>
                                                    <span class="error text-danger institution_name_err"></span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="form-content-size">2. Road/ Street<span class="text-danger">*</span> :</th>
                                                <td>
                                                    <input type="text" class="form-table-text " onkeypress="return isNotNumberKey(event);" name="road_street" id="road_street" required>
                                                    <span class="error text-danger institution_name_err"></span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="form-content-size">3. Colony/Area/Locality<span class="text-danger">*</span> : </th>
                                                <td>
                                                    <input type="text" class="form-table-text " onkeypress="return isNotNumberKey(event);" name="colony_locality" id="colony_locality" required>
                                                    <span class="error text-danger institution_name_err"></span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="form-content-size">4. Post Office<span class="text-danger">*</span> :</th>
                                                <td>
                                                    <input type="text" class="form-table-text " onkeypress="return isNotNumberKey(event);" name="post_office" id="post_office" required>
                                                    <span class="error text-danger institution_name_err"></span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="form-content-size">5. Police Station<span class="text-danger">*</span> :</th>
                                                <td>
                                                    <input type="text" class="form-table-text " onkeypress="return isNotNumberKey(event);" name="police_station_form" id="police_station_form" required>
                                                    <span class="error text-danger institution_name_err"></span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="form-content-size">6. Landmark<span class="text-danger">*</span> :</th>
                                                <td>
                                                    <input type="text" class="form-table-text " onkeypress="return isNotNumberKey(event);" name="landmark_form" id="landmark_form" required>
                                                    <span class="error text-danger institution_name_err"></span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="form-content-size">7. Place and Pin code<span class="text-danger">*</span> : </th>
                                                <td>
                                                    <input type="text" class="form-table-text " onkeypress="return isNumberKey(event);" name="pincode_form" id="pincode_form" required>
                                                    <span class="error text-danger institution_name_err"></span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="form-content-size">8. District<span class="text-danger">*</span> :</th>
                                                <td>
                                                    <input type="text" class="form-table-text " onkeypress="return isNotNumberKey(event);" name="district_form" id="district_form" required>
                                                    <span class="error text-danger institution_name_err"></span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="form-content-size">9. State<span class="text-danger">*</span> :</th>
                                                <td>
                                                    <select class="form-select" name="state" id="state" required>
                                                        <option value="SelectState">Select State</option>
                                                        <option value="Andra Pradesh">Andra Pradesh</option>
                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                        <option value="Assam">Assam</option>
                                                        <option value="Bihar">Bihar</option>
                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                        <option value="Goa">Goa</option>
                                                        <option value="Gujarat">Gujarat</option>
                                                        <option value="Haryana">Haryana</option>
                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                        <option value="Jharkhand">Jharkhand</option>
                                                        <option value="Karnataka">Karnataka</option>
                                                        <option value="Kerala">Kerala</option>
                                                        <option value="Madya Pradesh">Madya Pradesh</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Manipur">Manipur</option>
                                                        <option value="Meghalaya">Meghalaya</option>
                                                        <option value="Mizoram">Mizoram</option>
                                                        <option value="Nagaland">Nagaland</option>
                                                        <option value="Orissa">Orissa</option>
                                                        <option value="Punjab">Punjab</option>
                                                        <option value="Rajasthan">Rajasthan</option>
                                                        <option value="Sikkim">Sikkim</option>
                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                        <option value="Telangana">Telangana</option>
                                                        <option value="Tripura">Tripura</option>
                                                        <option value="Uttaranchal">Uttaranchal</option>
                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                        <option value="West Bengal">West Bengal</option>
                                                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                        <option value="Chandigarh">Chandigarh</option>
                                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                        <option value="Daman and Diu">Daman and Diu</option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Lakshadeep">Lakshadeep</option>
                                                        <option value="Pondicherry">Pondicherry</option>

                                                    </select>
                                                    <span class="error text-danger institution_name_err"></span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="form-content-size">10. Mobile No. (Whatsapp No.)<span class="text-danger">*</span> :</th>
                                                <td>
                                                    <input type="text" class="form-table-text " onkeypress="return isNumberKey(event);" name="mobile_form" id="mobile_form" required>
                                                    <span class="error text-danger institution_name_err"></span>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="form-content-size">11. Email<span class="text-danger">*</span> :</th>
                                                <td>
                                                    <input type="email" class="form-table-text " name="email_form" id="email_form" required>
                                                    <span class="error text-danger institution_name_err"></span>

                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5 mt-3">
                            <h6 class="form-content-size">
                                Name of Centre Incharge/ Principal/Academic Head<span class="text-danger">*</span> :
                            </h6>

                        </div>
                        <div class="col-md-5 mt-md-3">
                            <input type="text" class="form-control-plaintext" onkeypress="return isNotNumberKey(event);" name="name_center_incharge" id="name_center_incharge" required>

                        </div>
                        <div class="col-md-5 mt-3">
                            <h6 class="form-content-size">Academic Qualification (minimum Graduate)<span class="text-danger">*</span> :</h6>
                        </div>
                        <div class="col-md-5 mt-md-3">
                            <input type="text" class="form-control-plaintext" onkeypress="return isNotNumberKey(event);" name="academic_qualification" id="academic_qualification" required>

                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 mt-5 ">
                            <h6 class="form-content-size">Up to what level is the Institution / school imparting education?<span class="text-danger">*</span> <strong>(Please Tick)</strong></h6>
                            <div class="table-responsive">
                                <table class="table level-table ">
                                    <tbody>
                                        <tr scope="">
                                            <th>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Middle </label>

                                                    <input class="form-check-input" type="radio" name="level_institution" id="level_institution1" value="Middle" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label form-content-size" for="inlineRadio2">Secondary</label>

                                                    <input class="form-check-input" type="radio" name="level_institution" id="level_institution2" value="Secondary" style="border: 1px solid rgba(0,0,0,.25) !important;">

                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label form-content-size" for="inlineRadio2"> Sr. Secondary</label>

                                                    <input class="form-check-input" type="radio" name="level_institution" id="level_institution3" value="Sr.Secondary" style="border: 1px solid rgba(0,0,0,.25) !important;">

                                                </div>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="table-responsive">
                                <table class="table level-table ">
                                    <tbody>
                                        <tr scope="">
                                            <th class="form-content-size">Institution/ School is for<span class="text-danger">*</span>: </th>
                                            <th>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Boys </label>

                                                    <input class="form-check-input" type="radio" name="jamia_student" id="boys_form" value="boy" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label form-content-size" for="inlineRadio2">Girls</label>

                                                    <input class="form-check-input" type="radio" name="jamia_student" id="girl_form" value="girl" style="border: 1px solid rgba(0,0,0,.25) !important;">

                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label form-content-size" for="inlineRadio2"> Co-educational</label>

                                                    <input class="form-check-input" type="radio" name="jamia_student" id="co_educational" value="co_education" style="border: 1px solid rgba(0,0,0,.25) !important;">

                                                </div>
                                            </th>
                                        </tr>

                                        <tr scope="">
                                            <th class="form-content-size">Medium of instruction of Institution/ school<span class="text-danger">*</span> :</th>
                                            <th>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Urdu </label>

                                                    <input class="form-check-input" type="radio" name="medium_instution" id="urdu_language" value="urdu_language" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label form-content-size" for="inlineRadio2">English </label>

                                                    <input class="form-check-input" type="radio" name="medium_instution" id="english_language" value="english_language" style="border: 1px solid rgba(0,0,0,.25) !important;">

                                                </div>
                                            </th>
                                            <th>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label form-content-size" for="inlineRadio2"> Both</label>

                                                    <input class="form-check-input" type="radio" name="medium_instution" id="both_language" value="both_language" style="border: 1px solid rgba(0,0,0,.25) !important;">

                                                </div>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-10">
                            <h4 class="form-color-text form-justify-text">B. INFORMATION ABOUT THE SOCIETY/ TRUST / COMPANY/ RUNNING THE INSTITUTION /SCHOOL</h4>

                        </div>
                        <div class="col-md-5 mt-3">
                            <h6 class="form-content-size">Name and address of Trust/ Society/ Company<span class="text-danger">*</span> :</h6>
                        </div>
                        <div class="col-md-5 mt-md-3">
                            <input type="text" class="form-control-plaintext" onkeypress="return isNotNumberKey(event);" name="name_and_address_company" id="name_and_address_company" required>

                        </div>

                        <!-- <div class="col-md-10 mt-3">
                            <h6 class="form-content-size">Is the Trust/Society/Company Registered <strong> (Yes/No)</strong><span class="text-danger">*</span> :</h6>
                            <div class="table-responsive">
                                <table class="table level-table ">
                                    <tbody>
                                        <tr>
                                            <th scope="row " class="form-content-size">Is the Trust/Society/Company Registered <strong> (Yes/No)</strong><span class="text-danger">*</span> :</th>
                                            <td colspan="12">
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Yes </label>

                                                    <input class="form-check-input" type="radio" name="company_register" id="inlineRadio1" value="Yes" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                    <input type="text" class="form-control-plaintext" onkeypress="return isNotNumberKey(event);" name="company_register" id="company_register" required>

                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-5 mt-md-3">
                            <input type="text" class="form-control-plaintext" onkeypress="return isNumberKey(event);" name="relevant_info1" id="relevant_info1">

                        </div> -->
                        <div class="col-md-5 mt-3">
                            <h6 class="form-content-size">Is the Trust/Society/Company Registered <strong> (Yes/No)</strong><span class="text-danger">*</span> :</h6>
                        </div>
                        <div class="col-md-5 mt-md-3">
                            <input type="text" class="form-control-plaintext" onkeypress="return isNotNumberKey(event);" name="company_register" id="company_register" required>
                        </div>
                        <div class="col-md-5 mt-3">
                            <h6 class="form-content-size">If yes, under which Act<span class="text-danger">*</span> :</h6>
                        </div>
                        <div class="col-md-5 mt-md-3 ">
                            <input type="text" class="form-control-plaintext" onkeypress="return isNumberKey(event);" name="under_which_act" id="relevant_info1" required>

                        </div>
                        <div class="col-md-5 mt-3 ">
                            <h6 class="form-content-size">Year of Registration<span class="text-danger">*</span> :</h6>
                        </div>
                        <div class="col-md-5 mt-md-3">
                            <input type="text" class="form-control-plaintext" onkeypress="return isNumberKey(event);" name="year_registration" id="year_registration" required>

                        </div>
                        <div class="col-md-5 mt-3">
                            <h6 class="form-content-size">Registration No.<span class="text-danger">*</span> :</h6>

                        </div>
                        <div class="col-md-5 mt-md-3">
                            <input type="text" class="form-control-plaintext" onkeypress="return isNumberKey(event);" name="registration_no" id="registration_no" required>

                        </div>
                        <div class="col-md-5 mt-3">
                            <h6 class="form-content-sizes">Name & Designation of Secretary/ Manager/ President/ Chairman/ Chief Functionary of the Society/ Trust/ Company <span class="text-danger">*</span> :</h6>
                        </div>
                        <div class="col-md-5 mt-md-3">
                            <input type="text" class=" form-control-plaintext" onkeypress="return isNotNumberKey(event);" name="name_designation" id="name_designation" required>

                        </div>
                        <div class="col-md-5 mt-3">
                            <h6 class="form-content-size"> Is there a Resolution of the management to get affiliation of information & guidance centre from Jamia Urdu<span class="text-danger">*</span> : </h6>
                        </div>
                        <div class="col-md-5 mt-md-3">
                            <div class="table-responsive">
                                <table class="table level-table ">
                                    <tbody>
                                        <tr>
                                            <th scope="row " class="form-content-size">Aligarh.</th>
                                            <td colspan="5">
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Yes </label>

                                                    <input class="form-check-input" type="radio" name="aligarh" id="aligarh_radio1" value="Yes" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                            <td colspan="5">
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">No </label>

                                                    <input class="form-check-input" type="radio" name="aligarh" id="aligarh_radio2" value="No" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-10">
                            <h4 class="form-color-text">
                                C. RECOGNITION AND AFFILIATION STATUS

                            </h4>
                            <div class="table-responsive">
                                <table class="table level-table ">
                                    <tbody>
                                        <tr>
                                            <th scope="row " class="form-content-size">Is the School/Institution Affiliated with any other Institution/Board/ University<span class="text-danger">*</span> :</th>
                                            <td colspan="5">
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Yes </label>

                                                    <input class="form-check-input" type="radio" name="affiliation_school_institution" id="affiliation_school1" value="Yes" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                            <td colspan="5">
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">No </label>

                                                    <input class="form-check-input" type="radio" name="affiliation_school_institution" id="affiliation_school2" value="No" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h6 class="form-color-text form-content-size">If Yes</h6>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <h6 class="form-content-size">Name of the Affiliating body<span class="text-danger">*</span> :</h6>
                                </div>
                                <div class="col-md-6 mt-md-3">
                                    <input type="text" class="form-control-plaintext" onkeypress="return isNotNumberKey(event);" name="name_affiliation_body" id="name_affiliation_body" required>

                                </div>
                                <div class="col-md-6 mt-3">
                                    <h6 class="form-content-size">Affiliation No. & Year of Affiliation<span class="text-danger">*</span> :</h6>
                                </div>
                                <div class="col-md-6 mt-md-3">
                                    <input type="text" class="form-control-plaintext" onkeypress="return isNumberKey(event);" name="affiliation_year" id="affiliation_year" required>

                                </div>
                                <div class="col-md-6 mt-3">
                                    <h6 class="form-content-size">Duration of Affiliation (If Any)<span class="text-danger">*</span> :</h6>
                                </div>
                                <div class="col-md-6 mt-md-3">
                                    <input type="text" class="form-control-plaintext" onkeypress="return isNumberKey(event);" name="duration_affiation" id="duration_affiation" required>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-10 mt-5">
                            <h4 class="form-color-text form-justify-text"> D. SUITABILITY FOR CONDUCTING PUBLIC EXAMINATIONS (INFRASTRUCTURE)</h4>
                            <div class="table-responsive mt-3">
                                <table class="table level-table ">
                                    <tbody>
                                        <tr>
                                            <th scope="row " class="form-content-size">Number of Rooms in the Institution<span class="text-danger">*</span> :</th>
                                            <td>
                                                <input type="text" class=" form-control-plaintext" onkeypress="return isNumberKey(event);" name="number_room" id="number_room" required>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row " class="form-content-size">The Building of the institution is<span class="text-danger">*</span> :</th>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Owned </label>

                                                    <input class="form-check-input" type="radio" name="buliding_institution" id="buliding_institution1" value="Owned" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Rental </label>

                                                    <input class="form-check-input" type="radio" name="buliding_institution" id="buliding_institution2" value="Rental" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row " class="form-content-size">Is the Institution/school fit for conducting examinations?<span class="text-danger">*</span> </th>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1 ">Yes </label>

                                                    <input class="form-check-input" type="radio" name="institution_school" id="institution_school1" value="Yes" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1 ">No </label>

                                                    <input class="form-check-input" type="radio" name="institution_school" id="institution_school2" value="No" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row " class="form-content-size">Existence of boundary wall with gate <span class="text-danger">*</span> :</th>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Yes </label>

                                                    <input class="form-check-input" type="radio" name="existence_boundary" id="existence_boundary1" value="Yes" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">No </label>

                                                    <input class="form-check-input" type="radio" name="existence_boundary" id="existence_boundary2" value="No" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row " class="form-content-size">Institution is electrified and fitted with lights and fans<span class="text-danger">*</span> :</th>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Yes </label>

                                                    <input class="form-check-input" type="radio" name="institution_electrified" id="institution_electrified1" value="Yes" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">No </label>

                                                    <input class="form-check-input" type="radio" name="institution_electrified" id="institution_electrified2" value="No" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row " class="form-content-size">Availability of sufficient furniture<span class="text-danger">*</span> : </th>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Yes </label>

                                                    <input class="form-check-input" type="radio" name="availability_furniture" id="availability_furniture1" value="Yes" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">No </label>

                                                    <input class="form-check-input" type="radio" name="availability_furniture" id="availability_furniture2" value="No" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row " class="form-content-size">Availability of security arrangements<span class="text-danger">*</span> : </th>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Yes </label>

                                                    <input class="form-check-input" type="radio" name="availability_of_security" id="availability_of_security1" value="Yes" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">No </label>

                                                    <input class="form-check-input" type="radio" name="availability_of_security" id="availability_of_security2" value="No" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row " class="form-content-size">Availability of invigilator<span class="text-danger">*</span> :</th>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">Yes </label>

                                                    <input class="form-check-input" type="radio" name="availability_invigilator" id="availability_invigilator1" value="Yes" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline ">
                                                    <label class="form-check-label form-content-size" for="inlineRadio1">No </label>

                                                    <input class="form-check-input" type="radio" name="availability_invigilator" id="availability_invigilator2" value="No" style="border: 1px solid rgba(0,0,0,.25) !important;">
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-10 mt-5 ">
                            <h4 class="form-color-text"> DECLARATION </h4>
                            <p class="form-justify-text form-content-size">This to certify that all the above information furnished regarding the Institution/ School is correct and
                                authentic to the best of my knowledge.</p>

                        </div>
                        <div class="col-md-5 mt-3">


                            <h6 class="form-content-size">Date<span class="text-danger">*</span> :</h6>
                            <input type="text" class="form-control-plaintext" onkeypress="return isNumberKey(event);" name="declaration_date" id="declaration_date" required>


                            <h6 class="mt-3">Place<span class="text-danger">*</span> :</h6>
                            <input type="text" class="form-control-plaintext" onkeypress="return isNotNumberKey(event);" name="declaration_place" id="declaration_place" required>

                        </div>
                        <div class="col-md-5 mt-3">
                            <p class="form-content-size">Signature of the Centre Incharge
                                <br>(Name with stamp)<span class="text-danger">*</span> :
                            </p>
                            <input type="text" class="form-control-plaintext" onkeypress="return isNotNumberKey(event);" name="signature_center_incharge" id="signature_center_incharge" required>

                        </div>
                        <div class="col-md-10 text-center mt-5">
                            <h4 class="form-color-text form-content-size">CERTIFICATE OF ENDORSEMENT</h4>
                            <p class="form-justify-text form-content-size">(By Centre Incharge/ Secretary/ President/ Chairman/ Manager of the Institution/ Society/ Trust/ Organization)</p>
                        </div>
                        <div class="col-md-10">
                            <p class="form-justify-text form-content-size">In support of the application, I
                                <input type="text" class="form-control-text" onkeypress="return isNotNumberKey(event);" name="certificate_endorsement" id="certificate_endorsement" required>
                                as
                                <input type="text" class="form-control-text form-content-size" onkeypress="return isNotNumberKey(event);" name="certificate_endorsement1" id="certificate_endorsement2" required>
                                certify that, having read the Norms and Procedure for accreditation of Jamia Urdu Aligarh, I undertake to ensure
                                that the Institution will abide by the Rules and Regulations and terms and conditions, as are made applicable to
                                the Accredited Institutions, from time to time. I further affirm that accreditation, if granted to the Institution, will
                                not be used for commercial purpose, rather will be used to provide guidance to the students of Jamia Urdu
                                Aligarh. I shall do what is in my power to ensure the smooth and proper functioning of the Institution.

                            </p>
                        </div>
                        <div class="col-md-10">
                            <div class="col-md-6">
                                <p class="form-content-size">Dated<span class="text-danger">*</span> :

                                    <input type="text" class="form-control-text" onkeypress="return isNumberKey(event);" name="endorsement_date" id="endorsement_date" required>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="form-content-size"> Signature of the Centre Incharge<span class="text-danger">*</span> :</p>
                                <input type="text" class="form-control-plaintext" onkeypress="return isNotNumberKey(event);" name="endorsement_signature" id="endorsement_signature" required>


                            </div>
                        </div>
                        <div class="col-md-10 mt-5">
                            <h4 class="text-center form-color-text ">CHECK LIST FOR ENCLOSURES</h4>
                            <p class="text-center form-content-size"><strong>(Duly attested copies to be attached with the application form)</strong></p>
                            <ul class="encloser-checklist">
                                <li class="mt-2 form-content-size">Application on Letter Head of the Institution from Centre Incharge to consider affiliation application. </li>
                                <li class="mt-2 form-content-size"> Complete filled Application Form of Jamia Urdu Aligarh</li>
                                <li class="mt-2 form-content-size"> Copy of the Certificate of Registration of the Society/Trust & By laws of the Society/ Trust.
                                </li>
                                <li class="mt-2 form-content-size"> Resolution of the management of the Institution to get affiliation from Jamia Urdu Aligarh</li>
                                <li class="mt-2 form-content-size">Copy of the letter of Affiliation from any Institution (If any).</li>
                                <li class="mt-2 form-content-size"> List of Members of the Governing Body of the Society/Turst with their Designation.</li>
                                <li class="mt-2 form-content-size">Pictures of Building/ Premises (including complete building with board/ classes/ office)</li>
                                <li class="mt-2 form-content-size">- Documents of Educational Qualification of the Centre Incharge (Minimum Graduate).
                                </li>
                                <li class="mt-2 form-content-size">Three Passport size coloured photographs of Centre Incharge.</li>
                                <li class="mt-2 form-content-size">Affidavit on Rs.100 stamp paper. Points to mention on Affidavit.
                                    <p class="form-content-size">a. We are an educational society/trust/company by the name of
                                        <input type="text" class="form-control-text" onkeypress="return isNotNumberKey(event);" name="affidavit_name" id="affidavit_name" required>
                                        and imparting education to the poor students.

                                    </p>
                                    <p class="form-content-size">b. We want to take the authorized Information & Study Centre of Jamia Urdu Aligarh.</p>
                                    <p class="form-content-size">c. We will abide by all the rules & regulations of Jamia Urdu Aligarh</p>
                                    <p class="form-content-size">d. In case of any misconduct by us Jamia Urdu Aligarh have the complete authority to cancel our
                                        centre</p>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-10 text-start mt-5">
                            <h6 class="form-color-text form-content-size">IMPORTANT NOTE: </h6>
                            <p class="form-content-size"><strong>Please Submit the documents listed above along with the application form otherwise
                                    the application may not be considered.</strong>
                            </p>
                        </div>
                        <div class="col-md-10 back-to-website text-right">


                            <button type="button" class="btn btn-danger" onclick="window.close(); window.parent.location.href = '/';">Back to site</button>

                            <button type="submit " name="submit" id="submit" value="Apply Now" class="submit-btn-margin btn btn-primary">Submit</button>
                            <div id="set-jamia-url" class="mt-2">
                            </div>

                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </section>

    <script src="/website-assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/website-assets/js/app.min.js"></script>
    <script src="/website-assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            return !(charCode > 31 && (charCode < 48 || charCode > 57));
        }

        function isNotNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            return (charCode > 31 && (charCode < 48 || charCode > 57));
        }
    </script>
    <script>
        $(document).ready(function() {
            var form = '#jamia-center';
            $(form).on('submit', function(event) {
                event.preventDefault();
                var url = "apply-for-center";
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);
                        if (response.status == 200) {

                            $('#set-jamia-url').html('<a href="/print-apply-for-center/' + response.jamia_form_id + '" id="download_pdf" class="btn btn-primary">Print</a>');
                            $('#download_pdf').removeClass('d-none');
                            $('#submit').hide();

                            toastr.success("Form Submit Successfully");
                            setTimeout(function() {
                                window.location.href = "/";
                            }, 10000);
                            // $(form).trigger("reset");
                        } else if (response.status == "error") {
                            printErrorMsg(response.msg);
                        } else if (response.status == 400) {
                            // Handle specific error case
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX errors
                        console.error(xhr.responseText);
                        toastr.error('An error occurred while processing your request.');
                    }
                });
            });

            function printErrorMsg(msg) {
                $.each(msg, function(key, value) {
                    $('.' + key + '_err').text(value);
                    $('.' + key + '_err').addClass('adOn_errorMsg');
                    setTimeout(function() {
                        $('.' + key + '_err').text("");
                        $('.' + key + '_err').removeClass('adOn_errorMsg');
                    }, 5000);
                });
            }
        });
    </script>


</body>

</html>