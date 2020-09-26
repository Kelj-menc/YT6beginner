@component('mail::message')
# Pozdravljam vas iz Komadantske sale

Na poslu jeste dosadno ali ako je laravel ucenje u pitanju nikad nije dosadno...huh al sam dosadan

@component('mail::button', ['url' => ''])
Button Koji ne vodi nigde
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
