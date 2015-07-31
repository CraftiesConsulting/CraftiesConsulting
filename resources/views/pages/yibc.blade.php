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
                                            							    <li><a href="#tab5" role="tab" data-toggle="tab">Registration Details</a></li>
                                            							    <li><a href="#tab6" role="tab" data-toggle="tab">FAQs</a></li>
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
                                                                                <ul>
                                                                                    <li>Have published a piece (poem, opinion, short story, etc.) in the Teens/Children section of newspapers.</li>
                                                                                    <li>Have written at least 50 pages of a publishable manuscript</li>
                                                                                    <li>Have been put in the right frame of mind to own and manage their own writing blog.</li>
                                                                                    <li>Have been exposed to the need to be financially independent from a young age, and would have been taught how to earn money legally through their writing skills</li>
                                                                                </ul>

                                                                                For the Animation Design Course, at the end of the boot camp,
                                                                                participants would have learnt:
                                                                                <ul>
                                                                                    <li>Animation's Principles and Techniques.</li>
                                                                                    <li>Script Writing and Storyboarding</li>
                                                                                    <li>Character Design, and Stop Motion Animation</li>
                                                                                    <li>Own a blog and promote their work.</li>
                                                                                    <li>Have been exposed to the need to be financially independent from a young age, and would have been taught how to earn money legally through making designs for clients and marketing their Animation Design skills.</li>
                                                                                </ul>
                                            								    </p>
                                            								</div>

                                            								<div class="tab-pane" id="tab4">
                                                                                   <p>
                                                                                        To be considered eligible for the boot camp, participants must be
                                                                                        between the ages of 11 and 16. Also, their registration form must
                                                                                        have completed and submitted with parental consent. Furthermore,
                                                                                        payment must be made latest by Saturday August 1st, 2015.
                                                                                   </p>
                                            								</div>

                                            								<div class="tab-pane" id="tab5">
                                                                                <p>
                                                                                    To register your child or ward, please detach and fill the attached
                                                                                    registration form or download and fill the registration form from our
                                                                                    website via www.craftiesconsulting.com/yibc. Thereafter, bring
                                                                                    completed registration form and the fee to our office at 14, Umaru
                                                                                    Audi Road (Top Floor), Opposite Access Bank, Tanke Junction, G.R.A,
                                                                                    Ilorin, Kwara State.You can also get the form for FREE at our office.
                                                                                    For further enquires please contact Bello on 07033899757or
                                                                                    Haleemah on 08021235721, info@craftiesconsulting.com
                                                                                </p>
                                            								</div>

                                            								<div class="tab-pane" id="tab6">
                                                                            <div class="row">
                                                                                <div class="col-md-10">
                                                                                    <!-- Accordion -->
                                                                                        <div class="panel-group mt20 no-margin" id="accordion">
                                                                                            <!-- Item 1 -->
                                                                                            <div class="panel panel-default">
                                                                                                <div class="panel-heading">
                                                                                                  <h4 class="panel-title">
                                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                                                        Q1: Must my child/ward have a flair for writing to take the writing course?
                                                                                                    </a>
                                                                                                  </h4>
                                                                                                </div>
                                                                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                                                                    <div class="panel-body">
                                                                                                        No. While it is acknowledged that some people naturally possess writing skills which would be an added advantage; everybody has the need for good writing skills. Thus, anyone within the specified age range can take the writing course, irrespective of their passion or skill at writing.
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div><!-- /panel -->

                                                                                            <!-- Item 2 -->
                                                                                            <div class="panel panel-default">
                                                                                                <div class="panel-heading">
                                                                                                  <h4 class="panel-title">
                                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                                                        Q2: Must my child/ward have a personal computer in order to take the Animation Design Course?
                                                                                                    </a>
                                                                                                  </h4>
                                                                                                </div>
                                                                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                                                                    <div class="panel-body">
                                                                                                        <p>Yes. Every participant taking the Animation Design course MUST have a personal computer and bring it along daily. This is in order to ease learning, facilitate constant practice and make it possible for them to do take-home assignments.</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div><!-- /panel -->

                                                                                            <!-- Item 3 -->
                                                                                            <div class="panel panel-default">
                                                                                                <div class="panel-heading">
                                                                                                  <h4 class="panel-title">
                                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                                                                        Q3: Must my child/ward be adept at the use of a computer to take the Animation Design Course?
                                                                                                    </a>
                                                                                                  </h4>
                                                                                                </div>
                                                                                                <div id="collapseThree" class="panel-collapse collapse">
                                                                                                    <div class="panel-body">
                                                                                                        <p>Not necessarily. However, participants should be able to perform
                                                                                                        basic operations on the computer to aid quick assimilation of the
                                                                                                        course.</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div><!-- /panel -->

                                                                                            <!-- Item 4 -->
                                                                                            <div class="panel panel-default">
                                                                                                <div class="panel-heading">
                                                                                                  <h4 class="panel-title">
                                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                                                                        Q4: Can the payment be made in installments?
                                                                                                    </a>
                                                                                                  </h4>
                                                                                                </div>
                                                                                                <div id="collapseFour" class="panel-collapse collapse">
                                                                                                    <div class="panel-body">
                                                                                                        <h4><span class="ion-android-hand bordered-icon-sm mr15"></span> We can really help you with that.</h4>
                                                                                                           <p>Yes. You can make payment in two installments. However, the first installment must be paid latest by Saturday August 1st, 2015 while the balance must be paid latest by Saturday August 8th, 2015.</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div><!-- /panel -->


                                                                                        </div>
                                                                                   <!-- /accordion -->
                                                                                </div>
                                                                            </div>
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