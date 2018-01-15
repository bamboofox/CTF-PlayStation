<?php

  $fd = fopen('./flag', 'r');
  $flag = fread($fd, 100);
  fclose($fd);
  
  $password = '0e836584205638841937695747769655';

  if (isset($_GET['password'])) {
    if (md5($_GET['password']) == $password) {
      echo 'Login succeeded!<br>';
      echo $flag;
    } else {
      echo 'Login failed!<br>';
      echo '<a href="/suck-login.php">back</a>';
    }
  }
  else {
    echo '<form><input type="password" name="password" />'
      . '<input type="submit" value="Login" ></form >';
  }

?>
