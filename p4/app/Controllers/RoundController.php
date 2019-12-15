<?php
namespace App\Controllers;

class RoundController extends Controller
{
    public function rounds(){
        $rounds = $this->app->db()->all('p4');

        return $this->app->view('rounds',['rounds' => $rounds]);
    }

     public function round(){
        $roundId = $this->app->param('id');

        $round = $this->app->db()->findById('p4', $roundId);

        if(is_null($round)){
            return $this->app->redirect('/rounds', ['roundNotFound' => true]);
        }

        return $this->app->view('round',['round' => $round]);

    }
    
}