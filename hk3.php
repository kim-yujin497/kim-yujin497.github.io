<html>
<head><meta charset="utf-8"></head>
<body>
 
<form action="hk1.php" method="get">
3. n개의 Fibonacci 수열과 비례를 계산해드릴게요.<br>
n값을 입력하세요(단 n은 100이하의 자연수): 
<input type="text" name="num_n3">
<input type="submit"> <br>
</form>

당신이 입력한 숫자:
<?php
    if(isset($_GET["num_n3"]))
        echo $_GET["num_n3"];
?>
<br>

에 대한 Fibonacci 수열과 비례(단, 비례는 소수점 6자리까지 반올림):
<?php
    if(isset($_GET["num_n3"]))
    {
    $a = 1;
    $b = 1;
    $_GET["num_n3"];
 
    for($k = 0; $k < $_GET["num_n3"]; $k++)  //n번 반복 //n개의 피보나치 수열
    {
      echo $a."\n";  //(i)번째 수열 출력
      $c = $b +$a; //$c  //(i+2)번째 수열값 연산  //fi+2 = fi+1 + fi
      
      $a = $b;  //$a   //(i+1)번째 수열 저장
      $b = $c;  //$b   //(i+2)번째 수열 저장
    }
    $proportion =  round(($b/$a),6); //뒤항과 앞항의 비례
    echo ",\n".$proportion;
    }
?> 

</body>
</html>
