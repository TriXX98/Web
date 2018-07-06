<meta charset="utf-8">
<?php 
if (isset($_POST["login"])) {
	# code...
	if ($_POST["user"] == NULL || $_POST["password"] == NULL) {
		# code...
		echo "Mời bạn nhập lại User hoặc PassWord";

	}else{
		$name = $_POST["user"];
		$pass = $_POST["password"];
		if ($name == "Nguyễn Văn Trí" && $pass == "123") {
			# code...
			echo "Bạn đã đăng nhập thành công";
		}
		else{
			echo "Bạn đã nhập sai tài khoản hoặc mật khẩu";
		}

		
	}
}
 ?>