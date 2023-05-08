<div class="row">
    <div class="col-md-9">
        <x-admin.card title="Datos de la licencia">
            @include('livewire.backend.licencia.form')
        </x-admin.card>
    </div>
    <div class="col-md-3">
        <x-admin.card title="Opciones">
            <x-admin.save-btn event="save_licencia" updatedtext="{{ $licencia->updated_at->format('d/m/y H:i:s') }}" newLine=true />
            <hr>
             <p> Estado:
                <span class="badge badge-{{ $licencia->is_active ? 'success':'danger' }}">
                    {{ $licencia->is_active ? 'Activa':'Desactivada' }}
                </span>
            </p>
            <div
                wire:click='toggle_status'
                class="btn btn-{{ $licencia->is_active ? 'danger':'success' }}"
            >
                {{ $licencia->is_active ? 'Desactivar':'Activar' }}
            </div>
            <hr>
            <x-admin.delete-btn
                :key="$licencia->id"
                event="delete_licencia"
                text="Desea eliminar la licencia: {{ $licencia->concept }}"
            />
        </x-admin.card>
    </div>
</div>
