<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProduitDelete extends Model
{
    use HasFactory;
    protected $table = 'produitdelete';
    protected $fillable = [
        'idproduit',
        'datedelete',
    ];
    protected $primaryKey = null;
    public $timestamps = false;

    public function _insertProduitDelete( $idproduit)
    {
        $data = [
            'idproduit' => $idproduit,
            'datedelete' => Carbon::now(),
        ];

        DB::table('produitdelete')->insert($data);
    }
}
