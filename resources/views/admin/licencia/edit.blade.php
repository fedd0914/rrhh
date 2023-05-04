<x-admin.base title="Editar Noticias">
    <x.back-btn route="admin.licencia.index" />
    <div class="row">
      <div class="col-md-12">
        <livewire:admin.news.edit-article :article='request()->id'>
      </div>
  </div>
  </x-admin>
