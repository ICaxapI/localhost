<aside class="col-md-7">
	<ul class="list-group submenu">
		<li class="list-group-item <?php if ($uri == "/profile.php/") {echo "active";} ?>"><a href="/profile.php/">Профиль</a></li>
		<li class="list-group-item <?php if ($uri == "/newmsg.php/") {echo "active";} ?>""><a href="/newmsg.php/">Написать сообщение</a></li>
		<li class="list-group-item <?php if ($uri == "/msg.php/") {echo "active";} ?>""><a href="/msg.php/">Входящие сообщения</a></li>
		<li class="list-group-item <?php if ($uri == "/exit.php/") {echo "active";} ?>""><a href="/exit.php/">Выйти</a></li>
	</ul>
	<div class="panel panel-primary">
		<div class="panel-heading">Моё рабочее место</div>
		<div class="panel-body">
			<img src="/images/map.png" class="img-responsive" alt="Our offices">
		</div>
	</div>
</aside>