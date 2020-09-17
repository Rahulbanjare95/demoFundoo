<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundooRegister extends Model
{
    // use HasFactory;

    protected $table = 'demousers';
    protected $fillable = ['firstname', 'lastname', 'email', 'password'];

}
