@extends('web.layouts.main')
@section('title', 'Jamia Urdu Aligarh Online Information – Official Portal')
@section('description', 'Get the latest Jamia Urdu Aligarh online information, including admissions, applications, student services, notices, forms, and important updates.')
@section('styles')
<link rel="preload stylesheet" type="text/css" as="style" href="/website-assets/min-css/online-info.css?=1.5">

<style>
        .sec{
            padding: 40px 0px 100px;
        }
         tbody, td, tfoot, th, thead, tr {
         border-width: 1px !important;}
         button, input, optgroup, select, textarea {
         width: 100%;
         border: none !important;
         outline: none !important;
         }
         .form-control-plaintext {
            border-bottom: 2px dotted #111 !important;
         }
      
         textarea:focus, input:focus{
    outline: none;
    border:none;
} 
         select, .form-control, .form-select, textarea, input {
    height: 30px;
   background: transparent;}
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
   </style>
@endsection 
@section('content')



<div class="breadcumb-wrapper" data-bg-src="/website-assets/img/bg/breadcumb-bg.jpg" data-overlay="title" data-opacity="8">
         <div class="breadcumb-shape" data-bg-src="/website-assets/img/bg/breadcumb_shape_1_1.png"></div>
         <div class="container">
            <div class="breadcumb-content text-center">
               <h1 class="breadcumb-title">Online Informtion</h1>
               <ul class="breadcumb-menu">
                  <li><a href="/">Home</a></li>
                  <li>APPLICATION FOR Jamia COUNSELLOR / PR EXECUTIVE</li>
               </ul>
            </div>
         </div>
      </div>


      <section class="space-top space-extra2-bottom">
         <div class="container">

            <div class="row mt-25">

            <form>
            <div class="table-responsive">
                  <table class="table">
                     <tbody>
                        <tr>
                           <th scope="row">Name of the Institute 		</th>
                           <td colspan="3"><input type="text" name=""></td>
                        </tr>
                        <tr>
                           <th scope="row">Address 		</th>
                           <td colspan="3"><input type="text" name=""></td>
                        </tr>
                        <tr>
                           <th scope="row">City</th>
                           <td colspan="3"><input type="text" name=""></td>
                        </tr>
                      
                        <tr>
                           <th scope="row">State</th>
                           <td><select name="" id="">
                           <option selected="selected" >--Select One--</option>
                           <option value="ANDAMAN AND NICOBAR ISLANDS">ANDAMAN AND NICOBAR ISLANDS</option>
                           <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                           <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                           <option value="ASSAM">ASSAM</option>
                           <option value="BIHAR">BIHAR</option>
                           <option value="CHANDIGARH">CHANDIGARH</option>
                           <option value="CHHATTISGARH">CHHATTISGARH</option>
                           <option value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option>
                           <option value="Daman and Diu">Daman and Diu</option>
                           <option value="DELHI">DELHI</option>
                           <option value="GOA">GOA</option>
                           <option value="GUJARAT">GUJARAT</option>
                           <option value="HARYANA">HARYANA</option>
                           <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                           <option value="JAMMU &amp; KASHMIR">JAMMU &amp; KASHMIR</option>
                           <option value="JHARKHAND">JHARKHAND</option>
                           <option value="KARNATAKA">KARNATAKA</option>
                           <option value="KARNATKA">KARNATKA</option>
                           <option value="KERALA">KERALA</option>
                           <option value="Lakshadweep">Lakshadweep</option>
                           <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                           <option value="MAHARASHTRA">MAHARASHTRA</option>
                           <option value="MANIPUR">MANIPUR</option>
                           <option value="MEGHALAYA">MEGHALAYA</option>
                           <option value="MIZORAM">MIZORAM</option>
                           <option value="NAGALAND">NAGALAND</option>
                           <option value="ODISHA">ODISHA</option>
                           <option value="PUDUCHERRY">PUDUCHERRY</option>
                           <option value="PUNJAB">PUNJAB</option>
                           <option value="RAJASTHAN">RAJASTHAN</option>
                           <option value="SIKKIM">SIKKIM</option>
                           <option value="TAMIL NADU">TAMIL NADU</option>
                           <option value="TELANGANA">TELANGANA</option>
                           <option value="TRIPURA">TRIPURA</option>
                           <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                           <option value="UTTARAKHAND">UTTARAKHAND</option>
                           <option value="WEST BENGAL">WEST BENGAL</option>
                           </select></td>

                           <th>Pin Code 	</th>
                           <td><input type="text" name=""></td>
                        </tr>
                        <tr>
                           <th scope="row">Address:
                              (full address of the proposed site)
                           </th>
                           <td colspan="3"><input type="text" name=""></td>
                        </tr>
                        <tr>
                           <th scope="row">Phone:</th>
                           <td><input type="text" name=""></td>
                           <th>Mobile No :</th>
                           <td><input type="text" name=""></td>
                        </tr>
                        <tr>
                           <th scope="row">Email Id 	</th>
                           <td><input type="text" name=""></td>
                           <th>Website	</th>
                           <td><input type="text" name=""></td>
                        </tr>
                        <tr>
                           <th scope="row">Type of Registered Institute 	</th>
                           <td><input type="text" name=""></td>
                        </tr>
                        <tr>
                           <th scope="row">If others specify</th>
                           <td colspan="3">
                              <select>
                              <option selected="selected" >--Select One--</option>
                              <option value="">Organisation</option>
                              <option value="">Society</option>
                              <option value="">Company/Firm</option>
                              <option value="">Others</option>
                              </select>
                           </td>
                        </tr>
         </tbody>
                  </table>

               </div>
               <div class="row">
                  <div class="col-md-6 offset-md-5">
               <a href="#" class="th-btn">Continue...<i class="fa-regular fa-arrow-right ms-2"></i></a>

                  </div>

               </div>
         </form>
            </div>



         </div>
      </section>
    
@endsection