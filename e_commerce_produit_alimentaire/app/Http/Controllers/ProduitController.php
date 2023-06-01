<?php

namespace App\Http\Controllers;

use App\Models\ProduitDelete;
use App\Models\Stock;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    public function _listeProduit(){
        $liste = session('liste', function () {
            $exclue = ProduitDelete::all()->pluck('idproduit');
            return DB::table('produit')->whereNotIn('idproduit', $exclue)
                ->paginate(1);
        });
        return view('admin.produit', [
            'liste' => $liste,
        ]);
    }

    public function _deleteProduit(Request $request, $idproduit){
        $produitDelete = new ProduitDelete();
        $produitDelete->_insertProduitDelete($idproduit);
        return redirect()->route('listeProduit')->with('message', 'Product delete successfuly !');
    }

    public function _insertStock(Request $request, $idproduit){
        $prodStock = new Stock();
        $quantite = $request->quantite;
        if ($request->filled('dateentree')){
            $date = $request->dateentree;
        }else{
            $date = Carbon::now();
        }
        $prodStock->_insertStock($idproduit, $quantite, $date);
        return redirect()->route('listeProduit')->with('message', 'Stock insert with success !');
    }
}
