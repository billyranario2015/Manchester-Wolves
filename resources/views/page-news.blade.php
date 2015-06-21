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
<section class="content-article" id="news-page">
	<div class="container">
		<div class="col-md-8">
			<h4 class="heading">All News</h4>
			<div class="search-news">
			</div>
		</div>
		<div class="col-md-4 search-form">
			<div class="form-group">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for news">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div><!-- /input-group -->
			</div>
		</div>
		<div class="col-md-12">
			<div class="news-post odd">
				<div class="col-md-2 img">
					<img src="{{ asset( 'img/news-1.jpg' ) }}" class="float">
				</div>
				<div class="col-md-10 news-desc">
					<a href="#"><h3 class="news-title">Lorem ipsum dolor sit amet
					<small class="pull-right"><i class="fa fa-calendar-o"></i> 4 days ago</small></h3></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
				</div>	
			</div>
			<div class="news-post even">
				<div class="col-md-2 img">
					<img src="{{ asset( 'img/news-2.jpg' ) }}" class="float">
				</div>
				<div class="col-md-10 news-desc">
					<a href="#"><h3 class="news-title">Lorem ipsum dolor sit amet
					<small class="pull-right"><i class="fa fa-calendar-o"></i> 4 days ago</small></h3></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
				</div>	
			</div>
			<div class="news-post odd">
				<div class="col-md-2 img">
					<img src="{{ asset( 'img/news-3.jpg' ) }}" class="float">
				</div>
				<div class="col-md-10 news-desc">
					<a href="#"><h3 class="news-title">Lorem ipsum dolor sit amet
					<small class="pull-right"><i class="fa fa-calendar-o"></i> 4 days ago</small></h3></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
				</div>	
			</div>
			<nav class="text-center">
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</section>

@endsection