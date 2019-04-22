<?php
    $alumnos = ["Seleccione el alumno....","Romina","Francisco","Luna","Santi"];
    for ($i=0; $i < count($alumnos); $i++) { 
        echo "<h2> $alumnos[$i] </h2> ";
    }
    echo "<hr>";
    foreach ($alumnos as $key => $value) {
        echo "<h2> $key : $value </h2> ";
    }
    echo "<hr>";
    echo "<ul>";
        foreach ($alumnos as $key => $value) {
            echo "<li> $value</li>";
        }
    echo "</ul>";
    echo "<hr>";    
    $ceu = [
        "Profesor1"=>"Herni",
        "Profesor2"=>"Dani",
        "Argentina"=> ["Buenos Aires", "Córdoba", "Santa Fé"],
        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
        "Francia" => ["Paris", "Nantes", "Lyon"],
        "Italia" => ["Roma", "Milan", "Venecia"],
        "Alemania" => ["Munich", "Berlin", "Frankfurt"],
        "Venezuela"=>["Caracas","Valle de la Pascua","Carabobo","Merida"]

];

foreach ($ceu as $key => $value) {
    echo "$key <br>";
    foreach ($value as $key => $value) {
        echo "$key : $value <br>";
    }
}
echo "<hr>";
foreach ($ceu as $key => $value) {
    if(!is_array($value)){
        echo "$key : $value<br>";
    }else{
        echo "$key <br>";
        foreach ($value as $key => $value) {
            echo "$key : $value <br>";
        }
    }    
}

echo "<hr>";
echo "<select>";
    foreach ($alumnos as $key => $value) {
        if ($key==0){
            echo "<option hidden  value='$key'> $value </option>";        
        }else{
            echo "<option  value='$key'> $value </option>";    
        }
        
    }

echo "</select>";
echo "<hr>";
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

echo "<hr>";
for ($i=0; $i <= 10; $i++) { 
    echo "2 x ".$i." = ". 2*$i."<br>";
}
echo "<hr>";
$numero = 5;
echo  ($numero %2==0)?"El número es par":"El número es Impar";
//echo "<h2> $resultado</h2>"//

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTTP - REPASO SUPER FUERTE</title>
</head>
<body>
    <!--https://codeshare.io/2jPxp3-->

</body>
</html>