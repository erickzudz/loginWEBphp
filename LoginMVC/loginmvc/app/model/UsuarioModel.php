<?php
require_once('../../core/conexion.php');

class UsuarioModel {
    public function login($email, $password) {
        global $conexion;
        $sql = "SELECT * FROM usuarios WHERE email=:email AND password=:password";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function registrar($email, $password) {
        global $conexion;
        $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }
}
?>