

<?php
// BODMAS
// Brackets of div Mul Add Sub
// Ex: Answer = 4 - (10/2-2*2)
// Answer = 4 - (5-2*2)
// Answer = 4 - (5-4)
// Answer = 4 - (1)
// Answer = 3


    // $variable = "name";
    // $literally = "My $variable will not print";
    // print($literally); print("<br/>");

    // $literally = "My $variable will print";
    // print($literally); print("<br/>");

    // $literally = 10;
    // print($literally); print("<br/>");

    // $literally = 3.142;
    // print($literally); print("<br/>");

//     function Afunction(&$myvar)
//     {
//         $myvar = 10;

//     }

// $outvar = 5;

// echo "Before Function call: $outvar <br/>";

// Afunction($outvar);

// echo "After function call: $outvar ";

// $numbers = array(1,2,3,4,5);
// foreach($numbers as $i)
// {
//     echo "Value of array: $i  <br/>" ;
// }

// $salaries = array("Gopal" => 1, "Abhishek" => 2);

// echo "Rank of Gopal is ".$salaries['Abhishek']."<br/>";


// $marks = array( 
//     "First" => array("Phy"=>50, "Math"=>60, "Chem"=>70),
//     "Second" => array("Phy"=>40, "Math"=>50, "Chem"=>60),
// );

// echo $marks['Second']['Phy'];


// $t = date("H");

// if($t < "20")
// {
//     echo "Have a good day : $t";
// }


// $favcolor = "red";

// switch($favcolor)
// {
//     case "red":
//                 echo "Your fav color is <b>red</b>";
//                 break;
//     case "blue":
//                 echo "Your fav color is blue";
//                 break;
//     case "green":
//                 echo "Your fav color is green";
//                 break;
//     default:
//             echo "Your favorite color is not in options provided";
// }

// echo "Loop Started<br/>";   // once
// for($x = 0 ; $x <= 10 ; $x++ )
// {
//     echo "The number is: $x <br/>";  // 10 times
// }
// echo "Loop Ended <br/>";  // once

// $x=1;

// while($x <= 5)
// {
//     echo "The number is: $x <br/>";
//     $x++;
// }

// $x = 1;

// do{

//     echo "The number is: $x \n";
//     $x++;

// }while($x <= 5);

$colors = array("red","green","blue","yellow","gray");


echo "<select name='cars' id='cars'>";


foreach( $colors as $single_Value_Holder)
{
    // echo "$single_Value_Holder <br>  ";
    echo "<option value='$single_Value_Holder'>$single_Value_Holder</option>";
    
    // echo "<font color= $single_Value_Holder > $single_Value_Holder</font><br>";
}

echo "</select>";



?>
