<?php

echo "<h2>Functions:</h2>";
echo "----------------------------------------------------------------------<br>";
echo "<h2>Q1:</h2>";
$Myarray = array(1,2,3,4,5,6,7,8,9,10);
function deleteodd($array){

    foreach( $array as $key => $value ) {
        if( $value % 2 != 0 ) {
            unset($array[$key]);
        }
    }
    echo '<pre>';
    var_dump( $array );
    echo '</pre>';
}

deleteodd($Myarray);
?>
<?php
echo "----------------------------------------------------------------------<br>";
echo "<h2>Q2:</h2>";
$MyArray = array('Hi','Mohamad');


?>
<?php

echo "----------------------------------------------------------------------<br>";
echo "<h2>Q3:</h2>";
    echo "<br>";

function isPrime($number) {

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
$number = 15;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
<?php
echo "<br><br>----------------------------------------------------------------------<br>";
echo "<h2>Q4:</h2>";
function fuctrial($no){
    $myarray = array();
    for($i = 1; $i<=$no;$i++){
        if($no%$i ==0){
            $myarray[]=$i;
        }
    }
    echo "the factorial of a number $no Are:";
    echo '<pre>';
    var_dump($myarray);
}
fuctrial(20);
?>
<?php
echo "<br>----------------------------------------------------------------------<br>";
echo "<h2>Q5:</h2>";
$Myarray = array(1,2,3,4,5);
$secondarray = array(2,2,2,2,);
function multi($array , $array2){
    array_map($array);
}
?>
<?php
$array1 = array(2,2, 2);
$array2 = array(1, 2, 3, 4);
function multipartArrays($array1, $array2) {
    $result = array();

    $count1 = count($array1);
    $count2 = count($array2);
    $count = min($count1, $count2);

    for ($i = 0; $i < $count; $i++) {
        $result[] = array($array1[$i] * $array2[$i]);
    }

    return $result;
}

$result = multipartArrays($array1, $array2);

print_r($result);

?>