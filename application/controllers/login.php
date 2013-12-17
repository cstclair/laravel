<?php
class Login_Controller extends Base_Controller{
    public function action_display(){
         
       /* $users = User::all();
        return View::make('user.display')->with('user', $users);
       */
       return View::make('user.display');
    }
    public function action_index(){
        echo 'test';
        //return Redirect::to('home');
    }
}
