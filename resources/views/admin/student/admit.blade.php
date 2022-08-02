<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ public_path('final_Adit_card/css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./style2.css" /> -->

    <title>admit Card</title>

    <style>
        .txt-center {
            text-align: center;
        }
        .padding {
            padding: 15px;
        }
        .mar-bot {
            margin-bottom: 15px;
        }
        .admit-card {
            padding: 15px;
            margin: 20px 0;
        }
        .BoxA h5, .BoxA p {
            margin: 0;
        }
        h5 {
            text-transform: uppercase;
        }
        table img {
            width: 100%;
            margin: 0 auto;
        }


                 }
        table tr {
            margin:0px;
            padding: 0px;
            /*background: red;*/
        }

    </style>



</head>
<body>
<div class="main" style="width: 80%;height: 400px;margin: auto;border: 2px solid #000 !important;">
    <div class="admit-card">
        <div class="BoxA padding">
            <div class="row">

                <div class="col-sm-3 txt-center" style="float: left; width: 20%;">
                    <img src="{{ public_path('admit/image/Prime_University.png') }}" width="80px;"  height="80px"  />
                </div>

                <div class="col-sm-6 txt-center" style="float: left; width: 55%;">
                    <h2 style="margin: 0px; padding:0px;">PRIME UNIVERSITY</h2>
                    <p style="font-size: 12px;">114/116 Mazar Road, Mirpur-1, Dhaka 1216
                        <br />
                        Phone: 02-8031810, Mobile:01939425030</p>
                </div>

                <div class="col-sm-3 txt-center" style="
                    float: left; width: 20%;
                    ">
                    <img src="{{ $image }}" width="80px;" height="80px" />
                </div>

                <!-- <div class="col-sm-4">
                    <h5>Admit Card</h5>
                    <p>B.Tech - 2019</p>
                </div> -->
            </div>
        </div>
        <div class="BoxC padding "  >
            <div class="row">
                <div class="text-align:center" >
                    <p  style=" font-size: 17px; font-weight: bold;margin:0px">Admit Card</p>
                      <p  style=" font-size: 17px; font-weight: bold;text-align:center;margin:0px">{{$exam_name }}, {{ $session }}</p>
                </div>
            </div>
        </div>
        <div class="BoxD mar-bot " style="border: none;">
            <div class="row" style="margin-left: 2%; width: 100%;" >
                <div class="col-sm-6  m-auto"  style="width: 50%; float: left;overflow: hidden" >
                    <table class="table" style="border: none; width: 100%;overflow: hidden" >
                        <tbody>
                            <tr style="margin: 0px !important;padding: 0px !important;">
                                <p style="margin: 0px !important;padding: 0px !important;"><b>Name: </b>{{ $s_name }}</p>

                            </tr>
                            <tr style="margin: 0px !important;padding: 0px !important;">
                                <p style="margin: 0px !important;padding: 0px !important;"><b>Batch No:  </b>{{ $batch }}</p>

                            </tr>
                            <tr style="margin: 0px !important;padding: 0px !important;">
                                <p style="margin: 0px !important;padding: 0px !important;">Date of Commencement of Examination :</p>

                            </tr>
                            <?php
                            $date = \Carbon\Carbon::now()->format('d/m/Y');
                            ?>
                            <tr>
                                <p style="margin-top: 50px">Date of Issue :{{ $date }}</p>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6  m-auto" style="width: 50%; float: right;overflow: hidden">
                    <table class="table" style="border: none; width: 100%;overflow: hidden">
                        <tbody>
                            <tr style="margin: 0px !important;padding: 0px !important;">
                                <p style="margin: 0px !important;padding: 0px !important;"><b>ID : </b> {{ $s_id }}</p>
                            </tr>
                            <tr style="margin: 0px !important;padding: 0px !important;">
                                <p style="margin: 0px !important;padding: 0px !important;"><b>Program :</b> {{ $program }}</p>
                            </tr>
                            <tr style="margin: 0px !important;padding: 0px !important;">

                                <p style="margin: 0px !important;padding: 0px !important;">{{ $exam_d }}</p>
                            </tr>
                            <tr>
                                <p style="margin-top: 50px">Controller Of Examination</p>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ public_path('final_Adit_card/js/jquery-3.3.1.slim.min.js') }}"  crossorigin="anonymous"></script>
<script src="{{ public_path('final_Adit_card/js/popper.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ public_path('final_Adit_card/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
</body>
</html>


