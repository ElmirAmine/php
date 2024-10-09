<?php

  function helloWorld(){
    echo "Hello World!"
    ; 
  }

  function quiEstLeMeilleurProf(){
    echo "Le prof de programmation Web"
    ; 
  }

  function jeRetourneMonArgument($arg1){
    return $arg1
        ; 
    }
    return jeRetourneMonArgument("abc");
    return jeRetourneMonArgument(123);

    function concatenation($arg1, $arg2){
        echo $arg1 . $arg2
        ; 
    }
    return concatenation("Antoine" , "Griezman");    

  echo concatenation ($arg1, $arg2)
?>
<?php
function concatenationAvecEspace($arg1, $arg2){
    return $arg1 . "  " . $arg2;

}
echo concatenationAvecEspace("Ngolo ", "Kante");
?>
<?php
function somme($num1, $num2){
    $resultat=$num1 + $num2;
    return $resultat ;
}
echo somme(5,5);

<?php
function soustraction($num1, $num2){
    $resultat=$num1 - $num2;
    return $resultat ;
}
echo soustraction(5,5);

?>
<?php
function multiplication($num1, $num2){
    $resultat=$num1 * $num2;
    return $resultat ;
}
echo multiplication(5,5);

?>

<?php
function estIlMajeure($age){
    if ($age >= 18){
    return true;
  } else {
    return false;
  }
}
echo estIlMajeure(5);
echo estIlMajeure(34);

?>
<?php
function plusGrand($num1, $num2) {
    return $num1 > $num2 ? $num1 : $num2;
}
echo plusGrand(10, 20);
?>
<?php
function plusPetit($num1, $num2) {
    return $num1 < $num2 ? $num1 : $num2;
}
echo plusPetit(10, 20);
?>

<?php
function plusPetit($num1, $num2, $num3) {
    return ($num1 < $num2) ? (($num1 < $num3) ? $num1 : $num3) : (($num2 < $num3) ? $num2 : $num3);
}
echo plusPetit(10, 20, 30);

?>

<?php

function premierElementTableau($tableau) {
    return $tableau ? $tableau[0] : null;
}

echo premierElementTableau([10, 20, 30]);
echo premierElementTableau([]) === null ? 'null' : premierElementTableau([]); 
?>
function dernierElementTableau($tableau) {
    
    if (is_array($tableau)) {
        
        $dernierElement = end($tableau); 
        
        return $dernierElement !== false ? $dernierElement : null;
    }
    return null; 
}

echo dernierElementTableau([10, 20, 30]); 
echo dernierElementTableau([]) === null ? 'null' : dernierElementTableau([]); 
?>