<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexionPostgresql
 *
 * @author laurent
 */
#Importa el modelo de abstracción de la conexión con el SGBD
require_once './AbstractConexionSgbd.php';

class ConexionPostgresql extends AbstractConexionSGBD{
    function __construct($dataBase) {
        parent::setDataBase($dataBase);
    }
    
    protected function closeConnection() {
        
    }

    protected function executeSingleQuery() {
        
    }

    protected function getResultsFromQuery() {
        
    }

    protected function openConnection() {
        
    }
}
