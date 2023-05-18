<?php

namespace App\Http\Livewire\Backend\Licencia;

use Livewire\Component;
use App\Models\Licencia;
use Livewire\WithPagination;

class ListLicencia extends Component
{
    use WithPagination;
    // protected $paginationTheme = 'bootstrap';

    public function render()
    {

        $licencias = Licencia::orderBy('concept')
            ->paginate(10);
        return view('livewire.backend.licencia.list-licencia', [
            'licencias' => $licencias
        ]);
    }
}
