<?php

namespace App\Http\Livewire\Backend\LicenciaUser;

use Livewire\Component;
use App\Models\Licencia_User;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Livewire\WithPagination;

class ListLicenciaUser extends Component
{
    public $pdfContent;

    public function reporte($id = 1)
    {
        $fecha = \Carbon\Carbon::now();

        $licenciaUser = Licencia_User::where('id', $id)->first();

        $this->pdfContent = [
            'licenciaUser' => $licenciaUser,
            'fecha' => $fecha,
        ];

        return response()->streamDownload(function () {
            $pdf = PDF::loadView('report/pdf', $this->pdfContent);
            echo $pdf->stream();
        }, 'Servicio numero ' . $id . '.pdf');
    }
    public function render()
    {
        return view('livewire.backend.licencia-user.list-licencia-user', [
            'licenciasUsers' => Licencia_User::orderBy('created_at')->paginate(3)
        ]);
    }
}
