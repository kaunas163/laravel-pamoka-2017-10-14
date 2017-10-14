@extends('layouts.main')

@section('puslapio_pavadinimas')
    Visi garazai
@endsection

@section('turinys')
    <div class="card-columns">
        @foreach($garazai as $garazas)
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><a href="{{ route('garazai.show', ['id' => $garazas->id]) }}" class="text text-dark">{{ $garazas->pavadinimas }}</a></h4>
                    <p class="card-text"><strong>Adresas:</strong> {{ $garazas->adresas }}</p>
                    <p class="card-text"><small class="text-muted">Sukurta: {{ $garazas->created_at }}</small></p>
                </div>
            </div>
        @endforeach
    </div>
@endsection