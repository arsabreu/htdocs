<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Shopping Cidade</title>
</head>
<body>
    
<?php
require 'db_connection.php';

if(isset($_POST['email'])){
    
    // check username and email empty or not
    if(!empty($_POST['email'])){
        
        // Escape special characters.
       
        $user_email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
        
        //CHECK EMAIL IS VALID OR NOT
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            
            // CHECK IF EMAIL IS ALREADY INSERTED OR NOT
            $check_email = mysqli_query($conn, "SELECT `email` FROM `clientes` WHERE email = '$user_email'");
            
            if(mysqli_num_rows($check_email) > 0){    
                echo "<script>
                alert('O seu e-mail já foi cadastrado. Em breve você receberá nossas Super Promoções!');
                window.location.href = 'index.php';
                </script>";
                exit;
                
                
                
            }else{
                
                // INSER USERS DATA INTO THE DATABASE
                $insert_query = mysqli_query($conn,"INSERT INTO `clientes`(email) VALUES('$user_email')");

                //CHECK DATA INSERTED OR NOT
                if($insert_query){
                    echo "<script>
                    alert('Seu cadastro foi realizado com sucesso! Em breve você receberá nossas super Promoções!');
                    window.location.href = 'index.php';
                    </script>";
                    exit;
                }else{
                    echo "<h3>Ops... Alguma coisa errada aconteceu! Por favor tente novamente.</h3>";
                }
                
                
            }
            
            
        }else{
            
            echo "<script>
            alert('Endereço de e-mail inválido. Por favor insira um e-mail válido.');
            window.location.href = 'index.php';
            </script>";
            exit;
            
            }
        
        }else{
            
            echo "<script>
        alert('Por favor insira seu e-mail.');
        window.location.href = 'index.php';
        </script>";
        exit;

          }
    
}else{
    // set header response code
    http_response_code(404);
    echo "<h1>404 - Página não Encontrada!</h1>";
}
?>

</body>
</html>
