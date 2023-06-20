<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW-1</title>
</head>
<body>
    
</body>
</html>

<h1>Exercises</h1>
<!-- Question 1 -->
<?php
echo '----------------------------------------------------------------------------------------------<br>Q1: Write a PHP program to check whether the first two characters and last two characters of a give string are same.<br>
:  ';
$string1 = "hello Mohammadhe";
$frsttwo = substr($string1,0,2);
$lasttwo = substr($string1,-2);
if($frsttwo==$lasttwo){
    echo'First and Last two Chars Are Same';
}
else{
    echo'First two Not Same Last Two';
}

?>
<br>
<!-- Question 2 -->
<?php
echo '----------------------------------------------------------------------------------------------<br>Q2:  ';
$string1 = "Go Mohammadhe";
$wordtocheck = 'Go';
$frsttwo = substr($string1,0,2);
if($frsttwo==$wordtocheck){
    echo'Two Words Are Same';
}
else{
    echo'Not Equal';
}
?>
<br>
<!-- Question 3 -->
<?php
echo '----------------------------------------------------------------------------------------------<br>Q3:  ';
$myNimber = 33;
if($myNimber<0){
    echo 'Your Number Isn\'t Positive Number';
} 
else{
    if($myNimber%3==0 || $myNimber%7==0){
        echo'The number is positive number and a multiple of 3 or a multiple of 7';
    }
}
?>

<br>
<!-- Question 4 -->
<?php
echo '----------------------------------------------------------------------------------------------<br>Q4:  ';
$no1 = 30; $no2=180; $no3=25;
$largest =$no1;
if($no2>$largest){
    $largest = $no2;
}
if($no3>$largest){
    $largest = $no3;
}
echo"Largest Number Is: $largest";
?>

<br>
<!-- Question 5 -->
<?php
echo '----------------------------------------------------------------------------------------------<br>Q5:  ';
$no1 = -100;
$no2 = 200;
if(abs(100-$no1)>abs(100-$no2)){
    echo'Second Number is Nearest';
}
elseif(abs(100-$no2)>abs(100-$no1)){
    echo'First Number is Nearest';
}
else{
    echo'0';
}
?>

<br>
<!-- Question 6 -->
<?php
echo '----------------------------------------------------------------------------------------------<br>Q6:  ';

$no1 = 25;
$no2 = 28;
if($no1>0&&$no2>0){
    
    if( (($no1 >=20 )&& ($no1<=30)) && (($no2 >=20 )&& ($no2<=30)) ){
        if($no2> $no1){
            echo 'Second Number is Highest';
        }
        elseif($no1> $no2){
            echo 'First Number is Highest';
        }
        else{
            echo 'First Number And Second Number Are Match';
            
        }
    }
    else{
        echo 'First Number OR Second Number is not Between 20 and 30';
        
    }
}
else{
    echo 'First Number OR Second Number is not Positive';
    
}
?>

<br>
<!-- Question 7 -->
<?php
echo '----------------------------------------------------------------------------------------------<br>Q7:  ';
$n = '1234567891111'; 
$number_to_find = 1;
$counter = 0;
for($i = 0; $i < strlen($n); ++$i)
{
if($n[$i]==$number_to_find){
    $counter++;
}
}
echo"number of occurrences of $number_to_find is:  $counter";
?>

<br>
<!-- Question 8 -->
<?php
echo '----------------------------------------------------------------------------------------------<br>Q8:  ';
$n = 123;
$nstr = $n . "";
$sum = 0;
for ($i = 0; $i < strlen($nstr); ++$i)
{
    $sum += $nstr[$i];
}
echo "Sum of digits of $n = ". $sum;

?>

<br>
<!-- Question 9 -->
<?php
echo '----------------------------------------------------------------------------------------------<br>Q9:  ';
$r='';
$name = "Mohamad";
for($i = mb_strlen($name); $i>=0; $i--){
    $r .= mb_substr($name, $i, 1);
}
echo "$r";
echo "<br'----------------------------------------------------------------------------------------------<br>finished:  ";
