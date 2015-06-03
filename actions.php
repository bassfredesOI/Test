<?php
session_start();
$rut = $_POST['rut'];
$rut = strtolower($rut);
$nombre = $_POST['nombre'];
$nombre = strtolower($nombre);
$mail = $_POST['email'];
$mail = strtolower($mail);
$tel = $_POST['tel'];
$tel = strtolower($tel);
$empresa = $_POST['empresa'];
$empresa = strtolower($empresa);
$rutEmpresa = $_POST['rutEmpresa'];
$rutEmpresa = strtolower($rutEmpresa);
$sitio = $_POST['sitio'];
$sitio = strtolower($sitio);
$inversion = $_POST['inversion'];
$inversion = strtolower($inversion);

$t=time();
$fecha = date("Y-m-d",$t);

$dbhost = 'localhost';
$dbuser = 'onintera_becap';
$dbpass = '1q2w3e4r';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) { die('Could not connect: ' . mysql_error()); }

mysql_select_db('onintera_becapitals');

// INGRESO DE USUARIO
// SE VERIFICA SI NO HAY REGISTROS DEL USUARIO
$sql0 = 'SELECT * FROM usuarios '.
       'WHERE rut = "'.$rut.'"';
$retval0 = mysql_query( $sql0, $conn );
if (mysql_num_rows($retval0) == 0) {
    $sql = 'INSERT INTO usuarios '.
           '(rut, nombre, mail, telefono) '.
           'VALUES ( "'.$rut.'", "'.$nombre.'", "'.$mail.'", "'.$tel.'" )';
    $retval = mysql_query( $sql, $conn );
}

// INGRESO DE EMPRESA
$sql2 = 'INSERT INTO empresas '.
       '(nombre_empresa, rutE, sitio_web, inversion, fecha) '.
       'VALUES ( "'.$empresa.'", "'.$rutEmpresa.'", "'.$sitio.'", "'.$inversion.'", "'.$fecha.'" )';
$retval2 = mysql_query( $sql2, $conn );

// INGRESO RELACION
$sqlSelect = 'SELECT * FROM usuarios '.
       'WHERE rut = "'.$rut.'"';
$retvalSelect = mysql_query( $sqlSelect, $conn );
while ($row = mysql_fetch_assoc($retvalSelect)) {
    $idSelectUSU = $row["ID"];
}

$sqlSelect2 = 'SELECT * FROM empresas '.
       'WHERE rutE = "'.$rutEmpresa.'"';
$retvalSelect2 = mysql_query( $sqlSelect2, $conn );
while ($row2 = mysql_fetch_assoc($retvalSelect2)) {
    $idSelectEmpr = $row2["ID"];
}

$sql3 = 'INSERT INTO usuarios_empresas '.
       '(ID_usuarios, ID_empresas) '.
       'VALUES ( "'.$idSelectUSU.'", "'.$idSelectEmpr.'" )';

$retval3 = mysql_query( $sql3, $conn );

/*
if(! $retval0 ) { die('Could not enter data: ' . mysql_error()); }
if(! $retval ) { die('Could not enter data: ' . mysql_error()); }
if(! $retval2 ) { die('Could not enter data: ' . mysql_error()); }
if(! $retval3 ) { die('Could not enter data: ' . mysql_error()); }
*/



mysql_close($conn);

if($retval3) {
    require './mail.php';
    $nombreFirst = explode(" ", $nombre);
    $_SESSION['nombre'] = ucwords($nombreFirst[0]);
    header("location:./envioCorrecto.php");
}

?>