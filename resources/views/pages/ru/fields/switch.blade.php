<x-page title="Переключатель">

<x-extendby :href="route('moonshine.custom_page', 'fields-checkbox')">
    Checkbox
</x-extendby>

<x-code language="php">
use MoonShine\Fields\SwitchBoolean;

//...
public function fields(): array
{
    return [
        SwitchBoolean::make('Опубликовать', 'active')
    ];
}

//...
</x-code>

<x-code language="php">
use MoonShine\Fields\SwitchBoolean;

//...
public function fields(): array
{
    return [
        SwitchBoolean::make('Опубликовать', 'active')
            ->onValue(1) // Активное значение элемента формы
            ->offValue(0) // Неактивное значение элемента формы
    ];
}

//...
</x-code>


<x-code language="php">
use MoonShine\Fields\SwitchBoolean;

//...
public function fields(): array
{
    return [
        SwitchBoolean::make('Опубликовать', 'active')
            ->autoUpdate(false) // Возможность изменения на главной отключена
            ->autoUpdate(true) // Возможность изменения на главной включена
            ->autoUpdate(fn() => true)
    ];
}

//...
</x-code>

<x-image theme="light" src="{{ asset('screenshots/switch.png') }}"></x-image>
<x-image theme="dark" src="{{ asset('screenshots/switch_dark.png') }}"></x-image>

</x-page>
