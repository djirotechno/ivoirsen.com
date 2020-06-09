@include('layout.header')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">{{$detailForm->titre}}</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Formations <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <section class="course_details_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 course_details_left">
          <h2 class="mb-2 bread">{{$detailForm->titre}}</h2>

                        <div class="main_image">
                            @foreach ($img as $image)
                            @if($detailForm->image == $image->id)
                            <img class="img-fluid" src="{{$image->path()}}" alt="">
                            @endif
                            @endforeach
                            
                        </div>
                        <div class="content_wrapper">
                            <h4 class="title">Objectives</h4>
                           
                            <div class="content">
                                {!!$detailForm->objectif!!}
                                    
                                </div>
                           
                            
    
                            <h4 class="title">Prerequis</h4>
                            <div class="content">
                                {!!$detailForm->prerequis!!}
                                
                                <br>
                                <br>
                              
                            </div>
    
                            <h4 class="title">Contenu</h4>
                            <div class="content">
                              {!!$detailForm->contenu!!}
                            </div>
                            <h4 class="title">Outils ou logiciel</h4>
                            <div class="content">
                              {!!$detailForm->outilslogiciel!!}
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-lg-4 right-contents">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Intervent</p>
                                        @foreach ($intervs as $interv)
                                        @if($detailForm->intervenant == $interv->id)
                                        <span class="or">{{$interv->titre}}</span>
                                        @endif
                                    @endforeach
                                
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Prix </p>
                                    <span>{{$detailForm->prix}}$</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Duree de la formation </p>
                                <span>{{$detailForm->duree}}j</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Date </p>
                                    <span>{{$detailForm->date}}</span>
                                </a>
                            </li>
                        </ul>
                        <button data-toggle="modal" data-target="#myModal" class="primary-btn2 text-uppercase enroll rounded-0 text-white">S'incrire</button>
    
                        <h4 class="title">Niveaux</h4>
                        <div class="content">
                            <div class="review-top row pt-40">
                                <div class="col-lg-12">
                                   
                                    <div class="d-flex flex-row reviews justify-content-between">
                                    <span>{{$detailForm->niveaux}}</span>
                                        <div class="star">
                                            @if($detailForm->niveaux == 'Expert')
                                            <i class="ti-star checked"></i>
                                            <i class="ti-star checked"></i>
                                            <i class="ti-star checked"></i>
                                            @endif
                                            
                                            @if ($detailForm->niveaux == 'intermediaire')
                                            <i class="ti-star checked"></i>
                                            <i class="ti-star checked"></i>
                                            <i class="ti-star "></i>
                                            @endif
                                            @if($detailForm->niveaux == 'initiation')
                                            <i class="ti-star checked"></i>
                                            <i class="ti-star "></i>
                                            <i class="ti-star "></i>
                                            @endif
                                        
                                          
                                        </div>
                                       
                                    </div>
                                  
                                </div>
                            </div>
                            <h4 class="title">Commentaires</h4>
                            <div class="comments-area mb-30">
                                    @foreach ($tem as $item)
                                    <div class="item">
                                            <div class="testimony-wrap d-flex">
                                                @foreach ($img as $imtem)
                                                @if($item->image == $imtem->id)
                                            <img src="{{$imtem->path()}}" alt="" sizes="" srcset="" >
                                                @endif												
                                                @endforeach
                                              
                                                <div class="text ml-2">
                                                <p class="name">{!!$item->temoin!!}</p>
                                                        <p >{!!$item->contenu!!}</p>
                                                </div>
                                            </div>
                                    </div>
                                    @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
                <div class="container">
                    <div class="row justify-content-end">
                       
                            {{-- end detail formation --}}
                        <div class="col-md-12 py-5 px-md-5">
                            <div class="py-md-5">
                                <div class="heading-section heading-section-white ftco-animate mb-5">
                                    <h2 class="mb-4">S'inscrire</h2>
                                   
                                </div>
                                    <form action="/instcrit" method="POST" class="appointment-form ftco-animate" >
                                        {{ csrf_field() }}
                                   
                                        <div class="d-md-flex">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nom" placeholder="Nom">
                                            </div>
                                            <div class="form-group ml-md-4">
                                                <input type="text" class="form-control" name="prenom" placeholder="Prenom">
                                            </div>
                                        </div>
                                        <div class="d-md-flex">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <select name="idForm" id="" class="form-control">
                                                            <option value="">Formations</option>
                                                                @foreach ($formation as $item)
                                                            <option value="{{$item->titre}}">{{$item->titre}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ml-md-4">
                                                <input type="number" name="telephone" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="d-md-flex">
                                            <div class="form-group ml-md-4">
                                                <input type="email" name="email" class="form-control" placeholder="Adresse Email">
                                            </div>                                          
                                            <div class="form-group ml-md-4">
                                                    <input type="submit" value="Valider" class="btn btn-primary py-3 px-4">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</section>
        {{-- temoignage beneficiaire --}}
        <section class="ftco-section testimony-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4">Nos Beneficiaire Temoignes</h2>
                    </div>
                </div>
                <div class="row ftco-animate justify-content-center">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel">

                          	@foreach ($tem as $item)
								<div class="item">
										<div class="testimony-wrap d-flex">
											@foreach ($img as $imtem)
											@if($item->image == $imtem->id)
										<div class="user-img mr-4" style="background-image: url({{$imtem->path()}})">	
											@endif												
											@endforeach
											</div>
											<div class="text ml-2">
											<p class="name">{!!$item->temoin!!}</p>
													<p >{!!$item->contenu!!}</p>
											</div>
										</div>
								</div>
								@endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
@include('layout.footer')


<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Inscription</h4>
            </div>
            <div class="modal-body">
            <form action="{{url(inscription)}}" method="POST">  
                    {{ csrf_field() }}
                <input type="hidden" name="idForm" value="{{$detailForm->titre}}">
                <input type="hidden" name="subject" value="Inscription">
                  <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">Nom</label>
                        <div class="col-md-6">
                        <input id="nom" type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}"  name="nom"  value="{{ old('nomParcelle') }}"required autofocus>

                            @if ($errors->has('nom'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nom') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>
                     
                      <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email"  value="{{ old('email') }}"required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">Tel</label>
                                    <div class="col-md-6">
                                        <input itelephone" type="number" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}"  name="telephone"  value="{{ old('telephone') }}"required autofocus>
                                        @if ($errors->has('telephone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('telephone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-success ">Validez</button>
                  </div>
                </form>
          </div>
        </div>
      </div>