<?php include_once "./api/db.php";
if (!isset($_SESSION['login'])) { //如果沒有session紀錄登入，飛回首頁。
	to("index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
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
	<!-- ------------------------------- -->
	<?php
	include "./front/nva.php"
	?>
	<!-- ---------------------- -->
	
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>

	<div class="container-fluid " style="margin-top:15vh; ">
		<div class="row">
			<div class="col-12"><!--上-->
				<?php
				$title = $Title->find(['sh' => 1]);
				?>
				<a title="<?= $title['text']; ?>" href="./index.php">
					<div class="ti " style="height:20vh;background:url(&#39;./img/<?= $title['img']; ?>&#39;); background-size:cover;"></div><!--標題-->
				</a>
			</div>
		</div>
	</div>
	<div id="main">
		
		<div id="ms">
			<div id="lf" style="float:left;">
				<div id="menuput" class="dbor">
					<!--主選單放此-->
					<span class="t botli">後台管理選單</span>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=title">
						<div class="mainmu">
							網站標題管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=ad">
						<div class="mainmu">
							動態文字廣告管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=mvim">
						<div class="mainmu">
							動畫圖片管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=image">
						<div class="mainmu">
							校園映象資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=total">
						<div class="mainmu">
							進站總人數管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=bottom">
						<div class="mainmu">
							頁尾版權資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=news">
						<div class="mainmu">
							最新消息資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin">
						<div class="mainmu">
							管理者帳號管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=menu">
						<div class="mainmu">
							選單管理 </div>
					</a>


				</div>
			
			</div>
			<div class="di" style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
				<!--正中央-->
				<table width="100%">
					<tbody>
						<tr>
							<td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a></td>
							<td><button onclick="location.href='./api/logout.php'" style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
						</tr>
					</tbody>
				</table>
				<!-- ---back-back start-- -->
				<?php
				$do = $_GET['do'] ?? 'title';
				$file = "./back/{$do}.php";
				if (file_exists($file)) {
					include $file;
				} else {
					include "./back/title.php";
				}
				?>
				<!-- ---back-back end-- -->
			</div>
<!-- ----------- -->
<?php include "./front/footer.php"?>
<!-- ----------- -->

</body>

</html>