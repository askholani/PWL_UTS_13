<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    public $timestamps = false;
    protected $primaryKey = 'no_rek'; 

    /**
 * The attributes that are mass assignable.
 *
 * @var array
 */

 protected $fillable = [
    'no_rek',
    'nama',
    'alamat',
    'jenis_tabungan',
    'saldo',
    ];
}