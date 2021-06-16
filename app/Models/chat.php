<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class chat extends Model
{
    use HasFactory;
    protected $table = 'chat';
    protected $guarded = [];
    public $timestamps = false;
    public function penerima(){
        return $this->belongsTo(User::class, 'id_penerima');
    }
    public function pengirim(){
        return $this->belongsTo(User::class, 'id_pengirim');
    }
}
