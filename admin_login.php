<html>
	<head><meta charset="utf-8">
		<title>PRPL</title>
		<link rel="stylesheet" type="text/css" href="adminlogin.css">
		<link rel="icon" type="img" href="Gambar/admin_avatar.png"">
	</head>
	<body style="font-family: arial; color: black;">
	<div class="laman">
		<div class="header">
			<h1 class="judul"><font face="Comic Sans MS" color="black"><b>PENGANTAR REKAYASA PERANGKAT LUNAK</b></font></h1>
		</div>
		<font face="arial" color="gold">
		<center>
			<?php
				$tgl = date('l, j F Y ');
				echo $tgl;
			?>
		</center></font>
			<center><p><h2>Login Admin</h2><hr></p></center>
		<div class="content"><br>
			<center>
			<div class="form"><br>
				<img class="avatar" src="Gambar/admin.png"><br><br>
					<form action="login.php" method="post">
						<p>Username</p>
						<input type="text" name="username" placeholder="Username">
						<p>Password</p>
						<input type="password" name="password" placeholder="Password">
						<input type="submit" value="Login" name="login">
					</form>
			</div>
			</center>
		</div><br><br><br><br>
			<div class="footer">
	    		<p style="color: black; text-align: center;">&copy;2018 Muhamad Fahmi. 1600018159. Teknik Informatika.-Universitas Ahmad Dahlan-<hr></p>
			</div>
	</div>
</body>
</html>