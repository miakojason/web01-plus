<?php include_once "./api/db.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>卓越科技大學校園資訊系統</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
</head>

<body>
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>
	<!-- ------------------------------- -->
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top opacity-75 ">
		<div class="container-fluid">
			<a class="navbar-brand" href="javascript:void(0)">Apple</a>
			<a class="navbar-brand" href="#">
				<img src="./imgs/apple-logo.svg" alt="Logo" width="30" height="35" class="d-inline-block align-text-top">
				<!-- Apple -->
			</a>
			<div class="collapse navbar-collapse" id="mynavbar">gi
				<ul class="navbar-nav me-auto">
					<span class="navbar-text">
						當海王
					</span>
					<li class="nav-item">
						<a class="nav-link" href="#page1">你朝巴</a>
					</li>
					<?php
					$mainmu = $Menu->all(['sh' => 1, 'menu_id' => 0]);
					foreach ($mainmu as $main) {
					?><li>
							<div class="mainmu">

								<a href="<?= $main['href']; ?>" style="color:#000; font-size:13px; text-decoration:none;"><?= $main['text']; ?></a>
								<?php
								if ($Menu->count(['menu_id' => $main['id']]) > 0) {
									echo "<div class='mw'>";
									$subs = $Menu->all(['menu_id' => $main['id']]);
									foreach ($subs as $sub) {
										echo "<a href='{$sub['href']}'>";
										echo "<div class='mainmu2'>";
										echo $sub['text'];
										echo "</div>";
										echo "</a>";
									}
									echo "</div>";
								}
								?>
								</a>
						</li>
					<?php
					}
					?>
					<li class="nav-item">
						<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
							乙級必勝
						</button>
				</ul>
				<form class="d-flex justify-content-center">
				<?php
				if (isset($_SESSION['login'])) {
				?>
					<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo('back.php')">返回管理</button>
				<?php
				} else {
				?>
					<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo('?do=login')">管理登入</button>
				<?php
				}
				?>
					<span class="navbar-text">Hi你朝巴&nbsp;&nbsp;:))&nbsp;&nbsp;</span>
					<!-- <input class="form-control me-2" type="text" placeholder="Search"> -->
					<button class="btn btn-outline-primary" type="button">踢燈你</button>
				</form>
			</div>
		</div>
	</nav>
	<!-- <iframe style="display:none;" name="back" id="back"></iframe> -->
	<div class="container-fluid mx-auto bg-danger " style="margin-top: 60px; ">
		<div class="row">
			<div class="col-12" style=""><!--上-->
				<?php
				$title = $Title->find(['sh' => 1]);
				?>
				<a title="<?= $title['text']; ?>" href="./index.php">
					<div class="col-12 ti " style="height:20vh;background:url(&#39;./img/<?= $title['img']; ?>&#39;); background-size:cover;"></div><!--標題-->
				</a>
			</div>
		</div>
	</div>
	<!--front-main-start-->
	<div class="container-fluid mx-auto bg-success">

		<?php
		$do = $_GET['do'] ?? 'main';
		$file = "./front/{$do}.php";
		if (file_exists($file)) {
			include $file;
		} else {
			include "./front/main.php";
		}
		?>

	</div>
	<!--front-main-end-->
	<div class="container-fulid">
		<div class="row">
			<div class="  col-12  bg-info"><!--校園印象區右邊-->
				


				<div class="d-flex" style="width:100%; height: 580px;" class="dbor">
					<span class="t botli">校園映象區</span>
					<div class="cent" onclick="pp(1)"><img src="./icon//up.jpg" alt=""></div>
					<?php
					$imgs = $Image->all(['sh' => 1]);

					foreach ($imgs as $idx => $img) {
					?>
						<div id="ssaa<?= $idx ?>" class="im cent">
							<img src="./img/<?= $img['img']; ?>" style="width:150px;height:103px;border:solid orange;margin:3px">
						</div>
					<?php
					}
					?>
					<div class="cent" onclick="pp(2)"><img src="./icon/dn.jpg" alt=""></div>
					<script>
						//宣告兩個變數，nowpage改1
						var nowpage = 1,
							num = <?= $Image->count(['sh' => 1]); ?> //num=count圖片總數
						function pp(x) {
							var s, t; //宣告兩個變數
							if (x == 1 && nowpage - 1 >= 0) {
								nowpage--;
							} //page-1
							if (x == 2 && (nowpage + 1) <= num * 1 - 3) //(nowpage+1)*3改(nowpage+1)。num*1+3改num*1-3(總數-3=剩下要按的次數才可以看完全部照片)
							{
								nowpage++;
							} //page-+1
							$(".im").hide()
							for (s = 0; s <= 2; s++) {
								t = s * 1 + nowpage * 1;
								$("#ssaa" + t).show()
							}
						}
						pp(2)
					</script>

				</div>
			</div>
		</div>
	</div>


	<div style="clear:both;"></div>
	<div class="container-fulid bg-secondary" style="height: 30vh;"><!--尾-->
		<div class="row d-flex">
			<div class="t col-6 ">
				進站總人數 :<?= $Total->find(1)['total']; ?></div>
			<div class="t col-6 "><?= $Bottom->find(1)['bottom']; ?></div>
		</div>
	</div>
	</div>


</body>

</html>