<?php
if (isset($_SESSION['login'])) {
	to("back.php");
}
if (isset($_GET['error'])) {
	echo "<script>alert('{$_GET['error']}')</script>";
}
?>

			<?php include "./front/marquee.php"; ?>
	
<form action="./api/check.php" method="post">
	<div class="imgcontainer ">
		<img src="./img/maxresdefault.jpg" style="height:100%;width:50%;" alt="Avatar" class="avatar">
	</div>
	<div class="container">
		<label for="uname"><b>佛之法號:</b></label>
		<input type="text" placeholder="嗡（ong）、嘛（ma）、呢（ni）、叭（bei）、咪（mei）、吽（hong）" name="acc" type="text" required>

		<label for="psw"><b>佛之秘藏:</b></label>
		<input type="password" placeholder="嗡（ong）、嘛（ma）、呢（ni）、叭（bei）、咪（mei）、吽（hong）" name="pw" required>

		<button type="submit">進入佛海</button>
		<label>
			<input type="checkbox" checked="checked" name="remember"> 色既是空?空既是色?
		</label>
	</div>


	<div class="container bg-danger ">
		<button type="button" class="cancelbtn">返回紅塵</button>
		<span class="psw"><a href="#">忘記自我?</a></span>
	</div>
</form>
