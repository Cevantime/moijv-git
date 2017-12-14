<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moi JV</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Moi JV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="newgame.php">Ajout d'un jeu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Moi JV</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">RPG</a>
            <a href="#" class="list-group-item">FPS</a>
            <a href="#" class="list-group-item">Puzzle Game</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
		  <h2>Ajout d'un jeu</h2>
          <form method="POST" action="newgame.php">
			<div class="form-group">
				<label>Titre</label>
				<input type="text" name="title" class="form-control"/>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea name="description" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Catégorie</label>
				<select name="category" class="form-control">
					<option value="FPS">FPS</option>
					<option value="RPG">RPG</option>
					<option value="Puzzle Game">Puzzle Game</option>
				</select>
			</div>
			<div class="form-group">
				<label>Image</label>
				<input type="file" name="image" class="form-control"/>
			</div>
			<div class="form-group">
				<input type="submit" name="Ajouter" class="btn btn-primary" value="Ajouter"/>
			</div>
		  </form>

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Moi JV 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>