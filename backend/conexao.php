<?php

class Conexao {
    /*
     * Metodo Usado para abrir a conexao com o banco de dados
     */

    static function getConexao() {

        $dns = 'mysql:host=localhost;dbname=paginacao';

        try {
            $con = new PDO($dns, "root", "12345");
        } catch (PDOException $e) {
            echo 'Erro ao Conectar ' . $e->getMessage();
        }
        return $con;
    }
}