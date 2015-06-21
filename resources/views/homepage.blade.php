@extends( 'tpl.main' )

@section( 'styles' )
<link rel="stylesheet" type="text/css" href="{{ asset( 'css/page.css' ) }}">
@endsection

@section( 'slider' )
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" id="home-image-slider" role="listbox">
		<div class="item active">
			<img src="{{ asset( 'img/bg-1.jpg' ) }}" class="float">
			<div class="carousel-caption">
				<div class="slider-text">
					<a href="#"><h3>How Lucky We Are</h3></a>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="{{ asset( 'img/bg-1.jpg' ) }}" class="float">
			<div class="carousel-caption">
				<div class="slider-text">
					<a href="#"><h3>How Lucky We Are</h3></a>
				</div>
			</div>
		</div>
	
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
@endsection