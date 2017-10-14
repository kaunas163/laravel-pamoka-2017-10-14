@extends('layouts.main')

@section('puslapio_pavadinimas')
    Garazas: {{ $garazas->pavadinimas }}
@endsection

@section('turinys')
    <div class="row">
        <div class="col-md-4">
            <h2>Garazo informacija</h2>
            <p><strong>Adresas:</strong> {{ $garazas->adresas }}</p>
            <p><strong>Irasas sukurtas:</strong> {{ $garazas->created_at }}</p>
        </div>
        <div class="col-md-8">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Marke</th>
                        <th>Modelis</th>
                        <th>Metai</th>
                        <th>Rida</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($garazas->automobiliai as $automobilis)
                        <tr>
                            <th scope="row">{{ $automobilis->id }}</th>
                            <td>{{ $automobilis->marke }}</td>
                            <td>{{ $automobilis->modelis }}</td>
                            <td>{{ $automobilis->metai }}</td>
                            <td>{{ $automobilis->rida }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection