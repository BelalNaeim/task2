<?php
//function to print the next char for specific char
function printnextchar($char){
$chars = range('a', 'z');
    $next_char = ++$char;
    if (strlen($next_char) > 1)
    {
        $next_char = $next_char[0];
    }
    echo "Next Character is :".$next_char."\n";
}

printnextchar('a');
echo '<hr>';
//Array
$students = [
    ['name' => 'Root','age' => 20] ,
    ['name' => 'Root2','age' => 25,'gpa' => 3.4] ,
    ['name' => 'Root3','age' => 30]
];
//printing all Array items using key and index
echo 'Name is : '.$students[0]['name'].' '.'& Age is : '.$students[0]['age']."<br>";
echo 'Name is : '.$students[1]['name'].' '.'&  Age is : '.$students[1]['age'].' '.'&  GPA is : '.$students[1]['gpa']."<br>";
echo 'Name is : '.$students[2]['name'].' '.'&  Age is : '.$students[2]['age'].' '."<br>";