<?php
try{
$conn = new PDO('pgsql:host=127.0.0.1;port=5432;dbname=postgres', 'postgres','postgres');
if($conn) {
echo "database conectado";
}
}catch (PDOException $e){
// report error message
echo $e->getMessage();
}