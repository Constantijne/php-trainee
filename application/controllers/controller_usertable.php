<?php

class Controller_Usertable extends Controller{
    function action_index()
    {
        $this->view->generate('usertable_view.php', 'usertable_view.php');
    }
}