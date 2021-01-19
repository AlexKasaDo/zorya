
<!-- Booking Section Start -->
<section id="section-booking" class="section booking">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="voffset-90"></div>
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12" data-aos-id="booking-section">
                        <!--<h4 class="small medium white">Let’s</h4>-->
                        <h4 class="white title">Зворотній зв'язок</h4>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <form action="{{route('contactForm')}}" method="post" id="bookingform" class="booking-form row">
                            @csrf
                            <div class="voffset-20"></div>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group col-lg-12">
                                <input name="name" type="text" value="{{ old('name') }}"  class="form-control" id="input-email" placeholder="{{__('form.name')}}">
                            </div>
                            <div class="voffset-20"></div>
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group col-lg-12">
                                <input name="phone" type="text" value="{{ old('phone') }}" class="form-control" id="input-email" placeholder="{{__('form.phone')}}">
                            </div>

                            <div class="voffset-20"></div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group col-lg-12">
                                <input name="email" type="text" value="{{ old('email') }}"  class="form-control" id="input-email" placeholder="{{__('form.email')}}">
                            </div>
                            <div class="voffset-40"></div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="" class="bt-orange left">{{__('form.button')}}<span><img alt=">" src="img/demo/particles/arrow.svg"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="voffset-100"></div>
            </div>
        </div>
    </div>
</section>
