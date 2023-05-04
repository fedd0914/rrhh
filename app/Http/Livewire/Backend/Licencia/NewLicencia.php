<?php

namespace App\Http\Livewire\Backend\Licencia;

use Livewire\Component;
use App\Models\Licencia;

class NewLicencia extends Component
{
    public $licencia;

    protected $rules = [
        'licencia.concept'    => 'required',
        'licencia.days' => 'required|numeric',
        'licencia.is_active'  => '',
    ];

    public function mount()
    {
        dd('hace');
        $this->licencia = new Licencia();
        $this->licencia->concept = 'probando';
    }

    public function save_licencia()
    {
        dd('llego');
        $this->validate();
        $this->licencia->save();

        return redirect()->route('admin.menu.edit', $this->menu->id);
    }

    public function render()
    {
        return view('livewire.backend.licencia.new-licencia');
    }
}
