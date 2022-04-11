<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="shortcut icon" href="../../Images/logo.png">

    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../style.css" />
</head>
    <body>
        <div class="container">
            <div class="row">
				<div class="col mt-5 text-center">
					<h1>Admin Dashboard</h1>
					<form method="POST" action="dashboard.php">
                        <div class="form-group">
							<label for="category">Catégory :</label>
							<input type="text" class="form-control" placeholder="catégory" id="category" name='category'>
						</div>
						<div class="form-group">
							<label for="titre">Titre :</label>
							<input type="text" class="form-control" placeholder="titre" id="titre" name='titre'>
						</div>
						<div class="form-group">
							<label for="body-content">Contenu :</label>
							<textarea class="form-control" id="body-content" name="body-content" rows="15" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary my-2">Envoyez</button>
					</form>
				</div>
			</div>
        </div>

		<footer class='flex justify-center p-4 text-sm text-dark text-center'>
			Copyright
			<script>
				document.write(new Date().getFullYear())
			</script>
			, Le-BDCI. All Rights Reserved
		</footer>
    </body>
</html>