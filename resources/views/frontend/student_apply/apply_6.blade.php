
@extends('frontend.layout.master')


 @section('header')
         @include('frontend.layout.partials.header')
    @endsection

@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <!-- <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Blog Post Right</h1>
                <ul>
                    <li>
                        <a class="active" href="index.html">Home</a>
                    </li>
                    <li>Blog Post Right</li>
                </ul>
            </div>
        </div> -->
        <!-- Breadcrumbs End -->

        <!-- Blog Section Start -->
        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 pr-50 md-pr-15">
                        <div class="blog-deatails">
                            <!-- <div class="bs-img">
                                <a href="#"><img src="assets/images/blog/inner/1.jpg" alt=""></a>
                            </div> -->


                            <div class="blog-full">
                                <form method="post" action="{{ url('/student_apply/store_7') }}" enctype="multipart/form-data">
                                             @csrf

                                                <div class="form-group">

                                                    <div class="form-group col-md-4">
                                                        <label for="simpleFormEmail">Student Image</label>
                                                        <input type="file" class="form-control" name="image" required>
                                                        @error('image')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="row"  id="Product_email_box">
                                                        <div class="col-md-4 product_attr_1">
                                                            <label for="e_name" class="control-label mb-1">Examination Name</label>
                                                            <input id="e_name" type="text" name="exam_name[]" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            @error('exam_name')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 product_attr_1">
                                                            <label for="i_name" class="control-label mb-1">Institute Name</label>
                                                            <input id="i_name" type="text" name="institute[]" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            @error('institute')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 product_attr_1">
                                                            <label for="major" class="control-label mb-1">Major Area</label>
                                                            <input id="major" type="text" name="major_area[]" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            @error('major_area')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 product_attr_1">
                                                            <label for="year" class="control-label mb-1">Passing Year</label>
                                                            <input id="year" type="date" name="passing_year[]" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            @error('passing_year')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 product_attr_1">
                                                            <label for="grade" class="control-label mb-1">Grade</label>
                                                            <input id="grade" type="text" name="grade[]" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            @error('grade')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-4 product_attr_1">
                                                            <label for="certificate" class="control-label mb-1">Certificate</label>
                                                            <input id="certificate" type="file" name="upload_file[]" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            @error('upload_file')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-2" style="margin-bottom: 20px;">
                                                            <label for="email" class="control-label mb-1">
                                                                &nbsp;</label><br>
                                                            <button type="button" class="btn btn-success btn-lg" onclick="add_email_more()">
                                                                <i class="fas fa-plus"></i> &nbsp;ADD
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Newsletter section start -->
        <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
            <div class="container">
                <div class="newsletter-wrap">
                    @foreach($home_addr as $home_addrs)
                        <div class="row y-middle">
                            <div class="col-md-4 sm-mb-30">
                                <div class="sec-title">
                                    <div class="sub-title white-color">Address</div>
                                    <p class="title mb-0 white-color">
                                        {!! $home_addrs->address !!}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="sec-title">
                                    <div class="sub-title white-color">Phone Number</div>
                                    <p class="title mb-0 white-color">
                                        {!! $home_addrs->phone_number !!}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="sec-title">
                                    <div class="sub-title white-color">Email</div>
                                    <p class="title mb-0 white-color">
                                        {!! $home_addrs->email !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Newsletter section end -->
        </div>
        <!-- Section bg Wrap 2 End -->
    </div>
    <!-- Main content End -->

@endsection

@section('footer_script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>


    <script>
        var loop_email_count =1;
        function add_email_more(){
            loop_email_count++;

            var html ='<div class="row col-md-12 product_email_'+loop_email_count+'"><div class="col-md-4 product_attr_1"> \
                <label for="e_name" class="control-label mb-1">Examination Name</label> \
            <input id="e_name" type="text" name="exam_name[]" class="form-control" aria-required="true" aria-invalid="false" required> \
                @error('exam_name')   \
                <div class="alert alert-danger">   \
                {{ $message }}   \
                </div>       \
                @enderror    \
                </div>        \
                <div class="col-md-4 product_attr_1">       \
                <label for="i_name" class="control-label mb-1">Institute Name</label>  \
            <input id="i_name" type="text" name="institute[]" class="form-control" aria-required="true" aria-invalid="false" required>  \
                @error('institute') \
                <div class="alert alert-danger">   \
                {{ $message }}  \
                </div>   \
                @enderror   \
                </div>    \
                <div class="col-md-4 product_attr_1">    \
                <label for="major" class="control-label mb-1">Major Area</label>    \
            <input id="major" type="text" name="major_area[]" class="form-control" aria-required="true" aria-invalid="false" required>   \
                @error('major_area')   \
                <div class="alert alert-danger">   \
                {{ $message }}    \
                </div>   \
                @enderror   \
                </div>   \
                <div class="col-md-4 product_attr_1">    \
                <label for="year" class="control-label mb-1">Passing Year</label>   \
            <input id="year" type="date" name="passing_year[]" class="form-control" aria-required="true" aria-invalid="false" required>   \
                @error('passing_year')   \
                <div class="alert alert-danger">   \
                {{ $message }}              \
                </div>               \
                @enderror              \
                </div>                 \
                <div class="col-md-4 product_attr_1">        \
                <label for="grade" class="control-label mb-1">Grade</label>    \
                <input id="grade" type="text" name="grade[]" class="form-control" aria-required="true" aria-invalid="false" required>       \
                @error('grade')          \
                <div class="alert alert-danger">      \
                {{ $message }}     \
                </div>         \
                @enderror        \
                </div>           \
                <div class="col-md-4 product_attr_1">   \
                <label for="certificate" class="control-label mb-1">Certificate</label>      \
                <input id="certificate" type="file" name="upload_file[]" class="form-control" aria-required="true" aria-invalid="false" required>      \
                @error('upload_file')       \
                <div class="alert alert-danger">        \
                {{ $message }}              \
                </div>              \
                @enderror                \
                </div> </div> ' ;

            html+='<div class="col-md-2 product_email_'+loop_email_count+'"><label for="discount" class="control-label mb-1">&nbsp;</label><br><button type="button" class="btn btn-danger btn-lg" onclick=remove_emails_more("'+loop_email_count+'")><i class="fas fa-minus"></i> &nbsp;Remove</button></div>';

            jQuery('#Product_email_box').append(html);
        }
        function remove_emails_more(loop_email_count){
            jQuery('.product_email_'+loop_email_count).remove();
        }
    </script>
    @endsection
