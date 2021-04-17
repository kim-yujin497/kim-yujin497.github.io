<html>
<head><meta charset="utf-8"></head>
<body>
<form action="hk2.php" method="get">
2. 10이상 100이하의 자연수를 랜덤으로 n개 생성하고, 생성된 결과 및 올림차순으로 Sorting한 결과를 출력해드릴게요.<br> 
n값을 입력하세요(단 n은 1이상): 
<input type="text" name="num_n2"> //텍스트 타입의 입력부분 , num_n2 라는 곳에 저장
<input type="submit"> <br> //클릭시 제출됨
</form>

당신이 입력한 숫자: 
<?php
    if(isset($_GET["num_n2"]))  //해당변수에 입력값이 있다면 //if()  //isset()
        echo $_GET["num_n2"];
?>
<br>

에 대한 생성된 결과 및 올림차순으로 Sorting한 결과: 
<?php
    if(isset($_GET["num_n2"]))
    {
        $_GET["num_n2"];
        for($i = 0 ; $i < $_GET["num_n2"] ; $i++) //n개의 랜덤수 생성하기
          {
            $dada[] = rand( 10 , 100 );  //배열에 // 10에서 100까지의 랜덤수 //저장
          }
        
        $dada1 = implode( '/', $dada );  //implode 배열을 하나의 문자열로 만드는 함수 // '/'으로 구분하여
        echo $dada1.",\n";
        
        sort($dada); //올림차순으로 Sorting하기
        $dada2 = implode( '/', $dada );
        echo $dada2;
    }
?>
  
</body>
</html>
