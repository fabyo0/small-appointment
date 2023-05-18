@extends('site.layout.app')

@section('title')
    İletişim
@endsection

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url({{ asset('site/images/bg_1.jpg') }});"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                                class="mr-2"><a href="#">Home</a></span> <span>Blog</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">İletişim</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">İletişim Bilgilerimiz</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Adresimiz:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
                <div class="col-md-3">
                    <p><span>Telefon:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>E-posta:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>

            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Adınız" name="fullname">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Eposta Adresiniz" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Konu" name="subject"  required>
                        </div>
                        <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control"
                                  placeholder="Mesajınız" ></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Gönder" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6" id="map"></div>
            </div>
        </div>
    </section>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#F96D00"/>
        </svg>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                            <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <!-- <label for="appointment_email" class="text-black">Email</label> -->
                            <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="appointment_date" class="text-black">Date</label> -->
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="appointment_time" class="text-black">Time</label> -->
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <!-- <label for="appointment_message" class="text-black">Message</label> -->
                            <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"
                                      placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Make an Appointment" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
