<?php
// almeno 8 caratteri
// almeno un carattere numerico
//almeno una maiuscola
//almeno un carattere speciale
$password = readline('Inserisci la tua password: ');

//!come il prompt in js - readline()
// echo $password;

// almeno 8 caratteri - strlen - dà la lunghezza di una stringa
// if (strlen($password) >= 8) {
//     echo "password accettata \n";
// } else {
//     echo "password troppo corta \n";
// }

function checkLength($string)
{
    if (strlen($string) >= 8) {
        return true;
    } else {
        return false;
    }
    // return strlen($string) >= 8;
}
checkLength($password);

// elseif (strlen($password) == 8) {
//     echo "password debole \n";
// }

// almeno un carattere numerico
//is_numeric($mixed)
// (is_numeric($password));
// $l = strlen($password);
// for ($i = 0; $i < $l; $i++) {
//     if (is_numeric($password[$i])) {
//         echo "ho trovato un numero \n";
//         // break;
//     }
//     //  else {
//     //     echo "non é  un numero \n";
//     // }
//     // echo "ciao \n";
// }

function checkNumber($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i])) {
            return true;
        }
    }
    return false;
}
(checkNumber($password));

//ALMENO UNA MAIUSCOLA
// ctype_upper($carattere)

// for ($i = 0; $i < $l; $i++) {
//     if (ctype_upper($password[$i])) {
//         echo "ho trovato una maiuscola \n";
//         // break;
//     }
//     //  else {
//     //     echo "non é maiuscola \n";
//     // }
//     // echo "ciao \n";
// }
function checkUpper($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_upper($string[$i])) {
            return true;
        }
    }
    return false;
}

(checkUpper($password));

//carattere speciale
//in_array()
// $specials = ['!', '?', '*', '&'];
// for ($i = 0; $i < strlen($password); $i++) {
//     if (in_array($password[$i], $specials) == true) {
//         echo "ho trovato un carattere speciale \n";
//     }
// }
const SPECIALS = ['!', '?', '*', '&'];

$specials = ['!', '?', '*', '&'];
function checkSpecials($string, $array)
{

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $array) == true) {
            return true;
        }
    }
    return false;
}

// var_dump(checkSpecials($password, $specials));

function checkPassword($string)
{
    // $firstrule = checkLength($string);
    // $secondrule = checkNumber($string);
    // $thirdrule = checkUpper($string);
    // $fourthrule = checkSpecials($string, SPECIALS);
    // if ($firstrule  && $secondrule && $thirdrule && $fourthrule) {
    // echo "password accettata";
    //     return true;
    // } else {
    // echo "password non accettata";

    //     return false;
    // }
    return checkLength($string) && checkNumber($string) && checkUpper($string) && checkSpecials($string, SPECIALS);
}


do {
    $password = readline('Inserisci la tua password: ');
} while (checkPassword($password) ==false);

// if(checkPassword($password)){
//     echo "Password accettata! \n";
// }else{
//     echo "Password non accettata! \n";

// }