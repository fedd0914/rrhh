<x-app-layout title="Editar Licencia">
    <x.back-btn route="admin.licencia.index" />
    <div class="row">
      <div class="col-md-12">
        <livewire:backend.licencia.edit-licencia :licencia='request()->id'>
      </div>
  </div>
</x-app-layout>
