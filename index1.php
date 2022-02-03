
<?php
include("index.php");
?>




<!DOCTYPE html>
<html>
<body>
<div class="container shadow-lg p-3 mb-5 bg-white rounded" >
   <div class="row" >
    <div class="col-lg-6">
        <div class="card border border-primary" style="width: 20rem;">

            <div class="card-body">
                <p class="card-text">






<?php
// BODMAS
// Brackets of div Mul Add Sub
// Ex: Answer = 4 - (10/2-2*2)
// Answer = 4 - (5-2*2)
// Answer = 4 - (5-4)
// Answer = 4 - (1)
// Answer = 3


    $variable = "name";
    $literally = "My $variable will not print";
    print($literally); print("<br/>");

    $literally = "My $variable will print";
    print($literally); print("<br/>");

    $literally = 10;
    print($literally); print("<br/>");

    $literally = 3.142;
    print($literally); print("<br/>");

    function Afunction(&$myvar)
    {
        $myvar = 10;

    }

$outvar = 5;

echo "Before Function call: $outvar <br/>";

Afunction($outvar);

echo "After function call: $outvar ";
echo "<hr/>";

$numbers = array(1,2,3,4,5);
foreach($numbers as $i)
{
    echo "Value of array: $i  <br/>" ;
}

$salaries = array("Gopal" => 1, "Abhishek" => 2);

echo "Rank of Gopal is ".$salaries['Abhishek']."<br/>";


$marks = array( 
    "First" => array("Phy"=>50, "Math"=>60, "Chem"=>70),
    "Second" => array("Phy"=>40, "Math"=>50, "Chem"=>60),
);

echo $marks['Second']['Phy'];
echo "<hr/>";

$t = date("H");

if($t < "20")
{
    echo "Have a good day : $t";
}

echo "<hr/>";
$favcolor = "red";

switch($favcolor)
{
    case "red":
                echo "Your fav color is <b>red</b>";
                break;
    case "blue":
                echo "Your fav color is blue";
                break;
    case "green":
                echo "Your fav color is green";
                break;
    default:
            echo "Your favorite color is not in options provided";
}
echo "<hr/>";
echo "Loop Started<br/>";   // once
for($x = 0 ; $x <= 10 ; $x++ )
{
    echo "The number is: $x <br/>";  // 10 times
}
echo "Loop Ended <br/>";  // once
echo "<hr/>";
$x=1;

while($x <= 5)
{
    echo "The number is: $x <br/>";
    $x++;
}
echo "<hr/>";
$x = 1;

do{

    echo "The number is: $x \n";
    $x++;

}while($x <= 5);
echo "<hr/>";
$colors = array("red","green","blue","yellow","gray");


echo "<select name='colors' id='colors'>";


foreach( $colors as $single_Value_Holder)
{
    // echo "$single_Value_Holder <br>  ";
    echo "<option value='$single_Value_Holder'>$single_Value_Holder</option>";
    
    // echo "<font color= $single_Value_Holder > $single_Value_Holder</font><br>";
}

echo "</select>";
echo "<hr/>";
//function definition
function familyName($fname,$lname)
{

    echo "Hey Hi, $fname $lname! <br/>";

}

//function call
familyName("Amit","Sonale");

familyName("Pratham", "Raikar");
echo "<hr/>";

echo str_word_count("Hello there, how are you?");

echo "<br/>";

echo strcmp("computer","Computer");
//C -67   c-97
//=97-67 
//=1

echo "<br/>";

echo stripos("Hello there, how are you?","");

echo "<br/>";

echo strlen("Hello");

echo "<br/>";

echo strtoupper("hello world to upper()");

echo "<br/>";

echo strtolower("HELLO WORLD to lower()");

echo "<br/>";


echo "<hr/>";





?>



</div>
<img src="https://c.tenor.com/aFmIw9i0BnEAAAAd/pc-laptop.gif" class="card-img-top" alt="...">
</div>
</div>
</div>
</div>
</body>

</html>