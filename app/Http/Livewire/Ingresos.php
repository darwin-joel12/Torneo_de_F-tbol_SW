<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ingreso;

class Ingresos extends Component
{
    //Definimos unas varaibles
    public $id_ingreso, $detalles, $monto;
    public $modal = 0;

    public function render()
    {
        $ingresos = Ingreso::latest()->paginate(5);
        return view('livewire.ingresos', ['ingresos' => $ingresos, 'modal' => $this->modal]);
    }

    public function crear()
    {
        logger('Función crear ejecutada');
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal= true;
    }
    
    public function cerrarModal()
    {
        $this->modal= false;
    }

    public function limpiarCampos()
    {
        $this->detalles = '';
        $this->monto = '';
        $this->id_ingreso = '';
    }

    public function editar($id)
    {
        $ingreso=Ingreso::findOrFail($id);
        $this->id_ingreso = $id;
        $this->detalles = $ingreso->detalles;
        $this->monto = $ingreso->monto;
        $this->abrirModal();
    }

    public function eliminar($id)
    {
        Ingreso::find($id)->delete;
        session()->flash('message', 'Registro Eliminado Correctamente');
    }

    public function guardar()
    {
        Ingreso::updateOrCreate(['id=>this->id_ingreso'],
            [
                'detalles' => $this->detalles,
                'monto' => $this->monto
            ]);
        
        session()->flash('message',
            $this->id_ingreso ? '!Actualización existosa¡' : '!Agregado existosamente¡');

        $this->cerrarModal();
        $this->limpiarCampos();
    }
}