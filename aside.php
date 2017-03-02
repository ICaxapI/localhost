			<aside class="col-md-7">
				<ul class="list-group submenu">
<?php 
	if (empty($_SESSION['login']) or empty($_SESSION['id'])){
		echo '
					<li class="list-group-item'; if ($uri == "/registration.php/") {echo " active";} echo '"><a href="/registration.php/">Зарегистрироваться</a></li>
					<li class="list-group-item'; if ($uri == "/login.php/") {echo " active";} echo '"><a href="/login.php/">Войти</a></li>';
	} else {
		echo '
					<li class="list-group-item'; if ($uri == "/profile.php/") {echo " active";} echo '"><a href="/profile.php/">Профиль</a></li>
					<li class="list-group-item'; if ($uri == "/newmsg.php/") {echo " active";} echo '"><a href="/newmsg.php/">Написать сообщение</a></li>
					<li class="list-group-item'; if ($uri == "/msg.php/") {echo " active";} echo '"><a href="/msg.php/">Входящие сообщения</a></li>
					<li class="list-group-item'; if ($uri == "/exit.php/") {echo " active";} echo '"><a href="/exit.php/">Выйти</a></li>';
	}
?>
				</ul>
				<div class="panel panel-primary">
					<div class="panel-heading">Моё рабочее место</div>
					<div class="panel-body">
						<img src="/images/map.png" class="img-responsive" alt="Our offices">
					</div>
				</div>
			</aside>'