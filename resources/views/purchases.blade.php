@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h2 class="display-2">Mes achats</h2>
                </div>
            </div>
            <div class="row">
                @foreach($purchases as $purchase)
                    <div class="col-4">
                        <a href="{{route('products.show', ['title' => $purchase->title, 'id' => $purchase->identifier])}}">
                            <div class="card">
                                <img src="{{$purchase->picture}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{$purchase->title}} ({{$purchase->stock}})</h5>
                                    <p class="card-text">{{$purchase->details}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
