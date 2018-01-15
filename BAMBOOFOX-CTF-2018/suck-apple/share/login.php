<?php
$account = $_POST['account'];
$passwd = $_POST['passwd'];

if($account === 'root' AND $passwd === '') {
    echo "<center>BAMBOOFOX{3v3Ry0sHaVEbUG}";
    echo "<br/><br/>Always security-upgrade your system ever has a patch!</center>";
} else {
    echo "login error";
}
?>
