<?php

    require_once '../database/DBQuery.class.php';
    require_once '../classes/Usuario.class.php';

    $email = $senha = "";

    function stripit($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = mysql_real_escape_string($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && count($_POST) > 0){
        $email = stripit($_POST['email']);
        $senha = stripit($_POST['senha']);
        
        $tableName  = "barbearia.usuario";
        $fields     = "nome, email, senha, permissao";
        $keyField   = "idUsuario";
        
        $dbquery = new DBQuery($tableName, $fields, $keyField);
        $resultSet = $dbquery->select("email = '$email' LIMIT 1;");
        
        while ($linha = mysqli_fetch_assoc($resultSet)) {
            $nm = $linha["nome"];
            $em = $linha["email"];
            $senha_hasheada = $linha["senha"];
            $perm = $linha["permissao"];
        }
        
        if (password_verify($senha, $senha_hasheada)) {
            
            if (mysqli_num_rows($resultSet)==1 && $perm =='U') {
                session_start();
                $_SESSION['usuario'] = $nm;
                $_SESSION['logado'] = true;
                setcookie("usuario", $nm, time()+60*60); #Não usar nome de cookie como única verificação, qualquer um pode mudar! Usar em preenchimento automático e etc. Ao deslogar, "logado" = false, mas o cookie permanece até expirar para preenchimentos e etc.
                header("location:pagusuario.php");
            }
        
            elseif (mysqli_num_rows($resultSet)==1 && $perm =='F') {
                session_start();
                $_SESSION['funcionario'] = $nm;
                $_SESSION['logado'] = true;
                setcookie("usuario", $nm, time()+60*60);
                header("location:pagfuncionario.php");
            }

            elseif (mysqli_num_rows($resultSet)==1 && $perm =='A') {
                session_start();
                $_SESSION['administrador'] = $nm;
                $_SESSION['logado'] = true;
                setcookie("usuario", $nm, time()+60*60);
                header("location:pagadm.php");
            }

        }
        
        else {
            header("location:login.php?errologin");
        }
        
    }

?>