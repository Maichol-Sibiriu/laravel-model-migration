@extends('layouts.main')

@section('content')
    <main>
        @foreach ($cars as $car)
           <div>
               <h1>{{ $car->marca }}</h1>
               <h3>{{ $car->modello }}</h3>
               <p>{{ $car->targa }}</p>
           </div>
        @endforeach
    </main>
@endsection