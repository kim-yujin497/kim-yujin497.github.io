<html>
<head><meta charset="utf-8"></head>
<body>

<form action="hk1.php" method="get">
1. Sum, Factorial 계산을 해드릴게요.<br> 
n값을 입력하세요(단 n은 자연수): 
<input type="text" name="num_n1">
<input type="submit"> <br>
</form>

당신이 입력한 숫자: 
<?php
    if(isset($_GET["num_n1"]))
        echo $_GET["num_n1"];
?>
<br>

에 대한 Sum과 Factorial:
<?php
    if(isset($_GET["num_n1"]))
    {
      $_GET["num_n1"];
      $sum = 0;
      $prod = 1;
      
      for($i= $_GET["num_n1"] ; $i>0 ; $i--)
        {
          $sum += $i; 
          $prod *= $i;
        }
      
      echo($sum.",\n");
      echo($prod);
    }
?>
  
</body>
</html>
