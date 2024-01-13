<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Egreso;

class Egresos extends Component
{
    public $id_egreso, $detalles, $monto; 

    public function render()
    {
        $egresos = Egreso::latest()->paginate(5);
        return view('livewire.egresos', ['egresos' =>$egresos]);
    }
    
    public function crear()
    {
        $this->limpiar;
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
        $this->id_egreso = '';
    }
}
