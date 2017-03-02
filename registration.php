<?php
	$uri = $_SERVER['REQUEST_URI'];
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Square</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/styles.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Oswald:400,300" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="wrapper container">
		<?php
			include 'head.php'; 
		?>
		<div class="row">
			<?php
				include 'aside.php'; 
			?>
			<section class="col-md-17">
				<form action="/save_user.php/" method="post">
					<div class="form-group">
            			<div class="col-lg-10">
		    				<label>Ваш логин:<br></label>
		    				<input class="form-control" name="login" type="text" size="15" maxlength="15">
		    			</div>
		    		</div>
					<div class="form-group">
            			<div class="col-lg-10">
						    <label>Ваш пароль:<br></label>
						    <input class="form-control" name="password" type="password" size="15" maxlength="15">
						</div>
					</div>
					<div class="form-group">
            			<div class="col-lg-10">
            				<br>
		    				<input class="btn btn-primary" type="submit" name="submit" value="Зарегистрироваться">
		    			</div>
		    		</div>
				</form>
			</section>
		</div>
	</div>
	<?php
		include 'footer.php'; 
	?>
  </body>
</html>