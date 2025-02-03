<?php
include 'inc/header.php';
include 'inc/nav.php';
?>
<h1>login page<h1>
<div>
    <form action="handelers/handleLogin.php" method="POST">
        <div>
            <label for="email">email</label>
            <input name="email" type="email">
        </div>
        <div>
            <label for="password">password</label>
            <input name="password" type="password">
        </div>
        <input type="submit">
    </form>
</div>
<?php
include  'inc/footer.php';
?>