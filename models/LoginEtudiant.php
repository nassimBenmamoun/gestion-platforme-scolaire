<?php
include_once("../database/DB.php");
    class LoginEtudiant{

        static public function logEtudiant($email){
            $stmt = DB::connect()->prepare('SELECT * FROM etudiant WHERE email = ?');
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
            $stmt->close();
            $stmt = null;
        }

    }