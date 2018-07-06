<meta charset="utf-8">
<body>
	<center>
		<form action="xuli.php" method="post">
			<?php echo "Form Đăng kí"; ?>
			<table>
				<tbody>
					<tr>
						<td>Tên: </td>
						<td> <input type="text" name="ten" size="25"></t>
					</tr>

					<tr>
						<td>Địa chỉ: </td>
						<td><input type="text" size="25" name="diachi"></td>
					</tr>

					<tr>
						<td>Nghề Nghiệp</td>
						<td><input type="text" size="25" name="nghe"></td>
					</tr>

					<tr><td>Ghi chú:</td>
						<td><textarea name="ghichu" cols="5" rows="5" style="overflow-y: hidden;"></textarea> </td>
						

					</tr>

					<tr>
						<td></td>
						<td><input type="reset" name="xoa" value="xóa"></td>
						<td><input type="submit" name="dangki" value="đăng kí"></td>

					</tr>

				</tbody>
			</table>

		</form>

	</center>
</body>