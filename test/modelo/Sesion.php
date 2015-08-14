<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sesion
 *
 * @author Edgardo
 */
require_once './Usuario.php';

class Sesion {
    private $timeStampLogin;
    private $timeStampLogout;
    private $tipoSesion;
    private $usuario;

    
    function __construct($timeStampLogin, $timeStampLogout, $tipoSesion, $usuario) {
        $this->timeStampLogin = $timeStampLogin;
        $this->timeStampLogout = $timeStampLogout;
        $this->tipoSesion = $tipoSesion;
        $this->usuario = $usuario;
    }
    
    function getTimeStampLogin() {
        return $this->timeStampLogin;
    }

    function getTimeStampLogout() {
        return $this->timeStampLogout;
    }

    function getTipoSesion() {
        return $this->tipoSesion;
    }

    function getUsuario(){
        return $this->usuario;
    }

    function setTimeStampLogin($timeStampLogin) {
        $this->timeStampLogin = $timeStampLogin;
    }

    function setTimeStampLogout($timeStampLogout) {
        $this->timeStampLogout = $timeStampLogout;
    }

    function setTipoSesion($tipoSesion) {
        $this->tipoSesion = $tipoSesion;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
}