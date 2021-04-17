<?php

 $time = time();
 
 $numDay = date('d', $time); //시간을 지정한 형식에 맞게 출력 //일출력
 $numMonth = date('m', $time); //월출력
 $strMonth = date('F', $time); //월출력
 $numYear = date('Y', $time); //년도출력
 $firstDay = mktime(0,0,0,$numMonth,1,$numYear);  //(시,분,초,월,일,년도)
 $daysInMonth = cal_days_in_month(0, $numMonth, $numYear);
 $dayOfWeek = date('w', $firstDay); //$firstDay에서 요일출력
 ?>

 <table>

 <caption><?php echo($strMonth); ?></caption>  
 <thead>
   <tr>
    <th abbr="Sunday" scope="col" title="Sunday"> S </th>
    <th abbr="Monday" scope="col" title="Monday"> M </th>
    <th abbr="Tuesday" scope="col" title="Tuesday"> T </th>
    <th abbr="Wednesday" scope="col" title="Wednesday"> W </th>
    <th abbr="Thursday" scope="col" title="Thursday"> T </th>
    <th abbr="Friday" scope="col" title="Friday"> F </th>
    <th abbr="Saturday" scope="col" title="Saturday"> S </th>
   </tr>
 </thead>

 <tbody>
 <tr>
 <?php
    if(0 != $dayOfWeek) 
    {
      echo('<td colspan="'.$dayOfWeek.'"> </td>'); 
    }
    for($i=1;$i<=$daysInMonth;$i++) 
    {
      if($i == $numDay) 
      { 
        echo('<td id="today">'); 
      } 
      else { echo("<td>"); }

      echo($i);
      echo("</td>");
      if(date('w', mktime(0,0,0,$numMonth, $i, $numYear)) == 6) 
      {
        echo("</tr><tr>");
      }
    }
 ?>
 </tr>
 </tbody>

 </table>
