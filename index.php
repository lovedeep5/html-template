<!DOCTYPE html>
<html>

<head>
	<title>Template</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<link rel="stylesheet/less" type="text/css" href="./less/styles.less" />
	<script src="//cdn.jsdelivr.net/npm/less@3.13"></script>
</head>
<body class="home">
<?php require_once './modules/header.php' ?>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<h1>Heading 1</h1>
			<hr>
			<h2>Heading 2</h2>
			<hr>
			<h3>Heading 3</h3>
			<hr>
			<h4>Heading 4</h4>
			<hr>
			<h5>Heading 5</h5>
			<hr>
			<h6>Heading 6</h6>
			<hr>
			<span> <a href="#" class="btn-link">Learn More</a></span>
			<hr>
			</div>
		</div>
	</div>
</div>

	<?php require_once './modules/services.php' ?>
	<?php require_once './modules/testimonials.php' ?>
	<?php require_once './modules/footer.php' ?>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
	</script>
</body>

</html>