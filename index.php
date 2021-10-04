<?php
function printnextchar($char){
$chars = range('a', 'z');
    $next_char = ++$char;
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
    if (strlen($next_char) > 1)
    {
        $next_char = $next_char[0];
    }
    echo "Next Character is :".$next_char."\n";
}

printnextchar('a');
echo '<hr>';

$students = [
    ['name' => 'Root','age' => 20] ,
    ['name' => 'Root2','age' => 25,'gpa' => 3.4] ,
    ['name' => 'Root3','age' => 30]
];

echo 'Name is : '.$students[0]['name'].' '.'& Age is : '.$students[0]['age']."<br>";
echo 'Name is : '.$students[1]['name'].' '.'&  Age is : '.$students[1]['age'].' '.'&  GPA is : '.$students[1]['gpa']."<br>";
echo 'Name is : '.$students[2]['name'].' '.'&  Age is : '.$students[2]['age'].' '."<br>";