<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('rune.ticker') }}</title>

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicons/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <script src="https://cdn.usefathom.com/script.js" data-site="ZSYDYDVO" defer></script>

        @vite('resources/css/app.css')
    </head>
    <body>
        <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="text-center">
                <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                    {{ config('rune.ticker') }}
                </h1>
                <p class="mt-2 flex justify-center">
                    <img src="{{ asset('images/puff-puff-whale.webp') }}" alt="Puff Puff Whale" class="rounded-lg"/>
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ config('socials.twitter') }}" class="text-gray-900 hover:text-blue-600" target="_blank" rel="noopener">
                        <span class="sr-only">Twitter / X</span>
                        <x-icon-twitter-x class="w-8 h-8" />
                    </a>
                    <a href="{{ config('socials.telegram') }}" class="text-gray-900 hover:text-blue-600" target="_blank" rel="noopener">
                        <span class="sr-only">Telegram</span>
                        <x-icon-telegram class="w-8 h-8" />
                    </a>
                </div>
            </div>
        </main>

        <section class="bg-white py-6 sm:py-8">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="-mx-6 grid grid-cols-1 gap-0.5 overflow-hidden sm:mx-0 sm:rounded-2xl md:grid-cols-3">
                    <div class="bg-gray-400/5 p-8 sm:p-10">
                        <a href="{{ config('marketplaces.magiceden') }}" class="hover:text-blue-600" target="_blank" rel="noopener">
                            <x-icon-magiceden class="max-h-8 w-full object-contain"/>
                        </a>
                    </div>
                    <div class="bg-gray-400/5 p-8 sm:p-10">
                        <a href="{{ config('marketplaces.unisat') }}" class="hover:text-blue-600" target="_blank" rel="noopener">
                            <x-icon-unisat class="max-h-8 w-full object-contain"/>
                        </a>
                    </div>
                    <div class="bg-gray-400/5 p-8 sm:p-10">
                        <a href="{{ config('marketplaces.okx') }}" class="hover:text-blue-600" target="_blank" rel="noopener">
                            <x-icon-okx class="max-h-8 w-full object-contain"/>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-3xl px-6 lg:px-8 overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-base font-medium leading-6 text-gray-900">
                            RUNE ID
                        </dt>
                        <dd class="mt-1 text-base leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ config('rune.id') }}
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-base font-medium leading-6 text-gray-900">
                            DEPLOY DATE
                        </dt>
                        <dd class="mt-1 text-base leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ \Carbon\Carbon::parse(config('rune.deploy_datetime'))->toDayDateTimeString() }} (UTC)
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-base font-medium leading-6 text-gray-900">
                            TRANSACTION
                        </dt>
                        <dd class="mt-1 text-base leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            <a
                                href="{{ Str::of('https://ordiscan.com/tx/')->append(config('rune.etching_tx')) }}"
                                target="_blank"
                                rel="noopener"
                                class="underline hover:no-underline"
                            >
                                {{ Str::of(config('rune.etching_tx'))->mask('.', 5, -5)->replaceMatches('/(\.)\\1+/', '.....') }}
                            </a>
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-base font-medium leading-6 text-gray-900">
                            TOTAL SUPPLY
                        </dt>
                        <dd class="mt-1 text-base leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ config('rune.total_supply') }}
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-base font-medium leading-6 text-gray-900">
                            PREMINE
                        </dt>
                        <dd class="mt-1 text-base leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ config('rune.premine') }}
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-base font-medium leading-6 text-gray-900">
                            SYMBOL
                        </dt>
                        <dd class="mt-1 text-base leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ config('rune.symbol') }}
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-base font-medium leading-6 text-gray-900">
                            DECIMAL
                        </dt>
                        <dd class="mt-1 text-base leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ config('rune.decimal') }}
                        </dd>
                    </div>
                </dl>
            </div>
        </section>

        <x-footer/>
    </body>
</html>
