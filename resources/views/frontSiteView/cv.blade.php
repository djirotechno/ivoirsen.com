@include('layout.header')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center section-top-border">
             @foreach ($img as $item)
            @if($item->name == 'pdg.jpeg')
          <img class="mb-50" src="{{$item->path()}}">
            @endif
            @endforeach
            <p class="breadcrumbs"><span class="mr-2">Dr DIAKITE</span></p>
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-12 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="section-top-border">
              <h4>EXPERIENCE PROFESSIONNELLE</h4>
              @foreach ($cv as $item)
              <div class="row">
                  <div class="col-md-8">
                    <blockquote class="generic-blockquote">
                      <span style="text-align:justify">
                          {!!$item->experience!!}
                      </span>
                    </blockquote>
                  </div>
              </div>
          </div>
        </div>
        
        </div>
        <div class="row">
          <div class="col-lg-12 ftco-animate">
            <div class="tab-content">   
              <div class="panel-group" id="accordion">
                                  
                <div class="card card-default">
                    <div class="card-heading">
                        <h4 class="card-title">
                            <a style="color:white" class="btn btn-link" data-toggle="collapse" data-parent="#accordion" href="#collapse-0">DIPLOMES OBTENUS</a>
                        </h4>
                    </div>
                    <div id="collapse-0" class="card-collapse collapse in">
                        <div class="card-body">
                            {!!$item->diplome!!}
                        </div>
                    </div>
                </div>
               
                <div class="card card-default">
                    <div class="card-heading">
                        <h4 class="card-title">
                            <a style="color:white" class="btn btn-link" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">RECHERCHE ET PUBLICATIONS</a>
                        </h4>
                    </div>
                    <div id="collapse-2" class="card-collapse collapse in">
                        <div class="card-body">
                            {!!$item->recherchepub!!}
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-heading">
                        <h4 class="card-title">
                            <a style="color:white" class="btn btn-link" data-toggle="collapse" data-parent="#accordion" href="#collapse-3">AUTRES ACTIVITES DE RECHERCHE</a>
                        </h4>
                    </div>
                    <div id="collapse-3" class="card-collapse collapse in">
                        <div class="card-body">
                            {!!$item->autreRecherche!!}
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                  <div class="card-heading">
                      <h4 class="card-title">
                          <a style="color:white" class="btn btn-link" data-toggle="collapse" data-parent="#accordion" href="#collapse-4">AFFILIATION A DES ASSOCIATIONS PROFESSIONNELLES</a>
                      </h4>
                  </div>
                  <div id="collapse-4" class="card-collapse collapse in">
                      <div class="card-body">
                          {!!$item->association!!}
                      </div>
                  </div>
                </div>
                <div class="card card-default">
                <div class="card-heading">
                    <h4 class="card-title">
                        <a style="color:white" class="btn btn-link" data-toggle="collapse" data-parent="#accordion" href="#collapse-5">CONNAISSANCES EN INFORMATIQUE</a>
                    </h4>
                </div>
                <div id="collapse-5" class="card-collapse collapse in">
                    <div class="card-body">
                        {!!$item->informatique!!}
                    </div>
                </div>
                </div>
                  <div class="card card-default">
                    <div class="card-heading">
                        <h4 class="card-title">
                            <a style="color:white" class="btn btn-link" data-toggle="collapse" data-parent="#accordion" href="#collapse-6">LANGUE </a>
                        </h4>
                    </div>
                    <div id="collapse-6" class="card-collapse collapse in">
                        <div class="card-body">
                            {!!$item->langue!!}
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                  <div class="card-heading">
                      <h4 class="card-title">
                          <a style="color:white" class="btn btn-link" data-toggle="collapse" data-parent="#accordion" href="#collapse-7">REFERENCES</a>
                      </h4>
                  </div>
                  <div id="collapse-7" class="card-collapse collapse in">
                      <div class="card-body">
                          <p>1. Pr  Ben Oumar NDIAYE, Professeur d’économie à l’UCAD (Directeur de thèse de doctorat) </p>

                          <p>2. Pr Eugène KOUASSSI, Professeur d’économétrie à la FASEG à l’Université Felix Houphouet Boigny d’Abidjan. Eugene.kouassi@gmail.com</p>
                      
                          <p>3. Dr  Amani KOFFI, Ex Chef de Département Economie de santé au CESAG. amani.koffi@cesag.sn</p> 
                      
            
                      </div>
                  </div>
              </div>
                </div>
            </div>
        </div> 
              @endforeach
              
      </div>                      
			</div>
		</section>
		


   

  
        <div class="container">
        
          <div class="row">
            <div class="col-md-12 offset-4 ">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                     
                      <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-linkedin"></span></a></li>
                    </ul>
                  </div>
                  </div>
            </div>
          </div>
        </div>
     
      
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

@include('layout.footer')