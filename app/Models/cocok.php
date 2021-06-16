<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\laporan;

class cocok extends Model
{
    use HasFactory;
    protected $table = 'cocok';
    protected $guarded = [];
    public $timestamps = false;
    public function ketemu(){
        return $this->belongsTo(laporan::class, 'id_ketemu');
    }
    public function kehilangan(){
        return $this->belongsTo(laporan::class, 'id_kehilangan');
    }
}
