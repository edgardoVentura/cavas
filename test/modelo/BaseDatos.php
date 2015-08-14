<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sgbd
 *
 * @author laurent
 */
class BaseDatos {
    private $dbHost = 'localhost';
    private $dbUser = 'usuario';
    private $dbPass = 'contraseña';
    private $dbName = 'mydb';
    private $dbSgbd = 'postgresql';

    function __construct($dbHost, $dbUser, $dbPass, $dbName, $dbSgbd) {
        $this->dbHost = $dbHost;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
        $this->dbName = $dbName;
        $this->dbSgbd = $dbSgbd;
    }

    function __constructEmpty() {
        $this->dbHost = null;
        $this->dbUser = null;
        $this->dbPass = null;
        $this->dbName = null;
        $this->dbSgbd = null;
    }
    
    function getDbHost() {
        return $this->dbHost;
    }

    function getDbUser() {
        return $this->dbUser;
    }

    function getDbPass() {
        return $this->dbPass;
    }

    function getDbName() {
        return $this->dbName;
    }

    function getDbSgbd() {
        return $this->dbSgbd;
    }

    function setDbHost($dbHost) {
        $this->dbHost = $dbHost;
    }

    function setDbUser($dbUser) {
        $this->dbUser = $dbUser;
    }

    function setDbPass($dbPass) {
        $this->dbPass = $dbPass;
    }

    function setDbName($dbName) {
        $this->dbName = $dbName;
    }

    function setDbSgbd($dbSgbd) {
        $this->dbSgbd = $dbSgbd;
    }        
}
