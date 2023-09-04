<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    private $sessions=[],$session;
    public function getAllSession(){
        return $this->sessions = [
            [
                'id'=>1,
                'session_year'=>'2019-2020'
            ],
            [
                'id'=>2,
                'session_year'=>'2020-2021'
            ],
            [
                'id'=>3,
                'session_year'=>'2021-2022'
            ]
        ];
    }

    public function getSessionById($id)
    {
       $this->sessions = $this->getAllSession();
       foreach ( $this->sessions as $this->session){
           if ($this->session['id'] == $id){
               return $this->session['session_year'];
       }

    }

}}
