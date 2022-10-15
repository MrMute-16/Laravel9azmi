<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_trx extends Model
{
    use HasFactory;
    protected $table="detail_trx";

    public function transaksi(){
        return $this->hasMany(Transaksi::class); 
    }
}
