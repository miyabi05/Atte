<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = array('id');
    public static $rules = array(
        'register_id' => 'required',
        'email' => 'required',
        'password' => 'required',
    );

    public function getTitle(){
        return 'ID'.$this->id . ':' . $this->title;
    }

    public function register(){
        return $this->belongsTo('App\Models\Register');


}
}
