<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "staffs";
    protected $primaryKey = "id_staff";
    protected $fillable = ['nama', 'jabatan', 'email', 'tanggung_jawab'];
}
