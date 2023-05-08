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
        $this->licencia = new Licencia();
    }

    public function save_licencia()
    {
        $this->validate();
        $this->licencia->is_active = true;
        $this->licencia->save();

        return redirect()->route('admin.licencia.edit', $this->licencia->id);
    }

    public function render()
    {
        return view('livewire.backend.licencia.new-licencia');
    }
}
