<?php
ob_start();
include "../language/config.php";
?>
<html>
	<head>
		<title><?php echo $lang['dangnhap']?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			html {
				margin: 50px 150px;
				background-color: #c6ffb3;
			}

			* {
				line-height: 1.1;
				box-sizing: border-box;
			}

			body {
				display: flex;
				flex-direction: column;
				align-items: center;
				text-align: center;
				margin: auto;
			}

			input {
				border: 4px solid #c6ffb3;
				height: 40px;
			}

		</style>
        <link rel="stylesheet" href="style.css">  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	</head>
	<body>
		<?php
			require_once("connection.php");
			if (isset($_POST["dangnhap"])) {
				$username = $_POST["username"];
				$password = $_POST["password"];

				$username = strip_tags($username);
				$username = addslashes($username);
				$password = strip_tags($password);
				$password = addslashes($password);

				if ($username == "" || $password =="") {
					echo $lang['loi1'];		
				} else {
					$sql = "select * from users where username = '$username' and password = '$password' ";
					$query = mysqli_query($conn,$sql);
					$num_rows = mysqli_num_rows($query);
					if ($num_rows==0) {
						echo $lang['loi2'];
					} else {
						$_SESSION['username'] = $username;
						$_SESSION['password'] =$password;
						header('Location: ../template1.php');
						exit;
					}
				}
			}
		?>
		
		<form method="POST" action="login.php">
			<br><br><br>
			<h1><?php echo $lang['login2']?></h1>
			<br><br><br>
			<input type="text" name="username" placeholder="Tên người dùng" />
			<br><br><br><br>
			<input type="password" name="password" placeholder="Mật khẩu" />
			<br><br><br><br>
			<input type="submit" name="dangnhap" value="Đăng nhập" />
		</form>
	</body>
</html>