<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Support</title>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/support-UI.js"></script>
    <link href="css/support-UI.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
        $.feedback({
            ajaxURL: 'store-support-data.php' ,
            html2canvasURL: 'js/html2canvas.js',
            onClose: function() { window.location.reload(); }
        });
        }, false);
    </script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header class="m-5"></header>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="section1">
				  	<h1>Section 1</h1>
				  	<p>Try to scroll this page and look at the navigation bar while scrolling!</p>
				</div>
				<div id="section2">
				  	<h1>Section 2</h1>
				  	<p>Try to scroll this page and look at the navigation bar while scrolling!</p>
				</div>
				<div id="section3">
				  	<h1>Section 3</h1>
				  	<p>Try to scroll this page and look at the navigation bar while scrolling!</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>