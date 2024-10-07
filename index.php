<?php
$nombre = "Javier"; //variable tipo String para asignar nombre

echo "Hola, mi nombre es $nombre. <br>";//Impresión directa (sin concatenar)
echo "Hola, mi nombre es ". $nombre ."<br>"; //Impresión concatenando

define("PI", 3.1416);
echo PI. "<br>"; //Muestra 3.1416

$Nombre = "Paco";
echo "Hola, mi nombre es $Nombre <br>";


//Crear nueva clase
class Persona {
    public $nombre;
    public $edad;
    public $direccion;
}
$javi = new Persona();
$javi -> nombre = "Javier";
$javi -> edad = 24;

echo  $javi -> nombre." tiene ".$javi -> edad. " años <br>";

/*Define variables de distintos tipos: un entero, un flotante, una cadena y un
booleano. Luego imprime el valor y tipo de cada variable utilizando la función
var_dump().*/
$edad = 10;
$nombre = "Manu";
$precio = 1.5;
$esBueno = true;
$esCadena = "Soy friki";
echo $edad." ---> "; var_dump($edad);
echo "<br>";
echo $nombre." ---> "; var_dump($nombre);
echo "<br>";
echo $precio." ---> "; var_dump($precio);
echo "<br>";
echo $esBueno." ---> "; var_dump($esBueno);
echo "<br>";
echo $esCadena." ---> "; var_dump($esCadena);
echo "<br>";

/*Crea un array asociativo que contenga información de una persona (nombre,
edad, ciudad).*/
$persona = ["nombre" => "Antonio", "edad" => 30, "ciudad" => "Huelva"];
//echo $persona;
echo "<br>";

/*Define una constante llamada NOMBRE_CURSO con el valor "Programación
PHP" y muestra su valor en pantalla.*/
define("NOMBRE_CURSO", "Programación PHP");
echo NOMBRE_CURSO;
echo "<br>";

/*Crea una función que reciba un array de números y devuelva la suma de
todos sus elementos. Llámala con un array de ejemplo y muestra el
resultado.*/


/*Declara una variable con el valor null y utiliza la función is_null() para
verificar si la variable tiene valor null.*/


/* Defina dos variables con valores numéricos y realice operaciones aritméticas
básicas (suma, resta, multiplicación, división, módulo).*/


/* Use operadores de comparación para verificar si una variable es mayor,
menor o igual que la otra.*/


/*Usa un operador ternario para determinar si una variable es par o impar.*/


/*Aplica operadores lógicos para verificar si ambas variables son mayores de
10 y muestra un mensaje dependiendo del resultado. */


/*Implementa operadores de incremento y decremento y muestra cómo
cambian los valores de las variables. */


/*Utilice una estructura condicional if-else para verificar si un número es
positivo, negativo o cero. */


/*Utilice un bucle for para imprimir los números del 1 al 10. */


/*Utilice un bucle while que sume los números del 1 al 100 y muestre el
resultado. */


/*Utilice switch para mostrar el día de la semana basado en un número (1-7). */


/*Cree un array de nombres y use foreach para imprimir cada nombre. */


/*Crea un array de 5 elementos (puede ser de frutas, nombres o números).*/


/*Recorre el array con un bucle foreach y muestra cada valor.*/
function imprimirArray($miArray) {
    foreach ($miArray as $esMiArray){
        echo $esMiArray. ",";
    }
    
    echo "<p></p>";
}

//Función para modificar el array
function modificarArray($miArray, $nuevoValor, $posicion) {
    try {
        $miArray[$posicion]=$nuevoValor;
        return $miArray;
    } catch (Exception $ex) {
        return $miArray;
    }
}

//Llamar a función e imprimir array frutas
imprimirArray($frutas);

/*Modifica uno de los elementos del array y vuelve a mostrar el array.*/
$frutas[0]="melón"

//Modificar el array usando la función
$frutas = modificarArray($frutas, "paraguayo",1);

//Llamar a la función e imprimir array y comprobar cambio
imprimirArray($frutas;)

/*Cuenta el número de elementos en el array.*/
echo count($frutas) //No hace falta crear función ya que tenemos el count
echo "<p></p>";

/*Crea un segundo array con otros 3 elementos y únelos al primero.*/
$frutas2 ["plátano","fresa", "maracuya"];
$todasFrutas = array_merge($frutas,$frutas2);
imprimirArray($todasFrutas);

/*Elimina un elemento del array combinado.*/
unset($frutas[1]);
imprimirArray($frutas);

/*Convierte el array final en una cadena de texto usando implode() y muéstralo en
pantalla.*/
$frutasString = implode("****", $frutas);
echo $frutasString; //Imprime manzana, pera

?>