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
	<div class="carousel-inner page-slider" id="page-image-slider" role="listbox">
		<div class="item active">
			<img src="{{ asset( 'img/bg-1.jpg' ) }}" class="float">
			<div class="carousel-caption">
				<div class="slider-text">
					<a href="#"><h3>{{ $pagename }}</h3></a>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="{{ asset( 'img/bg-1.jpg' ) }}" class="float">
			<div class="carousel-caption">
				<div class="slider-text">
					<a href="#"><h3>{{ $pagename }}</h3></a>
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

@section( 'pagecontent' )
<section class="content-article" id="fixtured-page">
	<div class="container">
		<div class="col-md-12">
			<h4>Fixtures</h4>	
			<div id="lrep721346731" style="width:100%;margin:25px 0px;">Data loading....<a href="http://full-time.thefa.com/Index.do?divisionseason=950793040">click here for Premier</a><br/><br/><a href="http://www.thefa.com/FULL-TIME">FULL-TIME Home</a></div>
			<script language="javascript" type="text/javascript">
			var lrcode = '721346731'
			</script>
			<script language="Javascript" type="text/javascript" src="http://full-time.thefa.com/client/api/cs1.js"></script>			
		</div>
	</div>
</section>

@endsection