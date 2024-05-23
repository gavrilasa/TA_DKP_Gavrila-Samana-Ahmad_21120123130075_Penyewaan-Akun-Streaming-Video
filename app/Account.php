<?php

$services = array("Netflix", "Disney", "Viu", "Bilibili");
$durations = array(1, 3, 6, 12);

class Account {
    private $service;
    private $username;
    private $password;

    public function __construct($service, $username, $password) {
        $this->service = $service;
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername() {
        return "Username: " . $this->username;
    }
    public function getPass() {
        return "Password: " . $this->password;
    }
}

function generateAccount($service, $duration) {
    $username = $service . uniqid() . "@" . strtolower($service) . ".com";
    $password = uniqid();
    return new Account($service, $username, $password);
}