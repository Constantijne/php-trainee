<?php

class Controller_Secondform extends Controller
{
    function action_index()
    {

        $this->view->generate('secondform_view.php', 'secondform_view.php');
    }
}