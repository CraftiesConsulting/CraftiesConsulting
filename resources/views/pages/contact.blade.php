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

					<!-- Begin Map -->
                			<div class="container-fluid">
                				<div class="row">
                					<div class="col-xs-12 no-padding" style="margin-bottom: -7px;">
                						<iframe style="border: 0px none; border-color:#fff; width:100%;" height="350" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d493.2687831140188!2d4.589527826226527!3d8.484766635272514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1436279203137"></iframe>
                					</div>
                				</div>
                			</div>
            			<!-- End Map -->

                			<!-- Begin Contact -->
                			<section class="mt40 mb40">
                				<div class="container">

                					<!-- Form + Sidebar -->
                					<div class="row">
                						<div class="col-sm-8">
                							<div class="heading mb20"><h4><span class="ion-android-mail mr15"></span>Send us a Message</h4></div>
                							<p class="mb20">for enquiries and complaints, we are always available</p>
                							<form role="form" method="post" action="{{ url('contact') }}">
                							    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                			                    <div class="form-group">
                			                        <input name="name" type="text" placeholder="Name" class="form-control" id="InputName">
                			                    </div>
                			                    <div class="form-group">
                			                        <input name="email" type="email" placeholder="Email Address" class="form-control" id="InputEmail1">
                			                    </div>
                			                    <div class="form-group">
                			                        <textarea name="body" class="form-control" placeholder="Message" id="InputMessage" rows="7"></textarea>
                			                    </div>
                			                    <button type="submit" class="btn btn-rw btn-primary">Submit</button>
                			                </form>
                						</div>
                						<div class="col-sm-4 mt30-xs">
                							<div class="content-box content-box-primary mb30">
                						        <span class="ion-ios7-telephone-outline text-white border-white bordered-icon-static-sm mb10"></span>
                						        <h2 class="text-white no-margin">+2349097756145</h2>
                						    </div>
                							<div class="panel panel-primary no-margin">
                							    <div class="panel-heading">
                							        <h3 class="panel-title"><span class="ion-android-system-home"></span> Information</h3>
                							    </div>
                							    <div class="panel-body">
                							        <address class="no-margin">
                			                            <strong>14, Umaru Audi Road, Opp</strong><br>
                			                            Access Bank, Tanke Junction,<br>
                			                            G.R.A, Ilorin<br>
                			                            <abbr title="Phone">P:</abbr> (234) 909-775-6145 <br>
                			                            Mail: <a href="#">info@craftiesconsulting.com</a>
                			                        </address>
                							    </div>
                							</div>
                						</div>
                					</div>

                				</div><!-- /container -->
                			</section><!-- /section -->
                			<!-- End Contact -->

                			@include('layouts.partials.footer')


            </div>
     </div>

@endsection