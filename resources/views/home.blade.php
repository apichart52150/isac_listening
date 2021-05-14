
@extends('layouts.main_layout')

@section('fillter')
    <!-- Filter -->
    <div class="row">
        <div class="col-12">
            <div class="text-center filter-menu">
                <a href="javascript: void(0);" class="filter-menu-item active" data-rel="all">All</a>
                <a href="javascript: void(0);" class="filter-menu-item" data-rel="web">Web Design</a>
                <a href="javascript: void(0);" class="filter-menu-item" data-rel="graphic">Graphic Design</a>
                <a href="javascript: void(0);" class="filter-menu-item" data-rel="illustrator">Illustrator</a>
                <a href="javascript: void(0);" class="filter-menu-item" data-rel="photography">Photography</a>
            </div>
        </div>
    </div>
    <!-- end row-->
@endsection


@section('content')

<style>
    .hover-scale i.fas {
        transform: scale(1);
        transition: transform .15s ease;
    }

    .hover-scale:hover i.fas {
        transform: scale(1.1);
    }

    .border-2 {
        border-width: 2px;
    }

</style>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active"> Listening </li>
                </ol>
            </div>
            <h4 class="page-title">iSAC Listening</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 


<div class="row filterable-content">

    <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
        <div class="gal-box">
            <a href="javascript: void(0);" class="hover-scale" id="general-english">
                <div class="widget-simple text-center w-100 p-3 bg-info">
                    <i class="fas fa-headphones text-light fa-8x mb-2"></i>
                </div>
            </a>
            <div class="gall-info"  id="headingOne">
                <h4 class="font-16 mt-0 text-info">Challenge Practice</h4>
                <div class="accordion" id="accordionExample1">
                    <a class="collapsed gal-like-btn" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="hover-scale">
                            <div class="widget-simple">
                                <i class="fas fa-angle-down text-info fa-2x"></i>
                            </div>
                        </div>
                    </a>
                    <img src="{{ asset('public/assets/images/file-icons/pdf.svg') }}" alt="user-img" class="rounded-circle" height="24" />
                    <span class="text-muted ml-1">Download PDF.file</span>
                    <div id="collapseOne" class="collapse mt-2" aria-labelledby="headingOne" data-parent="#accordionExample1">
                        <div class="row icons-list-demo">
                            <div class="col-lg-12" >
                                <a href="#"  class="text-info">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Challenges-Practice-Advanced
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#"  class="text-info">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Challenges-Practice-Business
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#"  class="text-info">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Challenges-Practice-Intermediate
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> <!-- gallery info -->
        </div> <!-- end gal-box -->
    </div> <!-- end col -->

    <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
        <div class="gal-box">
            <a href="javascript: void(0);" class="hover-scale" id="general-english">
                <div class="widget-simple text-center w-100 p-3 bg-warning">
                    <i class="fas fa-headphones text-light fa-8x mb-2"></i>
                </div>
            </a>
            <div class="gall-info">
                <h4 class="font-16 mt-0 text-warning">NC Listening Test</h4>
                <div class="accordion" id="accordionExample2">
                    <a class="collapsed gal-like-btn" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="hover-scale">
                            <div class="widget-simple">
                                <i class="fas fa-angle-down text-warning fa-2x"></i>
                            </div>
                        </div>
                    </a>
                    <img src="{{ asset('public/assets/images/file-icons/pdf.svg') }}" alt="user-img" class="rounded-circle" height="24" />
                    <span class="text-muted ml-1">Download PDF.file</span>
                    <div id="collapseTwo" class="collapse mt-2" aria-labelledby="headingTwo" data-parent="#accordionExample2">
                        <div class="row icons-list-demo">
                            <div class="col-lg-12">
                                <a href="#" class="text-warning">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    NC-Listening-Test-I
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-warning">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    NC-Listening-Test-II
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-warning">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    NC-Listening-Test-III
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-warning">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    NC-Listening-Test-IV
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> <!-- gallery info -->
        </div> <!-- end gal-box -->
    </div> <!-- end col -->

    <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
        <div class="gal-box">
            <a href="javascript: void(0);" class="hover-scale" id="general-english">
                <div class="widget-simple text-center w-100 p-3 bg-danger">
                    <i class="fas fa-headphones text-light fa-8x mb-2"></i>
                </div>
            </a>
            <div class="gall-info">
                <h4 class="font-16 mt-0 text-danger">Active Listening</h4>
                <div class="accordion" id="accordionExample3">
                    <a class="collapsed gal-like-btn" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="hover-scale">
                            <div class="widget-simple">
                                <i class="fas fa-angle-down text-danger fa-2x"></i>
                            </div>
                        </div>
                    </a>
                    <img src="{{ asset('public/assets/images/file-icons/pdf.svg') }}" alt="user-img" class="rounded-circle" height="24" />
                    <span class="text-muted ml-1">Download PDF.file</span>
                    <div id="collapseThree" class="collapse mt-2" aria-labelledby="headingThree" data-parent="#accordionExample3">
                        <div class="row icons-list-demo">
                            <div class="col-lg-12">
                                <a href="#" class="text-danger">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Crime and punishent
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-danger">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Education
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-danger">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Enviroment
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-danger">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    FestivalsAndTraditions
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-danger">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    FloraAndFauna
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-danger">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Food
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-danger">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Health Care
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-danger">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Homes
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-danger">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Sports and Pastimes
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-danger">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    StrangePhenomena
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> <!-- gallery info -->
        </div> <!-- end gal-box -->
    </div> <!-- end col -->

    <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
        <div class="gal-box">
            <a href="javascript: void(0);" class="hover-scale" id="general-english">
                <div class="widget-simple text-center w-100 p-3 bg-pink">
                    <i class="fas fa-headphones text-light fa-8x mb-2"></i>
                </div>
            </a>
            <div class="gall-info">
                <h4 class="font-16 mt-0 text-pink">Language Drills Practice</h4>
                <div class="accordion" id="accordionExample4">
                    <a class="collapsed gal-like-btn" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <div class="hover-scale">
                            <div class="widget-simple">
                                <i class="fas fa-angle-down text-pink fa-2x"></i>
                            </div>
                        </div>
                    </a>
                    <img src="{{ asset('public/assets/images/file-icons/pdf.svg') }}" alt="user-img" class="rounded-circle" height="24" />
                    <span class="text-muted ml-1">Download PDF.file</span>
                    <div id="collapseFour" class="collapse mt-2" aria-labelledby="headingFour" data-parent="#accordionExample4">
                        <div class="row icons-list-demo">
                            <div class="col-lg-12">
                                <a href="#" class="text-pink">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Language-Drills-Elementary
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-pink">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Language-Drills-Intermediate
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="text-pink">
                                    <i class="fas fa-download fa-2x" style="font-size: 18px"></i>
                                    Language-Drills-Advanced
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> <!-- gallery info -->
        </div> <!-- end gal-box -->
    </div> <!-- end col -->

</div>
<!-- end row -->

@endsection

