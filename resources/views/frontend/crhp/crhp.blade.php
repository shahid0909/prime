
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
                    Centre for Research, Human Resource Development and Publications
                </h5>
                <div class="card-body">
                    <!-- Faq Section Start -->
                    <div class="rs-faq-part style1 orange-color pt-10 pb-20 md-pt-20 md-pb-20">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 padding-0">
                                    <div class="main-part" style="background: #ffffff;">
                                        <div class="faq-content">
                                            <div id="accordion" class="accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a class="card-link" data-toggle="collapse" href="#collapseOne"
                                                        >About</a>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid #283d67; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="card-header" style="text-align: center;">
                                                                </div>
                                                                <div class="card-body" style="max-width: 100%;">
                                                                    <p><b> {!! $crhp->about !!} </b></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseTwo"
                                                            aria-expanded="false"
                                                        >Vision</a
                                                        >
                                                    </div>
                                                    <div
                                                        id="collapseTwo"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid #283d67; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="card-header" style="text-align: center;">
                                                                </div>
                                                                <div class="card-body" style="max-width: 100%;">
                                                                    <p><b>{!! $crhp->vision !!}</b></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseThree"
                                                            aria-expanded="false"
                                                        >Mission</a
                                                        >
                                                    </div>
                                                    <div
                                                        id="collapseThree"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid #283d67; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="card-header" style="text-align: center;">
                                                                </div>
                                                                <div class="card-body" style="max-width: 100%;">
                                                                    <p><b>{!! $crhp->mission !!}</b></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseFour"
                                                            aria-expanded="false"
                                                        >Responsibilities of the office</a
                                                        >
                                                    </div>
                                                    <div
                                                        id="collapseFour"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid #283d67; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <p><b>{!! $crhp->responsibilities !!}</b></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseFive"
                                                            aria-expanded="false"
                                                        >Research Conducted</a>
                                                    </div>
                                                    <div
                                                        id="collapseFive"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid #283d67; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="row">
                                                                    <div class="col-lg-12 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered">
                                                                                <thead
                                                                                    class="thead-light"
                                                                                    style="background: #d5eaca; color: #15640b"
                                                                                ></thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th scope="col">#</th>
                                                                                    <th scope="col">Title</th>
                                                                                    <th scope="col">Date</th>
                                                                                    <th scope="col">View</th>
                                                                                    <th scope="col">Downloads</th>
                                                                                </tr>
                                                                                @foreach($Research_Conducted as $key=>$mission)
                                                                                    <tr>
                                                                                        <th>{{ $key+1}}</th>
                                                                                        <td>{{ $mission->title }}</td>
                                                                                        @if(!empty($mission->date))
                                                                                            <td>{{ $mission->date }}</td>
                                                                                        @else
                                                                                            <td>NULL</td>
                                                                                        @endif
                                                                                        <td align="center">
                                                                                            <a
                                                                                                target="_blank"
                                                                                                href="{{ url( $mission->file ) }}"
                                                                                            >
                                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td align="center">
                                                                                            <a
                                                                                                target="_blank"
                                                                                                href="{{ url( $mission->file ) }}"
                                                                                            >
                                                                                                <i class="fa fa-download" aria-hidden="true"></i>
                                                                                            </a>
                                                                                        </td>
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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapsesix"
                                                            aria-expanded="false"
                                                        >Journal</a
                                                        >
                                                    </div>
                                                    <div
                                                        id="collapsesix"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid #283d67; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                            <div class="row">
                                                                <div class="col-lg-12 pr-50 md-pr-15" style="margin: 0 auto">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <thead
                                                                                class="thead-light"
                                                                                style="background: #d5eaca; color: #15640b"
                                                                            ></thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Title</th>
                                                                                <th scope="col">Date</th>
                                                                                <th scope="col">View</th>
                                                                                <th scope="col">Downloads</th>
                                                                            </tr>
                                                                            @foreach($Journal_Published as $key=>$mission)
                                                                                <tr>
                                                                                    <th>{{ $key+1}}</th>
                                                                                    <td>{{ $mission->title }}</td>
                                                                                    @if(!empty($mission->date))
                                                                                        <td>{{ $mission->date }}</td>
                                                                                    @else
                                                                                        <td>NULL</td>
                                                                                    @endif
                                                                                    <td align="center">
                                                                                        <a
                                                                                            target="_blank"
                                                                                            href="{{ url( $mission->file ) }}"
                                                                                        >
                                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                        </a>
                                                                                    </td>
                                                                                    <td align="center">
                                                                                        <a
                                                                                            target="_blank"
                                                                                            href="{{ url( $mission->file ) }}"
                                                                                        >
                                                                                            <i class="fa fa-download" aria-hidden="true"></i>
                                                                                        </a>
                                                                                    </td>
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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapseseven"
                                                            aria-expanded="false"
                                                        >Annual Report</a>
                                                    </div>
                                                    <div
                                                        id="collapseseven"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid #283d67; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="row">
                                                                    <div class="col-lg-12 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered">
                                                                                <thead
                                                                                    class="thead-light"
                                                                                    style="background: #d5eaca; color: #15640b"
                                                                                ></thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th scope="col">#</th>
                                                                                    <th scope="col">Title</th>
                                                                                    <th scope="col">Date</th>
                                                                                    <th scope="col">View</th>
                                                                                    <th scope="col">Downloads</th>
                                                                                </tr>
                                                                                @foreach($Annual_Report as $key=>$mission)
                                                                                    <tr>
                                                                                        <th>{{ $key+1}}</th>
                                                                                        <td>{{ $mission->title }}</td>
                                                                                        @if(!empty($mission->date))
                                                                                            <td>{{ $mission->date }}</td>
                                                                                        @else
                                                                                            <td>NULL</td>
                                                                                        @endif
                                                                                        <td align="center">
                                                                                            <a
                                                                                                target="_blank"
                                                                                                href="{{ url( $mission->file ) }}"
                                                                                            >
                                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td align="center">
                                                                                            <a
                                                                                                target="_blank"
                                                                                                href="{{ url( $mission->file ) }}"
                                                                                            >
                                                                                                <i class="fa fa-download" aria-hidden="true"></i>
                                                                                            </a>
                                                                                        </td>
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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapse8"
                                                            aria-expanded="false"
                                                        > Newsletter</a>
                                                    </div>
                                                    <div
                                                        id="collapse8"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid #283d67; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="row">
                                                                    <div class="col-lg-12 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered">
                                                                                <thead
                                                                                    class="thead-light"
                                                                                    style="background: #d5eaca; color: #15640b"
                                                                                ></thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th scope="col">#</th>
                                                                                    <th scope="col">Title</th>
                                                                                    <th scope="col">Date</th>
                                                                                    <th scope="col">View</th>
                                                                                    <th scope="col">Downloads</th>
                                                                                </tr>
                                                                                @foreach($Newsletter_Published as $key=>$mission)
                                                                                    <tr>
                                                                                        <th>{{ $key+1}}</th>
                                                                                        <td>{{ $mission->title }}</td>
                                                                                        @if(!empty($mission->date))
                                                                                            <td>{{ $mission->date }}</td>
                                                                                        @else
                                                                                            <td>NULL</td>
                                                                                        @endif
                                                                                                                                                                                <td align="center">
                                                                                            <a
                                                                                                target="_blank"
                                                                                                href="{{ url( $mission->file ) }}"
                                                                                            >
                                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td align="center">
                                                                                            <a
                                                                                                target="_blank"
                                                                                                href="{{ url( $mission->file ) }}"
                                                                                            >
                                                                                                <i class="fa fa-download" aria-hidden="true"></i>
                                                                                            </a>
                                                                                        </td>
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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapse9"
                                                            aria-expanded="false"
                                                        >Magazine</a>
                                                    </div>
                                                    <div
                                                        id="collapse9"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid #283d67; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="row">
                                                                    <div class="col-lg-12 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered">
                                                                                <thead
                                                                                    class="thead-light"
                                                                                    style="background: #d5eaca; color: #15640b"
                                                                                ></thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th scope="col">#</th>
                                                                                    <th scope="col">Title</th>
                                                                                    <th scope="col">Date</th>
                                                                                    <th scope="col">View</th>
                                                                                    <th scope="col">Downloads</th>
                                                                                </tr>
                                                                                @foreach($Magazine_Published as $key=>$mission)
                                                                                    <tr>
                                                                                        <th>{{ $key+1}}</th>
                                                                                        <td>{{ $mission->title }}</td>
                                                                                        @if(!empty($mission->date))
                                                                                            <td>{{ $mission->date }}</td>
                                                                                        @else
                                                                                            <td>NULL</td>
                                                                                        @endif
                                                                                        <td align="center">
                                                                                            <a target="_blank" href="{{ url( $mission->file ) }}">
                                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                            </a>
                                                                                        </td>
                                                                                        <td align="center">
                                                                                            <a
                                                                                                target="_blank"
                                                                                                href="{{ url( $mission->file ) }}"
                                                                                            >
                                                                                                <i class="fa fa-download" aria-hidden="true"></i>
                                                                                            </a>
                                                                                        </td>
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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a
                                                            class="card-link collapsed"
                                                            data-toggle="collapse"
                                                            href="#collapse10"
                                                            aria-expanded="false"
                                                        >Notice Board</a>
                                                    </div>
                                                    <div
                                                        id="collapse10"
                                                        class="collapse"
                                                        data-parent="#accordion"

                                                    >
                                                        <div class="card-body" style="max-width: 100%;border: 1px solid #283d67; border-radius: 0px 0px 15px 15px;">
                                                            <div class="card">
                                                                <div class="row">
                                                                    <div class="col-lg-12 pr-50 md-pr-15" style="margin: 0 auto">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered">
                                                                                <thead
                                                                                    class="thead-light"
                                                                                    style="background: #d5eaca; color: #15640b"
                                                                                ></thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <th scope="col">#</th>
                                                                                    <th scope="col">Title</th>
                                                                                    <th scope="col">Date</th>
                                                                                    <th scope="col">view</th>
                                                                                    <th scope="col">Downloads</th>
                                                                                </tr>
                                                                                    @foreach($Notice_Board as $key=>$mission)
                                                                                        <tr>
                                                                                            <th>{{ $key+1}}</th>
                                                                                            <td>{{ $mission->title }}</td>
                                                                                            @if(!empty($mission->date))
                                                                                            <td>{{ $mission->date }}</td>
                                                                                            @else
                                                                                                <td>NULL</td>
                                                                                            @endif
                                                                                            <td align="center">
                                                                                                <a target="_blank" href="{{ url( $mission->file ) }}">
                                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                                </a>
                                                                                            </td>
                                                                                            <td align="center">
                                                                                                <a
                                                                                                    target="_blank"
                                                                                                    href="{{ url( $mission->file ) }}"
                                                                                                >
                                                                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                                                                </a>
                                                                                            </td>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section end -->

@endsection

