<!DOCTYPE html>
<html>
<head>
	<title>Form input ajax hal 98</title>
</head>
<body>
	<form id="myForm">
		<input type="text" name="nama" placeholder="Nama">
		<input type="text" name="jabatan" placeholder="Jabatan">
		<button type="submit" >Simpan</button>
	</form>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$("#myForm").submit(function () {
			console.log($(this).serialize());
			$.ajax({
				url : 'simpan.php',
				type : 'post',
				data : $(this).serialize(),
				success : function (resp) {
					$("[name=nama]").val("");
					$("[name=jabatan]").val("");
					alert(resp);
				},
				error : function () {
					alert('Gagal simpna data');
				}
			})

			return false;
		})
	</script>
</body>
</html>