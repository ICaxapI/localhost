<?php
	$uri = $_SERVER['REQUEST_URI'];
	session_start();
	if ($_SERVER['REQUEST_URI'] == "/"){ header('Refresh: 0; /index.php/'); }
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
			<?php
				if (!empty($_SESSION['login']) or !empty($_SESSION['id'])){ echo '<a href="/newnews.php/" type="button" class="btn btn-primary" style="width: 100%; margin-bottom: 10px;">Добавить новость</a>';
				}
				require_once "bd.php";
				$rqst = mysqli_query($db, "SELECT * FROM news");
				$countContent = mysqli_num_rows( $rqst );
				$count = 5;
				$lastpage = 1;
				$biasContent = $countContent;
				while ($biasContent > $count) {
					$biasContent = $biasContent - $count;
					$lastpage = $lastpage + 1;
				}
				if($_SESSION['page'] >= 1) {
					if ($_SESSION['page'] <= $lastpage){ 
						$page = $_SESSION['page'];
					} else {
						$page = $lastpage;
						$_SESSION['page'] = $lastpage;
					}
				} else {
					$page = 1;
					$_SESSION['page'] = 1;
				}
				if($_SESSION['page'] > $lastpage){
					$page = $lastpage;
					$_SESSION['page'] = $lastpage;
				}
				$start = ($countContent - ($page * 5));
				if ($page != $lastpage){
					$request = mysqli_query($db, "SELECT * FROM news ORDER BY id DESC LIMIT {$start}, {$count}");
				} else {
					$start = 0;
					$request = mysqli_query($db, "SELECT * FROM news ORDER BY id DESC LIMIT {$start}, {$biasContent}");
				}
				while($row = mysqli_fetch_assoc($request)) {
					echo '	<div class="jumbotron">
								<blockquote>
									<p>'.$row['text'].'</p>';
									echo "<small>".$row['author'].", ".$row['authortype'].", ".$row['time']."</small>
								</blockquote>
							</div>";
				}
			?>

				<div class="row">
					<form action="/changepage.php/" method="post">
						<div class="col-md-12">
							<input type="submit" name="nextbtn" class="btn btn-primary" style="width: 100%; margin-bottom: 10px;" value="Предыдущая страница">
						</div>
						<div class="col-md-12">
							<input type="submit" name="prevbtn" class="btn btn-primary" style="width: 100%; margin-bottom: 10px;" value="Следующая страница">
						</div>
					</form>
				</div>

			</section>
		</div>
	</div>
	<?php
		include 'footer.php'; 
	?>
  </body>
</html>