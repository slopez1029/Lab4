<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>The Watch Store</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<style>	
	.p: {align: center}
	</style>
</head>

<body>

	<div id="page-wrap">

		<h1>The Watch Store</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];

            $pass = $_POST['pass'];

	        
            $totalCorrect = 0;
            $cost1 = 0;
            $cost2 = 0;
            $cost3 = 0;
            $cost4 = 0;
            $cost5 = 0;
            $cost6 = 0;
            $total = 0;
            $shipping = " ";
            
            if ($answer1 != "") { $cost1 = 39.99 * $answer1; }
            if ($answer2 != "") { $cost2 = 49.99 * $answer2; }
            if ($answer3 != "") { $cost3 = 45.99 * $answer3; }
            if ($answer4 != "") { $cost4 = 79.99 * $answer4; }
            if ($answer5 != "") { $cost5 = 59.99 * $answer5; }
            if ($answer6 == "A") {$cost6 = 0; $shipping = "7 Day";}
            if ($answer6 == "B") {$cost6 = 5; $shipping = "3 Day";}
            if ($answer6 == "C") {$cost6 = 50; $shipping = "Overnight";}
            
            $total = $cost1 + $cost2 + $cost3 + $cost4 + $cost5 + $cost6;
            			
            echo "<div id='results'>Receipt</div>";
            echo "<p> Welcome! Your password is: </p> $pass";
			echo "<br>";
			echo "<br>";
			echo "<br>";
            echo"                                     
					
<table align = 'right' width = 175%>
  <tr>
    <th></th>
    <th> Quantity </th> 
    <th> Cost Per Item </th>  
    <th> Subtotal </th>  
  </tr>
  <tr>
    <th>Automatic</th>
    <td align = 'center'>$answer1</td>
    <td align = 'center'>$39.99</td>
    <td align = 'center'>$$cost1</td>
    
  </tr>
  <tr>
    <th>Chronograph</th>
    <td align = 'center'>$answer2</td>
    <td align = 'center'>$49.99</td>
    <td align = 'center'>$$cost2</td>
  </tr>
  <tr>
    <th>Diver Watch</th> 
    <td align = 'center'>$answer3</td>
    <td align = 'center'>$45.99</td>
    <td align = 'center'>$$cost3</td>
  </tr>
  <tr>
    <th>Italian Design</th>
    <td align = 'center'>$answer4</td>
    <td align = 'center'>$79.99</td>
    <td align = 'center'>$$cost4</td>
  </tr>
  <tr>
    <th>Military Watch</th>
    <td align = 'center'>$answer5</td>
    <td align = 'center'>$59.99</td>
    <td align = 'center'>$$cost5</td>
  </tr>  
  <tr>
    <th>Shipping</th>
    <td></td>
    <td>$shipping</td>    
    <td align = 'center'>$$cost6</td>
  </tr>  
  <tr>
    <td></td>
    <th>Total</th>
    <td></td>    
    <td align = 'center'>$$total</td>
  </tr>  
</table>
		

					";
        ?>	
	</div>
	


</body>

</html>
