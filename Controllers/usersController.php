<?php


class UsersController
{
    public function get_users()
    {
        echo "<h1>get_users</h1>";
    }
    public function add_user()
    {
        echo "<h1>add_user</h1>";
        ?>
    <form method="POST" action="index.php?controller=users&action=get_users">
    <button> Go to get users </button>
    
    </form>

    <?php


}
}


?>