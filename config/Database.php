<?php

namespace Config;

use PDO;


class Database {
    private static $pdo;

    static function getPDOInstance(){
        $dsn_sqlite = 'sqlite:'.__DIR__.'/../database/database.db';
        if (!Database::$pdo){
            Database::$pdo = new PDO($dsn_sqlite);
        }
        return Database::$pdo;
    }

    static function initDB() {
        $pdo = Database::getPDOInstance();
        if ($pdo){
            $ddl_sql = file_get_contents(__DIR__.'/../database/ddl.sql');
            Database::$pdo->exec($ddl_sql);
            $dml_sql = file_get_contents(__DIR__.'/../database/dml.sql');
            Database::$pdo->exec($dml_sql);
        }
    }
}


