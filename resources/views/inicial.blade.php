@extends('common.mdb-fullpage')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
  <!--Main Navigation-->
  <body>
<header>

<head>
  
  
 <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <!-- Container wrapper -->
  <div class="container-fluid">
    
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="\">
        <img
          src="/imagens/logo1.png"
          height="60"
          alt="MDB Logo"
          loading="lazy"
          
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="\">Pagina principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\produtos">Cardapio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\contato">Encomendas</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->


<div class="view intro-2">
  <div class="full-bg-img">
    <div class="mask rgba-black-light flex-center">
      <div class="container text-center white-text">
        <div class="white-text text-center wow fadeInUp">
          <h1 class="welcome_content_heading">SONHO POR SONHO</h1>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>

</header>


<!--Main Navigation-->

<div class="container">

      
      <section class="section mt-5 pb-3 wow fadeIn">

        <!--Grid row-->
        <div class="row">
          <div class="col-md-12">
            <!-- Card -->
            <div class="card card-cascade wider reverse">

              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img class="#">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <h2 class="text-center my-5 text-center h3 pt-3"><br><br><br>Muito mais que uma padaria, aqui você realiza seus sonhos!</h2>
      </section>    
      <hr class="mb-5 mt-4">      
      <section class="section extra-margins pb-3 wow fadeIn" data-wow-delay="0.3s">       
        <h2 class="text-center my-5 text-center h3 pt-3">Encomende nossas delicias</h2>
      <hr class="mb-5 mt-4"> 

        <div class="row">

          
          <div class="col-lg-4 col-md-12 mb-4">

           
            <div class="card">
             
              <div class="view overlay">
                <img src="/imagens/paes.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>
              <!--/.Card image-->
              <!--Card content-->
              <div class="card-body">
                <!--Social shares button-->
                <a class="activator mr-3"></a>
                <!--Title-->
                <h5 class="card-title">Pãezinhos </h5>
                <hr>
                <!--Text-->
                <p class="card-text">Reserve pães para suas confraternizações </p>
                <a class="link-text">
                  <h5><a class="nav-link" href="\produtos">Veja mais<i class="fas fa-chevron-right"></i></a></h5>
                </a>
              </div>
              <!--/.Card content-->
            </div>
            <!--/.Card Light-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card Light-->
            <div class="card">
              <!--Card image-->
              <div class="view overlay">
                <img src="/imagens/bolo.jpeg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>
              <!--/.Card image-->
              <!--Card content-->
              <div class="card-body">
                <!--Social shares button-->
                <a class="activator mr-3"></a>
                <!--Title-->
                <h5 class="card-title">Bolos</h5>
                <hr>
                <!--Text-->
                <p class="card-text">Encomende bolos com tamanho e sabores de sua preferencia</p>
                <a class="link-text">
                  <h5><a class="nav-link" href="\produtos">Veja mais <i class="fas fa-chevron-right"></i></a></h5>
                </a>
              </div>
              <!--/.Card content-->
            </div>
            <!--/.Card Light-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card Light-->
            <div class="card">
              <!--Card image-->
              <div class="view overlay">
                <img src="/imagens/baguete.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask"></div>
                </a>
              </div>
              <!--/.Card image-->
              <!--Card content-->
              <div class="card-body">
                <!--Social shares button-->
                <a class="activator mr-3"></a>
                <!--Title-->
                <h5 class="card-title">Mini baguetes</h5>
                <hr>
                <!--Text-->
                <p class="card-text">Nossas deliciosas baguetes com inumeros recheios</p>
                <a class="link-text">
                  <h5><a class="nav-link" href="\produtos">Veja mais <i class="fas fa-chevron-right"></i></a></h5>
                </a>
              </div>
              <!--/.Card content-->
            </div>
            <!--/.Card Light-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Blog v.2-->

      

      <!--Section: Comments list-->
      <section class="mb-4 pt-5 wow fadeIn" data-wow-delay="0.3s">

        <!--Main wrapper-->
        <div class="comments-list text-center text-md-left mb-5">
          <div class="text-center mb-4">
            <h3 class="font-weight-bold pt-3 mb-5">Nossas avaliações</h3>
          </div>
          <!--First row-->
          <div class="row mb-4">
            <!--Image column-->
            <div class="col-sm-2 col-12 mb-md-0 mb-3">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (9).jpg" class="avatar rounded-circle z-depth-1-half">
            </div>
            <!--/.Image column-->

            <!--Content column-->
            <div class="col-sm-10 col-12">
              <a>
                <h4 class="font-weight-bold">Francisco Mezzenga</h4>
              </a>
              <div class="mt-2">
                <ul class="list-unstyled">
                  <li class="comment-date"><i class="fas fa-clock"></i> 15/02/2022</li>
                </ul>
              </div>
              <p class="grey-text"><i>"Eu simplesmente amo o queijo quente de vcsss!!!"</i></p>
            </div>
            <!--/.Content column-->

          </div>
          <!--/.First row-->

          <!--Second row-->
          <div class="row mb-4">
            <!--Image column-->
            <div class="col-sm-2 col-12 mb-md-0 mb-3">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="avatar rounded-circle z-depth-1-half">
            </div>
            <!--/.Image column-->

            <!--Content column-->
            <div class="col-sm-10 col-12">
              <a>
                <h4 class="font-weight-bold">Aline Sanches</h4>
              </a>
              <div class="mt-2">
                <ul class="list-unstyled">
                  <li class="comment-date"><i class="fas fa-clock"></i> 12/07/2022</li>
                </ul>
              </div>
              <p class="grey-text"><i>"Sempre quando chego sou bem atendida, sabem até o meu lugar preferido hahaha #amoo"</i></p>
            </div>
            <!--/.Content column-->

          </div>
          <!--/.Second row-->

          <!--Third row-->
          <div class="row mb-4">

            <!--Image column-->
            <div class="col-sm-2 col-12 mb-md-0 mb-3">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (10).jpg" class="avatar rounded-circle z-depth-1-half">
            </div>
            <!--/.Image column-->
            <!--Content column-->
            <div class="col-sm-10 col-12">
              <a>
                <h4 class="font-weight-bold">Gabi Godoi</h4>
              </a>
              <div class="mt-2">
                <ul class="list-unstyled">
                  <li class="comment-date"><i class="fas fa-clock"></i> 05/05/2022</li>
                </ul>
              </div>
              <p class="grey-text"><i>"Frequento o lugar desde criança. Essa padaria faz parte da minha história!"</i>
              </p>
            </div>
            <!--/.Content column-->
          </div>
          <!--/.Third row-->
        </div>
        <!--/.Main wrapper-->

      </section>
      <!--/Section: Comments list-->


     
    </div>

  </main>
  <!--Main Layout-->

  <!--Footer-->
  <footer class="page-footer pt-0">

    <!--Footer Links-->
    <div class="container">

      <!--First row-->
      <div class="row">

        <!--First column-->
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">

          <div class="text-center d-flex justify-content-center my-4">

            <!--Facebook-->
            <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f white-text fa-lg pr-md-4"> </i></a>
            <!--Twitter-->
            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text fa-lg pr-md-4"> </i></a>
            <!--Google +-->
            <a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g white-text fa-lg pr-md-4"> </i></a>
            <!--Linkedin-->
            <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text fa-lg pr-md-4"> </i></a>
            <!--Instagram-->
            <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text fa-lg pr-md-4"> </i></a>
            <!--Pinterest-->
            <a class="p-2 m-2 fa-lg pin-ic"><i class="fab fa-pinterest white-text fa-lg pr-md-4"> </i></a>
          </div>

        </div>
        <!--/First column-->

      </div>
      <!--/First row-->

    </div>
    <!--/Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
      <div class="container-fluid">
        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/Footer-->

  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <script>
    $(document).ready(() => {
      new WOW().init();
    });

  </script>
</body>

</html>

@endsection('content')