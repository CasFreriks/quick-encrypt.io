<div class="relative bg-gray-800 overflow-hidden" id="home">
    <div class="hidden sm:block sm:absolute sm:inset-0" aria-hidden="true">
        <svg class="absolute bottom-0 right-0 transform translate-x-1/2 mb-48 text-gray-700 lg:top-0 lg:mt-28 lg:mb-0 xl:transform-none xl:translate-x-0" width="364" height="384" viewBox="0 0 364 384" fill="none">
            <defs>
                <pattern id="eab71dd9-9d7a-47bd-8044-256344ee00d0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" fill="currentColor"></rect>
                </pattern>
            </defs>
            <rect width="364" height="384" fill="url(#eab71dd9-9d7a-47bd-8044-256344ee00d0)"></rect>
        </svg>
    </div>
    <div class="relative pt-6 pb-16 sm:pb-24">
        <div x-data="Components.popover({ open: false, focus: true })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
            <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                <div class="flex items-center flex-1">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="#">
                            <span class="sr-only">Workflow</span>
                            <img class="h-8 w-auto sm:h-10" src="img/logo.png" alt="">
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button type="button" class="bg-gray-800 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-700 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                                <span class="sr-only">Open main menu</span>
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="hidden space-x-10 md:flex md:ml-10">

                        <a href="#home" class="font-medium text-white hover:text-gray-300">Home</a>

                        <a href="#features" class="font-medium text-white hover:text-gray-300">Features</a>

                        <a href="#faq" class="font-medium text-white hover:text-gray-300">FAQ</a>

                    </div>
                </div>
            </nav>


            <div x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-description="Mobile menu, show/hide based on menu open state." class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-ref="panel" @click.away="open = false" style="display: none;">
                <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="px-5 pt-4 flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto" src="img/logo.png" alt="">
                        </div>
                        <div class="-mr-2">
                            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="toggle">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="px-2 pt-2 pb-3 space-y-1">

                        <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>

                        <a href="#features" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>

                        <a href="#faq" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">FAQ</a>

                    </div>
                </div>
            </div>

        </div>

        <main class="mt-16 sm:mt-24">
            <div class="mx-auto max-w-7xl">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="px-4 sm:px-6 sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left lg:flex lg:items-center">
                        <div>

                            <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                                <span class="md:block">Stuur gemakkelijk en veilig gevoelige gegevens</span>
                                <!-- space -->
                                <span class="text-indigo-400 md:block">naar gebruikers</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                Dankzij onze encryptie tool kan je gemakkelijk en veilig gevoelige gegevens naar gebruikers sturen
                                zonder je zorgen te maken.
                            </p>

                        </div>
                    </div>
                    <div class="mt-16 sm:mt-24 lg:mt-0 lg:col-span-6">
                        <div class="bg-white sm:max-w-md sm:w-full sm:mx-auto sm:rounded-lg sm:overflow-hidden">
                            <div class="px-4 py-8 sm:px-10">

                                <div class="flex flex-row justify-center">
                                    <a href="#" class="w-1/2 flex justify-center border border-transparent rounded-md text-white bg-indigo-600 hover:bg-indigo-700 py-2 px-3 mt-3 mr-1">Bericht via mail</a>
                                    <a href="{{ route('encryption-link.index') }}" class="w-1/2 flex justify-center border border-transparent rounded-md text-white bg-indigo-600 hover:bg-indigo-700 py-2 px-3 mt-3 ml-1">Bericht via link</a>
                                </div>

                                <div class="mt-6 relative">
                                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                        <div class="w-full border-t border-gray-300"></div>
                                    </div>
                                    <div class="relative flex justify-center text-sm">
                                      <span class="px-2 bg-white text-gray-500">
                                        Maak hier een beveiligd bericht aan
                                      </span>
                                    </div>
                                </div>

                                <div class="mt-6">

                                    <form action="{{ route('home.store') }}" method="POST" class="space-y-6" autocomplete="off">
                                        @csrf
                                        <div>
                                            <label for="name" class="sr-only">Email ontvanger</label>

                                            <div class="relative border border-gray-300 @error('email_to') border-red-300 text-red-900 @enderror rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Email ontvanger</label>
                                                <input type="text" name="email_to" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="John.doe@email.com" value="{{ old('email_to') }}">
                                            </div>

                                            @error('email_to')
                                            <p class="mt-1 text-xs text-red-600" id="email-error">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <div class="relative border border-gray-300 @error('valid_until') border-red-300 text-red-900 @enderror rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Geldig tot</label>
                                                <input type="date" name="valid_until" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" value="{{ old('valid_until') }}">
                                            </div>

                                            @error('valid_until')
                                            <p class="mt-1 text-xs text-red-600" id="email-error">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <div class="relative border border-gray-300 @error('message_subject') border-red-300 text-red-900 @enderror rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Onderwerp</label>
                                                <input type="text" name="message_subject" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Geheim wachtwoord" value="{{ old('message_subject') }}">
                                            </div>

                                            @error('message_subject')
                                            <p class="mt-1 text-xs text-red-600" id="email-error">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <div class="relative border border-gray-300 @error('message_content') border-red-300 text-red-900 @enderror rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                                <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Bericht</label>
                                                <textarea rows="4" type="date" name="message_content" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm resize-none" placeholder="Vul hier je gevoelige gegevens in">{{ old('message_content') }}</textarea>
                                            </div>

                                            @error('message_content')
                                            <p class="mt-1 text-xs text-red-600" id="email-error">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div>
                                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Maak een beveiligd bericht aan
                                            </button>
                                        </div>
                                    </form>

                                    @if (session('message'))
                                        <div class="w-full flex justify-center border border-transparent rounded-md bg-green-400 py-2 px-3 mt-3">
                                            <p class="text-white text-xs">{{ session('message') }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
