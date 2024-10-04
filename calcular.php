<?php
    $num=$_GET['numero'];
    //Esta funcion calcula el cuadrado del numero pasado por el formulario y si es par o impar
    function calcularCuadradoImparPar($num): array{//esto ultimo es para indicar que la funcion devuelve un array
        $cuadrado = $num * $num;
        if($num % 2 == 0){
            return [true,$cuadrado];//devuelve dos valores 
        }else{
            return [false,$cuadrado];
        }
    }
    $resultado=calcularCuadradoImparPar($num);
    if($resultado[0]){
        header("Location:par.php?numero=$num&cuadrado=$resultado[1]");
    }else{
        header("Location:impar.php?numero=$num&cuadrado=$resultado[1]");
    }
?>