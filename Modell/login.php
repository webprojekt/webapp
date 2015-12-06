<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Teilen von Erinnerungen über die Cloud">
  <meta name="author" content="Besart Pllana">
  
  <title>Login</title>
  
  <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../../View/css/bootstrap.css">
  <link rel="stylesheet" href="../../View/css/signin.css">
  <link rel="stylesheet" href="../../View/css/footer.css">

</head>

<body>
  
  	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				aria-controls="navbar">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../../start.html">Web Technologien</a>
			</div>

			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="../../start.html">Start</a></li>
					<li><a href="../../View/info.html">Info</a></li>
					<li><a href="../../View/contact.html">Kontakt</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
  <!-- end navbar -->
  
  <div class="container">
    <form class="form-signin" action="zettl.html" method="post">
      <h2 class="form-signin-heading">Bitte einloggen</h2>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email Addresse" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Passwort" required>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Angemeldet bleiben
        </label>
      </div>
      <a href="zettl.html">
        <button class="btn btn-lg btn-primary btn-block" href="zettl.html" type="submit">Anmelden</button>
      </a>
    </form>
  </div>  <!-- /container -->

  <footer class="footer">
    <div class="container">
      <p class="text-muted"> &copy; Besart Pllana</p>
    </div>   <!-- /container -->
  </footer>
  
        <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="../../Controller/js/jquery.min.js"></script>
  <script src="../../Controller/js/myscript.js"></script>
  <script src="../../Controller/js/bootstrap.min.js"></script>
</body>

</html>