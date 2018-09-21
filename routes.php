<?php
//$controller = somthing and $action = somthing
$controllers = array("login" => ["get_login", "login"], "movies" => ["get_movies", "rent_movie", "search", "add_movie"], "error" => ["no_action", "no_controller"], "users" => ["get_users", "add_user"]);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        navigate($controller, $action);
    } else {
        navigate("error", "no_action");
    }
} else {
    navigate("error", "no_controller");
}

//error , no_action
function navigate($controller, $action)
{
    require_once("./Controllers/" . $controller . "Controller.php");
    switch ($controller) {
        case "movies":
            {
                $controller = new MoviesController();
                break;
            }
        case "login":
            {
                $controller = new LoginController();
                break;
            }
        case "error":
            {
                $controller = new ErrorController();
                break;
            }
        case "users":
            {
                $controller = new UsersController();
                break;
            }

        default:
            {

            }
    }

    $controller->{$action}();

}

?>