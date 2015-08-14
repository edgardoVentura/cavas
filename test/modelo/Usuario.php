<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Edgardo
 */
class Usuario {
    private $nombre;
    private $refrendo;
    private $tipoUsuario;
    private $estado;
    
    function __construct($nombre, $refrendo, $tipoUsuario, $estado) {
        $this->nombre = $nombre;
        $this->refrendo = $refrendo;
        $this->tipoUsuario = $tipoUsuario;
        $this->estado = $estado;
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getRefrendo() {
        return $this->refrendo;
    }

    function getTipoUsuario() {
        return $this->tipoUsuario;
    }

    function getEstado() {
        return $this->estado;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setRefrendo($refrendo) {
        $this->refrendo = $refrendo;
    }

    function setTipoUsuario($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }
    
}
