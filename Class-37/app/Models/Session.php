<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    private $session;
    public $item;
    public function getAllSession(){
        return $this->session = [
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
    public function getSessionYearById($s_id){
        $this->session = $this->getAllSession();
        foreach ($this->session as $this->item){
            if ($this->item['id'] == $s_id){
                return $this->item['session_year'];
            }
        }

    }
}
