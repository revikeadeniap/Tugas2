<?php
function enkripsi(){
    $input=$_POST["input"];
    
    $key = array(
        'a' => '~', 'b' => '$', 'c' => '^', 'd' => '#', 'e' => '+',
        'f' => '!', 'g' => '%', 'h' => '_', 'i' => '=', 'j' => '*',
        'k' => 'P', 'l' => 'Q', 'm' => 'R', 'n' => 'S', 'o' => 'T' ,
        'p' => 'A', 'q' => 'B', 'r' => 'C', 's' => 'D', 't' => 'E',
        'u' => ')', 'v' => '(', 'w' => '{', 'x' => ',', 'y' => '`', 'z' => '"',
        '1' => 'F', '2' => 'G', '3' => 'H', '4' => 'I', '5' => 'J',
        '6' => 'U', '7' => 'V', '8' => 'W', '9' => 'X', '0' => 'Y'
    );

    // $input = strtolower($input);

    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "kata yang di enkripsi adalah = " , $input;

    echo "<br><br>";
    echo "hasil enkripsi adalah = " , $enkripsi;
     
};
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            enkripsi();
        }
?>