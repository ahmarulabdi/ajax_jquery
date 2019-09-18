<!DOCTYPE html>
<html>
<head>
	<title>hal 97 ajax counter</title>
</head>
<body>

	<button id="buttonCount">
		Count
	</button>
	<div class="tampil"></div>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"/>
	<script type="text/javascript">
		$(function () {
			var i = 0;
			$("#buttonCount"),click(function () {
				$.ajax({
					url : 'hitung.php',
					type : "get",
					data : {count : 1},
					success : function (resp) {
						i = resp;
						console.log(resp);
						$(".tampil").append(" "+resp);
					},
					error : function (resp) {
						alert('tidak dapat memproses');
					}
				})
			});
		})
	</script>

</body>
</html>