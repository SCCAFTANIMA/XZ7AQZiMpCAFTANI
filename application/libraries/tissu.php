<?php

class Tissu{
    
    protected $id_tissu;
    protected $name;
    protected $description;
    protected $object;
    
    function getId_tissu() {
        return $this->id_tissu;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getObject() {
        return $this->object;
    }

    function setId_tissu($id_tissu) {
        $this->id_tissu = $id_tissu;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setObject($object) {
        $this->object = $object;
    }


    
    
    
    
    
}
