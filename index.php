<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listing Generator</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;1,100;1,200;1,300&display=swap" rel="stylesheet">
</head>

<body>
	<!-- HEADER -->
	<nav class="navbar navbar-light bg-light mb-5">
		<div class="container-fluid"><span class="navbar-brand mb-0 h2"><strong>Marketplace</strong> Listing Generator</span> </div>
	</nav>
	<!-- END OF HEADER -->
	<div class="container">
		<div class="row">
			<!-- COLUMN LEFT -->
			<div class="col-md-6">
				<!-- START OF CARD -->
				<div class="card" style="width:80%;">
					<div class="card-body">
						<h5 class="card-title">Create Listing</h5>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
							<div class="form-group" mt-2>
								<input type="text" class="form-control" type="text" name="unitType" placeholder="Type"> </div>
							<br>
							<div class="form-group" mt-2>
								<input type="text" class="form-control" name="unitCond" placeholder="Condition"> </div>
							<br>
							<div class="form-group" mt-2>
								<input type="text" class="form-control" name="unitYear" placeholder="Year"> </div>
							<br>
							<div class="form-group" mt-2>
								<input type="text" class="form-control" name="unitMake" placeholder="Brand or Make"> </div>
							<br>
							<div class="form-group" mt-2>
								<input type="text" class="form-control" name="unitModel" placeholder="Model"> </div>
							<br>
							<div class="form-group" mt-2>
								<input type="text" class="form-control" name="unitHours" placeholder="Hours"> </div>
							<br>
							<div class="form-group" mt-2>
								<input type="text" class="form-control" name="unitMiles" placeholder="Miles"> </div>
							<br>
							<div class="form-group" mt-2>
								<input type="text" class="form-control" name="unitPrice" placeholder="Price"> </div>
							<br>
              <div class="row justify-content-center">
							<button type="submit" class="btn btn-danger  mt-2" style="width:50%" name="submit">Generate</button>
            </div>
						</form>
					</div>
				</div>
				<!-- END OF FORM -->
			</div>
			<!-- COLUMN RIGHT -->
			<div class="col-md-6 mt-2">

				<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{


    // Collecting Values
    $type = $_POST["unitType"];
    $condition = $_POST["unitCond"];
    $year = $_POST["unitYear"];
    $make = $_POST["unitMake"];
    $model = $_POST["unitModel"];
    $price = $_POST["unitPrice"];



    // Display Listing
    if (empty($type))
    {

    }
    else
    {
        echo "<strong>TYPE: </strong>" . ucfirst($type) . "</p>";
    }

    if (empty($condition))
    {

    }
    else
    {
        echo "<strong>CONDITION: </strong>" . ucfirst($condition). "</p>";
    }

    if (empty($year))
    {

    }
    else
    {
        echo "<strong>YEAR: </strong> $year</p>";
    }

    if (empty($make))
    {

    }
    else
    {
        echo "<strong>MAKE: </strong>" . ucfirst($make) . "</p>";
    }

    if (empty($model))
    {

    }
    else
    {
        echo "<strong>MODEL: </strong>" . ucfirst($model) . "</p>";
    }



    if (empty($price))
    {

    }
    else
    {
        echo "<strong>PRICE: </strong> \$" . number_format($price) . "</p>";
    }

    echo "<p>*** For questions concerning this or other ".strtolower($type)."'s, call or stop by. For fastest response, call us at 334-872-2132. Messages are answered but usually take longer. Thank you for your patiences. Financing is available to those who qualify.<br>";
    echo "<br><strong>CONTACT INFO</strong><br>";
    echo "PHONE: </strong>334-872-2132<br>";
    echo "ADDRESS: </strong>2925 Citizens Pkwy, Selma AL</p>";
    echo "<strong>DISCLAIMER</strong>";
    echo "<br>Listings created by Jim Lambert for David Hulsey at Alabama Powersports. We strive to provide the most accurate, up-to-date information. Occasionally, but rarely listings mispriced or mislisted and therefore should always be checked via phone or in person to  finalize any offered.</p>";

    echo "</div></div>";


} ?>
			</div>
			<!-- END OF COLUMN -->
		</div>

    <br>
    <br>
</body>
<footer>
	<!-- JavaScript Bundle with Popper -->
	<script src="/js/bootstrap.bundle.min.js"></script>
</footer>

</html>
