@extends('web.layouts.main')
@section('title', ' Get in-depth information regarding the fee structure at JUA | Jamia Urdu Aligarh')
@section('description', ' Students can check the Jamia Urdu Aligarh course fee structure to make well-informed decisions regarding their admissions. ')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/fee-structure.css?=1.5">

<style>
    .table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    .td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .tr:nth-child(even) {
        background-color: #dddddd;
    }
         .main-menu a{
      font-size: 14px;
   }
   .main-menu ul.sub-menu a{
       font-size:14px !important;
   }
   
   @media (max-width: 1366px) {
      .main-menu a{
      font-size: 10px !important;
   }  
   .main-menu ul.sub-menu a{
       font-size:10px !important;
   }
   }
    .new-badge {
    background-color: #ff0000; /* Neon Red */
    color: #fff;
    font-size: 8px;
    padding: 3px 8px;
    border-radius: 4px;
    margin-left: 8px;
    font-weight: bold;
    animation: neon-blink 0.6s infinite;
    box-shadow: 0 0 8px #ff0000, 0 0 12px #ff0000;
  }

  @keyframes neon-blink {
    0%, 100% {
      opacity: 1;
      box-shadow: 0 0 8px #ff0000, 0 0 12px #ff0000;
    }
    50% {
      opacity: 0.3;
      box-shadow: none;
    }
  }
</style>
@endsection
@section('content')

<div class="breadcumb-wrapper"  data-overlay="title" data-opacity="8">
    <div class="breadcumb-shape" ></div>
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Fee Structure</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Fee Structure</li>
            </ul>
        </div>
    </div>
</div>
<section class="mt-5">
    <div class="container">

        <div class="row ">
            <h2 class="h4 "><span class="color-titile-text"> Fees for</span> Indian Students</h2>
            <div class="table-responsive">
            <table>
                <tr>
                    <th>Details</th>
                    <th>Secondary Course</th>
                    <th>Sr. secondary Course</th>
                </tr>
                <tr>
                    <td>Registration Fees(Admission Form + Registration + Enrollment)</td>
                    <td>Rs. 1000/-(For Three years)</td>
                    <td>Rs. 1000/-(For Three Years)</td>
                </tr>
                <tr>
                    <td>Programme Fees For 6 Subject(Admission + Processing + Tuition + Digital Study Material + Forwarding )</td>
                    <td>Rs. 5900/-</td>
                    <td>Rs. 6000/-</td>
                </tr>
                <tr>
                    <td>Examination Fee </td>
                    <td>RS. 1100/-</td>
                    <td>RS. 2000/-</td>
                </tr>
                <!-- <tr>
                    <td>For each additional subject (Including Examination)</td>
                    <td>Rs. 1500/-</td>
                    <td>Rs. 1500/-</td>
                </tr> -->
            </table>
            </div>
        </div>
        
        <p class=""><strong><span class="color-titile-text">Other </span> Fee</strong></p>
        <div class="row">
        <div class="table-responsive">
            <table >
                <tr>
                    <th scope="col-2" class="w-50 ">Cost of information Brochure (Prospectus) along with the Application Form
                    </th>
                    <td  scope="col-2" class="w-50 text-center">RS. 250/- </td>
                </tr>
                <tr>
                    <th  scope="col-2" class="w-50 ">Re –evaluation of answer script per paper</th>
                    <td  scope="col-2" class="w-50 text-center">RS. 500/-</td>
                </tr>
                <tr>
                    <th  scope="col-2" class="w-50 ">Fee for change in examination centre</th>
                    <td  scope="col-2" class="w-50 text-center">RS. 1000/-</td>
                </tr>
                <tr>
                    <th  scope="col-2" class="w-50 ">Duplicate Marks Card </th>
                    <td  scope="col-2" class="w-50 text-center">RS. 1000/-</td>
                </tr>
                <tr>
                    <th  scope="col-2" class="w-50 ">Consolidated Marks Card </th>
                    <td  scope="col-2" class="w-50 text-center">Rs. 1000/-</td>
                </tr>
                <tr>
                    <th  scope="col-2" class="w-50 ">Migration Cum Certificate </th>
                    <td  scope="col-2" class="w-50 text-center">Rs. 1000/-</td>
                </tr>
            </table>
        </div>
        </div>
        <!-- <div class="row mt-25">
            <h4 class="ps-0"> International Fees</h4>
            <table>
                <tr>
                    <th>10<sup>th</sup>/ADEEB/High School (Secondary Level)</th>
                    <th>$ 750</th>
                </tr>
                <tr>
                    <th>10<sup>th</sup>/ADEEB/High School (Secondary Level)</th>
                    <th>$ 750</th>
                </tr>
        </div> -->
    </div>
</section>
<section>
    <div class="container ">
    <div class="row mt-25 ">
            <h4 class=""><span class="color-titile-text"> Fees for </span> International Students</h4>
            <div class="table-responsive">
            <table class="international-fee-table">
                <tr>
                    <th  scope="col-2" class="w-50 ">10<sup>th</sup>/ADEEB/High School (Secondary Level)</th>
                    <th  scope="col-2" class="w-50 text-center">$ 750</th>
                </tr>
                <tr>
                    <th  scope="col-2" class="w-50 ">12<sup>th</sup>/ADEEB-E-MAHIR/Intermediate (Senior Secondary Level)</th>
                    <th  scope="col-2" class="w-50 text-center">$ 800</th>
                </tr>
            </table>
            </div>
        </div>
    </div>
</section>
@endsection