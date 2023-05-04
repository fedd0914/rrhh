<div>
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Licencia
        </h2>
        <x-input1
            title="Concepto"
            model="licencia.concept"
            required=true
            tabindex=1
            placeholder="Concepto"
        />
        <x-input1
            title="Días"
            model="licencia.days"
            required=true
            tabindex=2
            type=number
            placeholder="cantidad de días para esta licencia"
        />
    </div>
</div>
