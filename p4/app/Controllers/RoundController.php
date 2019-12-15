<?php
namespace App\Controllers;

class RoundController extends Controller
{
    public function rounds(){
        $rounds = $this->app->db()->all('p4');

        return $this->app->view('rounds',['rounds' => $rounds]);
    }

     public function round(){
        return $this->app->view('round');
    }
    
}