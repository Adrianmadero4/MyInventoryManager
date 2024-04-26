<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Pricing</title>
    <link href="<?php echo base_url('public/assets/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('public/assets/bootstrap.min.js'); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/stylePrecios.css'); ?>">


    



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body class="vsc-initialized">
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
  </symbol>
</svg>


  <div class="container-fluid py-3">

    <div class="container pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Conozca nuestros planes y precios</h1>
      <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
      <div class="container text-center mt-4 ">
    </div>
    </div>

  <main class="container">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Gratis</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">0€<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>1 usuario incluido</li>
              <li>2 secciones incluidas</li>
              <li>25 elementos por sección
                <small class="text-muted">(Total 50 artículos)</small> 
              </li>
              <li>Con anuncios</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Registrate gratis </button>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card rounded-3 shadow-sm">
          <div class="bgLim card-header py-3 ">
            <h4 class="my-0 fw-normal">Limitado</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">1,99€<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2 usuarios incluidos</li>
              <li>5 secciones incluidas</li>
              <li>30 elementos por sección
                <small class="text-muted">(Total 150 artículos)</small> 
              </li>
              <li>Sin anuncios</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Contratalo aquí</button>
          </div>
          <div class="py-3 col-12">
            <button type="button" class="btn col-sm-5">Mensual</button>
            <button type="button" class="btn col-sm-5 btn-info">1,99€</button>
          </div>
          <div class="py-3 ">
            <button type="button" class="btn col-sm-5">Anual</button>
            <button type="button" class="btn btn-info col-sm-5">1,99€</button>
          </div>
        </div>
      </div>


      <div class="col">
        <div class="card rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">3.99€<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>6 usuarios incluidas</li>
              <li>10 secciones incluidas</li>
              <li>Elementos ilimitados</li>
              <li>Sin anuncios</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contratalo aquí</button>
          </div>
          <div class="py-3 col-12">
            <button type="button" class="btn col-sm-5">Mensual</button>
            <button type="button" class="btn col-sm-5 btn-primary">1,99€</button>
          </div>
          <div class="py-3 ">
            <button type="button" class="btn col-sm-5">Anual</button>
            <button type="button" class="btn btn-primary col-sm-5">1,99€</button>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">Compare plans</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Free</th>
            <th style="width: 22%;">Pro</th>
            <th style="width: 22%;">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Public</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Private</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Permissions</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Sharing</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Unlimited members</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</div>

</body>
</html>