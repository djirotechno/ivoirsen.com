@include('layout.header')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Qui Somme Nous</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/acceuil">Acceuil<i class="ion-ios-arrow-forward"></i></a></span> <span>Qui Somme Nous<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
              <div class="section-top-border">
                @foreach ($img as $item)
                @if($item->name == "pdg.jpeg")
              <img class="mb-30" src="{{$item->path()}}">
                @endif
                @endforeach
                 
                  <div class="row">
                    <div class="col-lg-12">
                      <blockquote class="generic-blockquote">
                           Expert-formateur dans plusieurs structures d’enseignement supérieur (UCAD, CESAG, UPGC, SUPDECO, ISM...), expérimenté et pédagogue, Dr. DIAKITE Ouéi Karim est consultant au pret des nations unies(UNIDEP) et des ONG(FAS). Il partage avec vous son expérience du terrain et illustre ses propos par de nombreux cas concrets. Il met à votre disposition l’expérience professionnelle et sectorielle acquise à partir de IVOIRESN sous la forme de « bonnes pratiques ». 
                          <p>Fort de l’expérience de plus de 10 ans de formation et de notre capacité à assurer notre présence dans les pays dans lesquels s’exercent vos responsabilités, IVOIRESN s’engage à être un véritable partenaire à votre écoute, prêt à vous accompagner pour apporter de la valeur ajoutée à vos projets.</p>                          
                          <p><a href="/cv"> Dr. DIAKITE Ouéi Karim PGG</a></p>
                        </blockquote>
                    </div>
                  </div>
                </div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">Qui sommes nous</h2>
						<p style="text-align:justify">
              @foreach ($apropos as $item)
              {!!$item->presentation!!}
              @endforeach
              
            </p>
					
						
						
					</div>
				</div>
			</div>
		</section>
		

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    		
          <div class="col-md-8 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Objectif</h2>
          <p>
            @foreach ($apropos as $item)
            {!!$item->vision!!}
            @endforeach
           
          </p>

          </div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		               
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		               
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

    {{-- <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Notre Vision</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
   
      </div>
    </section>
<hr> --}}
<section class="ftco-section ftco-no-pt ftc-no-pb">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
				<div class="img" style="background-image: url(images/about.jpg); border"></div>
			</div>
			<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
				<h2 class="mb-4">Notre Vision</h2>
				<p style="text-align:justify">
          @foreach ($apropos as $item)
              {!!$item->mission!!}
          @endforeach
        </p>
				
		
			</div>
		</div>
	</div>
</section>
<section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4">Nos Valeurs</h2>
        </div>
      </div>
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url()">
                </div>
                <div class="text ml-2">
                    <p class="name"><h2>La promptitude</h2> </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url()">
                </div>
                <div class="text ml-2">
                    <p class="name"><h2>La ponctualité</h2></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url()">
                </div>
                <div class="text ml-2">
                    <p class="name"><h2>Le contrôle de la qualité</h2></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url()">
                </div>
                <div class="text ml-2">
                    <p class="name"><h2>Le travail en équipe</h2></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url()">
                </div>
                <div class="text ml-2">
                  <p class="name"><h2>La démarche participative</h2></p>
                </div>
              </div>
            </div>
            <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url()">
                  </div>
                  <div class="text ml-2">
                    <p class="name">
                      <h2>L'indépendance</h2>
                    </p>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
  </div>
</section>
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2 d-flex">
      {{-- <div class="col-md-6 align-items-stretch d-flex">
        <div class="img img-video d-flex align-items-center" style="background-image: url(images/about-2.jpg);">
          <div class="video justify-content-center">
            <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
              <span class="ion-ios-play"></span>
            </a>
          </div>
        </div>
      </div> --}}
      <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4">Nos Cibles</h2>
        </div>
    </div>	
    <div class="row d-md-flex align-items-center justify-content-center">
      <div class="col-lg-12">
        <div class="row d-md-flex align-items-center">
         
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number">Gouvernements</strong>
               
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number">Administrations et les organismes publics</strong>
              
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="icon"><span class="flaticon-doctor"></span></div>
              <div class="text">
                <strong class="number" >ONG</strong>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-md-flex align-items-center justify-content-center">
        <div class="col-lg-12">
          <div class="row d-md-flex align-items-center">
            
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number">Entreprises, publiques et privées</strong>
                 
                </div>
              </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" >Les organismes d'aide au développement</strong>
                  
                </div>
              </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" >Chercheurs</strong>
                  
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number">Université</strong>
                  
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
  </div>
</section>
@include('layout.footer')