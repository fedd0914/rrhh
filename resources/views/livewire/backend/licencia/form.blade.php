<div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Forms
    </h2>
    <x-admin.input
        title="Concepto"
        model="licencia.concept"
        required=true
        tabindex=1
        placeholder="Concepto"
    />
    <x-admin.input
        title="Días"
        model="licencia.days"
        required=true
        tabindex=2
        type=number
        placeholder="Cantidad de días para esta licencia"
    />
</div>
