<!DOCTYPE html>
<html>
<head>
   <tittle>Tax</tittle>

   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<p>link for Incometax <marquee><a href="https://www.incometaxindiaefiling.gov.in/home">click on income tax website</a></marquee>
	<div id="container">
	<h1>INCOME TAX RETURNS</h1>
	<img src="i.jpg" class="e">
	<form action="cal.php"method="POST">
			Name:<br><input type="text" name="name" required placeholder="name" class="one"><br>
	Salary:<br><input type="float,number" name="Salary"  required placeholder="Salary" class="one"><br>
    Tax:<br><input type="number" name="Tax" required placeholder="Tax" class="one"><br>
    Pf:<br><input type="number" name="Pf" required placeholder="Pf" ><br>
    <br>
	<input type="submit" value="submit">
</form>
</div>
</body>
</html>
