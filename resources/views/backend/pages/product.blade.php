@extends('layouts.index_back')
@section('productBack')

    <br><br><br><br>
    <div class="text-center mb-4">
        @include('backend.components.products.create')
    </div>
    <table class="table container">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Produit</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Prix</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td> <img width="100px" src="{{ asset('storage/img/photo/' . $product->image) }}" alt=""></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->prix }}$</td>
                    <td>
                        <form action="{{ route('product.destroy', $product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-danger border-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>

                    </td>

                    <td>
                        @include('backend.components.products.upDate')

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
