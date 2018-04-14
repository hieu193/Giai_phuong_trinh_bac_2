<!DOCTYPE html>
<html>
<head>
	<title>GIẢI PHƯƠNG TRÌNH BẬC 2</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>Giải phương trình bậc 2</h1>
	<?php
	   $result = '';
	   if (isset($_POST['calculate']))
	{
	   $a = $_POST['a'];
	   $b = $_POST['b'];
	   $c = $_POST['c'];
	   $delta = ($b*$b) - (4*$a*$c);

	   if ($a == 0){
	   	  $result = 'Không phải phương trình bậc 2';
	   }

	   else if ($delta < 0){
        $result = 'Phương trình vô nghiệm';
        }
       else if ($delta == 0){
        $result = 'Phương trình nghiệm kép x1 = x2 = ' . (-$b/2*$a);
        }
       else if ($delta > 0 ){  
        $result = 'Phương trình có hai nghiệm phân biệt, x1 = ' . ((-$b + sqrt($delta))/2*$a);
        $result .= ',x2 = ' . ((-$b - sqrt($delta))/2*$a);
        }
    }  
    ?>

        <form method="post" action="">
            <input type="text" style="width: 20px" name="a" value=""/>x<sup>2</sup>
            +
            <input type="text" style="width: 20px" name="b" value=""/>x
            + 
            <input type="text" style="width: 20px" name="c" value=""/>
            = 0
            <br/><br/>
            <input type="submit" name="calculate" value="Kết quả" />
        </form>
    <?php echo "$result"; ?>    
</body>
</html>