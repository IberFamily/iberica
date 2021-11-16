@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <h2>Products</h2>
    <div class="row-flex d-flex">
    @foreach ($allProducts as $product)
        <div class="p-10">
            <!--Card 1-->
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
              <img class="w-full" src="https://cdn.pixabay.com/photo/2020/03/03/09/57/city-buildings-4898207_960_720.png" alt="Mountain">
              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{$product->name}}</div>
                <p class="text-gray-700 text-base">
                    {{$product->description}}
                </p>
                <p class="text-gray-700 text-base">
                    <h3 class="pt-5">{{$product->price }}.00 Rsd.</h3>
                </p>
              </div>
              <div class="px-6 pt-4 pb-6">
                   <a href="{{ route('cart.add', $product->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mb-5 px-4 rounded">Dodaj u korpu</a>
              </div>
            </div>
          </div>
    @endforeach
    </div>

</main>
@endsection
