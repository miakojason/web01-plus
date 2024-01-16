<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top opacity-75" style="height:15vh">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="./icon/Buddha.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
				<!-- Apple -->
			</a>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav me-auto">
					<span class="navbar-text">
						佛
					</span>
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
				</ul>
				<div class="d-flex justify-content-center">
					<?php
					if (isset($_SESSION['login'])) {
					?>
						<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo('back.php')">返回管理</button>
					<?php
					} else {
					?>
						<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; ">Login</button>
						<!-- <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo('?do=login')">管理登入</button> -->
					<?php
					}
					?>
					<div id="id01" class="modal">

						<form class="modal-content animate" action="./api/check.php" method="post">
							<div class="imgcontainer">
								<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
								<img src="./img/maxresdefault.jpg" style="height:80%;width:50%;" alt="Avatar" class="avatar">
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

							<div class="container" style="background-color:#f1f1f1">
								<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">返回紅塵</button>
								<span class="psw"> <a href="#">忘記自我?</a></span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</nav>