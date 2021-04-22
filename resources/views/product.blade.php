<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bibliothèque Savan</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/business-casual.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/product.css')}}">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="home.html">Accueil
            </a>
          </li>
         
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products">Produits</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store">Stock</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section">

     <div class= " beige">
        <div class="science"> 
           <select name="TYPE" id="TYPE" type="text" style="height:80px; width:300px" >
           <option value="TYPE">TYPE   ({{$count}})</option>
           
           @foreach($datas as $data)
           <optgroup label="{{$data['nom_type']}}"></optgroup>
           @foreach($data['livres'] as $livre)
           <option value="{{$livre->id}}">{{$livre->book_name}}</option>
           @endforeach
           @endforeach
           </select>
        
        </div>

        <div class="auteur"> 
           <select name="AUTEUR" id="AUTEUR" type="text" style="height:80px; width:300px;" >
           <option value="AUTEUR">AUTEUR  </option>
           @foreach($products as $product)
           <optgroup label="{{$product['nom_auteur']}}">
           @foreach($product['stores'] as $store)
           <option value="{{$store->id}}">{{$store->book_name}}</option>
           @endforeach
           @endforeach
           </select>
        </div>
     </div>
   
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
