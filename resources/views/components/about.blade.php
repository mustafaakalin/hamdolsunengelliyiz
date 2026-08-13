<div id="solution">
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 pt-36">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sky-500">
            <path fill-rule="evenodd"
                d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"
                clip-rule="evenodd" />
            <path fill-rule="evenodd"
                d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"
                clip-rule="evenodd" />
        </svg>
        @foreach ($abouts as $item)

        <div
            class="space-y-6 justify-between text-gray-600 md:flex flex-row-reverse md:gap-6 md:space-y-0 lg:gap-12 lg:items-center">
            <div class="md:5/12 lg:w-1/2">
                <br>
                    @if ($item->image)
                    <img src="{{ asset('storage/'. $item->image ) }}" alt="image" loading="lazy" width="" height=""
                        class="w-full rounded-full" />

                    @else
                        <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg" alt="image" loading="lazy" width="" height=""
                            class="w-full rounded-full" />
                        
                    @endif
            </div>
            <div class="md:7/12 lg:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 md:text-4xl dark:text-white">
                    <br>
                    &nbsp;<span class="text-primary dark:text-white">{{ $item->name }} </span>
                </h2>
                <p class="my-8 text-gray-600 dark:text-gray-300">
                    {{ $item->description }}
                </p>
                <div class="divide-y space-y-4 divide-gray-100 dark:divide-gray-800">
                    <div class="mt-8 flex gap-4 md:items-center">
                        <a href="{{ $item->twitter }}" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-sky-600 hover:bg-sky-700">
                             <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                 <path
                                     d="M17.89 5.356a.5.5 0 00-.708-.708l-3.182 3.182a5.98 5.98 0 01-4.243-1.757 5.98 5.98 0 01-1.757-4.243A5.98 5.98 0 018.05.05a5.98 5.98 0 014.243 1.757l3.182-3.182a.5.5 0 00-.708-.708L11.586 1.05a7.98 7.98 0 00-5.657 2.343A7.98 7.98 0 003.586 9.95a7.98 7.98 0 002.343 5.657 7.98 7.98 0 005.657 2.343 7.98 7.98 0 005.657-2.343 7.98 7.98 0 002.343-5.657 7.98 7.98 0 00-2.343-5.657L17.89 5.356z">
                                 </path>
                             </svg>
                             Follow
                         </a>
                         <a href="https://twitter.com/intent/tweet?text={{ $item->name }}&url={{ url()->current() }}"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-sky-600 hover:bg-sky-700">
                             <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                 <path
                                     d="M17.89 5.356a.5.5 0 00-.708-.708l-3.182 3.182a5.98 5.98 0 01-4.243-1.757 5.98 5.98 0 01-1.757-4.243A5.98 5.98 0 018.05.05a5.98 5.98 0 014.243 1.757l3.182-3.182a.5.5 0 00-.708-.708L11.586 1.05a7.98 7.98 0 00-5.657 2.343A7.98 7.98 0 003.586 9.95a7.98 7.98 0 002.343 5.657 7.98 7.98 0 005.657 2.343 7.98 7.98 0 005.657-2.343 7.98 7.98 0 002.343-5.657 7.98 7.98 0 00-2.343-5.657L17.89 5.356z">
                                 </path>
                             </svg>
                             Tweet at
                         </a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>
