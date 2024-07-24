<?php
function connexion($message){
    ob_start();
?>

    <h1>Page connexion</h1>
    <form action="" method="post">
    <input type="text" name="login_user" placeholder="Login">
    <input type="password" name="password_user" placeholder="Mdp">
    <input type="submit" name="submit">
    </form>
    <p><?php echo $message ?></p>
<?php
    return ob_get_clean();
}
?>