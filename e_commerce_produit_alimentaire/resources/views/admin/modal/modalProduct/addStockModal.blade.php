<div class="modal fade" id="addstockModal{{ $produit->idproduit }}" tabindex="-1"
     aria-labelledby="addstockModal{{ $produit->idproduit }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addstockModal{{ $produit->idproduit }}">Add this product to stock?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-control" action="/admin/produit/{{ $produit->idproduit }}/stock" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="quantite">Quantité</label>
                        <input class="form-control item" type="number" name="quantite">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="dateentree">Quantité</label>
                        <input class="form-control item" type="date" name="dateentree">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-danger">ADD STOCK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
