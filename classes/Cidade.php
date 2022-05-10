<?php

class Cidade{
    
    public static function all(){
        $conn = new PDO("pgsql:dbname=livro;user=postgres;host=localhost;password=12345");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        $result = $conn->query("SELECT * FROM cidade ORDER BY id");
        return $result;
    }


}