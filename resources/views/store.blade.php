<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bibliotheque</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/business-casual.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/store.css')}}">
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
          
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products">Produits</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store">Stock</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section cta">
      <div class="container">

        <!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
  +
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
         
            <form action="{{route('modal')}}" method="post">
              <div class="nom">
              @csrf
                <input  type="text" placeholder="Nom du livre" name="book_name" style>
              </div>
              <div class="date nom">
                <input  type="date" placeholder="Date" name="date">
              </div>
              <div class="pays nom">
                <input  type="text" placeholder="Pays" name="countries">
              </div>
              <div class="type nom">
              <select name="type" id="type">
              @foreach($types as $types)
              <option value="{{$types['id']}}">{{$types['nom']}}</option>
              @endforeach
              </select>
              
              </div>
              
              <select name="auteur" id="auteur">
              
              @foreach($auteurs as $auteur)
              <option value="{{$auteur['id']}}">{{$auteur['nom']}}</option>
              @endforeach
              </select>
                
              <div class=buton>
              <button type="submit" class="btn btn-primary">Envoyer</button>
              </div>
              
            </form>
        
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
<table class="tableau-style">
                        <thead>
                          <tr>
                            <th>Nom du livre</th>
                            <th>Date d'édition</th>
                            <th>Pays</th>
                            <th>Type</th>
                            <th>Nom de l'auteur</th>
                          </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          @foreach($books as $book)
                            <tr>
                              <td> {{$book->book_name}} </td>
                              <td> {{$book->date}}</td>
                              <td>{{$book->country->nom}} </td>
                              <td> {{$book->type->nom}}</td>
                              <td> {{$book->auteur->nom}}</td>
                            </tr>
                            @endforeach
                        </table>
                        </div>            
          </div>
        </div>
    </section>
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Script to highlight the active date in the hours list -->
    <script>
      $('.list-hours li').eq(new Date().getDay()).addClass('today');
    </script>

  </body>

</html>
