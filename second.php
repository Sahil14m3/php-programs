<html> 
<head> 
    <title>Odd or Even Checker</title> 
</head> 
<body> 
 
<h2>Enter a Number</h2> 
 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <label for="number">Number:</label> 
    <input type="number" id="number" name="number" required> 
    <button type="submit">Check</button> 
</form> 
 
<?php 
     
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                $number = $_POST["number"]; 
 
               if (is_numeric($number)) { 
           
            if ($number % 2 == 0) { 
                echo "<p>The number $number is even.</p>"; 
            } else { 
                echo "<p>The number $number is odd.</p>"; 
            } 
        } else { 
            echo "<p>Please enter a valid numeric value.</p>"; 
        } 
    } 
?> 
 
</body> 
</html>