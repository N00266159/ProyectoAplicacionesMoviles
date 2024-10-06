<?php
include_once '../controller/UserController.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

$user = $data->user;
$password = $data->password;

$userController = new UserController();
$result = $userController->login($user, $password);

if ($result) {
    echo json_encode(['success' => true, 'message' => 'Login exitoso', 'user' => $result['User']]);
} else {
    echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);
}
?>