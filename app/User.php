<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'dtNascimento', 'aparelho', 'motivo', 'usoCelular',
        'marcaApple', 'marcaMotorola', 'marcaSamsung', 'marcaXiaomi', 'marcaLG', 'marcaAsus',
        'versaoIos12', 'versaoAndroid7', 'versaoAndroid8', 'versaoAndroid9', 'versaoAndroid10',
        'procApple', 'procKirin', 'procSnapdragon', 'procMediaTek', 'procExynos', 'tamanhoTelaDe',
        'tamanhoTelaAte', 'bateriaDe', 'bateriaAte', 'cameraDe', 'cameraAte', 'precoDe', 'precoAte', 'memoriaInterna', 'memoriaRam', 'nivelAcesso'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = ['dtNascimento'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
