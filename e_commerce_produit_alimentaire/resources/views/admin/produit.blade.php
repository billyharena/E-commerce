@extends('admin.templateAdmin.appAdmin')

@section('page-content')
    <section class="clean-block clean-form dark">
        @if (session()->has('message'))
            <div class="alert alert-info">{{ session()->get('message') }}</div>
        @endif
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
                @forelse ($liste as $produit)
                    <tr>
                        <td>{{ $produit->nom }}</td>
                        <td>{{ $produit->prix }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#seeModal{{ $produit->idproduit }}">SEE</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $produit->idproduit }}">DELETE</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addstockModal{{ $produit->idproduit }}">ADD STOCK</button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    @include('admin.modal.modalProduct.seeModal', ['produit' => $produit])
                    @include('admin.modal.modalProduct.deleteModal', ['produit' => $produit])
                    @include('admin.modal.modalProduct.addStockModal', ['produit' => $produit])

                @empty
                    <tr>
                        <td colspan="5">Aucun produit trouvé.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div>
            {{ $liste->appends(request()->except('page'))->links('pagination::bootstrap-5') }}
        </div>
    </section>
@endsection
