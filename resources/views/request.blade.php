@extends('layouts.app')

@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Request Novel</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="/">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Request Novel</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump Area -->

        <!-- Start Contact Area -->
        <section class="wn_contact_area bg--white pt--80 pb--80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="contact-form-wrap">
                            <h2 class="contact__title">Req Novel Here!!</h2>
                            <p style="font-size: 16px;">Untuk yang ingin membaca novel translate tapi tidak tersedia di list silahkan ketikkan request anda disini!</p>
                            <form id="contact-form" action="#" method="post">
                                <div class="single-contact-form space-between">
                                    <input type="text" name="firstname" placeholder="First Name*">
                                    <input type="text" name="lastname" placeholder="Last Name*">
                                </div>
                                <div class="single-contact-form space-between">
                                    <input type="email" name="email" placeholder="Email*">
                                    <input type="text" name="website" placeholder="Website*">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="subject" placeholder="Subject*">
                                </div>
                                <div class="single-contact-form message">
                                    <textarea name="message" placeholder="Type your message here.."></textarea>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit">Send Email</button>
                                </div>
                            </form>
                        </div> 
                        <div class="form-output">
                            <p class="form-messege">
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
                        <div class="wn__address">
                            <h2 class="contact__title">Get office info.</h2>
                            <p style="font-size: 16px;">Tnovel merupakan webnovel untuk anda yang ingin membaca novel berbahasa Indonesia lengkap terpercaya. Translate yang ada dalam TNovel jelas dan tidak berbelit-belit dalam berbagai penjelasan.</p>
                            <div class="wn__addres__wreapper">
                                <aside class="wedget__categories sidebar--banner">
                                    <img src="{{asset('user/images/iklan.jpg')}}" alt="banner images">
                                    <div class="text">
                                        <h2>new products</h2>
                                        <h6>save up to <br> <strong>40%</strong>off</h6>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
@endsection