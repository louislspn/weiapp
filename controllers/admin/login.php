<?php
  session_start();
  if(isset($_POST['pseudo']) && isset($_POST['pwd'])){
        include('connection.php');
        $res = $conn->prepare("SELECT * FROM admin WHERE adminPseudo = :pseudo");
        $res->execute(array(':pseudo' => $_POST['pseudo']));
        $res->setFetchMode(PDO::FETCH_OBJ);
        $result = $res->fetch();
        // if there is a password with the given user
        if (isset($result->adminPseudo)) {
          // and if the password matches, redirect to the dashboard
          if (password_verify($_POST['pwd'], $result->adminPwd)) {
            session_start();
            $_SESSION['connected'] = true;
            $_SESSION['adminTk'] = $result->adminTk;
            header('Location:index.php?c=admin_dashboard');
          } else{
            //if password doesn't match
            header('Location:index.php?c=admin_login');
            echo 'Identifiant ou mot de passe erroné';
          }
        }
  }
  $view="admin/login";
  $title = "Login";
?>
