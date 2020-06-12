<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- #############################kamgue**blondin#####################################################-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="author" content="KAMGUE Blondin" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>@yield('title')</title>

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('images/logo.png') }}" rel="shortcut icon">
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	  
	<!-- font awesome core CSS -->
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/mflgalaxy.css') }}" rel="stylesheet">

</head>

<body>
  <!-- Header Start Here -->
  <div class="heading-mrg mb-1">
	 <div class="container">
		<div class="row">
			  <div class="col-12 col-sm-4 col-md-5 col-lg-4"><a href="#"> <img class="logo" src="{{asset('images/logo.png') }}" class="class-ace-logo" alt="ACE 11+ Tuition" /></a>
			  </div>
			  <div class="col-12 col-sm-12 col-md-4 col-lg-4">
				 <div class="header-text">
					<h3>@lang('Language Tuition')</h3>
					<span>@lang('Learn naturally, Speak naturally')</span>
				 </div>
			  </div>
			  
			  <div class="d-none .d-sm-none d-md-block .d-lg-block .d-xl-block col-md-3 col-lg-4 text-right">
				  
				<div class="list-group">
					@foreach(config('app.locales') as $locale)
					<a href="{{ route('language', $locale) }}" style="text-decoration:none;" class="list-group-item nav-lang-size">
						@if($locale == 'fr')
							Français
						@elseif($locale == 'es')
							Español
						@elseif($locale == 'de')
							Deutsch
						@else
							English
						@endif
					</a>
					@endforeach
				</div>
			   </div>
		</div>
	 </div>
  </div>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-lite bg-lite colorline">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-cogs"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		  <li class="nav-item"><a class="nav-link btn btn-social-icon btn-facebook" target="blank" href="#"><span class="fa fa-facebook"></span></a></li>
		  <li class="nav-item"><a class="nav-link btn btn-social-icon btn-twitter" target="blank" href="#"><span class="fa fa-twitter"></span></a></li>
		  <li class="nav-item"><a class="nav-link btn btn-social-icon btn-linked" target="blank" href="#"><span class="fa fa-linkedin"></span></a></li>
		  <li class="nav-item"><a class="nav-link btn btn-social-icon btn-gplus" target="blank" href="#"><span class="fa fa-google-plus"></span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container-fluid">

    <!-- Content Row -->
    <div class="row mt-4">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
	  <div class="container">
		<ul class="min-menu">
				<li class="sub-menu"><a href="{{url('/')}}"> @lang('Home')</a><span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				 <ul class="su-menu" type="-">
					<li><a href="{{ route('about_us') }}">@lang('About Us')</a></li>
						<li><a href="{{ route('our_goals') }}">@lang('Our Goals')</a></li>
						<li><a href="{{ route('our_services') }}">@lang('Our Services')</a></li>
						<li><a href="{{ route('testimonials') }}">@lang('Testimonials')</a></li>
						<li><a href="{{ route('blogs') }}">@lang('Blogs')</a></li>
					   <li><a href="{{ route('legal_documents') }}">@lang('Legal documents')</a></li>
					</ul>
				 </li>
				 <li class="sub-menu"><a href="#"> @lang('My choice')</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				  <ul class="su-menu">
					<li><a href="{{ route('french') }}">@lang('French')</a></li>
					<li><a href="{{ route('spanish') }}">@lang('Spanish')</a></li>
				  </ul>
				 </li>
				<li class="sub-menu"><a href="#"> @lang('Classes')</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				  <ul class="su-menu">
						<li><a href="{{ route('gallery') }}">@lang('Photo Gallery')</a></li>
						<li><a href="{{ route('class_structure') }}">@lang('Class Structure')</a></li>
						<li><a href="{{ route('extension_classes') }}">@lang('Extension Classes')</a></li>
						<li><a href="{{ route('adult_classes') }}">@lang('Adult Classes')</a></li>
						<li><a href="{{ route('target_schools') }}">@lang('Target Schools')</a></li>
						<li><a href="{{ route('useful_links') }}">@lang('Useful Links')</a></li>
						<li><a href="{{ route('faq') }}">@lang('FAQ')</a></li>
					</ul>
				 </li>
				 <li class="sub-menu"><a href="javascript:void(0);"> @lang('Contact Us')</a> <span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				  <ul class="su-menu">
					  <li><a href="{{ route('enquiry_form') }}">@lang('Enquiry Form')</a></li>
					  <li><a href="{{ route('more_infos') }}">@lang('More Infos')</a></li>
				  </ul>
				 </li>
				 <li class="sub-menu">
					<a href="javascript:void(0);"> 
					@if(app()->getLocale() == 'fr')
						Français
					@elseif(app()->getLocale() == 'es')
						Español
					@elseif(app()->getLocale() == 'de')
						Deutsch
					@else
						English
					@endif
					</a>
				<span class="arrow-i-fa"><i class="fa fa-angle-down"></i></span>
				  <ul class="su-menu">
					@foreach(config('app.locales') as $locale)
					<li>
						<a href="{{ route('language', $locale) }}">
							@if($locale == 'fr')
								Français
							@elseif($locale == 'es')
								Español
							@elseif($locale == 'de')
								Deutsch
							@else
								English
							@endif
						</a>
					</li>
					@endforeach
				  </ul>
				 </li>
             </ul>
		<div class="txt-h-right mt-2"> 
			@lang('Click') <span class="gray-clr"><a href="#">@lang('here') </a></span>@lang('to submit enquiry')<br/>
			@lang('Please email us at') <span class="gray-clr">contact@mflgalaxy.com</span><br/>
			@lang('Don\'t forget to put your phone number in the email')<br/>
			@lang('Leave voicemail at') <span class="gray-clr">000 000 00000</span><br/>
			@lang('8am-7pm; 7 days a week') 
		</div>
		</div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
	  @yield('content')
	  </div>
	</div>
  </div>
  <!-- /.container -->
  
  <!-- Footer -->
  <footer class="py-5 bg-lite colorline">
	  <div class="container-fluid">
		 <div class="row">

			 <div class="col-md-4">

				 <div class="copy-pading m-0">Copyright &copy; {{ date('Y') }} <a href="{{ route('login') }}" title="@lang('Login')">MFLGalaxy</a> @lang('Right Reserved'). </div>

			 </div>
			 <div class="col-md-4">
				 <div class="cont-footer">
					 <ul>
						<li>@lang('Follow us')</li>
						<li> <a target="blank"  href="#"> <i class="fa fa-facebook"></i></a></li>
						<li> <a target="blank"  href="#"><i class="fa fa-twitter"></i></a></li>
						<li> <a  target="blank" href="#"><i class="fa fa-linkedin"></i></a></li>
						<li> <a target="blank"  href="#"><i class="fa fa-google-plus"></i></a></li>
					 </ul>
				  </div>
			 </div>
			 <div class="col-md-4 d-none d-sm-none d-lg-block d-md-block d-xl-block">
				  <div class="developed-right-txt">@lang('Website Developed by') <a href="#" target="_blank"></a></div>
			 </div>
		 </div>
	  </div>
  </footer>
  <!-- /foot -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>