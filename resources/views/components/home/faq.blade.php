<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50" id="faq">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
            <h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">Veel gestelde vragen</h2>
            <dl class="mt-6 space-y-6 divide-y divide-gray-200">
                <div x-data="{ open: false }" class="pt-6">
                    <dt class="text-lg">
                        <button type="button" x-description="Expand/collapse question button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-0" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                  <span class="font-medium text-gray-900">
                    Kunnen jullie echt niks van het berichtje inzien?
                  </span>
                            <span class="ml-6 h-7 flex items-center">
                    <svg class="h-6 w-6 transform rotate-0" x-description="Expand/collapse icon, toggle classes based on question open state.

                    Heroicon name: outline/chevron-down" x-state:on="Open" x-state:off="Closed" :class="{ '-rotate-180': open, 'rotate-0': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
              </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-0" x-show="open">
                        <p class="text-base text-gray-500">Nee wij kunnen echt niks inzien! Ookal zouden wij dat willen dan is het voor ons alsnog onmogelijk om het bericht te decrypten.</p>
                    </dd>
                </div>

                <!-- More questions... -->
            </dl>
        </div>
    </div>
</div>
