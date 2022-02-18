<?php

use Core\Controller\Controller;
class Controller_SecondForm extends Controller
{
    function action_index()
    {

        $this->view->generate('secondform_view.php', 'template_view.php');
    }
}