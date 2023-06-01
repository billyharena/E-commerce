<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = 'categorie';
    protected $fillable = [
        'idcategorie',
        'categorie',
    ];
    protected $primaryKey = 'idcategorie';
    public $timestamps = false;
}
