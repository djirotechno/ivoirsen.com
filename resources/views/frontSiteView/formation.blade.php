@include('layout.header')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Nos Formations</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Formations <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
		</section>
		<br>
		<br>
		<div class="container mt-3">
			<h2>Panoramas</h2>
			<p>En un ou deux jours, les panoramas visent à donner une vision globale mais précise d’un domaine de la statistique.</p>
	</div>
<section class="ftco-section">
	
	<div class="container-fluid px-4">
		<div class="row">
				@foreach ($formation as $item)

							<div class="col-md-3 course ftco-animate">
								@foreach ($img as $image)
									@if($item->image == $image->id)
									<img class="img align-self-stretch"  src="{{$image->path()}}">
									@endif
								@endforeach
								<div class="text pt-4">
									<p class="meta d-flex">
										@foreach ($formateur as $form)
											@if($form->id ==  $item->intervenant)
											<span><i class="icon-user mr-2"></i>{{$form->nom}}</span>
											@endif
										@endforeach
									<span><i class="icon-table mr-2"></i>{{$item->duree}}-jour</span>
									<span><i class="icon-calendar mr-2"></i>{{$item->date}}</span>
									</p>
									<h3><a href="#">{{$item->titre}}</a></h3>
									<p>{{$item->description}}</p>
								<p><a href="/formation/{{$item->id}}" class="btn btn-primary">Details</a></p>
								</div>
							</div>
				@endforeach

		</div>
	</div>
	<div class="col-12 text-center">
	<button type="button" class="btn btn-primary btn-block"><a href="{{url(statistique)}}"><strong style="font-size:25px;color:black">Méthodes statistiques</strong></a></button> 
	</div>
	
</section>
		<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5">
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4">Demander un Devis</h2>
		            
		          </div>
		          <form action="/devis" method="post" class="appointment-form ftco-animate">
								
						
									{{ csrf_field() }}
									<div class="d-md-flex">
										<div class="form-group">
											<input type="email" nom="email" class="form-control" placeholder="Email">
										</div>
								
									</div>
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" name="nom" class="form-control" placeholder="Nom">
								</div>
						
							</div>
										<div class="d-md-flex">
												<div class="form-group">
													<div class="form-field">
														<div class="select-wrap">
															<div class="icon"><span class="ion-ios-arrow-down"></span></div>
															<select name="formation" id="formation" class="form-control">
																@foreach ($formation as $item)
															<option value="{{$item->titre}}">{{$item->titre}}</option>																		
																@endforeach
															</select>
														</div>
													</div>
												</div>
												<div class="form-group ml-md-4">
													<input type="text" name="telephone" class="form-control" placeholder="Telephone">
												</div>
											</div>
											<div class="d-md-flex">
												<div class="form-group">
													<textarea name="message" id="message" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
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
		</section>

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