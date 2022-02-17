<?php

class Controller_Social extends Controller{
    function action_index()
    {
        $this->view->generate('social_view.php', 'social_view.php');
    }
}