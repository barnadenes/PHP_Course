 <?php

    function pluck($arr, $key) {
    $results = array_map(function($item) use($key) {
            return $item[$key];
    }, $arr);

    return $results;
    }  

    function output($value) {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    };

    function sum($a, $b) {
        return $a + $b;
    }

    function authenticate_user($email, $password) {
        return $email == USER_NAME && $password == PASSWORD;
    }

    function redirect($url) {
        header("Location: $url");
    }

    function is_user_authenticated() {
        return isset($_SESSION['email']);
    }

    function ensure_is_user_authenticated() {
        if(!is_user_authenticated()) {
            redirect('login.php');
            die();
        }
    }

    function view($name, $model) {
        global $view_bag;
        require("../views/layout.view.php");
    }

 ?>