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
            <form action="{{url(email)}}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" name="nom" class="form-control" placeholder="nom">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="email">
              </div>
              <div class="form-group">
                <input type="text" name="sujet" class="form-control" placeholder="sujet">
              </div>
              <div class="form-group">
                <textarea tytpe="text" name="emessage" id="emessage" cols="30" rows="7" class="form-control" placeholder="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyez" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1929.289223734217!2d-17.46683479201403!3d14.736409391412021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d4e4ceb2395%3A0x8a98541a0fa23c3a!2sCit%C3%A9%20Sonatel%202%2C%20Dakar!5e0!3m2!1sfr!2ssn!4v1591709208918!5m2!1sfr!2ssn" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
					</div>
				</div>
			</div>
		</section>
@include('layout.footer')