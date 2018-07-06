<meta charset="utf-8">
<center>
	<?php 
if (isset($_POST['dangki'])) {
	# code...
	if ($_POST["ten"] == null) {
		# code...
		echo "Xin nhập lại tên !!! <br/>";
	}
else {
	# code...
	$_ten =$_POST["ten"];
}
if ($_POST["diachi"] == null) {
	# code...
	echo "Xin nhập lại địa chỉ <br/>";
} else {
	# code...
	$_diachi =$_POST["diachi"];
}
if ($_POST["nghe"] == null) {
	# code...
	echo "Xin nhập lại nghề nghiệp <br/>";
} else {
	# code...
	$_nghe =$_POST["nghe"];
}
if ($_POST["ghichu"] == null) {
	# code...
	echo "Mời bạn nhập lại ghi chú <br/>";
} else {
	# code...
	$_ghichu = $_POST["ghichu"];
}
if ($_ten && $_diachi && $_nghe && $_ghichu ) {
	# code...
	echo "Tên: $_ten <br/>";
	echo "Địa chỉ: $_diachi <br/>";
	echo "Nghe: $_nghe <br/>";
	echo "Ghi chú: $_ghichu <br/>";
}
}
 ?>
	
</center>
