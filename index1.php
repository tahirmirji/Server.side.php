

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

echo $marks['First']['Chem'];






?>
