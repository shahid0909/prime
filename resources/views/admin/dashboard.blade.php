@extends('admin.layout.master')


@section('admin_containt')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Dashboard</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- start widget -->
        <div class="state-overview">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-green">
                        <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Students</span>
                            <span class="info-box-number">{{ $student }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-yellow">
                        <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Faculty Member</span>
                            <span class="info-box-number">{{ $facultyMember }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="info-box bg-b-blue">
                        <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Employ</span>
                            <span class="info-box-number">{{ $employ }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!--<div class="col-xl-3 col-md-6 col-12">-->
                <!--    <div class="info-box bg-b-pink">-->
                <!--        <span class="info-box-icon push-bottom"><i-->
                <!--                class="material-icons">monetization_on</i></span>-->
                <!--        <div class="info-box-content">-->
                <!--            <span class="info-box-text">Fees Collection</span>-->
                <!--            <span class="info-box-number">13,921</span><span>$</span>-->
                <!--        </div>-->
                        <!-- /.info-box-content -->
                <!--    </div>-->
                    <!-- /.info-box -->
                <!--</div>-->
                <!-- /.col -->
            </div>
        </div>
        <!-- end widget -->
    </div>
</div>
@endsection
