<x-app-layout title="Modificar Licencia">
    <x.back-btn route="admin.licencia-user.index" />
    <div class="row">
      <div class="col-md-12">
        <livewire:backend.licencia-user.edit-licencia-user :licenciaUser='request()->id'>
      </div>
  </div>
</x-app-layout>
