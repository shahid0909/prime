<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Id card 2</title>
    <!-- <link rel="stylesheet" href="./style2.css" /> -->
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
            left: 160px;
            top: 50px;
        }
        .card-content_middle h1 {
            font-size: 25px;
            color: blue;
        }
        .card-content_middle h3:nth-child(2) {
            font-size: 20px;
        }
        .card-content_middle h3:nth-child(3) {
            font-size: 15px;
        }

        .card-content_middle h3:nth-child(4) {
            font-size: 18px;
            color: red;
        }
        h3 span {
            font-size: 18px;
        }

        .card-content_right {
            width: 20%;
            margin-top: 20px;
            display: inline-block;
            position: absolute;
            bottom: 18px;
            right: 50px;
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
        <img src="{{ public_path('id_card/Asset/Teacher_ID Business-1.png') }}" />
    </div>
    <div class="card-content">
        <div class="card-content_left">
            <img src="{{ public_path($image) }}" />
        </div>
        <div class="card-content_middle">
            <h1>{{ $m_name }}</h1>
            <h3>{{ $designation }}</h3>
            <h3>{{ $department }}</h3>
{{--            <h3>Blood Group : O<span >+ve</span></h3>--}}
        </div>
        <div class="card-content_right">
            <img src="{{ public_path('id_card/signature/Signature-03-03.jpg') }}" />
            <h3>Registrar</h3>
        </div>
    </div>
</div>
<div class="card">

    <div class="profile-info">
        <img src="{{ public_path('id_card/Asset/Teacher_ID Business-2.jpg') }}" />
    </div>
</div>
<!-- </div>
</div> -->
</body>
</html>




{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8" />--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge" />--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />--}}
{{--    <title>ID CARD</title>--}}
{{--    <link rel="stylesheet" href="{{ public_path('id_card/style.css') }}" />--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="main">--}}
{{--    <div class="mid-left">--}}
{{--        <div class="mid-left-header">--}}
{{--            <img--}}
{{--                src="{{ public_path('id_card/Asset/Stuff_ID Cleaner-1.jpg') }}"--}}
{{--                alt="image"--}}
{{--                style="width: 100%; height: auto"--}}
{{--            />--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="content-left">--}}
{{--        <img--}}
{{--            src="{{ public_path($image) }}"--}}
{{--            style="--}}
{{--            margin-top: 20px;--}}
{{--            margin-left: 20px;--}}
{{--            height: 200px;--}}
{{--            width: 150px;--}}
{{--            border: 1px solid black;--}}
{{--            float: left;--}}
{{--          "--}}
{{--        />--}}
{{--    </div>--}}
{{--    <div--}}
{{--        class="content-right"--}}
{{--        style="float: left; margin-left: 140px; margin-top: 50px"--}}
{{--    >--}}
{{--        <h1>{{ $m_name }}</h1>--}}
{{--        <h3>{{ $designation }}</h3>--}}
{{--        <h3>{{ $department }}</h3>--}}
{{--        <h3>Blood Group : B<span style="font-size: 18px">+ve</span></h3>--}}
{{--    </div>--}}
{{--    <div style="width: 100px; position: absolute; right: 50px; bottom: 30px">--}}
{{--        <img src="{{ public_path($image) }}" style="width: 80px" />--}}
{{--        <h3 style="border-top: 1px solid black">Registrar</h3>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="main">--}}
{{--    <div class="mid-left">--}}
{{--        <div class="mid-left-header">--}}
{{--            <img--}}
{{--                src="{{ public_path('id_card/background/staff-bg.png') }}"--}}
{{--                alt="image"--}}
{{--                style="width: 100%; height: auto"--}}
{{--            />--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
