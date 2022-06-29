<div class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="max-w-none mx-auto">
            <div class="bg-white overflow-hidden sm:rounded-lg sm:shadow">

                <div class="bg-white px-4 py-5 sm:px-6">
                    <div class="flex space-x-3">
                        <div class="min-w-0 flex-1">
                            <h1 class="font-medium text-xl text-gray-900">{{ session('message_title') }}</h1>

                        </div>
                    </div>
                </div>

                <div class="opacity-50 px-4 pb-5 sm:p-6 sm:pt-0">
                    <p>{!! nl2br( session('message_content') ) !!} </p>
                </div>
            </div>
        </div>

        <div class="px-4 py-2">
            <div class="flex space-x-3">
                <div class="min-w-0 flex-1">
                    <p class="text-sm font-medium text-gray-900 opacity-25">
                        <span class="font-bold">Let op:</span> als je je browser herlaad, is je bericht verwijderd
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
