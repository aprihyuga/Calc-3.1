<!DOCTYPE html>
<html lang="en">

<head>
	<title>Simulasi Income</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#00CF70">
	<div class="container" style="margin-top:30px;">
		<div class="row">
			<div class="col-xs-12 col-md-3">
			</div>
			<div class="col-xs-12 col-md-6" style="margin-left:10px;margin-right:10px;margin-bottom:30px;">
				<img class="mx-auto d-block" style="align:middle" src="https://moringaku.com/img/logo-trans-white.png" alt="Moringaku">
				<h2 style="text-align:center;color:white;">Simulasi Income</h2>
			</div>
			<div class="col-xs-12 col-md-3">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-3">
			</div>
			<div class="col-xs-12 col-md-6" style="background-color:white;border-radius:15px;margin-left:10px;margin-right:10px;margin-bottom:10px;padding-top:30px;padding-bottom:10px;">
				<div class="container">
					<form action="yearend" method="POST">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Nama" name="nama" required>
						</div>
						<div class="form-group">
							<input type="number" class="form-control" placeholder="Mampu mengajak" name="mengajak" required>
						</div>
            <div class="form-group">
							<input type="number" class="form-control" placeholder="Rata-rata per-orang mampu mengajak" name="rata" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-block">Simulasikan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-3">
		</div>
	</div>
</body>

</html>
