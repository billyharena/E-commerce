@extends('admin.templateAdmin.appAdmin')
@section('page-content')
<section class="clean-block clean-form dark">
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($liste as $produit)
                <tr>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#id{{ $produit->idproduit }}" data-bs-whatever="@mdo">VOIR</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $produit->idproduit }}">Supprimer</button>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="deleteModal{{ $produit->idproduit }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $produit->idproduit }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{ $produit->idproduit }}">Confirmation de suppression</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Voulez-vous vraiment supprimer le produit "{{ $produit->nom }}" ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <form action="/produit/{{ $produit->idproduit }}/supprimer" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </tbody>
        </table>
    </div>

    <div>
        {{ $liste->appends(request()->except('page'))->links('pagination::bootstrap-5') }}
    </div>
</section>
@endsection
