<?php
namespace App\Models;
use Config\Database;

class Product extends Model{

      public static function all(): array | false {

                $instance = Database::getPDOInstance();
                $stmt =$instance->prepare("SELECT * FROM Product");
                $stmt->execute();
                return $stmt->fetchAll();

              

    }

    public static function find(int $id): array | false {
                $pdo = Database::getPDOInstance();
                $stmt =$pdo->prepare("SELECT * FROM Product where id=:id");
                $stmt->execute(["id"=>$id]);
                return $stmt->fetch();
    }

    public static function save(array $object): bool {
       // return false;
                $pdo = Database::getPDOInstance();
                $stmt =$pdo->prepare("INSERT into Product(libelle,prix,stock,descriptions)values(:libelle,:prix,:stock,:description)");
                $stmt->execute($object);
                return $stmt->fetch();

      
    }

    public static function update(array $object): bool {
                $pdo = Database::getPDOInstance();
                $stmt =$pdo->prepare("UPDATE Product set libelle=:libelle , prix = :prix ,stock=:stock, descriptions=:description where id=:id");
                $stmt->execute($object);
                return  $stmt->fetch();
           


    }

    public static function delete($id): bool {
            $pdo=Database::getPDOInstance();
            $stmt=$pdo->prepare("DELETE from Product where id=:id");
            $stmt->execute(["id"=>$id]);
            return $stmt->fetch();

    }



}

