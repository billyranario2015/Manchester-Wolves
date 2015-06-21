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
<section class="content-article" id="about-page">
	<div class="container">
		<div class="col-md-12">
			<h4 class="heading">THE HISTORY</h4>
			<article>
				<p>Manchester Wolves was born out of a conversation in Christies Hospital on Boxing Day 2014,between me Darryl Lee and my close friend Simon Lebovits.</p>
				<p>He and I were chatting about our amateur football management as we had both been managing teams over the last few years and loved talking about the highs and lows.</p>
				<p>Simon had managed his son`s team for many years and I had managed a number of teams in amateur football as well as taking teams around the world for Maccabi GB.</p>
				<p>Whilst bemoaning the effort of managing open age teams I talked about the possibility of managing vets-as they tend to be more reliable.</p>
				<p>It was even suggested between us that I would help him manage his sons team when I had any spare weeks as the Vets league has fixtures every other week.</p>
				<p>And so I launched Manchester Wolves who hope to start their first season in the Cheshire Vets League in September 2015.There is a very sad postscript. Early in 2015 Simon lost his battle with the Big C leaving a wife and three kids. From that moment on I have missed our football banter but it has made me all the more driven to form Manchester Wolves.</p>
				<br>
				<p><strong>HOW LUCKY WE ARE</strong></p>
				<p>Manchester Wolves has a club motto-“How lucky we are”.</p>
				<p>For me to be simply running this team (and enjoying all the aggravation that goes with it) is really a privilege.</p>
				<p>As we get older most of us sadly lose people around us-and quite often those taken are in the prime of their life.</p>
				<p>On any given Sunday for me to manage and for players to play at our age is something we should never take for granted.</p>
				<p>When we feel angry about not being picked, having a stinker or just losing we will be able to look down at the club motto on the shirt and remember that we are the lucky ones..just to be out on that field doing what we love</p>
				<img src="{{ asset( 'img/about-pic.jpg' ) }}">
			</article>			
		</div>
	</div>
</section>
@endsection