<?php
function renderCardUser($name_user,$first_name_user,$login_user){
    ob_start();
?>

<article class="card">
        <p>Nom : <?php echo $name_user ?></p>
        <p>Prénom : <?php echo $first_name_user ?></p>
        <p>Login : <?php echo $login_user ?></p>
</article>

<?php
    return ob_get_clean();
}