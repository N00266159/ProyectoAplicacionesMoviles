<?php
include_once '../controller/PropertyController.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

header('Content-Type: application/json');

$propertyController = new PropertyController();
$properties = $propertyController->getProperties();

echo json_encode($properties);
?>