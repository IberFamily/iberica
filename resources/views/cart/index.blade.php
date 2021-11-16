@extends('layouts.app')

@section('content')
<div  class="container mx-auto">

<h2 class="is-size-2 py-6">Korpa</h2>


    <table class="table">
        <thead>
             <tr>
                    <th>Ime Artikla</th>
                    <th>Cena</th>
                    <th>Količina</th>
                    <th>Ukloni</th>
            </tr>
        </thead>
       <tbody>
        @foreach ($cartItems as  $item)
           <tr>
               <td scope="row"><h5 class="mt-1">{{$item->name}}</h5></td>
                <td>
                    <h5 class="mt-1">
                    {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</h5>
                </td>
               <td>
                   <form action="{{route ('cart.update', $item->id)}}">
                         <input name="quantity" type="number" value="{{ $item->quantity }}">
                         <input type="submit" class="btn btn-success mx-3" value="Potvrdi promenu">
                   </form>
               </td>
               <td>
                   <a href="{{ route('cart.destroy', $item->id) }}" class="btn btn-danger">Ukloni</a>
               </td>
           </tr>
        @endforeach
       </tbody>
    </table>
    <h3 class="is-size-5 py-4">Ukupna cena :</h3>
    <h2 class="is-size-4">{{\Cart::session(auth()->id())->getTotal()}},00 Rsd.</h2>
</div>

    <div class="py-5 box mt-5">
        <h2 class="is-size-3 ml-4">Popuni upitnik i poruči</h2>
        <a href="{{ route('cart.checkout') }}" class="btn btn-success ml-4 my-4 px-5">Poruči</a>
    </div>
@endsection
