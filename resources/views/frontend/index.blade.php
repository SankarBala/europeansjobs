@extends('frontend.layouts.app')


@section('content')

    <div class="slider_list owl-carousel">
        <div class="slider-area d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="dreamit-slider-content text-dark">
                            <h4 class="text-info"> {{ __('home.welcome') }} </h4>
                            <h1 class="text-info">{{ __('home.visaexpert') }}</h1>
                            <h3 class="text-info">{{ trans('home.agent') }}</h3>

                            <div class="slider-button">
                                <a class="bg-info text-light"
                                    href="{{ route('contactUs') }}">{{ trans('home.getAppointment') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="" width="90%">
                        <p>{{ trans('home.anInstitution') }}</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->

    <div class="feature-area">
        <div class="container">
            <div class="row margin-top">
                <div class="col-lg-3 col-md-6">
                    <div class="dreamit-feature-box">
                        <div class="dreamit-feature-icon">
                            <i class="flaticon-content"></i>
                        </div>
                        <div class="feature-number">
                            <h4>01</h4>
                        </div>
                        <div class="feature-title">
                            <h2>{{ trans('home.onlineAppointment') }}</h2>
                        </div>
                        <div class="dreamit-feature-content">
                            {{-- Cupidatat non proident sunt culpa qui officia deserunt mollit anim. --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="dreamit-feature-box">
                        <div class="dreamit-feature-icon">
                            <i class="flaticon-lifebuoy"></i>
                        </div>
                        <div class="feature-number">
                            <h4>02</h4>
                        </div>
                        <div class="feature-title">
                            <h2>{{ trans('home.vexpert') }}</h2>
                        </div>
                        <div class="dreamit-feature-content">
                            {{-- Cupidatat non proident sunt culpa qui officia deserunt mollit anim. --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="dreamit-feature-box">
                        <div class="dreamit-feature-icon">
                            <i class="flaticon-content-writing"></i>
                        </div>
                        <div class="feature-number">
                            <h4>03</h4>
                        </div>
                        <div class="feature-title">
                            <h2>{{ trans('home.applyOnline') }}</h2>
                        </div>
                        <div class="dreamit-feature-content">
                            {{-- Cupidatat non proident sunt culpa qui officia deserunt mollit anim. --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="dreamit-feature-box">
                        <div class="dreamit-feature-icon">
                            <i class="flaticon-content-writing"></i>
                        </div>
                        <div class="feature-number">
                            <h4>03</h4>
                        </div>
                        <div class="feature-title">
                            <h2>{{ trans('home.foreignOffice') }}</h2>
                        </div>
                        <div class="dreamit-feature-content">
                            {{-- Cupidatat non proident sunt culpa qui officia deserunt mollit anim. --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->

    <div class="about-area pt-70 pb-130">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="dreamit-thumb">
                        <img src="{{ asset('frontend/assets/images/about-pic.png') }}" alt="">
                    </div>
                    <div class="dreamit-single-counter">
                        <div class="counter-text">
                            <h1 class="counter">450</h1>
                            <h3>+</h3>
                        </div>
                        <div class="counter-title">
                            <h4>{{ trans('home.completedVisa') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-5 pt-50">
                    <div class="dreamit-section-title pb-30">

                        <div class="dreamit-section-main-title">
                            <h2>{{ trans('home.yourTrastedCenter') }} </h2>
                            {{-- <h2>Experienced Lawyers</h2> --}}
                        </div>
                        {{-- <div class="dreamit-section-bar"></div> --}}
                        <div class="dreamit-section-bold-text pt-30">
                            <p>
                                {{ trans('home.ourPromicess') }}
                            </p>
                        </div>
                        <div class="dreamit-section-text">
                            <p>
                                {{ trans('home.ourWorkers') }}
                            </p>
                        </div>
                    </div>
                    <div class="dreamit-about-content">
                        <div class="dreamit-about-content-inner pb-2 d-flex">
                            <div class="dreamit-about-icon pr-4">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="about-content-text">
                                <p>{{ trans('home.ourCommitment') }}</p>
                            </div>
                        </div>
                        <div class="dreamit-about-content-inner pb-2 d-flex">
                            <div class="dreamit-about-icon pr-4">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="about-content-text">
                                <p>{{ trans('home.ourSupport') }}</p>
                            </div>
                        </div>
                        <div class="dreamit-about-content-inner d-flex">
                            <div class="dreamit-about-icon pr-4">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="about-content-text">
                                <p>{{ trans('home.ourAdvice') }}</p>
                            </div>
                        </div>

                    </div>
                    <div class="about-button pt-4">
                        <a class="bg-primary" href="{{ route('aboutUs') }}">{{ trans('home.moreAboutMe') }} <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->

    <div class="service-area pt-100 pb-75">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 ptl-rsp">
                    <div class="dreamit-section-title pb-30">
                        <div class="dreamit-section-sub-title">
                            <h5>
                                {{ trans('home.ourSuggession') }}
                            </h5>
                        </div>
                        <div class="dreamit-section-main-title">
                            <h1 class="text-white my-4">{{ trans('home.secure100') }}</h1>
                        </div>
                        {{-- <div class="dreamit-section-bar"></div> --}}
                        <div class="dreamit-section-bold-text pt-30">
                            {{-- <p class="text-white"></p> --}}
                        </div>
                        <div class="section-button pt-35">
                            {{-- <a href="#">all service <i class="fas fa-chevron-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="service_list owl-carousel">
                        <div class="col-lg-12">
                            <div class="dreamit-service-box">
                                <div class="dreamit-service-icon">
                                    <i class="fas fa-passport"></i>
                                </div>
                                <div class="service-title pt-3">
                                    <h3>{{ trans('home.tourist') }}</h3>
                                    <!--<h5 class="text-info">প্রয়োজনীয়তা সমূহ</h5><br />-->

                                </div>
                                <div class="service-content text-left text-dark">
                                    <!--<ol>-->
                                    <!--    <li> Valid Passport At least have six months validity</li>-->
                                    <!--    <li> One recent Colour photograph (2x2 Inches) (350x350 pixels) (not less than 3-->
                                    <!--        months old) white background. Bank Certificate</li>-->
                                    <!--    <li> A copy of National ID Card</li>-->
                                    <!--    <li> Utility Bill such as electricity, telephone, gas or water bill (not more than 6-->
                                    <!--        month old)</li>-->
                                    <!--    <li> Certificate from the employer</li>-->
                                    <!--    <li> Visiting card</li>-->
                                    <!--    <li> 3 months Bank transaction report</li>-->
                                    <!--    <li> Endorsement* of foreign currency equivalent to US$150/- per applicant (-->
                                    <!--        Endorsement* should not be older than 1 (one) month </li>-->
                                    <!--    <li> All old passport must be submitted on the date of submission</li>-->
                                    <!--    <li> The application form should be submitted at the IVAC center within 8 days of-->
                                    <!--        filling up the form. </li>-->

                                    <!--</ol>-->
                                </div>
                                {{-- <div class="service-button">
                                <a href="#">read more <i class="fas fa-chevron-right"></i></a>
                            </div> --}}
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div class="dreamit-service-box">
                                <div class="dreamit-service-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="service-title pt-3">
                                    <h3>{{ trans('home.business') }}</h3>
                                    <!--<h5 class="text-info">প্রয়োজনীয়তা সমূহ</h5><br />-->

                                </div>
                                <div class="service-content text-left text-dark">
                                    <!--<ol>-->
                                    <!--    <li> A copy of National ID Card</li>-->
                                    <!--    <li> Utility Bill such as electricity, telephone, gas or water bill (not more than 6-->
                                    <!--        month old)</li>-->
                                    <!--    <li> Endorsement* of foreign currency equivalent to US$150/- per applicant (-->
                                    <!--        Endorsement* should not be older than 1 (one) month</li>-->
                                    <!--    <li> Copy of Trade license </li>-->
                                    <!--    <li> Tin, Tax certificate</li>-->
                                    <!--    <li> Invitation letter</li>-->
                                    <!--    <li> IRC/ERC Import Registration Certificate (IRC) & Export Registration Certificate-->
                                    <!--        (ERC)</li>-->
                                    <!--    <li> LC / Dual party Agreemen</li>-->
                                    <!--    <li> Association certificate</li>-->
                                    <!--    <li> All old passport must be submitted on the date of submission</li>-->
                                    <!--    <li> The application form should be submitted at the IVAC center within 8 days of-->
                                    <!--        filling up the form.</li>-->

                                    <!--</ol>-->
                                </div>
                                {{-- <div class="service-button">
                                <a href="#">read more <i class="fas fa-chevron-right"></i></a>
                            </div> --}}
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="dreamit-service-box">
                                <div class="dreamit-service-icon">
                                    <i class="fas fa-first-aid"></i>
                                </div>
                                <div class="service-title pt-3">
                                    <h3>{{ trans('home.medical') }}</h3>
                                    <!--<h5 class="text-info">প্রয়োজনীয়তা সমূহ</h5><br />-->

                                </div>
                                <div class="service-content text-left text-dark">
                                    <!--<ol>-->
                                    <!--    <li> Medical certificate, in detail the medical condition of the patient. </li>-->
                                    <!--    <li> Recommendation from the attending doctor for availing treatment abroad in case-->
                                    <!--        of first visit. </li>-->
                                    <!--    <li> Recommendation from the attending doctor in India in case of continued-->
                                    <!--        treatment in India. </li>-->
                                    <!--    <li> NID/Birth certificate. </li>-->
                                    <!--    <li> Utility Bill such as electricity, telephone, gas or water bill (not more than 6-->
                                    <!--        month old). </li>-->
                                    <!--    <li> Endorsement* of foreign currency equivalent to US$150/- per applicant (-->
                                    <!--        Endorsement* should not be older than 1 (one) month. </li>-->
                                    <!--    <li> Medical Invitation letter from India with specific date. </li>-->
                                    <!--    <li> All Medical original documents. </li>-->
                                    <!--    <li> Profession proof. </li>-->
                                    <!--    <li> Last passport copy and all old passports. </li>-->

                                    <!--</ol>-->
                                </div>
                                {{-- <div class="service-button">
                                <a href="#">read more <i class="fas fa-chevron-right"></i></a>
                            </div> --}}
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="dreamit-service-box">
                                <div class="dreamit-service-icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <div class="service-title pt-3">
                                    <h3>{{ trans('home.study') }}</h3>
                                    <!--<h5 class="text-info">প্রয়োজনীয়তা সমূহ</h5><br />-->

                                </div>
                                <div class="service-content text-left text-dark">
                                    <!--<ol>-->
                                    <!--    <li> Evidence of admission to the Institute/Course in a recognized University /-->
                                    <!--        Board in India. </li>-->
                                    <!--    <li> Guarantee from parents/guardian, through the authorized Bank to the effect that-->
                                    <!--        the applicant has enough financial resources to support studies in India. </li>-->
                                    <!--    <li> Photocopies of relevant academic certificates on the basis of which admission-->
                                    <!--        is sought or has been obtained. </li>-->
                                    <!--    <li> Utility Bill such as electricity, telephone, gas or water bill (not more than 6-->
                                    <!--        month old). </li>-->
                                    <!--    <li> Last passport copy and all old passports. </li>-->


                                    <!--</ol>-->
                                </div>
                                {{-- <div class="service-button">
                                <a href="#">read more <i class="fas fa-chevron-right"></i></a>
                            </div> --}}
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div class="dreamit-service-box">
                                <div class="dreamit-service-icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div class="service-title pt-3">
                                    <h3>{{ trans('home.transit') }}</h3>
                                    <!--<h5 class="text-info">প্রয়োজনীয়তা সমূহ</h5><br />-->

                                </div>
                                <div class="service-content text-left text-dark">
                                    <!--<ol>-->
                                    <!--    <li> Valid visa for the third country. </li>-->
                                    <!--    <li> Copy of a confirmed ticket.</li>-->
                                    <!--    <li> Copy of Hotel booking.</li>-->
                                    <!--    <li> Utility Bill such as electricity, telephone, gas or water bill (not more than 6-->
                                    <!--        month old).</li>-->
                                    <!--    <li> Last passport copy and all old passports.</li>-->
                                    <!--    <li> A copy of National ID Card.</li>-->
                                    <!--    <li> 3 months Bank transaction report.</li>-->


                                    <!--</ol>-->
                                </div>
                                {{-- <div class="service-button">
                                <a href="#">read more <i class="fas fa-chevron-right"></i></a>
                            </div> --}}
                            </div>

                        </div>




                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <div class="country-area pt-70 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dreamit-section-title pb-20 text-center">
                        <div class="dreamit-section-sub-title">
                            {{-- <h5>CHOOSE COUNTRY</h5> --}}
                        </div>
                        <div class="dreamit-section-main-title">
                            {{-- <h1 class="text-black">Immigration - Choose</h1> --}}
                            <h2 class="text-black">{{ trans('home.yourFavCountry') }}</h2>
                        </div>
                        {{-- <div class="dreamit-section-bar center mt-3"></div> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="country_list owl-carousel ">

                    @foreach ($countries as $country)
                        <div class="dreamit-single-box">
                            <div class="dreamit-country-box">
                                <div class="dreamit-country-thumb">
                                    <img src="{{ Storage::url($country->national_flag) }}" alt="">
                                </div>
                                <div class="country-flag-img">
                                    <img src="{{ Storage::url($country->banner) }}" alt="">
                                </div>
                                <div class="country-content">
                                    <div class="country-title pt-3">
                                        <h2>{{ $country->name }}</h2>
                                    </div>
                                    <div class="country-content-text">
                                    </div>
                                    <div class="country-button">
                                        <a class="text-danger" href="{{ route('showCountry', $country->name) }}">{{ trans('home.seeDetails') }}<i
                                                class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->

    <div class="counter-area pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dreamit-section-title pb-30 text-center">
                        <div class="dreamit-section-sub-title">
                            {{-- <h5>WHY CHOOSE US</h5> --}}
                        </div>
                        <div class="dreamit-section-main-title">
                            <h2 class="black">{{ trans('home.whyLikeUS') }}</h2>
                        </div>
                        {{-- <div class="dreamit-section-bar center mt-3"></div> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-counter-text">
                        <div class="counter-icon">
                            <i class="flaticon-compass"></i>
                        </div>
                        <div class="counter-content">
                            <h1 class="counter">100</h1>
                            <h3>+</h3>
                        </div>
                        <div class="counter-title-style-2">
                            <h4>{{ trans('home.client') }}</h4>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6">
                    <div class="single-counter-text">
                        <div class="counter-icon">
                            <i class="flaticon-global"></i>
                        </div>
                        <div class="counter-content">
                            <h1 class="counter">80</h1>
                            <h3>+</h3>
                        </div>
                        <div class="counter-title-style-2">
                            <h4>ভিসা কনফার্ম</h4>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-6">
                    <div class="single-counter-text">
                        <div class="counter-icon">
                            <i class="flaticon-time"></i>
                        </div>
                        <div class="counter-content">
                            <h1 class="counter">40</h1>
                            <h3>+</h3>
                        </div>
                        <div class="counter-title-style-2">
                            <h4>{{ trans('home.ambassy') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-counter-text">
                        <div class="counter-icon">
                            <i class="flaticon-ui"></i>
                        </div>
                        <div class="counter-content">
                            <h1 class="counter">10</h1>
                            <h3>+</h3>
                        </div>
                        <div class="counter-title-style-2">
                            <h4>{{ trans('home.country') }}</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


@push('style')
    <style>
        /*    .dreamit-service-box {*/
        /*        height: 700px;*/
        /*        font-size: 15px;*/
        /*    }*/
        
        .dreamit-feature-box {
            height: 300px;
        }

    </style>
@endpush
