<html>

<head>
    <title>T-Calc</title>
</head>

<body>

<h1>Tables Calculator</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Number: <input type="text" name="fnumber">
  Count: <input type="text" name="fcount">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $number = $_POST['fnumber'];
$count = $_POST['fcount'];

echo "<h2>".$number . " Tables!" . "<br>"."</h2>";

for ($i=1; $i<=$count; $i++)
{
$multi = $i * $number;
echo $number." * ". $i . " = ".$multi;
echo"<br>";
} 

}
?>

</body>
</html>