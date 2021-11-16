@extends('layouts.app')

@section('content')

<h2 class="is-size-3 py-6">Pošalji Porudzbinu</h2>


<form action="{{route('orders.store')}}" method="post">

    @csrf
    <div class="mb-3">
        <label class="form-label" for="">Ime i prezime</label>
        <input type="text" name="shipping_fullname"  class="form-control">
    </div>
    <div class="mb-3">
            <label class="form-label" for="">Telefon</label>
            <input type="text" name="shipping_phone" class="form-control">
    </div>
    <div class="mb-3">

        <label  class="form-label" for="">Adresa</label>
        <input type="text" name="shipping_address" class="form-control">

    </div>
    <div class="mb-3">

        <label  class="form-label" for="">Drzava</label>
        <input type="text" name="shipping_city" class="form-control">

    </div>
    <div class="mb-3">

        <label class="form-label" for="">Grad</label>
        <input type="text" name="shipping_state" class="form-control">

    </div>
    <div class="mb-3">

        <label  class="form-label" for="">Postanski kod</label>
        <input type="text" name="shipping_zipcode"class="form-control">
    </div>
   <!-- <div class="mb-3">

        <label class="form-label" for="">Poruka</label>
        <input type="text" name="notes" class="form-control">
    </div>-->
    <div class="mb-3">
        <button type="submit" class="btn py-4 px-6 mt-6 btn-success">Pošalji porudzbinu</button>
    </div>
</form>






@endsection
