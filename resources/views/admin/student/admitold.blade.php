<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="{{ public_path('admit/admit_asset/bootstrap/css/bootstrap.min.css') }}"
    />
    <link rel="stylesheet" href="{{ public_path('admit/style.css') }}" />

    <title>admit Card</title>
</head>
<body>
<section>
    <div>
        <div
            class="admit-card"
            style="
            /*width: 800px;*/
            height: 400px;
            line-height: 1.4em;
            color: #000000;
            font-size: 11px;
            text-align: justify;
            border: 1px solid black;
            margin: 0 auto;
            /*margin-top: 100px;*/
            /*margin-bottom: 100px;*/
          "
        >
            <div class="BoxA">
                <div class="row">
                    <div style="width: 20%; height: 30px; text-align: right">
                        <img
                            src="{{ public_path('admit/image/Prime_University.png') }}"
                            height="74px"
                            width="55px"
                        />
                    </div>
                    <div style="width: 60%; height: 30px; text-align: center">
                        <h5 class="uni_title">
                            <b>PRIME UNIVERSITY</b>
                        </h5>
                        <p>114/116 Mazar Road, Mirpur-1, Dhaka 1216</p>
                        <p>Phone: 02-8031810, Mobile:01939425030</p>
                    </div>
                    <div style="width: 20%; height: 75px; text-align: left">
                        <img
                            src="{{ public_path('admit/image/vc.jpg') }}"
                            height="75px"
                            width="65px"
                            style="border: 1px solid #000000"
                        />
                    </div>
                </div>
            </div>
            <div class="BoxC">
                <div class="row">
                    <div class="col-sm-12 txt-center">
                        <h3
                            style="
                    font-size: 17px;
                    font-weight: bold;
                    margin: 0 px;
                    padding: 0 px;
                  "
                        >
                            Admit Card
                        </h3>
                        <h3
                            style="
                    font-size: 17px;
                    font-weight: bold;
                    margin: 0 px;
                    padding: 0 px;
                  "
                        >
                            {{$exam_name }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="BoxD border- padding mar-bot">
                <div class="left" style="width: 50%; float: left">
                    <p style="font-size: 15px; font-weight: bold">
                        Name:
                        <span style="margin-left: 20px; font-weight: 100"
                        >{{ $s_name }}</span
                        >
                    </p>
                </div>
                <div class="right" style="width: 50%; float: right">
                    <p style="font-size: 15px; font-weight: bold">
                        ID :
                        <span style="margin-left: 40px; font-weight: 100"
                        >{{ $s_id }}</span
                        >
                    </p>
                </div>
                <div class="left" style="width: 50%; float: left">
                    <p style="font-size: 15px; font-weight: bold">
                        Batch No:
                        <span style="margin-left: 20px; font-weight: 100">{{ $batch }}</span>
                    </p>
                </div>
                <div class="right" style="width: 50%; float: right">
                    <p style="font-size: 15px; font-weight: bold">
                        Program :
                        <span style="margin-left: 40px; font-weight: 100"
                        >{{ $program }}</span>
                    </p>
                </div>
                <div class="left" style="width: 50%; float: left">
                    <p style="font-size: 15px">
                        Date of Commencement of Examination :
                    </p>
                </div>
                <div class="right" style="width: 50%; float: right">
                    <p style="font-size: 15px">12.03.2020</p>
                </div>
                <?php
                $date = \Carbon\Carbon::now();
                ?>
                <div class="left" style="width: 50%; float: left">
                    <p style="font-size: 15px; margin-top: 100px">Date of Issue :{{ $date }}</p>
                </div>
                <div class="right" style="width: 50%; float: right">
                    <p style="font-size: 15px; margin-top: 100px">
                        Controller Of Examination
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
    src="{{ public_path('admit/admit_asset/jquary/jquery-3.3.1.slim.min.js') }}"
></script>
<script
    src="{{ public_path('admit/admit_asset/proper/popper.min.js') }}"
></script>
<script
    src="{{ public_path('admit/admit_asset/bootstrap/js/bootstrap.min.js') }}"
></script>
</body>
</html>
