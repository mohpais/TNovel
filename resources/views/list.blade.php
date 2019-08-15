@extends('layouts.app')

@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">List Novel</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="/">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">List Novel</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Product Tags</h3>
        						<ul>
									@foreach ($tag as $item)										
        								<li><a  data-toggle="tab" href="#nav-grid" role="tab">{{$item->name}}</a></li>
									@endforeach
        						</ul>
        					</aside>
        					<aside class="wedget__categories sidebar--banner">
								<img src="{{asset('user/images/iklan.jpg')}}" alt="banner images">
								<div class="text">
									<h2>new products</h2>
									<h6>save up to <br> <strong>40%</strong>off</h6>
								</div>
        					</aside>
        				</div>
        			</div>
        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12" style="text-align:center">
								<div class="shop__list__wrapper">
			                        <p>Showing 1–9 of {{$total}} results</p>
		                        </div>
        					</div>
        				</div>
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active">
	        					@include('inc.data')
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->
        <!-- QUICKVIEW NOVEL -->
		@include('inc.viewNovel')
		<!-- END QUICKVIEW NOVEL -->
		</div>
@endsection