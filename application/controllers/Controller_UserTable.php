<?php

use Core\Controller\Controller;
class Controller_UserTable extends Controller{
    function action_index()
    {
        $this->view->generate('usertable_view.php', 'template_view.php');
    }
}