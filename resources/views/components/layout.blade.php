<x-html class="font-sans border-t-8 border-blue-500" :title="isset($title) ? $title . ' - ' . config('app.name') : ''">
    <x-slot name="head">
        <x-social-meta
            :title="$component->title()"
            description="A set of media(image & video) components to utilise in your Laravel Blade views."
            :image="asset('/images/socialcard.png')"
        />

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
        <meta name="msapplication-TileColor" content="#b91d47">
        <meta name="theme-color" content="#ffffff">

        <script src="{{ mix('js/app.js') }}" defer></script>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        {{ $head ?? '' }}

        @livewireStyles
        @bukStyles

    </x-slot>

    {{ $slot }}

    @livewireScripts
    @bukScripts
</x-html>
