<?php
namespace App\Controllers;

class RoundController extends Controller
{
    public function rounds(){
        return $this->app->view('rounds');
    }

     public function round(){
        return $this->app->view('round');
    }
    
}