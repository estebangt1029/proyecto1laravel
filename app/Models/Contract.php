<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;


    protected $fillable=[
        'salary',
        'start_date',
        'end_date'
    ];

    public function TypeContract(){
        return $this->hasOne(Type_contract::class);
    }









    
}
