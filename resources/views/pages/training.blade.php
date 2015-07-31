@extends('layouts.master')

@section('content')
    <div id="bg-boxed">
    	    <div class="boxed">

    			<!-- Begin Header -->
    			<header>

    				@include('layouts.partials.top_bar')
    				@include('layouts.partials.login_modal')
    				@include('layouts.partials.main_nav')

			    </header><!-- /header -->
			<!-- End Header -->

                    <!-- Begin Content Section -->
                    			<section class="mt40 mb40">
                    				<div class="container">
                    				    <div class="row">
                    				        <div class="col-sm-8">
                    							<div class="blog-post">
                    		                        <div class="row">
                                                            <div class="col-sm-12"><!-- //adjust if need -->
                                                                <!-- Begin Carousel -->
                                                                <div id="training" class="carousel slide" data-ride="carousel">
                                                                    <!-- Indicators -->
                                                                    <ol class="carousel-indicators">
                                                                        <li data-target="#training" data-slide-to="0" class=""></li>
                                                                        <li class="active" data-target="#training" data-slide-to="1"></li>
                                                                    </ol>

                                                                    <!-- Wrapper for slides -->
                                                                    <div class="carousel-inner">
                                                                        <div class="item">
                                                                            <div class="fill skrollable skrollable-between" style="background-image: url(&quot;images/projects/web2.jpg&quot;); height: 320px; background-position: 50% -26.46px;" data-0="background-position: 50% 0px;" data-500="background-position: 50% -70px;"></div>
                                                                        </div>
                                                                        <div class="item active">
                                                                            <div class="skrollable skrollable-between" style="background-image: url(&quot;images/projects/illustration2.jpg&quot;); height: 320px; background-position: 50% -26.46px;" data-0="background-position: 50% 0px;" data-500="background-position: 50% -70px;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Controls -->
                                                                    <a class="left carousel-control" href="#training" role="button" data-slide="prev">
                                                                        <span class="ion-ios7-arrow-left carousel-arrow-left" aria-hidden="true"></span>
                                                                    </a>
                                                                    <a class="right carousel-control" href="#training" role="button" data-slide="next">
                                                                        <span class="ion-ios7-arrow-right carousel-arrow-right" aria-hidden="true"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <!-- Content -->
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-12 fadeInLeft-animated">
                                                            <div class="heading mb20"><h2 class="text-center"><a href="#"><span class="ion-lightbulb"></span> Training</a></h2></div>
                                                            <p>CRAFTIES CONSULTING LIMITED (CCL) offers a wide range of training programmes for youths, entrepreneurs, undergraduates, and graduates. Areas of Training include: </p>

                                                            <!-- List -->
                                                            <ul class="list-arrow-2-color">
                                                                <li><small>Career Development</small></li>
                                                                <li><small>Corporate Training</small></li>
                                                                <li><small>Enterprise Development</small></li>
                                                                <li><small>Employability Training</small></li>
                                                                <li><small>Teachers Conversion Training</small></li>
                                                            </ul>
                                                        </div><!-- /column -->
                                                    </div>
                                                    <!-- End Content -->
                    		                    </div>
                    				        </div>
                    				        <div class="col-sm-4">
                    				        	<div class="content-box content-box-bordered mt30-xs mb30">
                    						        <h4 class="pt15">ICT Training application form</h4>
                    						        <a href="{{ url('ict_download') }}" target="_blank"><span class="ion-android-download bordered-icon-sm"></span></a>
                    						    </div>
                    				        	<div class="heading mt30-xs"><h4>Quote</h4></div>
                                                <p class="lead mb30"> All humans are entrepreneurs not because they should start companies but because the will to create is encoded in human DNA</p>
                                                <div class="cta2 arrow-up" style="padding: 20px 0;">
                                                    <div class="text-center"><!-- //add container, columns, or rows if needed. -->
                                                        <h2 class="no-margin">—Reid Hoffman</h2>
                                                    </div>
                                                </div>
                    		                </div>
                    				    </div>
                    			    </div>
                    			</section><!-- /content -->
                    			<div class="container">
                    			</div>
                    			<!-- End Content Section -->



                	@include('layouts.partials.footer')


            </div>
     </div>

@endsection