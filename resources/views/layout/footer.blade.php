<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Adresse</h2>
              <div class="block-23 mb-3">
                <ul>
                  @foreach ($contact as $item)
                  @if($item->pays == 'senegal')
                <li><span> <strong>{{$item->pays}}</strong></span></li>
                  <li><span class="icon icon-map-marker"></span><span class="text">{{$item->adresse}}</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{$item->telephone}}</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{$item->telephone}}</span></a></li>
                  @endif
                  @endforeach
          
                </ul>
              </div>
              <div class="block-23 mb-3">
                <ul>
                    <li><span><strong> Cote D'ivoire</strong></span></li>
                  <li><span class="icon icon-map-marker"></span><span class="text">Rue 0001 Dakar Senegal</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2 mb-0">Rejognes Nous</h2>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Liens</h2>
            <ul class="list-unstyled">
              <li><a href="/home"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
              <li><a href="/apropos"><span class="ion-ios-arrow-round-forward mr-2"></span>A Propos</a></li>
              <li><a href="/domaine"><span class="ion-ios-arrow-round-forward mr-2"></span>Domaines d'activites</a></li>
              <li><a href="/projet"><span class="ion-ios-arrow-round-forward mr-2"></span>Projet</a></li>
              <li><a href="/formation"><span class="ion-ios-arrow-round-forward mr-2"></span>Formation</a></li>
              <li><a href="/contact"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">S'inscrire a nos news!</h2>
            <form action="#" class="subscribe-form">
              <div class="form-group">
                <input type="text" class="form-control mb-2 text-center" placeholder="Votre Adresse email">
                <input type="submit" value="S'inscrire" class="form-control submit px-3">
              </div>
            </form>
          </div>
         
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>
  


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/jquery.animateNumber.min.js"></script>
<script src="/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/js/google-map.js"></script>
<script src="/js/main.js"></script>
  
</body>
</html>