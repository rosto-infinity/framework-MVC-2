<?php
// namespace App\Models;

// use PDO;
// use DataBase\Db;

// abstract class Model{

//         protected $db;
//         protected $table;

//         public function __construct(Db $db){
//             $this-> db = $db;
             
//         } 

//         public function all(): array {
//             $stmt= $this->db->getPDO()->query("SELECT * FROM {$this->table} ORDER BY created_at DESC");
//             $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
//             return $stmt->fetchAll();
//         }
    
//         public function findById(int $id): Model{
//             $stmt = $this->db->getPDO()->prepare("SELECT * FROM {$this->table} WHERE id = ?");
//             $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
//             $stmt->execute([$id]);
//             return $stmt->fetch();
//         }
//}