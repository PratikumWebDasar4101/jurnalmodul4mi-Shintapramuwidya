<?php
<?php
//$hobi =count($_POST['hobi']);
$hobbi = array($_POST['hobi']);
foreach ($_POST['hobi'] as $hobbi) {
	echo $hobbi.","."<br>";
}

$file = $_FILES["dokumen"];
$nama_file = $file["name"];
$nama_tmp = $file["tmp_name"];
$upload_dir = "upload/";
move_uploaded_file($nama_tmp, $upload_dir.$nama_file);
echo "file berhasil diunggah";
?>
<img src="upload/<?php echo $nama_file; ?>">

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="formawal.html" method="POST">
<input type="Submit" name="delete" value="delete">

		</form>
	</body>
</html>
?>
