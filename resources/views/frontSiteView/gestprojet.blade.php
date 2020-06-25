@include('layout.header')
		<!-- END nav -->
		<div id="app">
			
			
			<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text align-items-center justify-content-center">
						<div class="col-md-9 ftco-animate text-center">
							<h1 class="mb-2 bread">Nos Solutions</h1>
							<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Solutions <i class="ion-ios-arrow-forward"></i></span></p>
						</div>
					</div>
				</div>
			</section>
			
			<section class="ftco-section" >
				<div class="container">
					
					<div class="container mt-3">
						<h2>Gestion de Projet</h2>
						<p></p>
						</div>
						<hr>
					<div class="row">
						<div class="col-lg-8 ftco-animate">
								<div class="tab-content">
                                        @foreach($formation as $index)									
									<div class="panel-group" id="accordion">
                                                @foreach ($collection as $item)
                                                <div class="card card-default">
                                                        <div class="card-heading">
                                                            <h4 class="card-title">
                                                                
                                                                <a style="color:white" class="btn btn-link" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $index }}">{{ $faq->titre }}</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse-{{ $index }}" class="card-collapse collapse in">
                                                            <div class="card-body">
                                                                <p>{!! $faq->description !!}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
											@endforeach
										
									</div>
						</div> 
						<div class="col-lg-4 sidebar ftco-animate">
							<div class="sidebar-box">
								<form action="#" class="search-form">
									<div class="form-group">
										<span class="icon icon-search"></span>
										<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
									</div>
								</form>
							</div>
							
							<div class="sidebar-box ftco-animate">
								<h3>Nos Domaines</h3>
								<ul class=" nav nav-tabs">
									@foreach ($domaine as $item)
								<li><a class="nav-link" data-toggle="tab" href="#{{$item->titre}}">{{$item->titre}}</a></li>
									@endforeach
								</ul>
							</div>
							
					</div><!-- END COL -->
					</div>
				</div>
			</section>
		</div>
		
		
  @include('layout.footer')