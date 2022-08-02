
@extends('frontend.layout.master')


@section('header')
    @include('frontend.layout.partials.header')
@endsection

@section('content')


    <!-- Content Section -->
    <div class="col-lg-12 mt-50">
        <div class="container">
            <div class="card">
                <h5 class="card-header" style="text-align: center; background: #273c66; color: #ffffff">
                    Fees & Payments
                </h5>
                <div class="card-body">
                @foreach($fees_payment as $fees_payments)

                    @php
                        $p_resultarray =json_decode($fees_payments->p_result);
                        $p_amountarray =json_decode($fees_payments->p_amount);

                        $m_feearray =json_decode($fees_payments->m_fee);




                       $p_result = json_decode($fees_payments->p_result);
                       $p_amount = json_decode($fees_payments->p_amount);
                       $m_fee = json_decode($fees_payments->m_fee);

                       $arrayvalue =array();
                       foreach ($p_result as $key=>$pvalu) {
                           foreach ($p_amount as $keyone=>$pamunt) {
                               foreach ($m_fee as $keytow=>$pafree) {
                                   if($key==  $keyone && $keyone== $keytow)
                                    $arrayvalue[] =["$pvalu","$pamunt","$pafree"];
                               }
                           }
                       }


                    @endphp
                    <!-- Faq Section Start -->
                    <div class="rs-faq-part style1 orange-color pt-10 pb-20 md-pt-20 md-pb-20">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 padding-0">
                                    <div class="main-part" style="background-color: #ffffff;">
                                        <div class="faq-content" style="border-radius: 10px 10px 10px 10px;
                                          box-shadow: 0px 0px 15px grey;">
                                            <div id="accordion" class="accordion">
                                                <div class="card" >
                                                    <div class="card-header">
                                                        <a class="card-link" data-toggle="collapse" href="#collapseOne_{{$fees_payments->did}}" style="background: #607d8b;">{{$fees_payments->name}}</a>
                                                    </div>
                                                    <div id="collapseOne_{{$fees_payments->did}}" class="collapse show" data-parent="#accordion">
                                                        <div class="card-header mt-30" style="text-align: center;">
                                                            <p class="card-link-new" style-"background: #607d8b; !important">{{ $fees_payments->p_name }}</p>
                                                        </div>
                                                        <div class="card-body" style="max-width: 100%;">
                                                            
                                                            <p style="margin: 0px;"><b>Required Qualification for Admission:</b></p>
                                                            <ul>
                                                                <li>{!! $fees_payments->r_q_admission !!}</li>
                                                            </ul>
                                                            </p>
                                                            <p style="margin: 0px;">
                                                            <p style="margin: 0px;"><b>General Information:</b></p>
                                                            <ul>
                                                                <li>{!! $fees_payments->general_information !!}</li>
                                                            </ul>
                                                            </p>
                                                            <p>
                                                            <p style="margin: 0px;"><b>Scholarship:</b></p>
                                                            <ul>
                                                                <li>{!! $fees_payments->scholarship !!}</li>
                                                            </ul>
                                                            </p>
                                                            
                                                            <p>
                                                            <p style="margin: 0px;"><b>Financial Waiver:</b></p>
                                                            
                                                            <ul>
                                                                <li>{!! $fees_payments->financial_waver !!}</li>
                                                            </ul>
                                                            </p>
                                                            <p style="margin: 0px;"><b>Total Course Fees: {{ $fees_payments->course_fee }}</b></p>
                                                            <table class="table table-hover table-bordered table-responsive" style="display: inline-table !important;">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Waiver Policy Result</th>
                                                                    <th scope="col">Payable Amount	</th>
                                                                    <th scope="col">Monthly Fee</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($arrayvalue  as $firstvalue)
                                                                <tr>
                                                                    @foreach($firstvalue as $secoundvalue)
                                                                            <td class="table_font">
                                                                                {{$secoundvalue}}
                                                                            </td>
                                                                    @endforeach
                                                                </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




@endsection
