<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'stock';
    protected $fillable = [
        'idproduit',
        'quantite',
        'dateentree',
    ];
    protected $primaryKey = null;
    public $timestamps = false;
    public function _insertStock($idproduit, $quantite, $date){
        $data = [
            'idproduit' => $idproduit,
            'quantite' =>$quantite,
            'dateentree' => $date,
        ];
        DB::table('stock')->insert($data);
    }
}
