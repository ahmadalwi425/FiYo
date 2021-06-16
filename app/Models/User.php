<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\level;
use App\Models\laporan;
use App\Models\chat;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'id_level',
        'foto',
        'no_hp',
        'NIK',
        'alamat',
        'identitas',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function level(){
        return $this->belongsTo(level::class, 'id_level');
    }
    public function laporan(){
        return $this->hasMany(laporan::class, 'id');
    }
    public function chat(){
        return $this->hasMany(chat::class, 'id');
    }
}
