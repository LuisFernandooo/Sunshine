<?php 

include('../config/conexao.php');

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){

    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM cadastro WHERE email = :email AND senha = :senha";

    $query = $pdo->prepare($sql);
    $query->bindValue(":email", $email);
    $query->bindValue(":senha", $senha);

    $query->execute();

    if($query->rowCount() > 0){
        $dado = $query->fetch();

        $_SESSION['email'] = $dado['email'];
        $_SESSION['password'] = $dado['password'];

        header("Location: ../Principal/principal.html");
    } else{
        header("Location: ../Login/login.html");
    }
} else{
    header("Location: ../Login/login.html");
}
?>