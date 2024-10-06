<?php
include_once '../controller/PropertyController.php';
include_once '../bean/Property.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

$property = new Property();
$property->Titulo = $data->titulo;
$property->Description = $data->description;
$property->Ubicacion = $data->ubicacion;
$property->Price = $data->price;
$property->Imagen = $data->imagen;

$propertyController = new PropertyController();
$result = $propertyController->addProperty($property);

if ($result) {
    echo json_encode(['success' => true, 'message' => 'Propiedad agregada exitosamente']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al agregar propiedad']);
}
?>