@extends('frontend.layouts.app')


@section('content')

    <div class="breatcome-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome-content text-center">
                        <div class="breatcome-content-title">
                            <h1>{{ $sCountry->name }}</h1>
                        </div>
                        <div class="breatcome-content-text">
                            <ul>
                                <li><a href="{{ route('home') }}">{{trans('country.home')}} </a> <i class="fas fa-chevron-right"></i>
                                    <span>{{ $sCountry->name }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->

    <div class="blog-area style-two style-three pt-20 pb-60">
        <div class="container">
            <div class="row pt-40">
                <div class="col-lg-4">
                    <h2>{{trans('country.other country')}}</h2>
                    <div class="sidebar-box ml-0 pl-0">
                        <div class="sidebar-single-category">
                            <ul>
                                @foreach ($countries as $country)
                                    <li><a href="{{ route('showCountry', $country->name) }}">{{ $country->name }} <i
                                                class="fas fa-angle-right"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sideber-thumb">
                        <img src="assets/images/sideber.jpg" alt="">
                    </div>
                    <div class="sideber-visa-content country-slider">
                        <div class="thumb-title">
                            <h2>{{trans('country.call request')}}</h2>
                        </div>
                        <div class="sideber-visa-icon">
                            <i class="flaticon-process"><span> +88 019 44 55 55 00</span></i>
                        </div>
                    </div>
                    <div class="assesstment-form-box p-0 mt-4 ">
                        <div class="assesstment-form-title text-left">
                            <h2>{{trans('country.assessment')}}</h2>
                        </div>
                        <form action="{{ route('postQuery')}}" method="POST" enctype="multipart/form-data" class="text-left">
                            @csrf
                            <div class="row mt-20">
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="Your name (required)" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <input type="text" name="email" placeholder="Email (required)" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <input type="text" name="phone" placeholder="Phone number (required)" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <textarea name="message" id="" cols="30" rows="5" name="message"
                                            placeholder="Your message"></textarea>
                                    </div>
                                    <p class="text-success">{{session('message')}}</p>
                                </div>
                                <div class="col-lg-12">
                                        <input class="btn btn-primary w-100 country-slider py-2 mt-1" type="submit" value="Send Request">
                                  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <h2>
                        @if ( Cookie::get('lang') == 'bn')
                            {{ $sCountry->nameBangla }}
                        @else
                            {{ $sCountry->name }}
                        @endif
                    </h2>
                    <br/>
                    <div class="tofel-content">
                        <div class="tofel-content-inner">
                            @if ( Cookie::get('lang') == 'bn')
                                {!! $sCountry->contentBangla !!}
                            @else
                                {!! $sCountry->content !!}
                            @endif
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


@push('style')
    <style>
        .breatcome-area {
            background: linear-gradient(rgb(94 109 162 / 75%), rgba(17, 26, 58, -0.25)), transparent url({!! Storage::url($sCountry->banner) !!} );
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .h3, .h2, .h1{
            color: maroon !important;
        }
        
        .country-slider {
            background: #1c4877 !important;
        }
 
 
    </style>
@endpush
