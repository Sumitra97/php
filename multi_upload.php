<!DOCTYPE html>
<html>
<head>
	<title>Multiple file Handling in PHP</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Student Registration</h1>
		<form enctype="multipart/form-data" action="handle_multi_upload.php?id=1001&ss=ff&gg=ff" method="post">
			<input type="hidden" name="id" value="2002">


			<div class="row">
				<div class="col-md-4">
					<label>Photos:</label>
				</div>
				<div class="col-md-8">
					<input type="file" class="form-control" name="photos[]" multiple="">
				</div>
			</div>


			<div class="row" style="margin-top: 20px;">
				<div class="col-md-12 text-center">
					

					<button class="btn btn-primary">
					Upload </button>

				</div>
			</div>

			
	
		</form>
	</div>
</body>
</html>