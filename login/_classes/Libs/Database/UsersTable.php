<?php

namespace Libs\Database;

use PDOException;

class UsersTable
{
    private $db;
    public function __construct(MySQL $db){
        $this->db = $db->connect();
    }

    public function insert($data){
        try{
            $query = "INSERT INTO users(
                        name, 
                        email, 
                        phone, 
                        address,
                        password, 
                        role_id, 
                        created_at
                        ) VALUES (
                            :name, 
                            :email, 
                            :phone, 
                            :address, 
                            :password, 
                            :role_id, 
                            Now()
                            )";

            $statement = $this->db->prepare($query);
            $statement->execute($data);
            return $this->db->lastInsertId();

        } catch (PDOException $e){
            return $e->getMessage();
        };
    }

    public function getAll()
    {
        $statement = $this->db->query("
        SELECT users.*, roles.name AS role, roles.value
        FROM users LEFT JOIN roles
        ON users.role_id = roles.id
        ");

        return $statement->fetchAll();
    }

    public function findByEmailAndPassword($email, $password){
        $statement = $this->db->prepare("
            SELECT users.*, roles.name AS role, roles.value
            FROM users LEFT JOIN roles
            ON users.role_id = roles.id
            WHERE users.email = :email
            AND users.password = :password
        ");

        $statement->execute(
            [
                'email' => $email,
                'password' => $password
            ]
        );

        $row = $statement->fetch();

        return $row ?? false;
        
    }

    public function updatePhoto($id, $name){
        $statement = $this->db->prepare("
        UPDATE users SET photo=:name where id=:id");

        $statement->execute([
            ':name' => $name,
            ':id'   => $id
        ]);

        return $statement->rowCount();
    }

};