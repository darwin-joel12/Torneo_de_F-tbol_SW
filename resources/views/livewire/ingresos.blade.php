@extends('adminlte::page')
@section('content')
    <div class="card m-4">
        <div class="card-body">
            <h5 class="card-title font-bold">Ingresos</h5>
            <br>

            @if(session()->has('message'))
                <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <h4>{{session()->flash('message');}}</h4>
                        </div>
                    </div>
                </div>
            @endif
            <button wire:click="crear()" class="bg-green hover:gb-green text-white font-bold py-2 px-4 border border-none rounded">Nuevo</button>
            @if($modal)
                @include('livewire.crear')
            @endif
            
            <div class="table-responsive mt-2">
                <table class="table table-striped">
                    <thead class="bg-blue text-black">
                        <tr>
                            <th>ID</th>
                            <th>Detalles</th>
                            <th>Monto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ingresos as $ingreso)
                            <tr>
                                <td>{{$ingreso->id}}</td>
                                <td>{{$ingreso->detalles}}</td>
                                <td>{{$ingreso->monto}}</td>
                                <td class="border px-4 py-2 text-center">
                                    <button wire:click="editar({{$ingreso->id}})" class="bg-blue hover:bg-blue text-white font-bold py-2 px-4 border border-none rounded">Editar</button>
                                    <button wire:click="borrar({{$ingreso->id}})" class="bg-red hover:bg-red text-white font-bold py-2 px-4 border border-none rounded">Borrar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Controles de paginación en la esquina inferior -->
                <div class="flex justify-end m-0">
                    <div>
                        {{$ingresos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


