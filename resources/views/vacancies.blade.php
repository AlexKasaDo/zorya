@extends('layout')
@section('title','Зоря Дніпра')
@section('menu.vacancies','active')
@section('content')

<div class="voffset-200"></div>

<section id="section-booking" class="section booking">
    <div class="row justify-content-md-center">
        <div class="col-12 vacancies">
            <div class="voffset-90"></div>
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12" data-aos-id="booking-section">
                        <h4 class="white title">{{__('main.vacancies')}}</h4>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            {{__('main.vacancies_p1')}}
                            <br>
                        </p>
                        <p>
                            {{__('main.vacancies_p2')}}
                        </p>
                        <p> {{__('main.phone')}} <a href="tel:+380675611688">+38(067)-561-16-88</a></strong></p>

                    </div>
                </div>
                <div class="voffset-80"></div>
            </div>
        </div>
    </div>
</section>

@include('form')

<section id="section-booking" class="section booking voffset-200 bg">

</section>

<!-- Booking Section End -->
@endsection

