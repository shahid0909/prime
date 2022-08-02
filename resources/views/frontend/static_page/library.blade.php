
@extends('frontend.layout.master')


 @section('header')
         @include('frontend.layout.partials.header')
    @endsection

@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Intro Courses -->
        <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
            <div class="container">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="col-lg-8 md-mb-50">
                        <!-- Intro Info Tabs-->
                        <div class="intro-info-tabs">
                            <ul
                                class="nav nav-tabs intro-tabs tabs-box"
                                id="myTab"
                                role="tablist"
                            >
                                <li
                                    class="nav-item tab-btns"
                                    style="width: 33%; margin: 10px 0px"
                                >
                                    <a
                                        class="nav-link tab-btn active"
                                        id="prod-overview-tab"
                                        data-toggle="tab"
                                        href="#prod-overview"
                                        role="tab"
                                        aria-controls="prod-overview"
                                        aria-selected="true"
                                    >Digital Library</a
                                    >
                                </li>
                                <li
                                    class="nav-item tab-btns"
                                    style="width: 33%; margin: 10px 0px"
                                >
                                    <a
                                        class="nav-link tab-btn"
                                        id="prod-curriculum-tab"
                                        data-toggle="tab"
                                        href="#prod-curriculum"
                                        role="tab"
                                        aria-controls="prod-curriculum"
                                        aria-selected="false"
                                    >e-Resources</a
                                    >
                                </li>
                                <li
                                    class="nav-item tab-btns"
                                    style="width: 33%; margin: 10px 0px"
                                >
                                    <a
                                        class="nav-link tab-btn"
                                        id="prod-instructor-tab"
                                        data-toggle="tab"
                                        href="#prod-instructor"
                                        role="tab"
                                        aria-controls="prod-instructor"
                                        aria-selected="false"
                                    >Library Rules and Services</a
                                    >
                                </li>
                            </ul>
                            <div class="tab-content tabs-content" id="myTabContent">
                                <div
                                    class="tab-pane tab fade show active"
                                    id="prod-overview"
                                    role="tabpanel"
                                    aria-labelledby="prod-overview-tab"
                                >
                                    <div class="content white-bg">
                                        <!-- Cource Overview -->
                                        <div class="course-overview">
                                            <div
                                                class="rs-testimonial style2 pt-10 pb-10 md-pt-10 md-pb-10"
                                            >
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-12 md-mb-30">
                                                            <div
                                                                class="donation-part"
                                                                style="
                                    background-image: url('assets/images/counter/bg1.png');
                                    padding: 15px;
                                  "
                                                            >
                                                                <h3 class="title">Resources</h3>
                                                                <div class="desc mb-38">
                                                                    <p
                                                                        style="
                                        text-align: justify;
                                        color: #68533a;
                                        font-size: 16px;
                                        font-weight: 700;
                                      "
                                                                    >
                                                                        An electronic library (colloquially
                                                                        referred to as a digital library) is a
                                                                        focused collection of digital objects that
                                                                        can include text, visual material, audio
                                                                        material, video material, stored as
                                                                        electronic media formats (as opposed to
                                                                        print, microform, or other media), along
                                                                        with means for organizing, storing, and
                                                                        retrieving the files and media contained
                                                                        in the library collection. Digital
                                                                        libraries can vary immensely in size and
                                                                        scope, and can be maintained by
                                                                        individuals, organizations, or affiliated
                                                                        with established physical library
                                                                        buildings or institutions, or with
                                                                        academic institutions.The electronic
                                                                        content may be stored locally, or accessed
                                                                        remotely via computer networks. An
                                                                        electronic library is a type of
                                                                        information retrieval system.
                                                                        <br /><br /><br />
                                                                        In the context of the DELOS, a Network of
                                                                        Excellence on Digital Libraries, and
                                                                        DL.org, a Coordination Action on Digital
                                                                        Library Interoperability, Best Practices
                                                                        and Modelling Foundations, Digital Library
                                                                        researchers and practitioners and software
                                                                        developer produced a Digital Library
                                                                        Reference Model which defines a digital
                                                                        library as: "A potentially virtual
                                                                        organisation, that comprehensively
                                                                        collects, manages and preserves for the
                                                                        long depth of time rich digital content,
                                                                        and offers to its targeted user
                                                                        communities specialised functionality on
                                                                        that content, of defined quality and
                                                                        according to comprehensive codified
                                                                        policies."
                                                                        <br /><br /><br />

                                                                        The CD ROMs containing contents of
                                                                        different books, matters relating to
                                                                        Environments, Historical Incidences,
                                                                        Culture, Culinary Arts etc.
                                                                        <br />

                                                                        A distinction is often made between
                                                                        content that was created in a digital
                                                                        format, known as born-digital, and
                                                                        information that has been converted from a
                                                                        physical medium, e.g. paper, by
                                                                        digitizing. It should also be noted that
                                                                        not all electronic content is in digital
                                                                        data format. The term hybrid library is
                                                                        sometimes used for libraries that have
                                                                        both physical collections and electronic
                                                                        collections. For example, American Memory
                                                                        is a digital library within the Library of
                                                                        Congress.
                                                                        <br /><br /><br />

                                                                        Some important digital libraries also
                                                                        serve as long term archives, such as arXiv
                                                                        and the Internet Archive. Others, such as
                                                                        the Digital Public Library of America,
                                                                        seek to make digital information widely
                                                                        accessible through public libraries.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 md-mb-30">
                                                            <div
                                                                class="donation-part"
                                                                style="
                                    background-image: url('assets/images/counter/bg2.png');
                                    padding: 15px;
                                    margin-bottom: 15px;
                                    margin-top: 15px;
                                  "
                                                            >
                                                                <h3 class="title">Academic repositories:</h3>
                                                                <div class="desc mb-38">
                                                                    <p
                                                                        style="
                                        text-align: justify;
                                        color: #68533a;
                                        font-size: 16px;
                                        font-weight: 700;
                                      "
                                                                    >
                                                                        Many academic libraries are actively
                                                                        involved in building institutional
                                                                        repositories of the institution's books,
                                                                        papers, theses, and other works which can
                                                                        be digitized or were 'born digital'. Many
                                                                        of these repositories are made available
                                                                        to the general public with few
                                                                        restrictions, in accordance with the goals
                                                                        of open access, in contrast to the
                                                                        publication of research in commercial
                                                                        journals, where the publishers often limit
                                                                        access rights. Institutional, truly free,
                                                                        and corporate repositories are sometimes
                                                                        referred to as digital libraries.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 md-mb-30">
                                                            <div
                                                                class="donation-part"
                                                                style="
                                    background-image: url('assets/images/counter/bg3.png');
                                    padding: 15px;
                                  "
                                                            >
                                                                <h3 class="title">Academic repositories:</h3>
                                                                <div class="desc mb-38">
                                                                    <div class="course-overview">
                                                                        <div class="inner-box">
                                                                            <h4>
                                                                                Physical archives differ from physical
                                                                                libraries in several ways.
                                                                                Traditionally, archives are defined
                                                                                as:
                                                                            </h4>
                                                                            <ul class="review-list">
                                                                                <li>
                                                                                    Phasellus enim magna, varius et
                                                                                    commodo ut.
                                                                                </li>
                                                                                <li>
                                                                                    Sed consequat justo non mauris
                                                                                    pretium at tempor justo.
                                                                                </li>
                                                                                <li>
                                                                                    Ut nulla tellus, eleifend euismod
                                                                                    pellentesque vel, sagittis vel justo
                                                                                </li>
                                                                                <li>
                                                                                    Phasellus enim magna, varius et
                                                                                    commodo ut.
                                                                                </li>
                                                                                <li>
                                                                                    Phasellus enim magna, varius et
                                                                                    commodo ut.
                                                                                </li>
                                                                                <li>
                                                                                    Sed consequat justo non mauris
                                                                                    pretium at tempor justo.
                                                                                </li>
                                                                                <li>
                                                                                    Ut nulla tellus, eleifend euismod
                                                                                    pellentesque vel, sagittis vel justo
                                                                                </li>
                                                                                <li>
                                                                                    Phasellus enim magna, varius et
                                                                                    commodo ut.
                                                                                </li>
                                                                            </ul>
                                                                            <p>
                                                                                The technology used to create digital
                                                                                libraries is even more revolutionary
                                                                                for archives since it breaks down the
                                                                                second and third of these general
                                                                                rules. In other words, "digital
                                                                                archives" or "online archives" will
                                                                                still generally contain primary
                                                                                sources, but they are likely to be
                                                                                described individually rather than (or
                                                                                in addition to) in groups or
                                                                                collections. Further, because they are
                                                                                digital their contents are easily
                                                                                reproducible and may indeed have been
                                                                                reproduced from elsewhere. The Oxford
                                                                                Text Archive is generally considered
                                                                                to be the oldest digital archive of
                                                                                academic physical primary source
                                                                                materials.
                                                                            </p>
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
                                <div
                                    class="tab-pane fade"
                                    id="prod-curriculum"
                                    role="tabpanel"
                                    aria-labelledby="prod-curriculum-tab"
                                >
                                    <div class="content">
                                        <div id="accordion" class="accordion-box">
                                            <div class="card accordion block">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button
                                                            class="btn btn-link acc-btn"
                                                            data-toggle="collapse"
                                                            data-target="#collapseOne"
                                                            aria-expanded="true"
                                                            aria-controls="collapseOne"
                                                            style="
                                  background: #283d67;
                                  color: white;
                                  margin-bottom: 10px;
                                "
                                                        >
                                                            Subscribed
                                                        </button>
                                                    </h5>
                                                </div>


                                                <div
                                                    id="collapseOne"
                                                    class="collapse show"
                                                    aria-labelledby="headingOne"
                                                    data-parent="#accordion"
                                                >
                                                 @foreach($library_sub as $library_subs)
                                                    <div class="card-body acc-content current">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div
                                                                    class="content"
                                                                    style="
                                                              background: white;
                                                              margin: 10px;
                                                              padding: 15px;
                                                              border-radius: 10px;
                                                              box-shadow: 0px 0px 5px 0px #ccc;
                                                            "
                                                                                        >
                                                                    <div class="clearfix">
                                                                        <div class="pull-left" style="width: 40%">
                                                                            <img
                                                                                src="{{ asset($library_subs->image) }}"
                                                                                style="
                                                                                height: 80px;
                                                                                width: 250px;
                                                                                border-radius: 10px;
                                                                                box-shadow: 0px 0px 5px 0px #ccc;
                                                                              "
                                                                                alt=""
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="pull-right"
                                                                            style="width: 60%"
                                                                        >
                                                                            <div style="margin-top: 5%">
                                                                                <a href="{{ $library_subs->link }}"
                                                                                    style="
                                                                                  cursor: pointer;
                                                                                  text-align: center;
                                                                                  font-size: 17px;
                                                                                  font-weight: bold;
                                                                                "
                                                                                >{{ $library_subs->title }}</a>
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
                                            <div class="card accordion block">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button
                                                            class="btn btn-link acc-btn collapsed"
                                                            data-toggle="collapse"
                                                            data-target="#collapseTwo"
                                                            aria-expanded="false"
                                                            aria-controls="collapseTwo"
                                                            style="
                                  background: #283d67;
                                  color: white;
                                  margin-bottom: 10px;
                                "
                                                        >
                                                            Registered
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div
                                                    id="collapseTwo"
                                                    class="collapse"
                                                    aria-labelledby="headingTwo"
                                                    data-parent="#accordion"
                                                >
                                                    @foreach($library_registered as $library_registereds)
                                                    <div class="card-body acc-content">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div
                                                                    class="content"
                                                                    style="
                                      background: white;
                                      margin: 10px;
                                      padding: 15px;
                                      border-radius: 10px;
                                      box-shadow: 0px 0px 5px 0px #ccc;
                                    "
                                                                >
                                                                    <div class="clearfix">
                                                                        <div class="pull-left" style="width: 40%">
                                                                            <img
                                                                                src="{{ asset($library_registereds->image) }}"
                                                                                style="
                                            height: 80px;
                                            width: 250px;
                                            border-radius: 10px;
                                            box-shadow: 0px 0px 5px 0px #ccc;
                                          "
                                                                                alt=""
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="pull-right"
                                                                            style="width: 60%"
                                                                        >
                                                                            <div style="margin-top: 5%">
                                                                                <a href="{{ $library_registereds->link }}"
                                                                                   style="
                                                                                  cursor: pointer;
                                                                                  text-align: center;
                                                                                  font-size: 17px;
                                                                                  font-weight: bold;
                                                                                "
                                                                                >{{ $library_registereds->title }}</a>
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
                                            <div class="card accordion block">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button
                                                            class="btn btn-link acc-btn collapsed"
                                                            data-toggle="collapse"
                                                            data-target="#collapseThree"
                                                            aria-expanded="false"
                                                            aria-controls="collapseThree"
                                                            style="
                                  background: #283d67;
                                  color: white;
                                  margin-bottom: 10px;
                                "
                                                        >
                                                            Open Access
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div
                                                    id="collapseThree"
                                                    class="collapse"
                                                    aria-labelledby="headingThree"
                                                    data-parent="#accordion"
                                                >
                                                    @foreach($library_open as $library_opens)
                                                    <div class="card-body acc-content">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div
                                                                    class="content"
                                                                    style="
                                      background: white;
                                      margin: 10px;
                                      padding: 15px;
                                      border-radius: 10px;
                                      box-shadow: 0px 0px 5px 0px #ccc;
                                    "
                                                                >
                                                                    <div class="clearfix">
                                                                        <div class="pull-left" style="width: 40%">
                                                                            <img
                                                                                src="{{ asset($library_opens->image) }}"
                                                                                style="
                                            height: 80px;
                                            width: 250px;
                                            border-radius: 10px;
                                            box-shadow: 0px 0px 5px 0px #ccc;
                                          "
                                                                                alt=""
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="pull-right"
                                                                            style="width: 60%"
                                                                        >
                                                                            <div style="margin-top: 5%">
                                                                                <a href="{{ $library_opens->link }}"
                                                                                   style="
                                                                                  cursor: pointer;
                                                                                  text-align: center;
                                                                                  font-size: 17px;
                                                                                  font-weight: bold;
                                                                                "
                                                                                >{{ $library_opens->title }}</a>
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
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="prod-instructor"
                                    role="tabpanel"
                                    aria-labelledby="prod-instructor-tab"
                                >
                                    <div class="content white-bg pt-30">
                                        <!-- Cource Overview -->
                                        <div class="course-overview">
                                            <div class="inner-box">
                                                <h4>Library Rules and Services</h4>
                                                <h3>
                                                    The Prime University Library is rendering the
                                                    following services to the users.
                                                </h3>
                                                <ul class="review-list">
                                                    <li>	The users can collect their desired books from the open shelves;
</li>
                                                    <li>
                                                        The books have been shelved on the basis of subjects, which enables the users to pin-point the location of their desired books easily;
                                                    </li>
                                                    <li>
                                                       Magazines, Newsletters, University product viz. Journal, Newsletter, Annual Report, Magazine etc. are shelved separately;
                                                    </li>
                                                    <li>The borrowers (students) can borrow books for 15 (fifteen) days. If he/she desires to borrow the same book again, then he/she is to deposit the book in the library first and can recollect the same on the following day;</li>
                                                    <li>	The teachers are allowed to borrow books of their subjects for 01(one) semester but they are to return the books immediately after the semester is over;</li>
                                                    <li>
                                                        	The borrowers (student/faculty) are to pay a fine of Tk.5 (Five) per book per day, if they do not comply with the decision as noted in serial 4 and 5.
                                                    </li>
                                                    <li>
                                                       	The borrowers (student/faculty) are to pay a fine of Tk.5 (Five) per book per day, if they do not comply with the decision as noted in serial 4 and 5.
                                                    </li>
                                                    <li>The library users are to deposit their bags to the bag-corner before entering into the book shelve area of the library.</li>
                                                </ul>
                                                <p>Note: In case of gross violation in using the library, the user will be dealt with as per library rules.

</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Video Column -->
                                <div class="video-column col-lg-4">
              <div class="inner-column">
                <!-- End Video Box -->
                <div
                  class="course-features-info"
                  style="margin: 0px !important"
                >
                  <p
                    style="
                      text-align: center;
                      font-size: 17px;
                      font-weight: bold;
                      font-family: Arial, Helvetica, sans-serif;
                    "
                  >
                    Library Hours
                  </p>
                  <ul>
                    <li class="lectures-feature">
                      <i class="fa fa-clock-o"></i>
                      <span class="label">Sunday-Wednesday</span>
                      <span class="value"> 9.00 am-5.30 pm</span>
                    </li>

                    <li class="quizzes-feature">
                      <i class="fa fa-clock-o"></i>
                      <span class="label">Thursday</span>
                      <span class="value">9.00 am-7.00 pm</span>
                    </li>

                    <li class="duration-feature">
                      <i class="fa fa-clock-o"></i>
                      <span class="label">Friday</span>
                      <span class="value">8.00 am-7.00 pm</span>
                    </li>

                    <li class="students-feature">
                      <i class="fa fa-clock-o"></i>
                      <span class="label">Saturday</span>
                      <span class="value">10.30 am-6.30 pm</span>
                    </li>
                  </ul>
                  <p>
                    Note: Library remains closed on the holidays declared by the
                    university authority
                  </p>
                </div>

                <div class="btn-part">
                  <a
                    href="https://www.w3schools.com"
                    target="_blank"
                    class="btn readon2 orange-transparent"
                    >Search Book</a
                  >
                </div>
              </div>
            </div>
                </div>
            </div>
        </section>
        <!-- End intro Courses -->

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
