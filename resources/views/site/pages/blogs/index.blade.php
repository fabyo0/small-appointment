@extends('site.layout.app')

@section('title')
    Bloglarımız
@endsection

@section('content')
    <!--================Blog Area =================-->

    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url({{ asset('site/images/bg_1.jpg') }});"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span
                                class="mr-2"><a href="#">Home</a></span> <span>Blog</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">
                            Paylaşmak Güzeldir  </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="blog-entry">
                                <a href="#" class="block-20"
                                   style="background-image: url('{{ asset('site/images/image_1.jpg') }}');">
                                </a>
                                <div class="text d-flex py-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">Sep. 20, 2018</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <div class="desc pl-sm-3 pl-md-5">
                                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                                about the blind texts</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.</p>
                                        <p><a href="#" class="btn btn-primary btn-outline-primary">Read
                                                more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
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
                                    <div class="desc pl-sm-3 pl-md-5">
                                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                                about the blind texts</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.</p>
                                        <p><a href="#" class="btn btn-primary btn-outline-primary">Read
                                                more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="blog-entry" data-aos-delay="200">
                                <a href="#" class="block-20"
                                   style="background-image: url({{ asset('site/images/image_3.jpg') }});">
                                </a>
                                <div class="text d-flex py-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">Sep. 20, 2018</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <div class="desc pl-sm-3 pl-md-5">
                                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                                about the blind texts</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.</p>
                                        <p><a href="#" class="btn btn-primary btn-outline-primary">Read
                                                more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="blog-entry">
                                <a href="#" class="block-20"
                                   style="background-image: url({{ asset('site/images/image_4.jpg') }});">
                                </a>
                                <div class="text d-flex py-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">Sep. 20, 2018</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <div class="desc pl-sm-3 pl-md-5">
                                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                                about the blind texts</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.</p>
                                        <p><a href="#" class="btn btn-primary btn-outline-primary">Read
                                                more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="blog-entry" data-aos-delay="100">
                                <a href="#" class="block-20"
                                   style="background-image: url({{ asset('site/images/image_5.jpg') }});">
                                </a>
                                <div class="text d-flex py-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">Sep. 20, 2018</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <div class="desc pl-sm-3 pl-md-5">
                                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                                about the blind texts</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.</p>
                                        <p><a href="#" class="btn btn-primary btn-outline-primary">Read
                                                more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="blog-entry" data-aos-delay="200">
                                <a href="#" class="block-20"
                                   style="background-image: url({{ asset('site/images/image_6.jpg') }});">
                                </a>
                                <div class="text d-flex py-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">Sep. 20, 2018</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <div class="desc pl-sm-3 pl-md-5">
                                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                                about the blind texts</a></h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.</p>
                                        <p><a href="#" class="btn btn-primary btn-outline-primary">Read
                                                more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- END: col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Ara">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Kategoriler</h3>
                            <li><a href="#">Food <span>(12)</span></a></li>
                            <li><a href="#">Dish <span>(22)</span></a></li>
                            <li><a href="#">Desserts <span>(37)</span></a></li>
                            <li><a href="#">Drinks <span>(42)</span></a></li>
                            <li><a href="#">Ocassion <span>(14)</span></a></li>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Son Bloglarımız</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                               style="background-image: url({{ asset('site/images/image_1.jpg') }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                               style="background-image: url({{ asset('site/images/image_2.jpg') }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                               style="background-image: url({{ asset('site/images/image_3.jpg') }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Etiket Bulutu</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">dish</a>
                            <a href="#" class="tag-cloud-link">menu</a>
                            <a href="#" class="tag-cloud-link">food</a>
                            <a href="#" class="tag-cloud-link">sweet</a>
                            <a href="#" class="tag-cloud-link">tasty</a>
                            <a href="#" class="tag-cloud-link">delicious</a>
                            <a href="#" class="tag-cloud-link">desserts</a>
                            <a href="#" class="tag-cloud-link">drinks</a>
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
    <!--================Blog Area =================-->
@endsection
