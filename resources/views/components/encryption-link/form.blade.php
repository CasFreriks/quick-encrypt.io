<div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
    <div class="relative max-w-xl mx-auto">
        <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
            <defs>
                <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
        </svg>
        <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
            <defs>
                <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
        </svg>
        <div class="text-center">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Beveiligd bericht via een linkje</h2>
            <p class="mt-4 text-lg leading-6 text-gray-500">Doormiddel van een linkje een beveiligd bericht maken? Dit kan! Als je hier beneden de juiste gegevens invult wordt er automatisch een linkje
            gegenereerd.</p>
        </div>
        <div class="mt-12">
            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                <div class="sm:col-span-2">
                    <div class="relative border border-gray-300 @error('valid_until') border-red-300 text-red-900 @enderror rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                        <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Geldig tot</label>
                        <input type="date" name="valid_until" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" value="{{ old('valid_until') }}">
                    </div>

                    @error('valid_until')
                    <p class="mt-1 text-xs text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <div class="relative border border-gray-300 @error('message_subject') border-red-300 text-red-900 @enderror rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                        <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Onderwerp</label>
                        <input type="text" name="message_subject" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Geheim wachtwoord" value="{{ old('message_subject') }}">
                    </div>

                    @error('message_subject')
                    <p class="mt-1 text-xs text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <div class="relative border border-gray-300 @error('message_content') border-red-300 text-red-900 @enderror rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                        <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Bericht</label>
                        <textarea rows="4" type="date" name="message_content" id="name" class="block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm resize-none" placeholder="Vul hier je gevoelige gegevens in">{{ old('message_content') }}</textarea>
                    </div>

                    @error('message_content')
                    <p class="mt-1 text-xs text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Maak een linkje aan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
