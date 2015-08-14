<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexionSGBD
 *
 * @author Edgardo
 */
abstract class AbstractConexionSGBD {
    #Métodos abstractos para los conectores de bases de datos
    private $dataBase;
    
    function getDataBase() {
        return $this->dataBase;
    }
    
    function setDataBase($dataBase) {
        $this->dataBase = $dataBase;
    }
    
    #Conectar a la base de datos
    abstract protected function openConnection();
    #Desconectar de la base de datos
    abstract protected function closeConnection();
    #Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
    abstract protected function executeSingleQuery();
    #Traer resultados de una consulta en un Array
    abstract protected function getResultsFromQuery();
}
