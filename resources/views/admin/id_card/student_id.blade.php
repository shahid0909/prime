<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Id card 3</title>
    <!-- <link rel="stylesheet" href="./style3.css" /> -->
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        /* .main {
            height: 2000px;
        }

        .mid {
            height: 1000px;
            width: 70%;
            margin: auto;
            overflow: hidden;
        } */
        .card {
            width: 440px;
            height: 370px;
            margin: auto;
            /* margin-top: 50px; */
            box-shadow: 2px 4px 7px 3px grey;
            overflow: hidden;
        }

        .card_img {
            background-color: pink;
            height: 80px;
            margin-top: 10px;
            box-shadow: 2px 4px 7px 3px grey;

        }

        .card_img img {
            width: 100%;
            height: 100%;
        }

        .card .card-content {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .card .card-content_left {
            height: 180px;
            width: 30%;
            margin-left: 10px;
            display: inline-block;
            position: absolute;
            top: 30px;
        }
        .card-content_left img {
            height: 100%;
            width: 100%;
        }

        .card .card-content_middle {
            width: 65%;
            display: inline-block;
            position: absolute;
            left: 150px;
            top: 39px;
        }
        .card-content_middle h1 {
            font-size: 25px;
            color: red;
        }
        .card-content_middle h3:nth-child(2) {
            font-size: 18px;
        }
        .card-content_middle h3:nth-child(3) {
            font-size: 18px;
        }

        .card-content_middle h3:nth-child(4) {
            font-size: 18px;
            color: red;
        }
        .card-content_middle h3:nth-child(5) {
            font-size: 18px;
        }
        .card-content_middle h3:nth-child(6) {
            font-size: 16px;
        }.card-content_middle h3:nth-child(7) {
             font-size: 16px;
         }
        h3 span {
            font-size: 12px;
        }

        .card-content_right {
            width: 20%;
            margin-top: 20px;
            display: inline-block;
            position: absolute;
            bottom: 18px;
            right: 20px;
        }
        .card-content_right img {
            width: 80px;
        }

        .card-content_right h3 {
            border-top: 1px solid black;
        }


        .card .profile-info {
            height: 320px;
            margin: 25px 10px 25px 20px;
            width: 90%;
        }

        .profile-info img {
            width: 100%;
            height: 100%;
        }



    </style>
</head>
<body>
<!-- <div class="main">
    <div class="mid" > -->
<div class="card">
    <div class="card_img">
        <img src="{{ public_path('id_card/Asset/Student_ID BA in English-1.jpg') }}" />
    </div>
    <div class="card-content">
        <div class="card-content_left">
            <img src="{{ public_path($image) }}" />
        </div>
        <div class="card-content_middle">
            <h1>{{ $s_name }}</h1>
            <h3>ID : {{ $s_id }}</h3>
            <h3>Batch : {{ $batches }}<sup>st</sup></h3>
            <h3>Program : {{ $Student_program }}</h3>
{{--            <h3>Blood Group : B<span >+ve</span></h3>--}}
            <h3>Date of Issue : {{ $d_iss }}</h3>
            <h3>Date of Issue : {{ $d_exp }}</h3>
        </div>
        <div class="card-content_right">
            <img src="{{ public_path('id_card/signature/Signature-03-03.jpg') }}" />
            <h3>Registrar</h3>
        </div>
    </div>
</div>
<div class="card">

    <div class="profile-info">
        <img src="{{ public_path('id_card/Asset/Student_ID BA in English-2.jpg') }}" />
    </div>
</div>
<!-- </div>
</div> -->
</body>
</html>
