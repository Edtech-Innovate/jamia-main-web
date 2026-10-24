@extends('web.layouts.main')
@section('title', ' Check Authorized Centers of Jamia Urdu Aligarh ')
@section('description', ' Jamia Urdu Aligarh offers courses in over 800 learning centers around the world which are equivalent to certification of the respective State Boards.')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/authorized-center.css?=1.5">

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


<div class="breadcumb-wrapper" data-bg-src="/website-assets/img/bg/breadcumb-bg.jpg" data-overlay="title" data-opacity="8">
    <div class="breadcumb-shape" data-bg-src="/website-assets/img/bg/breadcumb_shape_1_1.png"></div>
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Authorized Centers</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Authorized Centers</li>
            </ul>
        </div>
    </div>
</div>


<section class="space-top space-extra2-bottom">
    <div class="container">




        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12 card">
                <div class="card-body mt-2">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="state" class="form-label">Location</label>
                        <select name="state" id="state">
                            <option value="" disabled selected>Select State</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
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
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                    </div>
                    <button type="submit" class="mt-4 mb-4 btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
        <!-- <div class="row mt-25">
            <table>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Contact Person </th>
                    <th>City</th>
                    <th>State</th>
                    <th>Contact Number</th>
                </tr>
                <tr>
                    <td>S-480 </td>
                    <td>Black Diamond Public School </td>
                    <td>Rajeev Kumar </td>
                    <td>Okhla</td>
                    <td>Delhi</td>
                    <td>7004275133</td>
                </tr>
                <tr>
                    <td>S-480 </td>
                    <td>Black Diamond Public School </td>
                    <td>Rajeev Kumar </td>
                    <td>Okhla</td>
                    <td>Delhi</td>
                    <td>7004275133</td>
                </tr>
                <tr>
                    <td>S-480 </td>
                    <td>Black Diamond Public School </td>
                    <td>Rajeev Kumar </td>
                    <td>Okhla</td>
                    <td>Delhi</td>
                    <td>7004275133</td>
                </tr>
                <tr>
                    <td>S-480 </td>
                    <td>Black Diamond Public School </td>
                    <td>Rajeev Kumar </td>
                    <td>Okhla</td>
                    <td>Delhi</td>
                    <td>7004275133</td>
                </tr>
                <tr>
                    <td>S-480 </td>
                    <td>Black Diamond Public School </td>
                    <td>Rajeev Kumar </td>
                    <td>Okhla</td>
                    <td>Delhi</td>
                    <td>7004275133</td>
                </tr>
                <tr>
                    <td>S-480 </td>
                    <td>Black Diamond Public School </td>
                    <td>Rajeev Kumar </td>
                    <td>Okhla</td>
                    <td>Delhi</td>
                    <td>7004275133</td>
                </tr>
                <tr>
                    <td>S-480 </td>
                    <td>Black Diamond Public School </td>
                    <td>Rajeev Kumar </td>
                    <td>Okhla</td>
                    <td>Delhi</td>
                    <td>7004275133</td>
                </tr>
                <tr>
                    <td>S-480 </td>
                    <td>Black Diamond Public School </td>
                    <td>Rajeev Kumar </td>
                    <td>Okhla</td>
                    <td>Delhi</td>
                    <td>7004275133</td>
                </tr>

            </table>
        </div> -->
</section>
@endsection