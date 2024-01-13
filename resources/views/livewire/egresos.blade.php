@extends('adminlte::page')

@section('content')
    <div class="card m-4">
        <div class="card-body">
            <h5 class="card-title">Egresos</h5>

            <div class="table-responsive p-2">
                <table class="table table-striped">
                    <thead class="bg-blue text-black">
                        <tr>
                            <th>ID</th>
                            <th>Detalles</th>
                            <th>Monto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($egresos as $egreso)
                            <tr>
                                <td>{{$egreso->id}}</td>
                                <td>{{$egreso->detalles}}</td>
                                <td>{{$egreso->monto}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection