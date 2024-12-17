<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundtransfer extends Model
{




    protected $fillable = 
    [
       'transfer_id', 'amount','transfered_id','user_id_from','user_id_to' ,'transfer_date','updated_at','created_at',
    ];
   
   
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    } 

    use HasFactory;
}
