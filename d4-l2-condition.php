<?php

// if and else condition

$x = 100;

if($x <50) {
 echo "print it";
} else {
echo "not Qualified";
}


echo "<br>";
//elseif condition

$age=250;

if($age<=10 &&$age>0 ){
    echo "You are a baby";
}elseif($age<=20 &&$age>10 ){
    echo "you are a teenager";
}elseif($age<=30 &&$age>20 ){
    echo "you are a Young person";
}elseif($age<=40 &&$age>30 ){
    echo "you are a mid lavel person";
}elseif($age<=50 &&$age>40 ){
    echo "you are in old prestage";
}elseif($age<=60 &&$age>50 ){
    echo "you are an old man";
}elseif($age<=120 &&$age>60 ){
    echo "you are sunper old man";
}else{
    echo"you are not a human";
}

echo "<br>";
//ternary Operator

$y=10;



echo $y>8 ? "Its correct":"its not correct";


//Null safe function
echo "<br>";

echo $mywork??null;

