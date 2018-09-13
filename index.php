<!DOCTYPE html>
<html>
	<head>
		<title>A Simple age calculator by Samuel</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<div class="wrapper">
		<div class="header">
			<img src="logo.png" alt="simple age calculator">

			<form method="POST">
				<select name ="day" required>
					<option value="">Day</option>
					<?php for ($day=01; $day <=31; $day++) { 
						echo "<option value='$day'>$day</option>";
					}?>
				</select>

				<select name = "month" required>
					<option value="">Month</option>
					<?php for ($month=01; $month <=12 ; $month++) { 
						echo "<option value='$month'>$month</option>";					}?>
				</select>

				<select name="year" required>
					<option value="">Year</option>
					<?php for ($year = 2018; $year >= 1810; $year--) { 
						echo "<option value='$year'>$year</option>";
					}?>
				</select>

				<br>
				<input type="submit" name="submit" value="Submit">
				</br>
				<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$day = $_POST['day'];
						$month = $_POST['month'];
						$year = $_POST['year'];
						$age = (date("md", date("u", mktime(0, 0, 0, $day, $month, $year))) > date("md") ? ((date("Y")-$year)-1):(date("Y")-$year));
						echo "<br> You are $age years old</br>";
					}
				?>

				<h2 class="footer">A simple Age Calculator by Samuel Nwankwo</h2>
				<h3>Connect with me on <a href="https://www.twitter.com/saminwankwo">twitter</a></h2>
				<h3>Download Source code on <a href="https://www.github.com/saminwankwo">Github</a></h3>
			</form>
		</div>
	</div>
	</body>
</html>
