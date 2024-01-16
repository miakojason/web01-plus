<?php
if(isset($_SESSION['login'])){
	to("back.php");
}
if(isset($_GET['error'])){
	echo "<script>alert('{$_GET['error']}')</script>";
}

?>
<div class="di diw" style=" border:#999 1px solid;  margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
<?php include "./front/marquee.php";?>
	<div style="height:32px; display:block;"></div>
	<!--正中央-->
	<!-- <form method="post" action="./api/check.php" >
		<p class="t botli">管理員登入區</p>
		<p class="cent">帳號 ： <input name="acc" autofocus="" type="text"></p>
		<p class="cent">密碼 ： <input name="pw" type="password"></p>
		<p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
	</form> -->
</div>
<form action="./api/check.php" method="post">
    <div class="imgcontainer">
      <img src="./img/pp.jpg" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <label for="uname"><b>帳號 ：</b></label>
      <input type="text" placeholder="Enter Username" name="acc" type="text"required>
  
      <label for="psw"><b>密碼 ：</b></label>
      <input type="password" placeholder="Enter Password" name="pw" required>
	  <input value="送出" type="submit"><input type="reset" value="清除">
      <button type="submit">送出</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>