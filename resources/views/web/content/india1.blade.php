@extends('web.layouts.main')
@section('title', ' Check Authorized Centres of JUA in India |')
@section('description',
    ' Enter the State and District name to check the availability of authorized centers of Jamia
    Urdu Aligarh in your region.')
@section('styles')
    <link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/india.css">
    <style>
        .btn-success {
            color: #fff;
            background-color: #198754;
            border-color: #198754;
        }

        .main-menu a {
            font-size: 14px;
        }

        .main-menu ul.sub-menu a {
            font-size: 14px !important;
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            /* Smooth scrolling on iOS */
            margin-bottom: 1rem;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            text-align: left;
            border: 1px solid #dee2e6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }


        @media (max-width: 1366px) {
            .main-menu a {
                font-size: 10px !important;
            }

            .main-menu ul.sub-menu a {
                font-size: 10px !important;
            }
        }
    </style>
@endsection
@section('content')

    <div class="breadcumb-wrapper" data-overlay="title" data-opacity="8">
        <div class="breadcumb-shape"></div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">India</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/">Authorized Centers</a></li>
                    <li>India</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="mt-5 mb-5">
        <div class="container">
            <form>
                <div class="row justify-content-center">
                    <form id="searchForm">
                        @csrf
                        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12">
                            <label for="inputState" class="bold-web">Type</label>
                            <select class="form-control" id="inputtype">
                                <option value="">Select Type</option>
                                <option value="regional coordinator">Regional Coordinator</option>
                                <option value="center">Center</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12">
                            <label for="inputState" class="bold-web">State</label>
                            <select class="form-control" id="inputState">
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
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
                                <!-- <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option> -->
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadeep">Lakshadeep</option>
                                <option value="Pondicherry">Pondicherry</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12">
                            <label for="inputDistrict " class="bold-web">District</label>
                            <select class="form-control" id="inputDistrict">
                                <option value="">Select District </option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 d-flex align-items-end justify-content-start mt-2 mt-lg-0 mt-xl-0"
                            style="width: 100%;margin-top:10px !important;">
                            <button id="searchButton" type="button" class="btn btn-outline-primary"
                                onclick="showPDFs()">Search</button>
                            <button id="removeAllButton" class="btn btn-danger ms-2">Remove All</button>

                        </div>
                        <!-- <div class="col-md-2 d-flex align-items-end"> -->
                </div>
                <div class="col-md-12 mt-5 text-center">
                    <div id="result"></div>

                </div>
            </form>
            <div id="pdfContainers" style="display: block;">
                <div class="table-responsive">
                    <table class="table table-bordered mt-3">
                        <thead class="text-center">
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th> District & State </th>
                                <th>Type</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr id="mks">
                                <td>1</td>
                                <td>MKS Educational Institution</td>
                                <td>Salem, Tamil Naidu</td>
                                <td>Center</td>
                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>
                            </tr>
                            <tr id="GOS">
                                <td>1</td>
                                <td>GURUKUL OPEN SCHOOL</td>
                                <td> Kapurthala, Punjab</td>
                                <td>Center</td>
                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>
                            </tr>
                            <tr id="SF">
                                <td>1</td>
                                <td>Speed Foundation</td>
                                <td>Chhatarpur, Madhya Pradesh</td>
                                <td>Center</td>
                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>
                            </tr>

                            <tr id="tirur">
                                <td>1</td>
                                <td>Tirur Intitute Of Management Studies Education</td>
                                <td>Tirur,Kerala</td>
                                <td>Center</td>
                                <td><span class="btn btn-success">Active</span></td>
                            </tr>
                            <tr id="imt">
                                <td>1</td>
                                <td style="width: 371px;">Institute of Management And Technology</td>
                                <td>Kozhikode, Kerala</td>
                                <td>Center</td>
                                <td class="text-center"><span class="btn btn-success">Active</span></td>
                            </tr>
                            <tr id="ajh_instittute">
                                <td>2</td>
                                <td style="width: 371px;">AJH Institute </td>
                                <td> Koyilandy ,Kozhikode, Kerala 673305</td>
                                <td>Center</td>
                                <td class="text-center"><span class="btn btn-success">Active</span></td>
                            </tr>
                            <tr id="gpa">
                                <td>3</td>
                                <td style="width: 371px;">Graduate Plan Academy </td>
                                <td>Puthiyara,Kozhikode, Kerala 673004</td>
                                <td>Center</td>
                                <td class="text-center"><span class="btn btn-success">Active</span></td>
                            </tr>
                            <tr id="hhgi">
                                <td>4</td>
                                <td style="width: 371px;">High Hopes Group Of Institutions </td>
                                <td>Ferooke, Kozhikode, Kerala 673631</td>
                                <td>Center</td>
                                <td class="text-center"><span class="btn btn-success">Active</span></td>
                            </tr>
                            <tr id="piil">
                                <td>1</td>
                                <td style="width: 371px;">Prime Institutions India LLP</td>
                                <td>Ernakulam North, Kerala 682018 </td>
                                <td>Center</td>
                                <td class="text-center"><span class="btn btn-success">Active</span></td>
                            </tr>
                            <tr id="pil">
                                <td>2</td>
                                <td style="width: 371px;">Principle Institute LLP </td>
                                <td>Ernakulam, Kerala 682011</td>
                                <td>Center</td>
                                <td class="text-center"><span class="btn btn-success">Active</span></td>
                            </tr>
                            <tr id="cla">
                                <td>5</td>
                                <td style="width: 371px;">Career Line Academy </td>
                                <td>YMCA, Kozhikode, Kerala 673001 </td>
                                <td>Center</td>
                                <td class="text-center"><span class="btn btn-success">Active</span></td>
                            </tr>
                            <tr id="iits">
                                <td>1</td>
                                <td style="width: 371px;">Institute of Integrated Training and Studies (IITS)</td>
                                <td>Kozhikode, Kerala</td>
                                <td>Regional Coordinator</td>
                                <td class="text-center"><span class="btn btn-success">Active</span></td>
                            </tr>
                            <tr id="bright">
                                <td>1</td>
                                <td>Bright Future Educational Trust</td>
                                <td>Bengaluru, Karnataka</td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="trisha">
                                <td>1</td>
                                <td>Trisha Open School And Urdu School</td>
                                <td>Varansi, Uttar Pradesh</td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="aim">
                                <td>1</td>
                                <td>AIM College</td>
                                <td>Birbhum, West Bengal</td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="new_dimension">
                                <td>1</td>
                                <td>New Dimension Education centre</td>
                                <td>Perambalur, Tamil Naidu</td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="siksha">
                                <td>1</td>
                                <td>Siksha Education Institute</td>
                                <td>Mujaffarnagar, Uttar Pradesh</td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="Maulana_Abul">
                                <td>1</td>
                                <td>Maulana Abul Kalam Azad Public School </td>
                                <td>Shamli, Uttar Pradesh</td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="rim_academy">
                                <td>1</td>
                                <td>RIM Academy </td>
                                <td>Srinagar, Jammu Kashmir</td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="ta_edu">
                                <td>2</td>
                                <td>T A EDUCATIONAL SERVICES</td>
                                <td>Srinagar, Jammu Kashmir</td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="GIIT">
                                <td>1</td>
                                <td> GIIT COMPUTER INSTITUTE</td>
                                <td>Katihar, Bihar </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="niofs">
                                <td>1</td>
                                <td>NATIONAL INSTITUTE OF SCIENCE</td>
                                <td>Basti, Uttar Pradesh </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            {{-- <tr id="mks">
                            <td>1</td>
                            <td>MKS Educational Institution</td>
                            <td>Salem, Tamil Naidu</td>
                            <td></td>
                            <td>
                                <span class="btn btn-success">Active</span>
                            </td>
                        </tr> --}}
                            <tr id="AL-ITQAN">
                                <td>1</td>
                                <td>AL-ITQAN Educational Trust </td>
                                <td>North 24 Parganas, West Bengal </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="Internatinal_delhi_public_school">
                                <td>1</td>
                                <td>Internatinal delhi public school </td>
                                <td>Gurugram, Haryana </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="Helpage">
                                <td>1</td>
                                <td> Helpage education and reserch college</td>
                                <td>Gaya, Bihar </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="Bhagwanpur">
                                <td>1</td>
                                <td> J.P +2 H/S Bhagwanpur</td>
                                <td>Muzaffarpur , Bihar </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>
                            </tr>
                            <tr id="Kullia">
                                <td>1</td>
                                <td>KULLIA AAISHA LILBANAT AL- MUSTAFAVIA</td>
                                <td>Maharajganj, Uttar Pradesh </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="mudmu">
                                <td>1</td>
                                <td>MUDDEBIHAL MUSLIM EDUCATIONAL TRUST</td>
                                <td>Vijayapura, Karnataka </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="perfect_ed">
                                <td>1</td>
                                <td>PERFECT EDUCATION SYSTEM</td>
                                <td>Adajan, Gujarat </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="deep">
                                <td>1</td>
                                <td>DEEP JYOTI PUBLIC SCHOOL</td>
                                <td>Satna, MP </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="oxford">
                                <td>1</td>
                                <td>OXFORD TUTORIALS</td>
                                <td>Thane, Maharashtra </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="rm_institute">
                                <td>1</td>
                                <td>R M INSTITUTE</td>
                                <td>Sangam Vihar, Delhi </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>

                            </tr>
                            <tr id="tehzeeb">
                                <td>1</td>
                                <td>TEHZEEB ISLAMIC ENGLISH SCHOOL</td>
                                <td>Mumbai, Maharashtra </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>
                            </tr>
                            <tr id="drjl">
                                <td>1</td>
                                <td>DR JL CHAUDHARY INSTITUTE OF TECHNOLOGY & MANAGEMENT</td>
                                <td>Patna, Bihar </td>
                                <td>Center</td>

                                <td>
                                    <span class="btn btn-success">Active</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </section>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        // debugger;
        var AndraPradesh = ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Krishna", "Kurnool", "Prakasam",
            "Nellore", "Srikakulam", "Visakhapatnam", "Vizianagaram", "West Godavari"
        ];
        var Uttarakhand = ["Almora", "Bageshwar", "Chamoli", "Champawat", "Dehradun", "Haridwar", "Nainital",
            "Pauri Garhwal", "Pithoragarh", "Rudraprayag", "Tehri Garhwal", "Udham Singh Nagar", "Uttarkashi"
        ];
        var ArunachalPradesh = ["Anjaw", "Changlang", "Dibang Valley", "East Kameng", "East Siang", "Kra Daadi",
            "Kurung Kumey", "Lohit", "Longding", "Lower Dibang Valley", "Lower Subansiri", "Namsai", "Papum Pare",
            "Siang", "Tawang", "Tirap", "Upper Siang", "Upper Subansiri", "West Kameng", "West Siang", "Itanagar"
        ];
        var Assam = ["Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo", "Chirang", "Darrang", "Dhemaji",
            "Dhubri", "Dibrugarh", "Goalpara", "Golaghat", "Hailakandi", "Hojai", "Jorhat", "Kamrup Metropolitan",
            "Kamrup (Rural)", "Karbi Anglong", "Karimganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon", "Nagaon",
            "Nalbari", "Dima Hasao", "Sivasagar", "Sonitpur", "South Salmara Mankachar", "Tinsukia", "Udalguri",
            "West Karbi Anglong"
        ];
        var Bihar = ["Araria", "Arwal", "Aurangabad", "Banka", "Begusarai", "Bhagalpur", "Bhojpur", "Buxar", "Darbhanga",
            "Champaran", "Gaya", "Gopalganj", "Jamui", "Jehanabad", "Kaimur", "Katihar", "Khagaria", "Kishanganj",
            "Lakhisarai", "Madhepura", "Madhubani", "Munger", "Muzaffarpur", "Nalanda", "Nawada", "Patna", "Purnia",
            "Rohtas", "Saharsa", "Samastipur", "Saran", "Sheikhpura", "Sheohar", "Sitamarhi", "Siwan", "Supaul",
            "Vaishali", "West Champaran"
        ];
        var Chhattisgarh = ["Balod", "Baloda Bazar", "Balrampur", "Bastar", "Bemetara", "Bijapur", "Bilaspur", "Dantewada",
            "Dhamtari", "Durg", "Gariaband", "Janjgir Champa", "Jashpur", "Kabirdham", "Kanker", "Kondagaon", "Korba",
            "Koriya", "Mahasamund", "Mungeli", "Narayanpur", "Raigarh", "Raipur", "Rajnandgaon", "Sukma", "Surajpur",
            "Surguja"
        ];
        var Goa = ["North Goa", "South Goa"];
        var Gujarat = ["Ahmedabad", "Amreli", "Adajan", "Anand", "Aravalli", "Banaskantha", "Bharuch", "Bhavnagar", "Botad",
            "Chhota Udaipur", "Dahod", "Dang", "Devbhoomi Dwarka", "Gandhinagar", "Gir Somnath", "Jamnagar", "Junagadh",
            "Kheda", "Kutch", "Mahisagar", "Mehsana", "Morbi", "Narmada", "Navsari", "Panchmahal", "Patan", "Porbandar",
            "Rajkot", "Sabarkantha", "Surat", "Surendranagar", "Tapi", "Vadodara", "Valsad"
        ];
        var Haryana = ["Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gurugram", "Hisar", "Jhajjar",
            "Jind", "Kaithal", "Karnal", "Kurukshetra", "Mahendragarh", "Mewat", "Palwal", "Panchkula", "Panipat",
            "Rewari", "Rohtak", "Sirsa", "Sonipat", "Yamunanagar"
        ];
        var HimachalPradesh = ["Bilaspur", "Chamba", "Hamirpur", "Kangra", "Kinnaur", "Kullu", "Lahaul Spiti", "Mandi",
            "Shimla", "Sirmaur", "Solan", "Una"
        ];
        var JammuKashmir = ["Anantnag", "Bandipora", "Baramulla", "Budgam", "Doda", "Ganderbal", "Jammu", "Kargil",
            "Kathua", "Kishtwar", "Kulgam", "Kupwara", "Leh", "Poonch", "Pulwama", "Rajouri", "Ramban", "Reasi",
            "Samba", "Shopian", "Srinagar", "Udhampur"
        ];
        var Jharkhand = ["Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", "East Singhbhum", "Garhwa", "Giridih", "Godda",
            "Gumla", "Hazaribagh", "Jamtara", "Khunti", "Koderma", "Latehar", "Lohardaga", "Pakur", "Palamu", "Ramgarh",
            "Ranchi", "Sahebganj", "Seraikela Kharsawan", "Simdega", "West Singhbhum"
        ];
        var Karnataka = ["Bagalkot", "Bengaluru", "Belgaum", "Bellary", "Bidar", "Vijayapura", "Chamarajanagar",
            "Chikkaballapur", "Chikkamagaluru", "Chitradurga", "Dakshina Kannada", "Davanagere", "Dharwad", "Gadag",
            "Gulbarga", "Hassan", "Haveri", "Kodagu", "Kolar", "Koppal", "Mandya", "Mysore", "Raichur", "Ramanagara",
            "Shimoga", "Tumkur", "Udupi", "Uttara Kannada", "Yadgir"
        ];
        var Kerala = ["Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam", "Kottayam", "Kozhikode",
            "Malappuram", "Palakkad", "Pathanamthitta", "Thiruvananthapuram", "Thrissur", "Tirur", "Wayanad"
        ];
        var MadhyaPradesh = ["Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat", "Barwani", "Betul", "Bhind",
            "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara", "Damoh", "Datia", "Dewas", "Dhar", "Dindori", "Guna",
            "Gwalior", "Harda", "Hoshangabad", "Indore", "Jabalpur", "Jhabua", "Katni", "Khandwa", "Khargone", "Mandla",
            "Mandsaur", "Morena", "Narsinghpur", "Neemuch", "Panna", "Raisen", "Rajgarh", "Ratlam", "Rewa", "Sagar",
            "Satna",
            "Sehore", "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri", "Sidhi", "Singrauli", "Tikamgarh",
            "Ujjain", "Umaria", "Vidisha"
        ];
        var Maharashtra = ["Ahmednagar", "Akola", "Amravati", "Aurangabad", "Beed", "Bhandara", "Buldhana", "Chandrapur",
            "Dhule", "Gadchiroli", "Gondia", "Hingoli", "Jalgaon", "Jalna", "Kolhapur", "Latur", "Mumbai",
            "Mumbai Suburban", "Nagpur", "Nanded", "Nandurbar", "Nashik", "Osmanabad", "Palghar", "Parbhani", "Pune",
            "Raigad", "Ratnagiri", "Sangli", "Satara", "Sindhudurg", "Solapur", "Thane", "Wardha", "Washim", "Yavatmal"
        ];
        var Manipur = ["Bishnupur", "Chandel", "Churachandpur", "Imphal East", "Imphal West", "Jiribam", "Kakching",
            "Kamjong", "Kangpokpi", "Noney", "Pherzawl", "Senapati", "Tamenglong", "Tengnoupal", "Thoubal", "Ukhrul"
        ];
        var Meghalaya = ["East Garo Hills", "East Jaintia Hills", "East Khasi Hills", "North Garo Hills", "Ri Bhoi",
            "South Garo Hills", "South West Garo Hills", "South West Khasi Hills", "West Garo Hills",
            "West Jaintia Hills", "West Khasi Hills"
        ];
        var Mizoram = ["Aizawl", "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip", "Aizawl",
            "Champhai", "Kolasib", "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip"
        ];
        var Nagaland = ["Dimapur", "Kiphire", "Kohima", "Longleng", "Mokokchung", "Mon", "Peren", "Phek", "Tuensang",
            "Wokha", "Zunheboto"
        ];
        var Odisha = ["Angul", "Balangir", "Balasore", "Bargarh", "Bhadrak", "Boudh", "Cuttack", "Debagarh", "Dhenkanal",
            "Gajapati", "Ganjam", "Jagatsinghpur", "Jajpur", "Jharsuguda", "Kalahandi", "Kandhamal", "Kendrapara",
            "Kendujhar", "Khordha", "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur", "Nayagarh", "Nuapada", "Puri",
            "Rayagada", "Sambalpur", "Subarnapur", "Sundergarh"
        ];
        var Punjab = ["Amritsar", "Barnala", "Bathinda", "Faridkot", "Fatehgarh Sahib", "Fazilka", "Firozpur", "Gurdaspur",
            "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana", "Mansa", "Moga", "Mohali", "Muktsar", "Pathankot",
            "Patiala", "Rupnagar", "Sangrur", "Shaheed Bhagat Singh Nagar", "Tarn Taran"
        ];
        var Rajasthan = ["Ajmer", "Alwar", "Banswara", "Baran", "Barmer", "Bharatpur", "Bhilwara", "Bikaner", "Bundi",
            "Chittorgarh", "Churu", "Dausa", "Dholpur", "Dungarpur", "Ganganagar", "Hanumangarh", "Jaipur", "Jaisalmer",
            "Jalore", "Jhalawar", "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur", "Pali", "Pratapgarh",
            "Rajsamand", "Sawai Madhopur", "Sikar", "Sirohi", "Tonk", "Udaipur"
        ];
        var Sikkim = ["East Sikkim", "North Sikkim", "South Sikkim", "West Sikkim"];
        var TamilNadu = ["Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul", "Erode", "Kanchipuram",
            "Kanyakumari", "Karur", "Krishnagiri", "Madurai", "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur",
            "Pudukkottai", "Ramanathapuram", "Salem", "Sivaganga", "Thanjavur", "Theni", "Thoothukudi",
            "Tiruchirappalli", "Tirunelveli", "Tiruppur", "Tiruvallur", "Tiruvannamalai", "Tiruvarur", "Vellore",
            "Viluppuram", "Virudhunagar"
        ];
        var Telangana = ["Adilabad", "Bhadradri Kothagudem", "Hyderabad", "Jagtial", "Jangaon", "Jayashankar", "Jogulamba",
            "Kamareddy", "Karimnagar", "Khammam", "Komaram Bheem", "Mahabubabad", "Mahbubnagar", "Mancherial", "Medak",
            "Medchal", "Nagarkurnool", "Nalgonda", "Nirmal", "Nizamabad", "Peddapalli", "Rajanna Sircilla",
            "Ranga Reddy", "Sangareddy", "Siddipet", "Suryapet", "Vikarabad", "Wanaparthy", "Warangal Rural",
            "Warangal Urban", "Yadadri Bhuvanagiri"
        ];
        var Tripura = ["Dhalai", "Gomati", "Khowai", "North Tripura", "Sepahijala", "South Tripura", "Unakoti",
            "West Tripura"
        ];
        var UttarPradesh = ["Agra", "Aligarh", "Allahabad", "Ambedkar Nagar", "Amethi", "Amroha", "Auraiya", "Azamgarh",
            "Baghpat", "Bahraich", "Ballia", "Balrampur", "Banda", "Barabanki", "Bareilly", "Basti", "Bhadohi",
            "Bijnor", "Budaun", "Bulandshahr", "Chandauli", "Chitrakoot", "Deoria", "Etah", "Etawah", "Faizabad",
            "Farrukhabad", "Fatehpur", "Firozabad", "Gautam Buddha Nagar", "Ghaziabad", "Ghazipur", "Gonda",
            "Gorakhpur", "Hamirpur", "Hapur", "Hardoi", "Hathras", "Jalaun", "Jaunpur", "Jhansi", "Kannauj",
            "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi", "Kheri", "Kushinagar", "Lalitpur", "Lucknow",
            "Maharajganj", "Mahoba", "Mainpuri", "Mathura", "Mau", "Meerut", "Mirzapur", "Moradabad", "Mujaffarnagar",
            "Pilibhit", "Pratapgarh", "Raebareli", "Rampur", "Saharanpur", "Sambhal", "Sant Kabir Nagar",
            "Shahjahanpur", "Shamli", "Shravasti", "Siddharthnagar", "Sitapur", "Sonbhadra", "Sultanpur", "Unnao",
            "Varanasi"
        ];
        var WestBengal = ["Alipurduar", "Bankura", "Birbhum", "Cooch Behar", "Dakshin Dinajpur", "Darjeeling", "Hooghly",
            "Howrah", "Jalpaiguri", "Jhargram", "Kalimpong", "Kolkata", "Malda", "Murshidabad", "Nadia",
            "North 24 Parganas", "Paschim Bardhaman", "Paschim Medinipur", "Purba Bardhaman", "Purba Medinipur",
            "Purulia", "South 24 Parganas", "Uttar Dinajpur"
        ];
        var AndamanNicobar = ["Nicobar", "North Middle Andaman", "South Andaman"];
        var Chandigarh = ["Chandigarh"];
        var DadraHaveli = ["Dadra Nagar Haveli"];
        var DamanDiu = ["Daman", "Diu"];
        var Delhi = ["Central Delhi", "East Delhi", "New Delhi", "North Delhi", "North East Delhi", "North West Delhi",
            "Shahdara", "South Delhi", "South East Delhi", "South West Delhi", "West Delhi", "Sangam Vihar"
        ];
        var Lakshadweep = ["Lakshadweep"];
        var Puducherry = ["Karaikal", "Mahe", "Puducherry", "Yanam"];


        $("#inputState").change(function() {
            var StateSelected = $(this).val();
            var optionsList;
            var htmlString = "";

            switch (StateSelected) {
                case "Andra Pradesh":
                    optionsList = AndraPradesh;
                    break;
                case "Arunachal Pradesh":
                    optionsList = ArunachalPradesh;
                    break;
                case "Assam":
                    optionsList = Assam;
                    break;
                case "Bihar":
                    optionsList = Bihar;
                    break;
                case "Chhattisgarh":
                    optionsList = Chhattisgarh;
                    break;
                case "Goa":
                    optionsList = Goa;
                    break;
                case "Gujarat":
                    optionsList = Gujarat;
                    break;
                case "Haryana":
                    optionsList = Haryana;
                    break;
                case "Himachal Pradesh":
                    optionsList = HimachalPradesh;
                    break;
                case "Jammu and Kashmir":
                    optionsList = JammuKashmir;
                    break;
                case "Jharkhand":
                    optionsList = Jharkhand;
                    break;
                case "Karnataka":
                    optionsList = Karnataka;
                    break;
                case "Kerala":
                    optionsList = Kerala;
                    break;
                case "Madya Pradesh":
                    optionsList = MadhyaPradesh;
                    break;
                case "Maharashtra":
                    optionsList = Maharashtra;
                    break;
                case "Manipur":
                    optionsList = Manipur;
                    break;
                case "Meghalaya":
                    optionsList = Meghalaya;
                    break;
                case "Mizoram":
                    optionsList = Mizoram;
                    break;
                case "Nagaland":
                    optionsList = Nagaland;
                    break;
                case "Odisha":
                    optionsList = Odisha;
                    break;
                case "Punjab":
                    optionsList = Punjab;
                    break;
                case "Rajasthan":
                    optionsList = Rajasthan;
                    break;
                case "Sikkim":
                    optionsList = Sikkim;
                    break;
                case "Tamil Nadu":
                    optionsList = TamilNadu;
                    break;
                case "Telangana":
                    optionsList = Telangana;
                    break;
                case "Tripura":
                    optionsList = Tripura;
                    break;
                case "Uttarakhand":
                    optionsList = Uttarakhand;
                    break;
                case "Uttar Pradesh":
                    optionsList = UttarPradesh;
                    break;
                case "West Bengal":
                    optionsList = WestBengal;
                    break;
                case "Andaman and Nicobar Islands":
                    optionsList = AndamanNicobar;
                    break;
                case "Chandigarh":
                    optionsList = Chandigarh;
                    break;
                case "Dadar and Nagar Haveli":
                    optionsList = DadraHaveli;
                    break;
                case "Daman and Diu":
                    optionsList = DamanDiu;
                    break;
                case "Delhi":
                    optionsList = Delhi;
                    break;
                case "Lakshadeep":
                    optionsList = Lakshadeep;
                    break;
                case "Pondicherry":
                    optionsList = Pondicherry;
                    break;
            }


            for (var i = 0; i < optionsList.length; i++) {
                htmlString = htmlString + "<option value='" + optionsList[i] + "'>" + optionsList[i] + "</option>";
            }
            $("#inputDistrict").html(htmlString);

        });
        $('#mks').hide();
        $('#bright').hide();
        $('#trisha').hide();
        $('#aim').hide();
        $('#new_dimension').hide();
        $('#siksha').hide();
        $('#rim_academy').hide();
        $('#Maulana_Abul').hide();
        $('#Abul_kalam_Academy').hide();
        $('#Internatinal_delhi_public_school').hide();
        $('#Helpage').hide();
        $('#Bhagwanpur').hide();
        $('#iits').hide();
        $('#tirur').hide();
        $('#imt').hide();
        $('#ajh_instittute').hide();
        $('#gpa').hide();
        $('#hhgi').hide();
        $('#piil').hide();
        $('#pil').hide();
        $('#cla').hide();
        $('#AL-ITQAN').hide();
        $('#SF').hide();
        $('#GIIT').hide();
        $('#GOS').hide();
        $('#niofs').hide();
        $('#Kullia').hide();
        $('#mudmu').hide();
        $('#perfect_ed').hide();
        $('#deep').hide();
        $('#ta_edu').hide();
        $('#oxford').hide();
        $('#rm_institute').hide();
        $('#tehzeeb').hide();
        $('#drjl').hide();

        if (selectedtype == "regional coordinator") {
            $('#iits').show();
        } else if (selectedtype == "center") {

        }

        function showPDFs() {
            var selectedCity = document.getElementById('inputDistrict').value;
            var selectedtype = document.getElementById('inputtype').value;

            // console.log(selectedCity);

            $('#mks').hide();
            $('#bright').hide();
            $('#trisha').hide();
            $('#aim').hide();
            $('#new_dimension').hide();
            $('#siksha').hide();
            $('#rim_academy').hide();
            $('#Maulana_Abul').hide();
            $('#Abul_kalam_Academy').hide();
            $('#Helpage').hide();
            $('#Bhagwanpur').hide();
            $('#iits').hide();
            $('#tirur').hide();
            $('#imt').hide();
            $('#ajh_instittute').hide();
            $('#gpa').hide();
            $('#hhgi').hide();
            $('#piil').hide();
            $('#pil').hide();
            $('#cla').hide();
            $('#AL-ITQAN').hide();
            $('#SF').hide();
            $('#GOS').hide();
            $('#niofs').hide();
            $('#Kullia').hide();
            $('#mudmu').hide();
            $('#perfect_ed').hide();
            $('#deep').hide();
            $('#ta_edu').hide();
            $('#oxford').hide();
            $('#rm_institute').hide();
            $('#tehzeeb').hide();
            $('#drjl').hide();


            if (selectedCity == "Salem") {
                $('#mks').show();
            } else if (selectedCity == "Bengaluru") {
                $('#bright').show();
            } else if (selectedCity == "Varanasi") {
                $('#trisha').show();
            } else if (selectedCity == "Birbhum") {
                $('#aim').show();
            } else if (selectedCity == "Perambalur") {
                $('#new_dimension').show();
            } else if (selectedCity == "Mujaffarnagar") {
                $('#siksha').show();


            } else if (selectedCity == "Srinagar") {
                $('#rim_academy').show();
                $('#ta_edu').show();


            } else if (selectedCity == "Shamli") {
                $('#Maulana_Abul').show();


            } else if (selectedCity == "Champaran") {
                $('#Abul_kalam_Academy').show();
            } else if (selectedCity == "Gurugram") {
                $('#Internatinal_delhi_public_school').show();

            } else if (selectedCity == "Gaya") {
                $('#Helpage').show();
            } else if (selectedCity == "Muzaffarpur") {
                $('#Bhagwanpur').show();
            } else if (selectedCity == "Kozhikode") {
                // console.log(selectedCity == "kozhikode");
                if (selectedtype == "regional coordinator") {
                    $('#iits').show();
                } else if (selectedtype == "center") {
                    $('#imt').show();
                    $('#ajh_instittute').show();
                    $('#gpa').show();
                    $('#hhgi').show();
                    $('#cla').show();
                }
            } else if (selectedCity == "Malappuram") {
                // console.log(selectedCity == "kozhikode");
                if (selectedtype == "regional coordinator") {

                } else if (selectedtype == "center") {
                    $('#tirur').show();
                }
            } else if (selectedCity == "Ernakulam") {
                if (selectedtype == "center") {
                    $('#piil').show();
                    $('#pil').show();
                }
            } else if (selectedCity == "North 24 Parganas") {
                if (selectedtype == "center") {
                    $('#AL-ITQAN').show();

                }
            } else if (selectedCity == "Chhatarpur") {
                if (selectedtype == "center") {
                    $('#SF').show();

                }
            } else if (selectedCity == "Katihar") {
                if (selectedtype == "center") {
                    $('#GIIT').show();

                }
            } else if (selectedCity == "Kapurthala") {
                if (selectedtype == "center") {
                    $('#GOS').show();

                }
            } else if (selectedCity == "Basti") {
                if (selectedtype == "center") {
                    $('#niofs').show();

                }
            } else if (selectedCity == "Maharajganj") {
                if (selectedtype == "center") {
                    $('#Kullia').show();

                }
            } else if (selectedCity == "Vijayapura") {
                if (selectedtype == "center") {
                    $('#mudmu').show();

                }
            } else if (selectedCity == "Satna") {
                if (selectedtype == "center") {
                    $('#deep').show();

                }
            } else if (selectedCity == "Thane") {
                if (selectedtype == "center") {
                    $('#oxford').show();

                }
            } else if (selectedCity == "Sangam Vihar") {
                if (selectedtype == "center") {
                    $('#rm_institute').show();

                }
            }else if (selectedCity == "Mumbai") {
                if (selectedtype == "center") {
                    $('#tehzeeb').show();

                }
            }else if (selectedCity == "Patna") {
                if (selectedtype == "center") {
                    $('#drjl').show();

                }
            }else if (selectedCity == "Adajan") {
                if (selectedtype == "center") {
                    $('#perfect_ed').show();

                }
            }


        }

        function resetForm() {
            $('#mks').hide();
            $('#bright').hide();
            $('#trisha').hide();
            $('#aim').hide();
            $('#new_dimension').hide();
            $('#siksha').hide();
            $('#Siksha_Education_Institute').hide();
            $('#Maulana_Abul').hide();
            $('#Abul_kalam_Academy').hide();
            $('#Internatinal_delhi_public_school').hide();
            $('#Helpage').hide();
            $('#Bhagwanpur').hide();
            $('#iits').hide();
            $('#tirur').hide();
            $('#imt').hide();
            $('#ajh_instittute').hide();
            $('#gpa').hide();
            $('#hhgi').hide();
            $('#piil').hide();
            $('#pil').hide();
            $('#cla').hide();
            $('#AL-ITQAN').hide();
            $('#SF').hide();
            $('#GIIT').hide();
            $('#GOS').hide();
            $('#niofs').hide();
            $('#Kullia').hide();
            $('#mudmu').hide();
            $('#perfect_ed').hide();
            $('#deep').hide();
            $('#ta_edu').hide();
            $('#oxford').hide();
            $('#rm_institute').hide();
            $('#tehzeeb').hide();
            $('#drjl').hide();


        }
    </script>

@endsection
