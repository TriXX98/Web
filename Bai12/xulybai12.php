<meta charset="utf-8">
<?php 
if (isset($_POST["ab"])) {
	# code...
	if ($_POST["a"] == null || $_POST["b"] == null) {
		# code...
		echo "Mời bạn nhập lại a hoặc b";
	} else {
		# code...
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = pow($a, $b);
		echo "Bạn đã nhập đúng </br>";
		echo "Kết quả $a<sup>$b</sup> là: $c";
	}
	
}
 ?>