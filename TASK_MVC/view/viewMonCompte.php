<?php
function showMonCompte($nom,$prenom,$login,$message){
    ob_start();
?>
    <main>
        <h1>Mon Compte</h1>
        <p>Nom : <?php echo $nom ?></p>
        <p>Prénom : <?php echo $prenom ?></p>
        <p>Login : <?php echo $login ?></p>
        <p><?php echo $message ?></p>
    </main>
<?php
    return ob_get_clean();
}
?>