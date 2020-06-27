<!--
 * Author : Rohit Shakya
 * Date   : June-2020
 * Editor : Sublime text
 * Local server: Xampp
 * Title : PHP based Mailer System  
 -->
 <?php session_start();
 $_SESSION["msg"];
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Rohit Shakya">
  <meta name="keywords" content="Mail, Server, Email">
  <meta name="title" content="Mailer System">
  <meta name="description" content="Php based mailer system">

  <title>Mailer System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">
  <link href="css/signin.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="https://myaccount.google.com/lesssecureapps?pli=1">Mailer System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  
  <div class="container" >
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto"><br><br>
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Mailer<?php echo $_SESSION["msg"];?></h5>
            <form class="form-signin" action="/mail.php" method="POST">
              <div class="form-label-group">
                <input type="text" name="sender" id="inputEmail" class="form-control"  required autofocus>
                <label for="inputEmail">Sender's Email</label>
              </div>
              <div class="form-label-group">
                <input type="password" name="pass" id="inputEmail" class="form-control"  required autofocus>
                <label for="inputEmail">Password</label>
              </div>
              <div class="form-label-group">
                <input type="text" name="receiver" id="inputEmail" class="form-control"  required autofocus>
                <label for="inputEmail">Receiver's Email</label>
              </div>
              <div class="form-label-group">
                <input type="text" name="subject" id="inputEmail" class="form-control"  required autofocus>
                <label for="inputEmail">Subject</label>
              </div>
              <div class="form-label-group">
              <textarea name="msgBody" class="form-control" placeholder="Mail Body"></textarea>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label  for="customCheck1"><a href="https://myaccount.google.com/lesssecureapps?pli=1">Please click here first and allow less secure apps</a></label>
              </div>

              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Send</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Php based Mailer System | Rohit Shakya 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

