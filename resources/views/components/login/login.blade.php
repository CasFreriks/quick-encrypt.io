<div class="min-h-full flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <img class="h-12 w-auto" src="{{ asset('/img/logo.png') }}" alt="Workflow">
                <h2 class="mt-8 text-3xl font-extrabold text-gray-900">
                    Bekijk hier je beveiligde bericht
                </h2>
            </div>

            <div class="mt-6">
                <div class="mt-6">
                    <form action="{{ route('login.store') }}" method="POST" class="space-y-6" autocomplete="off">
                        @csrf
                        <div>
                            <div>
                                <div class="relative border border-gray-300 @error('code') border-red-300 text-red-900 @enderror rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                                    <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Verificatiecode</label>
                                    <input type="text" name="code" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Verificatiecode" value="{{ old('code') }}" minlength="10" maxlength="10">
                                </div>

                                @error('code')
                                <p class="mt-1 text-xs text-red-600" id="email-error">{{ $message }}</p>
                                @enderror

                                @if (session('message'))
                                    <p class="mt-1 text-xs text-red-600" id="email-error">{{ session('message') }}</p>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" value="@if(isset($id)) {{$id}} @endif" name="id">

{{--                        <div class="flex items-center justify-between">--}}
{{--                            <div class="text-sm">--}}
{{--                                <a href="{{ route('home.index') }}" class="font-medium text-indigo-600 hover:text-indigo-500">--}}
{{--                                    Geen code gekregen? Klik hier.--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="flex items-center justify-between">
                            <div class="text-sm">
                                <a href="{{ route('home.index') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                    Nog geen bericht gemaakt? Klik hier.
                                </a>
                            </div>
                        </div>

                        <div>
                            <button type="submit" @if(!isset($id)) disabled @endif class="@if(!isset($id)) disabled:opacity-75 @endif w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Bericht bekijken
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
        <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1584433144859-1fc3ab64a957?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2060&q=80" alt="">
    </div>
</div>
