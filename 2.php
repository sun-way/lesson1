

<?php
$a =rand(0,100); //пользователя
echo 'Пусть введено пользователем: '. $a;
$a1=1;
$a2=1;

 do {
     if ( $a1>$a)
     {
      echo '<br>задуманное 4исло НЕ входит в интервал';
      break;
     }
     else
         {
             if ($a1 == $a)
                {
                    echo '<br>задуманное 4исло  входит в интервал';
                    break;
                }
                else
                    {
                    $a3 = $a1;
                    $a1 = $a1 + $a2;
                    $a2 = $a3;
                    echo '<br>а1=  ' . $a1;
                    echo '<br>а2=  ' . $a2;
                    echo '<br>а3=  ' . $a3;
                    echo '<br>A(пользователя)=  ' . $a;
                    echo '<br>-----------------------';
                    }
     }
 } while(!(NULL));

?>
