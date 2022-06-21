<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link href="<?php echo URL; ?>/layouts/assets/images/favicon.ico" rel="shortcut icon">
	<title>PLN</title>
</head>

<body class="text-bg-light p-3">
  <main>

  <nav class="navbar navbar-expand-lg bg-success ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PLN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bolder">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URL; ?>/Dashboard/">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo URL; ?>/Golongan/">Golongan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>/pelanggan/">Pelanggan</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit" href="<?php echo URL; ?>/dashboard/logout/">Logout</button>
      </form>
    </div>
  </div>
</nav>

		<section>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</section>


	</main>
</body>

</html>