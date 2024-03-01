<?php 
include('../config/conexao.php');

if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST)){

      $user = $_POST['user'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $sql = "INSERT INTO cadastro (nome, email, senha) VALUES (:user, :email, :senha)";

      $query = $pdo->prepare($sql);
      $query->bindValue(":user", $user);
      $query->bindValue(":email", $email);
      $query->bindValue(":senha", $senha);
      $query->execute();

      header("location: ../Login/login.html");  
} else{
      header("location: ../Cadastro/index.html");
}
?>