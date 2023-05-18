@extends('site.layout.app')

@section('title')
    Anasayfa
@endsection

@section('style')
    <style>
        .newsletter {
            background: #21aac4 !important;
            margin-top: 5rem;
        }
    </style>

@endsection

@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('{{ asset('site/images/bg_1.jpg') }}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern
                            Dentistry in a Calm and Relaxed Environment</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A small river
                            named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('{{ asset('site/images/bg_2.jpg') }}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern Achieve
                            Your Desired Perfect Smile</h1>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-3 color-1 p-4">
                    <h3 class="mb-4">Acil durumlar</h3>
                    <p>A small river named Duden flows by their place and supplies</p>
                    <span class="phone-number">+ (123) 456 7890</span>
                </div>
                <div class="col-md-3 color-2 p-4">
                    <h3 class="mb-4">Açılış Saatleri</h3>
                    <p class="openinghours d-flex">
                        <span>Pazartesi - Cuma</span>
                        <span>8:00 - 19:00</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span>Cumartesi</span>
                        <span>10:00 - 17:00</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span>Pazar</span>
                        <span>10:00 - 16:00</span>
                    </p>
                </div>
                <div class="col-md-6 color-3 p-4">
                    <h3 class="mb-2">Rendavu Oluştur</h3>
                    <form action="{{ route('appointment.store') }}" method="post" class="appointment-form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="service_id" id="treatment" class="form-control">
                                            <option tabindex="0">Tedaviler</option>
                                            @foreach($services as $service)
                                                <option value="{{ $service->id }}">
                                                    {{ $service->title   }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('service_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="doctor_id" id="doctor" class="form-control">
                                            <option value="">Doktorlar</option>

                                            @foreach($doctors as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>
                                @error('doctor_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-user"></span></div>
                                    <input type="text" class="form-control" name="fullname" id="appointment_name"
                                           placeholder="Adınız Soyadınız">

                                    @error('fullname')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-paper-plane"></span></div>
                                    <input type="email" class="form-control" name="email" id="appointment_email"
                                           placeholder="E-posta">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="ion-ios-calendar"></span></div>
                                    <input type="date" class="form-control" name="appointment_date"
                                           id="appointment_date" placeholder="Tarih">

                                    @error('appointment_date')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="time" class="form-control" name="appointment_time"
                                           id="appointment_time" placeholder="Saat">

                                    @error('appointment_time')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-phone2"></span></div>
                                    <input type="tel" name="phone" class="form-control" id="phone"
                                           placeholder="Telefon">

                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-outline-primary" type="submit">Randevu Oluştur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">Hizmetimiz Gülümsemenizi Sağlar</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-tooth-1"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Diş beyazlatma</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-dental-care"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Diş temizliği</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-tooth-with-braces"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Diş Implantı</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-anesthesia"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Kanal Tedavisi , Dolgu</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-wrap mt-5">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 img" style="background-image: url({{ asset('site/images/about-2.jpg') }});">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="about-wrap">
                        <div class="heading-section heading-section-white mb-5 ftco-animate">
                            <h2 class="mb-2">Kişisel bir dokunuşla diş bakımı</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <h3>İyi Deneyim Diş Hekimi</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <h3>Yüksek Teknoloji Tesisleri</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div class="text">
                                <h3>Konforlu Klinikler</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
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
                        is a paradisematic country, in which roasted parts of sentences</p>
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
            </div>
            <div class="row  mt-5 justify-conten-center">
                <div class="col-md-8 ftco-animate">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero accusantium sunt sit aliquam
                        ipsum molestias autem perferendis, incidunt cumque necessitatibus cum amet cupiditate, ut
                        accusamus. Animi, quo. Laboriosam, laborum.</p>
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

    <section class="ftco-section-parallax newsletter">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Bültenimize abone olun</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in</p>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="E-posta adresiniz">
                                        <input type="submit" value="Abone Ol" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">Testimony</h2>
                    <span class="subheading">Our Happy Customer Says</span>
                </div>
            </div>
            <div class="row justify-content-center ftco-animate">
                <div class="col-md-8">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5"
                                     style="background-image: url({{ asset('site/images/person_1.jpg') }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">Even the all-powerful Pointing has no control about the blind texts
                                        it is an almost unorthographic life One day however a small line of blind text
                                        by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5"
                                     style="background-image: url({{ asset('site/images/person_2.jpg') }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5"
                                     style="background-image: url({{ asset('site/images/person_3.jpg') }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5"
                                     style="background-image: url({{ asset('site/images/person_1.jpg') }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5"
                                     style="background-image: url({{ asset('site/images/person_1.jpg') }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">System Analytics</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                       style="background-image: url({{ asset('site/images/gallery-1.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                       style="background-image: url({{ asset('site/images/gallery-2.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                       style="background-image: url({{ asset('site/images/gallery-3.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="#" class="gallery img d-flex align-items-center"
                       style="background-image: url({{ asset('site/images/gallery-4.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">Son Yazılarımız</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="#" class="block-20"
                           style="background-image: url({{ asset('site/images/image_1.jpg') }});">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                                <div><a href="#">Sep. 20, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="100">
                        <a href="#" class="block-20"
                           style="background-image: url('{{ asset('site/images/image_2.jpg') }}');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                                <div><a href="#">Sep. 20, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="200">
                        <a href="#" class="block-20"
                           style="background-image: url('{{ asset('site/images/image_3.jpg') }}');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                                <div><a href="#">Sep. 20, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-quote">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
                    <div class="heading-section heading-section-white mb-5 ftco-animate">
                        <h2 class="mb-2">DentaCare Procedure &amp; High Quality Services</h2>
                    </div>
                    <div class="ftco-animate">
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar. Because there were thousands of bad Commas,
                            wild Question Marks and devious Semikoli</p>
                        <ul class="un-styled my-5">
                            <li><span class="icon-check"></span>Consectetur adipisicing elit</li>
                            <li><span class="icon-check"></span>Adipisci repellat accusamus</li>
                            <li><span class="icon-check"></span>Tempore reprehenderit vitae</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 py-5 pl-md-5">
                    <div class="heading-section mb-5 ftco-animate">
                        <h2 class="mb-2">Destek Talebi Oluştur</h2>
                    </div>
                    <form action="#" class="ftco-animate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control"
                                              placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Gönder</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div id="map"></div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#F96D00"/>
        </svg>
    </div>

    <!-- Modal -->
    {{--<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="modal-title" data-toggle="modal" data-target="#modalRequest">Rendavu Oluştur</a>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                            <input type="text" class="form-control" id="appointment_name"
                                   placeholder="Adınız Soyadınız">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="appointment_email" class="text-black">Email</label> -->
                                    <input type="text" class="form-control" id="appointment_email"
                                           placeholder="Eposta Adresiniz">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="appointment_email" class="text-black">Email</label> -->
                                    <select name="" id="" class="form-control">
                                        <option value="">Tedaviler</option>
                                        <option value="">Teeth Whitening</option>
                                        <option value="">Teeth CLeaning</option>
                                        <option value="">Quality Brackets</option>
                                        <option value="">Modern Anesthetic</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                --}}{{--<div class="form-group">
                                    <!-- <label for="appointment_date" class="text-black">Date</label> -->
                                    <input type="text" class="form-control appointment_date" placeholder="Tarih">
                                </div>--}}{{--

                                <div class="input-group date" id="id_0">
                                    <input type="text" value="" class="form-control" placeholder="MM/DD/YYYY hh:mm:ss" required/>
                                </div>
                            </div>
                           --}}{{-- <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="appointment_time" class="text-black">Time</label> -->
                                    <input type="text" class="form-control appointment_time" placeholder="Saat">
                                </div>
                            </div>--}}{{--
                        </div>

                        <div class="form-group">
                            <!-- <label for="appointment_message" class="text-black">Message</label> -->
                            <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"
                                      placeholder="Mesajınız"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Rendavu Oluştur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    --}}
    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRequestLabel">Randevu Oluştur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" class="appointment-form">
                        <div class="form-group">
                            <input type="text" class="form-control" id="appointment_name"
                                   placeholder="Adınız Soyadınız">
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="appointment_email"
                                           placeholder="E-posta">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="treatment" id="treatment" class="form-control">
                                            <option value="">Doktorlar</option>
                                            <option value="whitening">Teeth Whitening</option>
                                            <option value="cleaning">Teeth Cleaning</option>
                                            <option value="brackets">Quality Brackets</option>
                                            <option value="anesthetic">Modern Anesthetic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="treatment" id="treatment" class="form-control">
                                            <option value="">Tedaviler</option>
                                            <option value="whitening">Teeth Whitening</option>
                                            <option value="cleaning">Teeth Cleaning</option>
                                            <option value="brackets">Quality Brackets</option>
                                            <option value="anesthetic">Modern Anesthetic</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control appointment_date" placeholder="Tarih">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="time" class="form-control appointment_time" placeholder="Saat">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="appointment_message" class="form-control" cols="30" rows="10"
                                      placeholder="Mesajınız"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Randevu Oluştur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
