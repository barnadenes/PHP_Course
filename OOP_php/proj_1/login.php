<?php
    session_start();

    $title = 'POST Input';

    require_once('OOP_php/proj_1/inc/functions.php');
    require_once('OOP_php/proj_1/inc/config.php');

    if(is_user_authenticated()) {
        redirect('admin.php');
        die();
    };

    //to get the information, we need the input's name
    //$_POST;

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        //input validation
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];


        //compare with data info(config.php)
        if(authenticate_user($email, $password)) {
            $_SESSION['email'] = $email;
            //redirection
            redirect('admin.php');
            die();
        } else {
            $status = 'The information you gave are not correct.';
        }

        if($email == false) {
            $status = 'Please enter a valid email adress.';
        }
    }

    //include('OOP_php/inc/header.php');

?>

    <div class="container">   
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">POST Input</h1>
            </div>    
        </div>
        <div class="row">
           <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email: </label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="login">
            </div>
           </form>
        </div>
        <div class="row">
            <?php
                if(isset($status)) {
                    echo $status;
                }
            ?>    
        </div>
    </div>

<?php //include('OOP_php/inc/footer.php'); ?>