<?php

/**
 * Profile controller
 */
class Profile extends Controller
{
    function index()
    {
        // code...
        echo $this->view('profile');
    }
}
