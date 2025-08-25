<?php
    echo "Solution of Question 1:<br>";
    $length=5;
    $width=2;
    echo "length = $length <br>";
    echo "width = $width <br>";
    echo "The area of a Rectangle = length × width =". ($length*$width) ."<br>";
    echo "The perimeter of a Rectangle = 2 × (length + width) = ".(2*($length+$width))."<br>";
    echo "<br>";

    echo "Solution of Question 2:<br>";
    $amount=5000;
    echo "amount = $amount <br>";
    echo "VAT = 15% of the amount = ".(.15*$amount)."<br>";
    echo "<br>";

    echo "Solution of Question 3:<br>";
    $number=5;
    echo "number = $number <br>";
    if($number%2==0)
    {
        echo "Number is even<br>";
    }
    else
    {
        echo "Number is odd<br>";
    }
    echo "<br>";

    echo "Solution of Question 4:<br>";
    $a=1;
    $b=3;
    $c=5;
    echo "The numbers are $a, $b, $c<br>";
    echo "The largest number = ";
    if($a>$b && $a>$c)
    {
        echo "$a<br>";
    }
    elseif($b>$a && $b>$c)
    {
        echo "$b<br>";
    }
    else
    {
        echo "$c<br>";
    }
    echo "<br>";

    echo "Solution of Question 5:<br>";
    echo "Odd numbers between 10 to 100 are<br>";
    for($i=10;$i<=100;$i++)
    {
        if($i%2!=0)
        {
            echo "$i, ";
        }
    }
    echo "<br>";
    echo "<br>";

    echo "Solution of Question 6:<br>";
    $arr=[1,5,9,7,5,3,0,8];
    echo "The array elements are<br>";
    foreach($arr as $value)
    {
        echo "$value, ";
    }
    echo "<br>";
    $val=3;
    echo "value = $val<br>";
    $check=false;
    foreach($arr as $value)
    {
        if($value == $val)
        {
            $check=true;
            break;
        }
    }
    if($check)
    {
        echo "The value is available in the array<br>";
    }
    else
    {
        echo "The value is not available in the array<br>";
    }

    echo "<br>";

    echo "Solution of Question 7:<br>";
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            echo "*";
        }
        echo "<br>";
    }
    for($i=1;$i<=3;$i++)
    {
        for($j=1;$j<=4-$i;$j++)
        {
            echo "$j ";
        }
        echo "<br>";
    }
    $char="A";
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            echo "$char ";
            $char++;
        }
        echo "<br>";
    }

    //////////dde

?>