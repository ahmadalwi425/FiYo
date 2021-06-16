<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\jenis_barang;
use App\Models\cocok;

class laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $guarded = [];
    public $timestamps = false;
    public function jenis(){
        return $this->belongsTo(jenis_barang::class, 'id_jenis');
    }
    public function pelapor(){
        return $this->belongsTo(User::class, 'id_pelapor');
    }
    public function cocok(){
        return $this->hasMany(cocok::class, 'id');
    }
}
