<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    public function _listeProduit(){
        $liste = session('liste', function () {
            return DB::table('produit')->paginate(1);
        });
        return view('admin.produit', [
            'liste' => $liste,
        ]);
    }
}
