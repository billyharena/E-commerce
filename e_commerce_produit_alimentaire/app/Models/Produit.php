<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produit';
    protected $fillable = [
        'idproduit',
        'nom',
        'idtype',
        'description',
        'prix',
    ];
    protected $primaryKey = 'idproduit';
    public $timestamps = false;
}
