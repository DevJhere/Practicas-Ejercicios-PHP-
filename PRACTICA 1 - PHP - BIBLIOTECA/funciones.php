<?php

//Funcion formatear precio de centimos a euros
function formatearPrecio(int $centimos): string
{

    $euros = $centimos / 100;

    return number_format($euros, 2, ",", ".") . "€"; //Formateo el precio en numeros con comas y puntos y euros
}