<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexionMysql
 *
 * @author laurent
 */
#Importa el modelo de abstracción de la conexión con el SGBD
require_once './AbstractConexionSgbd.php';

class ConexionMysql extends AbstractConexionSGBD{
    protected function closeConnection() {
        
    }

    protected function executeSingleQuery() {
        
    }

    protected function getResultsFromQuery() {
        
    }

    protected function openConnection() {
        
    }

}
