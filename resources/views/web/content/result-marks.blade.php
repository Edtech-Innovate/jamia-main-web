@extends('web.layouts.main')
@section('title', 'Online Result |')
@section('description', '')
@section('styles')
<link rel="stylesheet" href="/website-assets/css/bootstrap.rtl.min.css">
<link rel="stylesheet" href="/website-assets/min-css/result.css?=1.5">

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }

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


<div class="breadcumb-wrapper" data-overlay="title" data-opacity="8">
    <div class="breadcumb-shape"></div>
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Online Result</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Online Result</li>
            </ul>
        </div>
    </div>
</div>
<section>
    <div class="container mt-3 mb-3">
        <div class="row justify-content-center ">
            @if(isset($data) && $data['status']=="200")
            <div class="col-lg-10 form-r-border px-5">
                <div class="result">
                    <div class="text-center">
                        <img src="/website-assets/web/form-logo1.jpeg" alt="" width="300" height="300">
                        <!--<p class="fw-bold">Statement of Marks</p>-->
                        <p class="fw-bold">Result</p>
                        <!-- <p class="fw-bold">{{$data['Course']}}</p> -->
                        <p class="fw-bold">{{$data['Admission_Session']}}</p>
                    </div>
                    <div class="row" style="display: flex;justify-content: center;">
                        <div class="col-lg-6">
                            <p><span class="fw-bold">Name :</span><span>{{$data['Name']}}</span></p>
                            <p><span class="fw-bold">Father's Name :</span> <span>{{$data['Father_Name']}}</span></p>

                            <p><span class="fw-bold">Date of Birth :</span><span> {{date('d-M-Y',strtotime($data['DOB']))}}</span></p>
                        </div>
                        <div class="col-lg-3 ">
                            <p><span class="fw-bold">Roll No. :</span><span>{{$data['OA_Number']}}</span></p>
                            <p><span class="fw-bold">Enrollment No. :</span> <span>{{$data['Enrollment_No']}}</span></p>

                        </div>
                    </div>
                    <div class="">
                        <table class="table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col" colspan="2" style="width:50% !important;height: 40px;">Subject</th>
                                    <th style="width: 100px;">Max. Marks</th>
                                    <th style="width: 112px;">Marks Theory</th>
                                    <th style="width: 103px;">Mark Pract.</th>
                                    <th style="width: 70px;">Total</th>
                                    <th>Remarks</th>
                                  @if($data['Admission_Session']== 'Feb-2000' )
                                    <th style="width: 20%;">Result</th>
                                    
                                 
                                   <!--<th style="width: 100px;">Max. Marks</th>-->
                                    <!--<th style="width: 112px;">Marks Theory</th>-->
                                    <!--<th style="width: 103px;">Mark Pract.</th>-->
                                    <!--<th style="width: 70px;">Total</th>-->
                                   <!--<th style="width: 70px;">Result</th>-->
                                  @endif
                                   
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @php
                                $typoArr=["th","st","nd","rd","th","th","th","th","th","th"];
                                $i=1;
                                $totalPracticalMarks =0;
                                $totalTheoryMarks=0;
                                $grand_total =[];
                                @endphp
                                @foreach($data['student_results'] as $student)
                                <tr>
                                    <td style="width: 126px !important;">{{$i.$typoArr[$i]}} Paper</td>
                                    <td style="width:500px !important;">{{$student['Name']}}</td>
                                    @php
                                    if( $student['obt_marks'] >$student['min_marks']){
                                    $remark = "Pass";
                                    }else{
                                    $remark = "Fail";
                                    }
                                    $i++;
                                    @endphp
                                   @if($data['Admission_Session']== 'Feb-2000' )
                                    <td>{{ $remark}}</td>
                                  @else
                                    <td>{{$student['max_marks']}}</td>
                                    <td>
                                        @php
                                        
                                        if(trim(strtolower($student['Name']))=="physics" || trim(strtolower($student['Name']))=="chemistry" || trim(strtolower($student['Name']))=="biology"){
                                            $totalTheoryMarks = intval($totalTheoryMarks)+intval($student['theory_marks']);
                                            $grand_total[] = $student['theory_marks'];
                                        echo ($student['theory_marks']);
                                        }else{
                                            $grand_total[] = intval($student['theory_marks'])+intval($student['pract_marks']);

                                        echo(intval($student['theory_marks'])+intval($student['pract_marks']));
                                        }
                                        
                                        @endphp
                                    </td>
                                    <td>
                                        @php
                                        if(trim(strtolower($student['Name']))=="physics" || trim(strtolower($student['Name']))=="chemistry" || trim(strtolower($student['Name']))=="biology"){
                                        $totalPracticalMarks = intval($totalPracticalMarks)+intval($student['pract_marks']);
                                        echo ($student['pract_marks']);
                                        }else{

                                        }
                                        @endphp
                                    </td>
                                    <td>{{intval($student['theory_marks'])+intval($student['pract_marks'])}}

                                    </td>                                  
                                    <td>{{ $remark}}</td>
                                    @endif
                                </tr>
                                @endforeach
                               @if($data['Admission_Session']== 'Feb-2000' )
                              @else
                                <tr>
                                    <td colspan="2">Total</td>
                                    <td>{{$data['grand_max_marks']}}</td>
                                    <td>
                                        @php
                                        if(trim(strtolower($student['Name']))=="physics" || trim(strtolower($student['Name']))=="chemistry" || trim(strtolower($student['Name']))=="biology" ||  $totalTheoryMarks>0){
                                       
                                        echo array_sum($grand_total);
                                        }else{
                                        echo(intval($data['grand_theory_marks']+$data['grand_practical_marks']));
                                        }
                                        @endphp
                                    </td>
                                    <td>
                                        @php
                                        if(trim(strtolower($student['Name']))=="physics" || trim(strtolower($student['Name']))=="chemistry" || trim(strtolower($student['Name']))=="biology"|| $totalPracticalMarks>0){
                                        echo($totalPracticalMarks);
                                        }else{

                                        }
                                        @endphp
                                    </td>
                                    <!--<td colspan="2">{{$data['grand_total']}}</td>-->
                                    <td colspan="2">{{ intval($data['grand_total']) }}</td>
                                </tr>
                              @endif
                             
                                <tr>
                                   @if($data['Admission_Session']== 'Feb-2000' )                                  
                                   @else
                                    <!--<td colspan="2">Grand Total</td>-->
                                    <!--<td colspan="3"> {{$data['grand_total']}}/{{$data['grand_max_marks']}}</td>-->
                                    <!--<td colspan="2">{{$data['division']}}</td>-->
                                  @endif
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <p class="mt-4"><span class="fw-bold"> Disclaimer :</span> The published result is provisional only. Jamia Urdu Aligarh is not responsible for any inadvertent error that may have crept in the data / results being published online. This is being published just for the immediate information to the examinees. The final mark sheet(s) issued by Jamia Urdu Aligarh will only be treated authentic & final in this regard.</p>
                </div>
                @else
                <div class="text-center  mt-5 mb-3 ">
                    <p class="text-danger fw-bold">{{$data['message']}}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>


@endsection
@section('scripts')
<script src="/website-assets/js/vendor/jquery-3.6.0.min.js?=1.0"></script>
<script src="/website-assets/js/app.min.js?=1.0"></script>
<script src="/website-assets/js/main.js?=1.0"></script>
<script src="/website-assets/js/toastr.min.js?=1.0"></script>
<script src="/website-assets/js/swiper-element-bundle.min.js?=1.0"></script>


@endsection