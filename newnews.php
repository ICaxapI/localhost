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
				<form action="/newnewsadd.php/" method="post">
					<label>Текст новости<br></label>
					<textarea maxlength="1000" name="area" class="form-control" rows="5" cols="30" style=" max-width: 100%; min-width: 100%;"></textarea>
					<input type="submit" name="sumbit" class="btn btn-primary" style="width: 100%; margin-bottom: 10px;" value="Отправить">
				</form>
			</section>
		</div>
	</div>
	<?php
		include 'footer.php'; 
	?>
  </body>
</html>