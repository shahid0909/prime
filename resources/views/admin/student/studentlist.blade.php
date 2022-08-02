@extends('admin.layout.master')

@section('style-lib')
	<!-- data tables -->
	<link href="{{ asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@push('custom-css')
    <style type="text/css">

    </style>
@endpush
@section('admin_containt')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Students List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Students</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Students List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">
                    <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-box">
                                        <div class="card-head">
                                            <header>All Students List</header>
                                            <div class="tools">
                                                <a class="fa fa-repeat btn-color box-refresh"
                                                    href="javascript:;"></a>
                                            </div>
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <a href="{{url('/admin/addstudent')}}" id="addRow"
                                                            class="btn btn-info">
                                                            Add New <i class="fa fa-plus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group pull-right">
                                                        <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                            data-bs-toggle="dropdown">Tools
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-print"></i> Print </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-file-pdf-o"></i> Save as
                                                                    PDF </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-file-excel-o"></i>
                                                                    Export to Excel </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-scrollable">
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th> Student ID </th>
                                                            <th> Name </th>
                                                            <th> Department </th>
                                                            <th> Mobile </th>
                                                            <th> Email </th>
                                                            <th>Admission Date</th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="{{ asset('admin_assets/img/std/std1.jpg') }}" alt="">
                                                            </td>
                                                            <td class="left">18</td>
                                                            <td>Rajesh Bhatt</td>
                                                            <td class="left">Mechanical</td>
                                                            <td><a href="tel:4444565756">
                                                                    4444565756 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#cebda6bbb6abbc8ea9a3afa7a2e0ada1a3">
                                                                    <span class="__cf_email__" data-cfemail="9fedfef5faecf7dff8f2fef6f3b1fcf0f2">[email&#160;protected]</span> </a></td>
                                                            <td class="left">22 Feb 2010</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std10.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">5</td>
                                                            <td>Pooja Patel</td>
                                                            <td class="left">Science</td>
                                                            <td><a href="tel:444786876">
                                                                    444786876 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#6f1c071a170a1d2f08020e0603410c0002">
                                                                    <span class="__cf_email__" data-cfemail="6f1f0000050e2f08020e0603410c0002">[email&#160;protected]</span> </a></td>
                                                            <td class="left">27 Aug 2005</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std2.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">15</td>
                                                            <td>Sarah Smith</td>
                                                            <td class="left">M.C.A.</td>
                                                            <td><a href="tel:44455546456">
                                                                    44455546456 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#dba8b3aea3bea99bbcb6bab2b7f5b8b4b6">
                                                                    <span class="__cf_email__" data-cfemail="14677566757c547379757d783a777b79">[email&#160;protected]</span> </a></td>
                                                            <td class="left">05 Jun 2011</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std3.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">23</td>
                                                            <td>John Deo</td>
                                                            <td class="left">M.B.B.S.</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#06756e737e637446616b676f6a2865696b">
                                                                    <span class="__cf_email__" data-cfemail="2d474245436d4a404c4441034e4240">[email&#160;protected]</span> </a></td>
                                                            <td class="left">15 Feb 2012</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std4.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">10</td>
                                                            <td>Jay Soni</td>
                                                            <td class="left">Arts</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#34475c414c5146745359555d581a575b59">
                                                                    <span class="__cf_email__" data-cfemail="e8838d8680a88f85898184c68b8785">[email&#160;protected]</span> </a></td>
                                                            <td class="left">12 Nov 2012</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std5.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">14</td>
                                                            <td>Jacob Ryan</td>
                                                            <td class="left">Music</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#2a59425f524f586a4d474b434604494547">
                                                                    <span class="__cf_email__" data-cfemail="c8a2a7a0a6bba7a688afa5a9a1a4e6aba7a5">[email&#160;protected]</span> </a></td>
                                                            <td class="left">03 Dec 2001</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std6.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">7</td>
                                                            <td>Megha Trivedi</td>
                                                            <td class="left">Commerce</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#e4978c919c8196a48389858d88ca878b89">
                                                                    <span class="__cf_email__" data-cfemail="4b262e2c232a0b2c262a222765282426">[email&#160;protected]</span> </a></td>
                                                            <td class="left">17 Mar 2013</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std3.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">18</td>
                                                            <td>Rajesh</td>
                                                            <td class="left">Civil</td>
                                                            <td><a href="tel:4444565756">
                                                                    4444565756 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#f3809b868b9681b3949e929a9fdd909c9e">
                                                                    <span class="__cf_email__" data-cfemail="6c1e0d06091f042c0b010d0500420f0301">[email&#160;protected]</span> </a></td>
                                                            <td class="left">22 Feb 2000</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std10.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">5</td>
                                                            <td>Pooja Patel</td>
                                                            <td class="left">Computer</td>
                                                            <td><a href="tel:444786876">
                                                                    444786876 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#3142594449544371565c50585d1f525e5c">
                                                                    <span class="__cf_email__" data-cfemail="15657a7a7f74557278747c793b767a78">[email&#160;protected]</span> </a></td>
                                                            <td class="left">27 Aug 2005</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javasctipt().html"
                                                                    class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std1.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">18</td>
                                                            <td>Rajesh Bhatt</td>
                                                            <td class="left">Mechanical</td>
                                                            <td><a href="tel:4444565756">
                                                                    4444565756 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#ccbfa4b9b4a9be8caba1ada5a0e2afa3a1">
                                                                    <span class="__cf_email__" data-cfemail="7002111a15031830171d11191c5e131f1d">[email&#160;protected]</span> </a></td>
                                                            <td class="left">22 Feb 2010</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std10.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">5</td>
                                                            <td>Pooja Patel</td>
                                                            <td class="left">Science</td>
                                                            <td><a href="tel:444786876">
                                                                    444786876 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#e4978c919c8196a48389858d88ca878b89">
                                                                    <span class="__cf_email__" data-cfemail="c9b9a6a6a3a889aea4a8a0a5e7aaa6a4">[email&#160;protected]</span> </a></td>
                                                            <td class="left">27 Aug 2005</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std2.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">15</td>
                                                            <td>Sarah Smith</td>
                                                            <td class="left">M.C.A.</td>
                                                            <td><a href="tel:44455546456">
                                                                    44455546456 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#becdd6cbc6dbccfed9d3dfd7d290ddd1d3">
                                                                    <span class="__cf_email__" data-cfemail="2e5d4f5c4f466e49434f4742004d4143">[email&#160;protected]</span> </a></td>
                                                            <td class="left">05 Jun 2011</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std3.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">23</td>
                                                            <td>John Deo</td>
                                                            <td class="left">M.B.B.S.</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#c3b0abb6bba6b183a4aea2aaafeda0acae">
                                                                    <span class="__cf_email__" data-cfemail="97fdf8fff9d7f0faf6fefbb9f4f8fa">[email&#160;protected]</span> </a></td>
                                                            <td class="left">15 Feb 2012</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std4.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">10</td>
                                                            <td>Jay Soni</td>
                                                            <td class="left">Arts</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#52213a272a372012353f333b3e7c313d3f">
                                                                    <span class="__cf_email__" data-cfemail="1d767873755d7a707c7471337e7270">[email&#160;protected]</span> </a></td>
                                                            <td class="left">12 Nov 2012</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std5.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">14</td>
                                                            <td>Jacob Ryan</td>
                                                            <td class="left">Music</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#84f7ecf1fce1f6c4e3e9e5ede8aae7ebe9">
                                                                    <span class="__cf_email__" data-cfemail="670d080f0914080927000a060e0b4904080a">[email&#160;protected]</span> </a></td>
                                                            <td class="left">03 Dec 2001</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std6.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">7</td>
                                                            <td>Megha Trivedi</td>
                                                            <td class="left">Commerce</td>
                                                            <td><a href="tel:444543564">
                                                                    444543564 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#2c5f445954495e6c4b414d4540024f4341">
                                                                    <span class="__cf_email__" data-cfemail="523f37353a3312353f333b3e7c313d3f">[email&#160;protected]</span> </a></td>
                                                            <td class="left">17 Mar 2013</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std1.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">18</td>
                                                            <td>Rajesh</td>
                                                            <td class="left">Civil</td>
                                                            <td><a href="tel:4444565756">
                                                                    4444565756 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#06756e737e637446616b676f6a2865696b">
                                                                    <span class="__cf_email__" data-cfemail="9ceefdf6f9eff4dcfbf1fdf5f0b2fff3f1">[email&#160;protected]</span> </a></td>
                                                            <td class="left">22 Feb 2000</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <button class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd gradeX">
                                                            <td class="patient-img">
                                                                <img src="../assets/img/std/std10.jpg"
                                                                    alt="">
                                                            </td>
                                                            <td class="left">5</td>
                                                            <td>Pooja Patel</td>
                                                            <td class="left">Computer</td>
                                                            <td><a href="tel:444786876">
                                                                    444786876 </a></td>
                                                            <td><a href="https://radixtouch.com/cdn-cgi/l/email-protection#c2b1aab7baa7b082a5afa3abaeeca1adaf">
                                                                    <span class="__cf_email__" data-cfemail="e1918e8e8b80a1868c80888dcf828e8c">[email&#160;protected]</span> </a></td>
                                                            <td class="left">27 Aug 2005</td>
                                                            <td>
                                                                <a href="edit_professor.html"
                                                                    class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="javasctipt().html"
                                                                    class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
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
    </div>
</div>
@endsection
@section('script-lib')
	<!-- data tables -->
	<script src="{{ asset('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('admin_assets/js/pages/table/table_data.js') }}"></script>

@endsection
@push('custom-js')

@endpush
