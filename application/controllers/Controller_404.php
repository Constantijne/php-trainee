<?php

use Core\Controller\Controller;

class Controller_404 extends Controller{
    function action_index()
    {
       $this->view->generate('404_view.php', '404_view.php');
    }
}