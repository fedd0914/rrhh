<?php

namespace App\Http\Livewire\Backend\Licencia;

use App\Models\Licencia;
use Livewire\Component;

class EditLicencia extends Component
{
    public $licencia;

    protected $rules = [
        'licencia.concept'    => 'required',
        'licencia.days' => 'required|numeric',
        'licencia.is_active'  => '',
    ];

    public function mount(Licencia $licencia)
    {
        $this->licencia = $licencia;
    }

    public function save_licencia()
    {
        $this->validate();
        $this->licencia->save();

        return redirect()->route('admin.licencia.index');
    }

    public function toggle_status()
    {
        $this->licencia->update([
            'published' => !$this->licencia->is_active
        ]);
    }

    public function delete_licencia()
    {
        $this->licencia->delete();
        return redirect()->route('admin.licencia.index');
    }

    public function render()
    {
        return view('livewire.backend.licencia.edit-licencia');
    }
}
