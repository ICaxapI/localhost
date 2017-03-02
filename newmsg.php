<?php
	$uri = $_SERVER['REQUEST_URI'];
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
				<div class="jumbotron">
					<blockquote>
						<p>
							&ldquo;Что Вы ожидали увидеть, заходя сюда? Этот сайт сделан за 5 дней, не стоит ожидать чего-то очень классного.&rdquo;
						</p>
						<small>Александр глазков, создатель сайта</small>
					</blockquote>
				</div>
			</section>
		</div>
	</div>
	<?php
		include 'footer.php'; 
	?>
  </body>
</html>