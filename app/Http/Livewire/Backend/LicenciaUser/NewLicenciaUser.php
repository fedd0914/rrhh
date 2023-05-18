<?php

namespace App\Http\Livewire\Backend\LicenciaUser;

use App\Models\Licencia;
use App\Models\User;
use Livewire\Component;
use App\Models\Licencia_User;

class NewLicenciaUser extends Component
{
    public $licencia, $user, $licenciaUser, $userSelected = 1, $licenciaSelected = 1;
    public $totalDays = 0, $avilibleDays = 0;

    protected $rules = [
        'licenciaSelected'    => 'required',
        'userSelected' => 'required',
        'licenciaUser.days'  => 'numeric',
        'licenciaUser.status'  => '',
    ];

    public function mount()
    {
        $this->licenciaUser = new Licencia_User();
    }

    public function save_licencia()
    {
        if ($this->licenciaUser->days > 0 &&  $this->licenciaUser->days > $this->avilibleDays) {
            $this->emitTo('livewire-toast', 'showError', 'La cantidad de dias ingresada supera los diposnibles (' . $this->avilibleDays . ')');
        } else {
            $this->validate();
            $this->licenciaUser->status = true;
            $this->licenciaUser->user_id = $this->userSelected;
            $this->licenciaUser->licencia_id = $this->licenciaSelected;
            $this->licenciaUser->year = 2023;
            $this->licenciaUser->save();
            session()->flash('livewire-toast', 'Licencia agregada correctamente');
            return redirect()->route('admin.licencia-user.index');
        }
    }


    public function render()
    {
        if ($this->licenciaSelected != null) {
            $licencia = Licencia::find($this->licenciaSelected);
            // $this->totalDays = $licencia->days;
            $this->avilibleDays = $licencia->days;
        }
        if ($this->avilibleDays > 0) {
            $usedDays = Licencia_User::where('year', '2023')->where('user_id', $this->userSelected)->where('licencia_id', $this->licenciaSelected)->sum('days');
            if ($usedDays) {
                $this->avilibleDays = $this->avilibleDays - intval($usedDays);
                // $this->licenciaUser->days = $this->avilibleDays;
            }
        }


        $users = User::orderBy('name')->pluck('name', 'id');
        $licencias = Licencia::orderBy('concept')->pluck('concept', 'id');

        return view(
            'livewire.backend.licencia-user.new-licencia-user',
            [
                'users' => $users,
                'licencias' => $licencias
            ]
        );
    }
}
