@include('layout.header')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
                @foreach ($contact as $item)
                @if($item->pays == 'Sénégal')
            <h3 class="mb-4">{!!$item->pays!!}</h3>
            <p>{!!$item->adresse!!}</p>
            <p>{!!$item->telephone!!}</p>
              @endif
              @endforeach
	          </div>
          </div>
          <div class="col-md-3 d-flex">
              <div class="bg-light align-self-stretch box p-4 text-center">
                  @foreach ($contact as $item)
                  @if($item->pays == 'cotedivoire')
              <h3 class="mb-4">{!!$item->pays!!}</h3>
              <p>{!!$item->adresse!!}</p>
                <p>{!!$item->telephone!!}</p>
                @endif
                @endforeach
              </div>
            </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Addresse Email</h3>
	            <p><a href="mailto:info@yoursite.com">ivoirsen@ivoirsen.com</a></p>
	            {{-- <p><a href="mailto:info@yoursite.com">contact@ivoirsen.com</a></p> --}}
	          </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
            <form action="/email" method="POST">
              {{ csrf_field() }}
              {{-- <div class="form-group">
                <input type="text" class="form-control" placeholder="Nom">
              </div> --}}
              <div class="form-group">
                <input type="text" class="form-control" placeholder="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="sujet">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyez" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map">
              localisation
            </div>
					</div>
				</div>
			</div>
		</section>
@include('layout.footer')