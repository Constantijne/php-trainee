<?php

use Core\Controller\Controller;
class Controller_FirstForm extends Controller
{
    function action_index()
    {

        if (isset($_POST['email'])) {
            $email = $_POST["email"];
            $conn = new mysqli("localhost", "root", "", "trainee_db");
            $sql = "SELECT * FROM users where email = '$email'";

            $result = $conn->query($sql);
            $rowsCount = $result->num_rows;
            if ($rowsCount) {
                $data["login_status"] = "access_accept";
                session_start();
                $_SESSION['admin'] = $email;
            } else {
                $data["login_status"] = "access_denied";
            }
        } else {
            $data["login_status"] = "";
        }
        $this->view->generate('firstform_view.php', 'template_view.php', $email);
    }
}