<?php
    $num=$_GET['numero'];
    function calcularCuadradoImparPar($num): array{
        $cuadrado = $num * $num;
        if($num % 2 == 0){
            return [true,$cuadrado];    
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