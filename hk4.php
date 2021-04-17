<html>
  <head><meta charset="utf-8"></head>
<body>
  
4. 폼을 이용하여 도형 계산식
<form action="hk1.php" method="get">
1) 삼각형의 밑변과 높이를 입력으로 받아서 면적을 계산해드릴게요.<br>
삼각형의 밑변 크기를 입력하세요: 
<input type="text" name="triangle_width"><br>
삼각형의 높이를 입력하세요: 
<input type="text" name="triangle_height">
<input type="submit"> <br>
</form>

당신이 입력한 숫자:
<?php
    if(isset($_GET["triangle_width"],$_GET["triangle_height"]))
      echo $_GET["triangle_width"].",\n".$_GET["triangle_height"];
?>
<br>

에 대한 삼각형 면적:
<?php
    if(isset($_GET["triangle_width"],$_GET["triangle_height"]))
    {
      $triangle_width = $_GET[triangle_width];
      $triangle_height = $_GET[triangle_height];
      $triangle = $triangle_width*$triangle_height;
      echo $triangle;
    }
?>
<p></p>

<form action="hk1.php" method="get">
2) 직사각형의 가로와 세로를 입력으로 받아서 면적을 계산해드릴게요.<br>
직사각형의 가로를 입력하세요: 
<input type="text" name="oblong_width"><br>
직사각형의 세로를 입력하세요: 
<input type="text" name="oblong_height">
<input type="submit"> <br>
</form>

당신이 입력한 숫자:
<?php
    if(isset($_GET["oblong_width"],$_GET["oblong_height"]))
      echo $_GET["oblong_width"].",\n".$_GET["oblong_height"];
?>
<br>

에 대한 직사각형 면적:
<?php
    if(isset($_GET["oblong_width"],$_GET["oblong_height"]))
    {
        $oblong_width = $_GET["oblong_width"];
        $oblong_height = $_GET["oblong_height"];
        $oblong = $oblong_width*$oblong_height;
        echo $oblong;
    }
?>
<p></p>

<form action="hk1.php" method="get">
3) 원의 반지름을 입력으로 받아서 면적을 계산해드릴게요.<br>
원의 반지름 크기를 입력하세요: 
<input type="text" name="circle_radius">
<input type="submit"> <br>
</form>

당신이 입력한 숫자:
<?php
    if(isset($_GET["circle_radius"]))
      echo $_GET["circle_radius"];
?>
<br>

에 대한 원의 면적:
<?php
    if(isset($_GET["circle_radius"]))
    {
        $_GET["circle_radius"];
        $PI =3.14;
        $circle = 2*$PI*$circle_radius;
        echo $circle;
    }
?>
<p></p>

<form action="hk1.php" method="get">
4) 직육면체의 가로와 세로, 높이를 입력으로 받아서 체적을 계산해드릴게요.<br>
직육면체의 밑변 가로 크기를 입력하세요: 
<input type="text" name="Cuboid_width"><br>
직육면체의 밑변 세로 크기를 입력하세요: 
<input type="text" name="Cuboid_length"><br>
직육면체의 높이를 입력하세요: 
<input type="text" name="Cuboid_height">
<input type="submit"> <br>
</form>

당신이 입력한 숫자:
<?php
    if(isset($_GET["Cuboid_width"],$_GET["Cuboid_length"],$_GET["Cuboid_height"]))
      echo $_GET["Cuboid_width"].",\n".$_GET["Cuboid_length"].",\n".$_GET["Cuboid_height"];
?>
<br>

에 대한 직육면체 체적:
<?php
    if(isset($_GET["Cuboid_width"],$_GET["Cuboid_length"],$_GET["Cuboid_height"]))
    {
        $Cuboid_width = $_GET["Cuboid_width"];
        $Cuboid_length = $_GET["Cuboid_length"];
        $Cuboid_height = $_GET["Cuboid_height"];
        $Cuboid =$Cuboid_width*$Cuboid_length*$Cuboid_height;
        echo $Cuboid;
    }
?>
<p></p>

<form action="hk1.php" method="get">
5) 원형의 반지름과 높이를 입력으로 받아서 체적을 계산해드릴게요.<br>
원형의 반지름 크기를 입력하세요: 
<input type="text" name="cylinder_radius"><br>
원형의 높이를 입력하세요: 
<input type="text" name="cylinder_height">
<input type="submit"> <br>
</form>

당신이 입력한 숫자:
<?php
    if(isset($_GET["cylinder_radius"],$_GET["cylinder_height"]))
      echo $_GET["cylinder_radius"].",\n".$_GET["cylinder_height"];
?>
<br>

에 대한 원형 체적:
<?php
    if(isset($_GET["cylinder_radius"],$_GET["cylinder_height"]))
    {
        $cylinder_radius = $_GET["cylinder_radius"];
        $cylinder_height = $_GET["cylinder_height"];
        $PI =3.14;
        $cylinder =$cylinder_radius*$cylinder_radius*$cylinder_height*$PI;
        echo $cylinder;
    }
?>
<p></p>

<form action="hk1.php" method="get">
6) 구의 반지름을 입력으로 받아서 체적을 계산해드릴게요.<br>
구의 반지름 크기를 입력하세요: 
<input type="text" name="phrase_radius">
<input type="submit"> <br>
</form>

당신이 입력한 숫자:
<?php
    if(isset($_GET["phrase_radius"]))
      echo $_GET["phrase_radius"];
?>
<br>

에 대한 구의 체적:
<?php
    if(isset($_GET["phrase_radius"]))
    {
        $phrase_radius = $_GET["phrase_radius"];
        $PI =3.14;
        $phrase =4.0/3*$PI*$phrase_radius*$phrase_radius*$phrase_radius;
        echo $phrase;
    }
?>
<br>
  
</body>
</html>
