<?php

/**
 * Home controller
 */
class Home extends Controller
{
    function index()
    {
        // code...
        $user = new User();

            $arr['first_name'] = 'Jennifer'
            $arr['last_name'] = 'Doe'
            $arr['date'] = '2024-12-26 16:57:14'
            $arr['user_id'] = '003'
            $arr['gender'] = 'female'
            $arr['school_id'] = '00001'
            $arr['rank'] = 'Student'

            $user->insert($arr);
            
        $data = $user->findAll();
        //$data = $user->where('first_name', 'John');
        $this->view('home', ['rows'=>$data]);
    }
}
