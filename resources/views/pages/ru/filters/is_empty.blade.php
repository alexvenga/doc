<x-page title="IsEmpty/IsNotEmpty">

    <x-p>Позволяет отображать только строки, имеющие пустые (не пустые для IsNotEmptyFilter) значения поля</x-p>

    <x-p>Пустыми значениями считаются:</x-p>
    <x-ul :items="['NULL', '\'\'', 0]"></x-ul>


    <x-p><code>MoonShine\Filters\IsEmptyFilter</code></x-p>
    <x-p><code>MoonShine\Filters\IsNotEmptyFilter</code></x-p>

</x-page>
