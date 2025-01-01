<?php

/**
 * courses controller
 */

 class Course extends controller
 {
    function index()
    {
        echo $this->view('course');
    }
 }