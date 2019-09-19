<!DOCTYPE html>
<html>
<head>
	<title>hal 97 ajax counter</title>
</head>
<body>

	<button>Hitung </button>
	<div class="tampil"></div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	
	<script type="text/javascript">
		var i = 0;
		$("button").click(function () {
			$.ajax({
				url : 'hitung.php',
				type : 'get',
				data : {count : i },
				success : function (data) {
					i = data;
					$(".tampil").append(" "+ data );
				},
				error : function () {
					console.log("data tidak ditemukan");
				}
			})
			// body...
		})
			
		
	</script>


</body>
</html>