@extends('site.layout.app')

@section('title')
    Doktorlar
@endsection

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('{{ asset('site/images/bg_1.jpg') }}');"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                                class="mr-2"><a href="#">Home</a></span> <span>Services</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Bizimle Daha İyi
                            Gülümse</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Deneyimli Diş Hekimimizle Tanışın</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a
                        paradisematic country, in which roasted parts of sentences</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4"
                             style="background-image: url({{ asset('site/images/person_5.jpg') }});"></div>
                        <div class="info text-center">
                            <h3><a href="#">Tom Smith</a></h3>
                            <span class="position">Dentist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4"
                             style="background-image: url({{ asset('site/images/person_6.jpg') }});"></div>
                        <div class="info text-center">
                            <h3><a href="#">Mark Wilson</a></h3>
                            <span class="position">Dentist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4"
                             style="background-image: url({{ asset('site/images/person_7.jpg') }});"></div>
                        <div class="info text-center">
                            <h3><a href="#">Patrick Jacobson</a></h3>
                            <span class="position">Dentist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4"
                             style="background-image: url({{ asset('site/images/person_8.jpg') }});"></div>
                        <div class="info text-center">
                            <h3><a href="#">Ivan Dorchsner</a></h3>
                            <span class="position">System Analyst</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4"
                             style="background-image: url({{ asset('site/images/person_1.jpg') }});"></div>
                        <div class="info text-center">
                            <h3><a href="#">Tom Smith</a></h3>
                            <span class="position">Dentist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4"
                             style="background-image: url({{ asset('site/images/person_2.jpg') }});"></div>
                        <div class="info text-center">
                            <h3><a href="#">Mark Wilson</a></h3>
                            <span class="position">Dentist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4"
                             style="background-image: url({{ asset('site/images/person_3.jpg') }});"></div>
                        <div class="info text-center">
                            <h3><a href="#">Patrick Jacobson</a></h3>
                            <span class="position">Dentist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4"
                             style="background-image: url({{ asset('site/images/person_4.jpg') }});"></div>
                        <div class="info text-center">
                            <h3><a href="#">Ivan Dorchsner</a></h3>
                            <span class="position">System Analyst</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
             style="background-image: url({{ asset('site/images/bg_1.jpg') }});"
             data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-3 aside-stretch py-5">
                    <div class=" heading-section heading-section-white ftco-animate pr-md-4">
                        <h2 class="mb-3">Başarılar</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
                <div class="col-md-9 py-5 pl-md-5">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="14">0</strong>
                                    <span>Yılların Deneyimi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="4500">0</strong>
                                    <span>Nitelikli Diş Hekimi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="4200">0</strong>
                                    <span>Mutlu Gülümseyen Müşteri</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="320">0</strong>
                                    <span>Yıllık Hasta Sayısı</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
