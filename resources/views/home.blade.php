@extends('layouts.app')

@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('content')
<main id="root">
  <ul>
    <li v-for="auto in autos" :key="auto.id">
      <h3>Modello: @{{auto.model}}</h3>
      <h4>Marca: @{{auto.brand}}</h4>
      <h5>Porte: @{{auto.doors}}</h5>
    </li>
  </ul>
</main>
@endsection

@section('foot-script')
<script src="{{asset('js/autos.js')}}" charset="utf-8"></script>
@endsection
