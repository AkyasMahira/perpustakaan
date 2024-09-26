<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rakbuku extends Model
{
    use HasFactory;

    protected $table = 'rakbukus';
    protected $fillable = ['kode_rak', 'nama_rak'];
}
