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
                    		                        <img class="img-responsive full-width" src="images/yibc_banner.jpg" alt="Young innovators bootcamp">
                    		                    </div>
                    				        </div>
                    				        <div class="col-sm-4">
                    				        	<div class="content-box content-box-bordered mt30-xs mb30">
                    						        <h4 class="pt15">Download application form</h4>
                    						        <a href="{{ url('yibc_download') }}" target="_blank"><span class="ion-android-download bordered-icon-sm"></span></a>
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
                    			<section>
                                    <div class="row">
                                            <h2 class="text-center"><a href="#"><span class="ion-lightbulb"></span> Young Innovators Bootcamp</a></h2>
                                            <!-- Begin Tabs -->
                                            					<div class="row mt40">
                                            						<!-- Begin Tabs -->
                                            						<div class="col-sm-12">
                                            							<ul class="nav nav-tabs" role="tablist">
                                            							    <li class="active"><a href="#tab1" role="tab" data-toggle="tab">A big gap</a></li>
                                            							    <li><a href="#tab2" role="tab" data-toggle="tab">Our approach</a></li>
                                            							    <li><a href="#tab3" role="tab" data-toggle="tab">Key Deliverables</a></li>
                                            							    <li><a href="#tab4" role="tab" data-toggle="tab">Eligibility</a></li>
                                            							    <li><a href="#tab5" role="tab" data-toggle="tab">Key Deliverables</a></li>
                                            							    <li><a href="#tab6" role="tab" data-toggle="tab">Registration Details</a></li>
                                            							    <li><a href="#tab7" role="tab" data-toggle="tab">FAQs</a></li>
                                            							</ul>
                                            							<div class="tab-content">
                                            							    <div class="tab-pane in active" id="tab1">
                                            								    <p>Some skills we undermine are key
                                                                                  elements and ingredients individuals need to survive and
                                                                                  swim through the murky waters of the world. Available
                                                                                  figures from the National Bureau of Statistics put the current
                                                                                  youth unemployment rate at over 25 percent. The implication
                                                                                  is that over 25 million of Nigeria's youth population of about
                                                                                  100 million are unemployed- a situation that is threatening
                                                                                  the very survival of Nigeria as a nation.
                                                                                  Unemployment continues to blight the affairs of our Nation
                                                                                  and put the youths at risk of being an idle hand which is the
                                                                                  devil's workshop. More importantly, we understand that the
                                                                                  Nigerian educational structure is tailored to build employees
                                                                                  not employers. It is therefore not surprising that there are
                                                                                  only 5 Nigerians on the Forbes list of world billionaires while
                                                                                  there are 1,826 billionaires out of 7 billion people in the world
                                                                                  and all of them are business owners.
                                                                                  It is apparent that for this trend to change, Nigerians must
                                                                                  learn from a young age the importance of enterprise
                                                                                  development and be imbued with the necessary skills needed to achieve such a lofty aspiration.</p>
                                            								</div>
                                            							    <div class="tab-pane" id="tab2">
                                            									<p>Having identified the challenge, we have decided to 'walk the
                                                                                talk' by organizing a summer boot camp targeted at
                                                                                youngsters in Ilorin. This is aimed at orienting the younger
                                                                                generation on the need to be their own boss and be financially
                                                                                intelligent. We believe that they do not need to get a University
                                                                                degree before they can be financially independent.
                                                                                Apart from this mental reengineering, we believe that skills
                                                                                and aptitude are necessary tools for surviving economically as
                                                                                entrepreneurs and even as employees. Thus, our participants
                                                                                have the option to choose to either be trained as a writer or as
                                                                                an animation designer.</p>
                                            							    </div>
                                            							    <div class="tab-pane" id="tab3">
                                            								    <p>
                                            								    In addition to the Entrepreneurial development course which
                                                                                would be taken by all participants, they would also have to
                                                                                choose to take either of the WRITING or ANIMATION DESIGN
                                                                                courses.
                                                                                For the Writing Course, at the end of the boot camp,
                                                                                participants would:
                                                                                Ø Have published a piece (poem, opinion, short story,
                                                                                etc.) in the Teens/Children section of newspapers.
                                                                                Ø Have written at least 50 pages of a publishable
                                                                                manuscript
                                                                                Ø Have been put in the right frame of mind to own and
                                                                                manage their own writing blog.
                                                                                Ø Have been exposed to the need to be financially
                                                                                independent from a young age, and would have been
                                                                                taught how to earn money legally through their
                                                                                writing skills
                                            								    </p>
                                            								</div>

                                            								<div class="tab-pane" id="tab4">

                                            								</div>

                                            								<div class="tab-pane" id="tab5">

                                            								</div>

                                            								<div class="tab-pane" id="tab6">

                                                                            </div>

                                                                            <div class="tab-pane" id="tab7">

                                                                            </div>
                                                                            <div class="tab-pane" id="tab8">

                                                                            </div>
                                            							</div>
                                            						</div><!-- /column -->
                                            						<!-- End Tabs -->

                                            					</div><!-- /row -->
                                            					<!-- End Tabs -->
                                    </div>
                    			</section>
                    			</div>
                    			<!-- End Content Section -->



                	@include('layouts.partials.footer')


            </div>
     </div>

@endsection