<x-page title="История изменений" :sectionMenu="$sectionMenu ?? null">

<x-p>
    Чтобы в админ панели отображалась история редактирования записей на основе пользователя необходимо
    модели которая используется в ресурсе добавить трейт <code>MoonShine\Traits\Models\HasMoonShineChangeLog</code>
</x-p>

<x-code language="php">
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use MoonShine\Traits\Models\HasMoonShineChangeLog; // [tl! focus]

class Article extends Model
{
    use HasMoonShineChangeLog; // [tl! focus]

    //...
}
</x-code>

<x-image theme="light" src="{{ asset('screenshots/changelogs.png') }}"></x-image>
<x-image theme="dark" src="{{ asset('screenshots/changelogs_dark.png') }}"></x-image>

</x-page>
