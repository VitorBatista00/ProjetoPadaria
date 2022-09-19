@extends('common.mdb-fullpage')

@section('content')

<!DOCTYPE html>
<html lang="en" class="full-height">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
  <body>
<header>

<head>
  
 
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    
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

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand mt-2 mt-lg-0" href="\">
        <img
          src="/imagens/logo1.png"
          height="60"
          alt="MDB Logo"
          loading="lazy"
          
        />
      </a>
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
    </div>    
  </div>
</nav>

<main id="contato">
<div class="container my-5">

	<style>
    .border-top {
      border-top: 5px solid  !important;
      border-top-left-radius: .25rem!important;
    	border-top-right-radius: .25rem!important;
    }
  </style>

  <section class="text-center dark-grey-text mb-5">

    <div class="card">
      <div class="card-body rounded-top border-top p-5">
        
        <h3 class="font-weight-bold my-4">Reserve Já!</h3>

        <form class="mb-4 mx-md-5" action="">

          <div class="row">
            <div class="col-md-6 mb-4">

              <input type="text" id="name" class="form-control" placeholder="Digite seu Nome">

            </div>
            <div class="col-md-6 mb-4">

              <input type="email" id="email" class="form-control" placeholder="Digite seu Email">

            </div>
          </div>

          <div class="row">
            <div class="col-md-12 mb-4">

              <input type="text" id="subject" class="form-control" placeholder="Assunto">

            </div>
          </div>

          <div class="row">
            <div class="col-md-12">

              <div class="form-group mb-4">
                <textarea class="form-control rounded" id="message" rows="3" placeholder="O que desejas?"></textarea>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-info btn-md">Enviar</button>
              </div>

            </div>
          </div>

        </form>
        
      </div>
    </div>

  </section>

</div>
  </main>
@endsection('content')