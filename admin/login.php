<?php
 
$nombre = $_POST['nombre'];
if($nombre == 'becapitalsadminq12w3e'){
$dbhost = 'localhost';
$dbuser = 'onintera_becap';
$dbpass = '1q2w3e4r';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('onintera_becapitals');
    
$query = "SELECT rut, nombre, mail, telefono, nombre_empresa, rutE, sitio_web, inversion, fecha FROM usuarios AS u JOIN usuarios_empresas AS ue ON u.ID = ue.ID_usuarios JOIN empresas AS e ON ue.ID_empresas = e.ID";   
$consulta = mysql_query($query, $conn);

$out = '<table border="1"><tr>';
$out .= '<td>RUT</td><td>NOMBRE</td><td>MAIL</td><td>TELEFONO</td><td>NOMBRE EMPRESA</td><td>RUT EMPRESA</td><td>SITIO WEB</td><td>INVERSION</td><td>FECHA</td>';
$out .='</tr>';

while($fila = mysql_fetch_assoc($consulta)){
    $out .= '<tr><td>'.$fila['rut'].'</td>';
    $out .= '<td>'.$fila['nombre'].'</td>';
    $out .= '<td>'.$fila['mail'].'</td>';
    $out .= '<td>'.$fila['telefono'].'</td>';
    $out .= '<td>'.$fila['nombre_empresa'].'</td>';
    $out .= '<td>'.$fila['rutE'].'</td>';
    $out .= '<td>'.$fila['sitio_web'].'</td>';
    $out .= '<td>'.$fila['inversion'].'</td>';
    $out .= '<td>'.$fila['fecha'].'</td></tr>';
} 
$out .= '</table>';
 
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=boletas.xls");
 
// Add data table
echo $out; 
exit;
    
    
}else{
    echo 'No tienes acceso';   
}

?>

