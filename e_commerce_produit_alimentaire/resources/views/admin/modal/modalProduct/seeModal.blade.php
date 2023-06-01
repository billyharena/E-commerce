<div class="modal fade" id="seeModal{{ $produit->idproduit }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Fiche</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
                <form action="#" method="get">
                    @csrf
                    @method('get')
                    <button type="button" class="btn btn-primary">SAVE AS PDF</button>
                </form>
            </div>
        </div>
    </div>
</div>
