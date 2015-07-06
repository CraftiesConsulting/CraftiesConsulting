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
            </div>
     </div>

@endsection