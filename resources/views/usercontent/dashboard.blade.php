@extends('layout/userLayout')

@section('content')
       <!-- Hero Start -->
       <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Book Now</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Contact</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="col-lg-12">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                    <h1 class="text-white mb-4">Start Parking</h1>
                    <form action="{{route('store.parkings')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <h4 class="text-white">Entry Date and Time</h4>
                            <div class="col-12 col-sm-6">
                               
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control bg-light border-0 datetimepicker-input" 
                                    placeholder="Entry Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;" name="entryDate">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time1" data-target-input="nearest">
                                    <input type="text" class="form-control bg-light border-0 datetimepicker-input" 
                                    placeholder="Entry Time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;" name="entryTime">
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-6" >
                                <select class="form-select bg-light border-0 w-100" style="height: 55px; " name="name" >
                                    <option selected="" >Select Car Park</option>
                                    @foreach ($data as $item)
                                    <option value={{$item->name}}>{{$item->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected="">Select </option>
                                    <option value="1">Doctor 1</option>
                                    <option value="2">Doctor 2</option>
                                    <option value="3">Doctor 3</option>
                                </select>
                            </div> --}}
                            {{-- <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                            </div> --}}
                            <div class="col-12">
                                {{-- <button class="btn btn-dark w-100 py-3" type="submit">Next</button> --}}
                                <a href="{{route('available.parkings')}}" class="btn btn-dark w-100 py-3">next</a>
                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    
            {{-- <div class="row g-5">
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                            <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Our Office</h5>
                                <span>123 Street, New York, USA</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Email Us</h5>
                                <span>info@example.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Call Us</h5>
                                <span>+012 345 6789</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div> --}}
                {{-- <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe
  width="600"
  height="450"
  style="border:0"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBfdEiWyQJHpG93d_UOobgalVyFMnMSrMM
    &q=Space+Needle,Seattle+WA">
</iframe>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection