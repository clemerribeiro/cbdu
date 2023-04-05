<?php
if(isset($_SESSION["email"])){
    echo $_SESSION["email"];
}
 else {
    echo "<script>
        alert ('Você não está logado!!!')
        </script>";
    echo "<script>
             location.href = ('index.php')
        </script>";    
}
?>

