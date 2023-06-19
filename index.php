<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW-1</title>
    <style>
            .hidden-div {
                background-color: rgb(89, 89, 89);
                color: aliceblue;
                padding: 5px;

                display: none;
    }
        body{
            background-color: rgb(235, 247, 243);
        }
        .namediv{
            text-align: center;
            height: 150px;
            background-color: rgba(82, 168, 222, 0.712);
            border-radius: 15px;            
        }
        .divq{
            background-color: rgba(124, 213, 174, 0.712);
            border-radius: 15px;  
            margin-top: 10px;
            padding: 15px;
        }
        .divq2{
            background-color: rgba(166, 236, 231, 0.712);
            border-radius: 15px;  
            margin-top: 10px;
            padding: 15px;
        }
        button{
            background-color: rgb(116, 251, 222);
            border: 0.2px solid black;
            font-size: 20px;
            margin: 10px;
        }
        button:hover{
            background-color: rgba(219, 255, 240, 0.712);
 
        }
        span{
            padding-left: 10px;
            width: 680px;
            background-color: aliceblue;
            color: black;
            border: 2px solid black;
            border-radius: 10px;
            height: 70px;
            display: block;
        }
        p{
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="namediv">
        <h1> <br>
            Mohamad Omar Wheidy
        </h1>
        <h2>First Assignment</h2>
    </div>
    <div class="divq">
        <h2>Q1: Write a PHP program to check whether the first two characters and last two characters of a give string are same:</h2>
        <button id="button1" onclick="toggleVisibility('button1', 'div1')">Show Answer</button>
        <div id="div1" class="hidden-div">
                        <p>
            $string1 = "hello Mohammadhe";<br>
$frsttwo = substr($string1,0,2);<br>
$lasttwo = substr($string1,-2);<br>
if($frsttwo==$lasttwo){<br>
    echo'First and Last two Chars Are Same';<br>
}<br>
else{<br>
    echo'First two Not Same Last Two';<br>
}<br><br>
<span><br>Output Is: " First and Last two Chars Are Same"</span>
</p>
        </div>
    </div>
    <div class="divq2">
        <h2>Q2: Write a PHP program to check if a given string starts with 'Go' or not. (Don't use "str_starts_with" function):</h2>
        <button id="button2" onclick="toggleVisibility('button2', 'div2')">Show Answer</button>
        <div id="div2" class="hidden-div">
            <p>
                $string1 = "Go Mohammadhe";<br>
                $wordtocheck = 'Go';<br>
                $frsttwo = substr($string1,0,2);<br>
                if($frsttwo==$wordtocheck){<br>
                    echo'Two Words Are Same';<br>
                }<br>
                else{<br>
                    echo'Not Equal';<br>
                }<br><br>
                <span><br>Output Is: " Two Words Are Same"</span>
</p>
        </div>
    </div>
    <div class="divq">
        <h2>Q3: Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7:</h2>
        <button id="button3" onclick="toggleVisibility('button3', 'div3')">Show Answer</button>
        <div id="div3" class="hidden-div">
                        <p>
                            $myNimber = 33; <br>
                            if($myNimber<0){<br>
                                echo 'Your Number Isn't Positive Number';<br>
                            } <br>
                            else{<br>
                                if($myNimber%3==0 || $myNimber%7==0){<br>
                                    echo'The number is positive number and a multiple of 3 or a multiple of 7';<br>
                                }<br>
                            }<br><br>
                            <span><br>Output Is: " The number is positive number and a multiple of 3 or a multiple of 7"</span>
</p>
        </div>
    </div>
    <div class="divq2">
        <h2>Q4: Write a PHP program to check the largest number among three given numbers.:</h2>
        <button id="button4" onclick="toggleVisibility('button4', 'div4')">Show Answer</button>
        <div id="div4" class="hidden-div">
            <p>
                $no1 = 30; $no2=180; $no3=25; <br>
                $largest =$no1;<br>
                if($no2>$largest){<br>
                    $largest = $no2;<br>
                }<br>
                if($no3>$largest){<br>
                    $largest = $no3;<br>
                }<br>
                echo"Largest Number Is: $largest";<br><br>
                <span><br>Output Is: " Largest Number Is: 180"</span>
</p>
        </div>
    </div>
     <div class="divq">
        <h2>Q5: Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal.:</h2>
        <button id="button5" onclick="toggleVisibility('button5', 'div5')">Show Answer</button>
        <div id="div5" class="hidden-div">
                        <p>
                            $no1 = -100; <br>
                            $no2 = 200;<br>
                            if( abs(100-$no1) > abs(100-$no2) ){<br>
                                echo'Second Number is Nearest';<br>
                            }<br>
                            elseif( abs(100-$no2) > abs(100-$no1) ){<br>
                                echo'First Number is Nearest';<br>
                            }<br>
                            else{<br>
                                echo'0';<br>
                            }<br><br>
                            <span><br>Output Is: " Second Number is Nearest"</span>
</p>
        </div>
    </div>
    <div class="divq2">
        <h2>Q6: Write a PHP program to find the larger value from two positive integer values that is in the range 20-30 inclusive or return 0 if neither is in that range.:</h2>
        <button id="button6" onclick="toggleVisibility('button6', 'div6')">Show Answer</button>
        <div id="div6" class="hidden-div">
            <p>
                $no1 = 25; <br>
                $no2 = 28;<br>
                if($no1>0&&$no2>0){<br>
                    
                    if( (($no1 >=20 )&& ($no1<=30)) && (($no2 >=20 )&& ($no2<=30)) ){<br>
                        if($no2> $no1){<br>
                            echo 'Second Number is Highest';<br>
                        }<br>
                        elseif($no1> $no2){<br>
                            echo 'First Number is Highest';<br>
                        }<br>
                        else{<br>
                            echo 'First Number And Second Number Are Match';<br>
                        }<br>
                    }<br>
                    else{<br>
                        echo 'First Number OR Second Number is not Between 20 and 30';<br>
                    }<br>
                }<br>
                else{<br>
                    echo 'First Number OR Second Number is not Positive';<br>
                }<br><br>
                <span><br>Output Is: " Second Number is Highest"</span>
</p>
        </div>
    </div>
     <div class="divq">
        <h2>Q7: Write a PHP program to count the number of occurrences of any digit in a string:</h2>
        <button id="button7" onclick="toggleVisibility('button7', 'div7')">Show Answer</button>
        <div id="div7" class="hidden-div">
                        <p>
                            $n = '1234567891111';  <br>
                            $number_to_find = 1;<br>
                            $counter = 0;<br>
                            for($i = 0; $i < strlen($n); ++$i)<br>
                            {<br>
                            if($n[$i]==$number_to_find){<br>
                                $counter++;<br>
                            }<br>
                            }<br>
                            echo"number of occurrences of $number_to_find is:  $counter";<br><br>
                            <span><br>Output Is: "  number of occurrences of 1 is: 5"</span>
</p>
        </div>
    </div>
    <div class="divq2">
        <h2>Q8: Write a PHP program to return the sum of digits of an integer number.:</h2>
        <button id="button8" onclick="toggleVisibility('button8', 'div8')">Show Answer</button>
        <div id="div8" class="hidden-div">
            <p>
$n = 123; <br>
$nstr = $n . "";<br>
$sum = 0;<br>
for ($i = 0; $i < strlen($nstr); ++$i)<br>
{<br>
    $sum += $nstr[$i];<br>
}<br>
echo "Sum of digits of $n = ". $sum;<br><br>
<span><br>Output Is: " Sum of digits of 123 = 6"</span>

</p>
        </div>
    </div> 
     <div class="divq">
        <h2>Q9: Write a PHP program to reverse any string. (Don't use "strrev" function.):</h2>
        <button id="button9" onclick="toggleVisibility('button9', 'div9')">Show Answer</button>
        <div id="div9" class="hidden-div">
                        <p>
                            $r=''; <br>
                            $name = "Mohamad";<br>
                                for($i = mb_strlen($name); $i>=0; $i--){<br>
                                $r .= mb_substr($name, $i, 1); <br>
                           }<br>
                            echo "$r";<br><br>
                            <span><br>Output Is: " damahoMfinished"</span>
</p>
        </div>
    </div>
    <script>
    function toggleVisibility(buttonId, divId) {
      var div = document.getElementById(divId);
      var button = document.getElementById(buttonId);
      
      if (div.style.display === "none") {
        div.style.display = "block";
        button.textContent = "Hide Answer";
      } else {
        div.style.display = "none";
        button.textContent = "Show Answer";
      }
    }
    </script>
</body>
</html>