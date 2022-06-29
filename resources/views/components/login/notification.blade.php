@if(app('request')->input('mail_send'))
    <div class="fixed inset-x-0 top-0 z-10">
        <div class="bg-indigo-600">
            <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between flex-wrap">
                    <div class="w-0 flex-1 flex items-center">
                <span class="flex p-2 rounded-lg bg-indigo-800">
                  <!-- Heroicon name: outline/speakerphone -->
                  <i class='bx bx-error-circle text-white text-xl'></i>
                </span>
                        <p class="ml-3 font-medium text-white truncate">
                            <span class="hidden md:inline"> Er is een e-mail met verificatie gestuurd, met deze code kan je vervolgens je bericht bekijken. </span>
                            <span class="md:hidden sm:inline"> Er is een e-mail met verificatie gestuurd.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
