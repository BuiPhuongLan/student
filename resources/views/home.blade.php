<link href="/css/bootstrap.min.css" rel="stylesheet">

@extends('layouts.app')
@section('content')
</br>
<section id="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{ route('home_student')}}">Student</a>></li>
			{{--  <li class="active">Survey</li>  --}}
		</ol>
	</div>
</section>

<section id="main">
	<div class="container">		
		<div class="row">

			<div class="col-md-3">
			@include('student.sidebar')
			</div>

			<div class="col-md-1">
			</div>

			<div class="col-md-8">
			@yield("survey")					  
			</div>
				
		</div>
	</div>
</section>

<footer id="footer"> 
	<p>Project of group 1, &copy; 2018</p>
</footer>


@endsection 

