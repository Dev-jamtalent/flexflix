<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<!--favicon-->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend') }}/icon/KnowhowICON.jpg">
	<title>@if (session()->get('jam') == 'jamFlix') Flexflix @else Now How @endif</title>