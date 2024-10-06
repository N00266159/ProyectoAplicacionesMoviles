<?php
include_once '../dao/UserDAO.php';

class UserController {
    private $userDAO;

    public function __construct() {
        $this->userDAO = new UserDAO();
    }

    public function login($user, $password) {
        return $this->userDAO->login($user, $password);
    }
}
?>