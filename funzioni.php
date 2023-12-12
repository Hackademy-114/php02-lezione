<?php

//DICHIARAZIONE

// function nomeFunzione($parametriFormali){
//     //istruzioni - return 
// }

//INVOCAZIONE
//nomeFunzione($parametriReali);

function saluta()
{
    echo "ciao! \n";
}

// saluta();
$n = 40;

function sum($n, $l = 8,)
{
    echo $n + $l . "\n";
}
//! parametri di default

//sum(40, 30); //! parametro reale ha la priorità rispetto a quello di default
//sum(3);
// in base alla posizione

// function presentati($nome, $cognome)
// {
//     echo "Ciao, sono $nome $cognome \n";
// }

// presentati('Caldarulo', 'Annalisa');

//sum(10, 8);


//! scope - porzione di codice in cui una variabile è visibile, posso accedere alla variabile
//RICHIAMARE LA VARIABILE COME PARAMETRO REALE
//USARE LE COSTANTI (con attenzione)


// let x = 2;
// function print(){
//     console.log(x);
// }
// print()// output - 2

const NUM = 5; //GLOBALI
function printNumber($n)
{
    echo NUM;
}

$x = 2;
// printNumber($x);

//! passaggio per valore - di default si passa UNA COPIA   del valore, non il valore in sé
//! passaggio per riferimento - si modifica il valore vero e proprio salvato in memoria, è come una chiave per accedere alla memoria
// echo "il valore di x prima della funzione è $x \n"; 
//2
function increment(&$n)
{
    $n = $n + 1;
    echo $n; //3
}

// increment($x);
// echo "il valore di x DOPO la funzione è $x \n"; //2 -3


//! PARAMETRI VARIABILI
// spread operator (...) - si possono inserire quanti parametri vogliamo e vengono assegnati ad un array
function somma(...$numbers)
{
    $result = 0;
    foreach ($numbers as $num) {
        $result += $num; // $result = $result + $num;
        // echo $result . "\n";
    }
    return $result; //! return fa uscire dalla funzione il risultato 
}

$sum = somma(1, 2, 3, 5, 6, 6);
// var_dump($sum);


// function sumEcho()
// {
//     echo 2 + 4 . "\n";
// }
// function sumReturn()
// {
//     return 2 + 4;
// }
// var_dump(sumEcho());
// var_dump(sumReturn());

//! reduce = cicla internamente, il singolo elemento ciclato sarà $el, $acc 
function sumNumbers(...$numbers)
{
    //return
    $risultato = array_reduce($numbers, function ($acc, $el) {
        return $acc = $acc + $el; // $acc+=$el;
    }, 0);
    return $risultato;
}

$somma = sumNumbers(1, 2, 3);
echo $somma;
