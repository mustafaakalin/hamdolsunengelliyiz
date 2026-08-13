<div class="text-gray-600 dark:text-gray-300 pt-36" id="testimonials">
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
        <div class="mb-20 space-y-4 px-6 md:px-0">
            <h2 class="text-center text-2xl font-bold text-gray-800 dark:text-white md:text-4xl">
                Omurilik
            </h2>
            <p class="text-center">omurilik engelli insanlar arasında birçok başarılı birey bulunmaktadır. </p>
        </div>
        <div class="gap-8 space-y-8">
            @foreach($spinalcord as $item)

                <div
                    class="aspect-auto p-8 border border-gray-100 rounded-3xl bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none">
                    <div class="flex gap-4">

                        @if ($item->image)
                        <img class="w-12 h-12 rounded-full"
                        src="{{ asset('storage/'. $item->image )  }}"
                        alt="user avatar" width="400" height="400" loading="lazy">
    
                        @else
                        <img class="w-12 h-12 rounded-full"
                            src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg"
                            alt="user avatar" width="400" height="400" loading="lazy">
                            
                        @endif
                        <div>
                            <h6 class="text-lg font-medium text-gray-700 dark:text-white">{{ $item->name }}</h6>
                            <p class="text-sm text-gray-500 dark:text-gray-300">{{ $item->title }}</p>
                        </div>
                    </div>
                    <p class="mt-8 truncate ...">{{ Str::limit($item->description,200) }}</p>
                    <a href="/benioku/{{ $item->slug }}" class="strong text-sky-600 hover:text-sky-500">Read More</a>
                </div>

            @endforeach
        </div>
    </div>
</div>
