<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\laporan;

class jenis_barang extends Model
{
    use HasFactory;
    protected $table = 'jenis_barang';
    protected $guarded = [];
    public $timestamps = false;
    public function laporan(){
        return $this->hasMany(laporan::class, 'id');
    }
}
