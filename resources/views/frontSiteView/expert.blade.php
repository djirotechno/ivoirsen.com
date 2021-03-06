@include('layout.header')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Nos Experts</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Teacher <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row">
					@foreach ($expert as $item)
					<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="staff">
								<div class="img-wrap d-flex align-items-stretch">
									@foreach ($img as $image)
										@if($item->imag == $image->id)
									<img class="img align-self-stretch"  src="{{$image->path()}}">	
								
										@endif										
									@endforeach
								</div>
								<div class="text pt-3 text-center">
								<h3>{{$item->nom}}</h3>
									<span class="position mb-2">Teacher</span>
									<div class="faded">
										<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
										<ul class="ftco-social text-center">
											<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
											<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
											<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
											<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section>


		
@include('layout.footer')