<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student.posao</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Prijavi se</h5>
            <form class="form-signin" action="perform-login.php" method="POST">
              <div class="form-label-group">
				 <label for="inputEmail">Korisničko ime</label>
				 <input type="text" id="inputEmail" class="form-control" placeholder="Korisničko ime" required autofocus name="username">
               </div>
				<br>
              <div class="form-label-group">
				<label for="inputPassword">Lozinka</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Lozinka" required name="password">
                
              </div>
			  <?php
				if(isset($_SESSION['error']) && $_SESSION['error']==1){
					echo "<span style='color:red;'>Korisničko ime i/ili lozinka nisu točni.</span>";
					unset($_SESSION['error']);
				}
			  ?>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Zapamti lozinku</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Prijavi se</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>