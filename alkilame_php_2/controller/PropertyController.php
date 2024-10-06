<?php
include_once '../dao/PropertyDAO.php';

class PropertyController {
    private $propertyDAO;

    public function __construct() {
        $this->propertyDAO = new PropertyDAO();
    }

    public function getProperties() {
        return $this->propertyDAO->getProperties();
    }

    public function addProperty($property) {
        return $this->propertyDAO->addProperty($property);
    }
}
?>