<?php
function enkripsi(){
    $input=$_POST["input"];

    $key = array(
        '~' => 'a', '$' => 'b', '^' => 'c', '#' => 'd', '+' => 'e',
        '!' => 'f', '%' => 'g', '_' => 'h', '=' => 'i', '*' => 'j',
        'P' => 'k', 'Q' => 'l', 'R' => 'm', 'S' => 'n', 'T' => 'o' ,
        'A' => 'p', 'B' => 'q', 'C' => 'r', 'D' => 's', 'E' => 't',
        ')' => 'u', '(' => 'v', '{' => 'w', ',' => 'x', '`' => 'y', '"' => 'z',
        'F' => '1', 'G' => '2', 'H' => '3', 'I' => '4', 'K' => '5',
        'U' => '6', 'V' => '7', 'W' => '8', 'X' => '9', 'Y' => '0'
    );

    // $input = strtolower($input);

    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "kata yang akan di enkripsi adalah = " , $input;

    echo "<br><br>";
    echo "hasil deskripsi adalah = " , $enkripsi;

};
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            enkripsi();
        }
?>