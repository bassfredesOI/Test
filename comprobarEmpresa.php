<?php
header('Content-type: application/json');
function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

$rutEmpresa = $_POST['rutEmpresa'];

$dbhost = 'localhost';
$dbuser = 'onintera_becap';
$dbpass = '1q2w3e4r';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) { die('Could not connect: ' . mysql_error()); }

$sql = 'SELECT * FROM empresas '.
       'WHERE rutE = "'.$rutEmpresa.'"';

mysql_select_db('onintera_becapitals');

$retval = mysql_query( $sql, $conn );
if(! $retval ) { die('Could not read data: ' . mysql_error()); }

while ($fila = mysql_fetch_assoc($retval)) {
    $data[] = $fila;
}
echo json_encode($data, JSON_PRETTY_PRINT);

mysql_close($conn);

?>