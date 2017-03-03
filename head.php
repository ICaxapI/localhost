<header>
	<a href="/"><img src="../images/logo.png" class="logo" alt="square logo"></a>
	<!-- <form name="search" action="#" method="get" class="form-inline form-search pull-right">
		<div class="input-group">
			<label class="sr-only" for="searchInput">Поиск</label>
			<input class="form-control" id="searchInput" type="text" name="search" placeholder="Поиск">
			<div class="input-group-btn">
				<button type="submit" class="btn btn-primary">GO</button>
			</div>
		</div>
	</form> -->
</header>
<nav class="navbar navbar-default">
	<ul class="nav navbar-nav">
		<li <?php if ($uri == "/index.php/") {echo 'class="active"';} ?>><a href="/index.php/">Новости</a></li>
		<li <?php if ($uri == "/about.php/") {echo 'class="active"';} ?>><a href="/about.php/">О проекте</a></li>
		<li <?php if ($uri == "/partners.php/") {echo 'class="active"';} ?>><a href="/partners.php/">Партнёры</a></li>
		<li <?php if ($uri == "/projects.php/") {echo 'class="active"';} ?>><a href="/projects.php/">Проекты</a></li>
		<li <?php if ($uri == "/careers.php/") {echo 'class="active"';} ?>><a href="/careers.php/">Вакансии</a></li>
		<li <?php if ($uri == "/contact.php/") {echo 'class="active"';} ?>><a href="/contact.php/">Контакты</a></li>
	</ul>
	<?php if (!empty($_SESSION['login']) or !empty($_SESSION['id'])){ echo '<a href="/profile.php/" style="padding-top: 10px; padding-right: 10px;" class="pull-right">Вы вошли как '.$_SESSION['login'].'</a>'; }?>
	
</nav>
<div class="heading">
<?php if ($uri == "/index.php/") {echo '<h1>Новости</h1>';} ?>
<?php if ($uri == "/about.php/") {echo '<h1>О проекте</h1>';} ?>
<?php if ($uri == "/partners.php/") {echo '<h1>Партнёры</h1>';} ?>
<?php if ($uri == "/projects.php/") {echo '<h1>Проекты</h1>';} ?>
<?php if ($uri == "/careers.php/") {echo '<h1>Вакансии</h1>';} ?>
<?php if ($uri == "/contact.php/") {echo '<h1>Контакты</h1>';} ?>
<?php if ($uri == "/profile.php/") {echo '<h1>Профиль</h1>';} ?>
<?php if ($uri == "/newmsg.php/") {echo '<h1>Новое сообщение</h1>';} ?>
<?php if ($uri == "/msg.php/") {echo '<h1>Сообщения</h1>';} ?>
<?php if ($uri == "/exit.php/") {echo '<h1>Выйти</h1>';} ?>
<?php if ($uri == "/") {echo '<h1>Новости</h1>';} ?>
<?php if ($uri == "/login.php/") {echo '<h1>Войти</h1>';} ?>
<?php if ($uri == "/registration.php/") {echo '<h1>Регистрация</h1>';} ?>
</div>