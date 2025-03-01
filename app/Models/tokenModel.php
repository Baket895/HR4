<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class tokenModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'apitoken';
    protected $guard = 'apisToken';

}
