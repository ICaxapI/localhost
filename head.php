<header>
	<a href="/"><img src="../images/logo.png" class="logo" alt="square logo"></a>
	<form name="search" action="#" method="get" class="form-inline form-search pull-right">
		<div class="input-group">
			<label class="sr-only" for="searchInput">Поиск</label>
			<input class="form-control" id="searchInput" type="text" name="search" placeholder="Поиск">
			<div class="input-group-btn">
				<button type="submit" class="btn btn-primary">GO</button>
			</div>
		</div>
	</form>
</header>s
<nav class="navbar navbar-default">
	<ul class="nav navbar-nav">
		<li <?php if ($uri == "/index.php/") {echo 'class="active"';} ?>><a href="/index.php/">Новости</a></li>
		<li <?php if ($uri == "/about.php/") {echo 'class="active"';} ?>><a href="/about.php/">О проекте</a></li>
		<li <?php if ($uri == "/partners.php/") {echo 'class="active"';} ?>><a href="/partners.php/">Партнёры</a></li>
		<li <?php if ($uri == "/projects.php/") {echo 'class="active"';} ?>><a href="/projects.php/">Проекты</a></li>
		<li <?php if ($uri == "/careers.php/") {echo 'class="active"';} ?>><a href="/careers.php/">Вакансии</a></li>
		<li <?php if ($uri == "/contact.php/") {echo 'class="active"';} ?>><a href="/contact.php/">Контакты</a></li>
	</ul>
</nav>
<div class="heading">
	<h1>О проекте</h1>
</div>