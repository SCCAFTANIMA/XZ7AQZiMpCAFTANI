<?php

class mStore{
    
    
    var $storeid;
    var $name;
    var $description;
    var $date;
    var $email_to_contact;
    var $User_id;
    var $Pack_id;
    
    
    function getId() {
        return $this->id;
    }

    function getStoreid() {
        return $this->storeid;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getDate() {
        return $this->date;
    }

    function getEmail_to_contact() {
        return $this->email_to_contact;
    }

    function getUser_id() {
        return $this->User_id;
    }

    function getPack_id() {
        return $this->Pack_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setStoreid($storeid) {
        $this->storeid = $storeid;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setEmail_to_contact($email_to_contact) {
        $this->email_to_contact = $email_to_contact;
    }

    function setUser_id($User_id) {
        $this->User_id = $User_id;
    }

    function setPack_id($Pack_id) {
        $this->Pack_id = $Pack_id;
    }


    
    
    
    
    
    
    
}
