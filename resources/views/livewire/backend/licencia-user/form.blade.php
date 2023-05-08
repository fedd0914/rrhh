<div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Forms
    </h2>
    <div class="row">
        <x-admin.select
            id="userSelect2"
            model="userSelected"
            title="Usuarios:"
            :values="$users"

            tabindex=1
        />
    </div>
    <div class="row">
        <x-admin.select
            id="licenciaSelect2"
            model="licenciaSelected"
            title="Licencias:"
            :values="$licencias"
            tabindex=2
        />
    </div>
    <div class="row">
        <x-admin.input
            title="Días disponibles"
            disabled=true
            model="avilibleDays"
            required=true
            tabindex=2
            type=number
            placeholder="Cantidad de días para esta licencia"
        />
    </div>
    <div class="row">
        <x-admin.input
            title="Días"
            model="licenciaUser.days"
            required=true
            tabindex=2
            type=number
            placeholder="Cantidad de días para esta licencia"
        />
    </div>


</div>

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        // $("#userSelect2").select2({});
        // $("#licenciaSelect2").select2({});

        // $('#userSelect2').val(@this.userSelected).trigger('change');
        // $('#licenciaSelect2').val(@this.licenciaSelected).trigger('change');

        $('#userSelect2').on('change', function (e) {
            var data = $('#userSelect2').select2("val");
            @this.set('userSelected', data);
        });

        $('#licenciaSelect2').on('change', function (e) {
            var data = $('#licenciaSelect2').select2("val");
            @this.set('licenciaSelected', data);
        });
    });
</script>
@endsection
