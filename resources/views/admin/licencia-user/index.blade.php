<x-app-layout title="Listado de licencias">
    <x-admin.new-btn route="admin.licencia-user.create" title="Agregar Licencia" />
    <div class="row">
        <div class="col-md-12">
        <livewire:backend.licencia-user.list-licencia-user>
        </div>
    </div>
</x-app-layout>
