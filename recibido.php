<?php

if (isset($_POST["enviando"])) {

    $edad1=$_POST["edad"];

    if ($edad1<25) {

        echo "Eres un niño";
    } else if ($edad1<=35) {

        echo "Eres un joven";
    } else if ($edad1<=55) {

        echo "Eres un adulto";
    } else if ($edad1<=65) {

        echo "Eres un señor";
    } else {

        echo "Ya estas viejo";
    }
}



?>