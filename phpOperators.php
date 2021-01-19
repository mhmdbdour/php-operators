<?php

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo "Q1 <br> ";
$year = 2024 ;
if ($year % 400 == 0) {
      echo "It is a leap year";
     if ($year % 4 == 0) {
          echo "It is a leap year";
     }else if ($year % 100 == 0){
          echo "It is not a leap year";
      }
    }else {
      echo "It is not a leap year";
        }

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q2 <br> ";
$tem = 19 ;
if ($tem < 20) {
      echo " we are in winter";
    }else{
      echo " the season is summer";
    }

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q3 <br>";
    $num1 = 19 ;
    $num2 = 19 ;
    if ($num1 === $num2) {
          echo $num1*3;
        }else{
          echo $num1 * $num2;
        }
    
 echo "<br> ---------------------------------------------------------------------------------------- <br>";
 echo " Q4 <br>";
$n = 102 ;
if ($n > 100) {
    echo abs($n - 100)*3 ;
}else {
    echo abs($n - 100) ;

}

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q5 <br>";
$n = 10 ;
$m = 20 ;

if ($n + $m === 30 || $n === 30 || $m === 30 ) {
    echo "true";
}

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q6 <br>";
$x = 105 ;
if(abs($x - 100) <= 10 || abs($x - 200) <= 10) {
    echo $x ;
}
 
echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q7 <br>";
$x = 105 ;
if(($x % 7 === 0) || ($x % 3 === 0)) {
    echo $x ;
}


echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q8 <br>";
$x = "if else" ;

  if (strlen($x) > 2 && substr($x,0, 2) == "if")
            {
                echo $x;
            }else {
                
                echo "if ". $x;
            }

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q9 <br>";
$str = "batata" ;
$pos = 0 ;

  if ($pos <= strlen($str))
            {
                echo substr_replace($str,"", $pos , 1);
            }else {
                
                echo 'the position is greater than the length';
            }

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q10 <br>";
$x = 150 ;
$y = 99 ;

  if (100 < $x && $x < 200 &&  100 < $y && $y < 200 )
            {
                echo "yes, both of them {$x} and {$y} in the range of 100-200";
            }elseif ( 100 < $x && $x< 200 ) {
                
                echo 'Only the first one in the range';
            }elseif ( 100 < $y && $y< 200 ) {
                
                echo 'Only the second one in the range';
            }else {
                
                echo 'Non of them in the range';
            }


echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q11 <br>";
$x = 23 ;
$y = 19 ;

if ((20 < $x && $x < 50 ) || (20 < $y && $y < 50 ) )
    {
        if (20 < $x && $x < 50 ) {
            echo $x;
        }else {
            echo $y;

        }
 
    }


echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q12 <br>";
$x = 23 ;
$y = 24 ;
$z = 25 ;

if ( $x > $y || $z > $y )
    {
        if ( $x > $z ) {
            
            echo " {$x} is the largest";
        }else {
            echo " {$z} is the largest";
            }
    }else {
        echo " {$y} is the largest";
    }

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q13 <br>";
$x = 23 ;
$y = 24 ;

if ( abs($x - 100) > abs($y - 100) )
    {
       echo " {$y} is the closest ";
    }elseif ( abs($x - 100) === abs($y - 100)) {
        echo "0";
    }else {
        echo " {$x} is the closest ";
 
    }

echo "<br> ---------------------------------------------------------------------------------------- <br>";
echo " Q14 <br>";
$x = 3 ;
$y = 8 ;

if ( abs($x + $y === 5) || (abs($x - $y) === 5) || ($x === 5 || $y === 5)  )
    {
       echo "Yes";
    }else {
        echo "No";
 
    }



