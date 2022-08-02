
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
                    Scholership and Financial Aid
                </h5>
                <div class="card-body">
                    @foreach($fees_payment as $fees_payments)
                    <!-- Faq Section Start -->
                    <div class="rs-faq-part style1 orange-color pt-10 pb-20 md-pt-20 md-pb-20">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 padding-0">
                                    <div class="main-part" style="background-color: #ffffff;">
                                        <div class="faq-content" style="border-radius: 10px 10px 10px 10px; box-shadow: 0px 0px 15px grey;">
                                            <div id="accordion" class="accordion">
                                                <div class="card" >
                                                    <div class="card-header">
                                                        <a class="card-link" data-toggle="collapse" href="#collapse_{{$fees_payments->id}}">{{ $fees_payments->name }}</a>
                                                    </div>
                                                    <div id="collapse_{{$fees_payments->id}}" class="collapse show" data-parent="#accordion">
                                                        <!-- overflow: scroll; -->
                                                        <div class="card-body" style="max-width: 100%;">
                                                            <div class="text_info">
                                                                <p>
                                                                <p><b>Scholarship:</b></p>
                                                                <ul>
                                                                    <li>{!! $fees_payments->scholarship !!}</li>
                                                                </ul>
                                                                </p>
                                                                <p>
                                                                <p><b>Financial Waiver:</b></p>
                                                                <ul>
                                                                    <li>{!! $fees_payments->financial_waver !!}</li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                        <div class="card-body" style="max-width: 100%;">
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
            <!-- faq Section Start -->
        </div>
    </div>
    <!-- Content Section end -->
@endsection
