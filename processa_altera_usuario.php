<?php
    session_start();
	$conectar = mysqli_connect("localhost", "root", "", "cbdu");

    $id_usuario = $_POST["id_usuario"];
    $perfil_usuario = $_POST["perfil_usuario"];
    
    if ($perfil_usuario == ""){
        
        $senha_usuario = $_POST["senha_usuario"];
        $sql_altera = "UPDATE usuario
                            SET
                                senha_usuario = '$senha_usuario'
                            WHERE id_usuario = '$id_usuario'";
        $sql_pesquisa_alteracao = mysqli_query($conectar, $sql_altera);
        if($sql_pesquisa_alteracao == true){
            echo "<script>
                    alert('Senha do administrador alterada com sucesso')
                 </script>";
            echo "<script>
                    location.href = ('lista_usuario.php')
                 </script>";
            exit();
        }
        else{
            echo "<script>
                    alert('Ocorreu um erro no servidor. Tente de novo')
                 </script>";
            echo "<script>

                 </script>";
        }
    }
    else {

     $nome_usuario = $_POST["nome_usuario"];
     $email_usuario = $_POST["email_usuario"];
     $cpf_usuario = $_POST["cpf_usuario"];
     $perfil_usuario = $_POST["perfil_usuario"];
     
     
     $sql_altera = "UPDATE usuario
                            SET
                                nome_usuario = '$nome_usuario',
                                email_usuario = '$email_usuario'
								cpf_usuario = '$cpf_usuario',
                                perfil_usuario = '$perfil_usuario'
                            WHERE id_usuario = '$id_usuario'";
     die($sql_altera);
        $sql_pesquisa_alteracao = mysqli_query($conectar, $sql_altera);  
        
        if($sql_pesquisa_alteracao == true){
            echo "<script>
                    alert('$nome_usuario alterado com sucesso')
                 </script>";
            echo "<script>
                    location.href = ('lista_usuario.php')
                 </script>";
            exit();
        }
        else{
            echo "<script>
                    alert('Ocorreu um erro no servidor. Tente de novo')
                 </script>";
            echo "<script>

                 </script>";
        }
    }  
?>