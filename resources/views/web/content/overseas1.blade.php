@extends('web.layouts.main')
@section('title', ' Check Overseas Authorized Centres of Jamia Urdu Aligarh |')
@section('description', ' Enter the Country name to check the availability of authorized centers of Jamia Urdu Aligarh in that country.')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/overseas.css?=1.5">


<style>
    .main-menu a {
        font-size: 14px;
    }

    .main-menu ul.sub-menu a {
        font-size: 14px !important;
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
            <h1 class="breadcumb-title">Overseas</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/">Authorized Centers</a></li>
                <li>Overseas</li>
            </ul>
        </div>
    </div>
</div>

<section class="mt-5 mb-5">
    <div class="container">
        <form id="locationForm">
            <div class="row">
                <div class="col-lg-6">
                    <label for="country">Select Country:</label>
                    <select id="country">
                        <option value="">--Select a Country--</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label for="city">Select City:</label>
                    <select id="city">
                        <option value="">--Select a City--</option>
                    </select>
                </div>
            </div>
            <button type="button" class="btn btn-primary mt-3" onclick="showPDFs()">Search</button>
            <button type="button" class="btn btn-danger mt-3" onclick="resetForm()">Reset</button>
        </form>
        <div id="pdfContainers" style="display: none;">
            <div class="table-responsive">
            <table class="table table-bordered mt-3">
                <thead class="text-center">
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>City & Country</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr id="center1" style="display: none;">
                        <td>1</td>
                        <td>United Institute Of Technical And Profesional Training</td>
                        <td>Ajman, United Arab Emirates</td>
                        <td>
                        <span class="text-success">Active</span>
                        </td>
                    </tr>
                    <tr id="center2" style="display: none;">
                        <td>2</td>
                        <td>AL Siraj Educational Institute LLC</td>
                        <td>Ajman, United Arab Emirates</td>
                        <td>
                        <span class="text-success">Active</span>
                        </td>
                      
                    </tr>
                   <tr id="center3" style="display: none;">
                        <td>1</td>
                        <td>Sahara International Educational Consultancy</td>
                        <td> Doha, Qatar</td>
                        <td>
                        <span class="text-success">Active</span>
                        </td>                      
                    </tr>
                   <tr id="center4" style="display: none;">
                        <td>1</td>
                        <td>Olive Education Institute</td>
                        <td> Sharjah, UAE</td>
                        <td>
                        <span class="text-success">Active</span>
                        </td>                      
                    </tr>
                   <tr id="center5" style="display: none;">
                        <td>2</td>
                        <td>Infinity Training International</td>
                        <td> Sharjah, UAE</td>
                        <td>
                        <span class="text-success">Active</span>
                        </td>                      
                    </tr>
                   <tr id="ZUAE" style="display: none;">
                        <td>1</td>
                        <td>Zirviz Educational Services</td>
                        <td>Dubai , UAE</td>
                        <td>
                        <span class="text-success">Active</span>
                        </td>                      
                    </tr>
                    <tr id="EUAE" style="display: none;">
                        <td>2</td>
                        <td>Eduwing Education Services</td>
                        <td>Dubai , UAE</td>
                        <td>
                        <span class="text-success">Active</span>
                        </td>                      
                    </tr>
                   <tr id="EESL" style="display: none;">
                        <td>3</td>
                        <td>Eduwing Education Services LLC</td>
                         <td>Dubai , UAE</td>
                        <td>
                        <span class="text-success">Active</span>
                        </td>                      
                    </tr>
                  <tr id="ALMT" style="display: none;">
                        <td>4</td>
                        <td> Al Mihad Training Institute</td>
                         <td>Dubai , UAE</td>
                        <td>
                        <span class="text-success">Active</span>
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

<script>
    
    function fetchCountries() {
        fetch('https://countriesnow.space/api/v0.1/countries')
            .then(response => response.json())
            .then(data => {
               
                const countrySelect = document.getElementById('country');
                data.data.forEach(countryData => {
                    const option = document.createElement('option');
                    option.textContent = countryData.country;
                    option.value = countryData.country;
                    countrySelect.appendChild(option);
                });
            })
            .catch(error => {
               error('Error fetching countries:', error);
            });
    }

   
    function fetchCities(country) {
        fetch('https://countriesnow.space/api/v0.1/countries/cities', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    country
                })
            })
            .then(response => response.json())
            .then(data => {
               
                const citySelect = document.getElementById('city');
              
                citySelect.innerHTML = '<option value="">--Select a City--</option>';
                if (data.data.length > 0) {
                    data.data.forEach(city => {
                        const option = document.createElement('option');
                        option.textContent = city;
                        option.value = city;
                        citySelect.appendChild(option);
                    });
                } else {
                    const option = document.createElement('option');
                    option.textContent = "No cities found";
                    option.value = "";
                    citySelect.appendChild(option);
                }
            })
            .catch(error => {
                console.error('Error fetching cities:', error);
            });
    }

    
    function showPDFs() {
        const selectedCity = document.getElementById('city').value;
        if (selectedCity === "Ajman") {
            $('#center1').show();
            $('#center2').show();
            $('#center3').hide();
            $('#center4').hide();
            $('#center5').hide();
            $('#ZUAE').hide();
            $('#EUAE').hide();
            $('#EESL').hide();
            $('#ALMT').hide();
          $('#pdfContainers').show();
        } else if(selectedCity === "Doha"){
            $('#center3').show();
           $('#pdfContainers').show();
           $('#center1').hide();
            $('#center2').hide();
            $('#center4').hide();
             $('#ZUAE').hide();
            $('#EUAE').hide();
            $('#center5').hide();
           $('#EESL').hide();
           $('#ALMT').hide();
        }else if(selectedCity === "Sharjah"){
            $('#center3').hide();
           $('#pdfContainers').show();
           $('#center1').hide();
            $('#center2').hide();
            $('#center4').show();
            $('#center5').show();
            $('#ZUAE').hide();
            $('#EUAE').hide();
           $('#EESL').hide();
           $('#ALMT').hide();
        }else if(selectedCity === "Dubai"){
            $('#center3').hide();
           $('#pdfContainers').show();
           $('#center1').hide();
            $('#center2').hide();
            $('#center4').hide();
            $('#center5').hide();
           $('#ZUAE').show();
            $('#EUAE').show();
           $('#EESL').show();
           $('#ALMT').show();
        }  else {
            <!--alert('Please select "Abu Dhabi" to view the PDFs.');-->
            $('#center1').hide();
            $('#center2').hide();
            $('#center3').hide();
            $('#center4').hide();
            $('#center5').hide();
             $('#ZUAE').hide();
            $('#EUAE').hide();
           $('#EESL').hide();
           $('#ALMT').hide();
           $('#pdfContainers').show();
        }
    }

   
    function resetForm() {
        document.getElementById('country').value = '';
        const citySelect = document.getElementById('city');
        citySelect.innerHTML = '<option value="">--Select a City--</option>';
        $('#pdfContainers').hide();
        $('#center1').hide();
        $('#center2').hide();
        $('#center3').hide();
        $('#ZUAE').hide();
        $('#EUAE').hide();
       $('#EESL').hide();
       $('#ALMT').hide();
    }

   
    document.getElementById('country').addEventListener('change', function() {
        const selectedCountry = this.value;
       
        if (selectedCountry) {
            fetchCities(selectedCountry);
        } else {
            const citySelect = document.getElementById('city');
            citySelect.innerHTML = '<option value="">--Select a City--</option>';
        }
    });

   
    document.addEventListener('DOMContentLoaded', function() {
        fetchCountries();
    });
</script>
@endsection
