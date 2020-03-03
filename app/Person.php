<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $table = 'people';
    protected $fillable = [
        'name', 
        'first_surname', 
        'second_surname',
        'document_type',
        'document_number',
        'birthday'
    ];
    public function user(){
        return $this->hasOne(User::class, 'people_id');
    }
}
