<?php 
try
{
$connection = new PDO('mysql:host=localhost;dbname=projetphp','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
die('erreur'.$e->getMessage());

}

?>