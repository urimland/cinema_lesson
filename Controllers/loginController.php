<?php


class LoginController{

  public function get_login(){
    echo "<h1>LOGIN FORM</h1>";
    ?>

    <form method="POST" action="index.php?controller=login&action=login">
    <button> login </button>
    
    </form>



<?php

  }

  public function login(){
    echo "<h1>Connected</h1>";
}


}


?>