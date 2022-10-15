<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table="barang";

    public function jenis(){
        return $this->belongsTo(Jenis::class);
    } 
    public function transaksi(){
        return $this->hasMany(Transaksi::class); 
    }
}
