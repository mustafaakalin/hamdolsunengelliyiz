{{-- app footer --}}

<footer class="py-20 md:py-40">
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
        <div class="m-auto md:w-10/12 lg:w-8/12 xl:w-6/12">
            <div class="flex flex-wrap items-center justify-between md:flex-nowrap">
                <div
                    class="flex w-full justify-center space-x-12 text-gray-600 dark:text-gray-300 sm:w-7/12 md:justify-start">
                    <ul class="list-inside list-disc space-y-8">
                        <li><a href="{{ url('ben') }}" class="transition hover:text-primary">Ben</a></li>

                        <li><a href="{{ url('ortopedik') }}" class="transition hover:text-primary">Ortopedik</a></li>
                        <li><a href="{{ url('omurilik') }}" class="transition hover:text-primary">Omurilik</a></li>
                        <li><a href="{{ url('gorme') }}" class="transition hover:text-primary">Görme</a></li>
                        <li><a href="{{ url('spastik') }}" class="transition hover:text-primary">İşitme</a></li>
                        <li><a href="{{ url('spastik') }}" class="transition hover:text-primary">Spastik</a></li>
                    </ul>

                    <ul role="list" class="space-y-8">
                        <li>
                            <a href="https://www.resmigazete.gov.tr/" class="flex items-center space-x-3 transition hover:text-primary">
                                
                                <span>Resmi Gazete</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://aile.gov.tr/" class="flex items-center space-x-3 transition hover:text-primary">
                                
                                <span>Aile Bakanlığı</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="m-auto mt-16 w-10/12 space-y-6 text-center sm:mt-auto sm:w-5/12 sm:text-left">
                    <span class="block text-gray-500 dark:text-gray-400">Herkes bir engelli adayıdır.</span>

                    <span class="block text-gray-500 dark:text-gray-400">{{ config('app.name') }} &copy; <span
                            id="year"></span></span>

                    <span class="flex justify-between text-gray-600 dark:text-white">
                        <a href="#" class="font-medium">Terms of Use </a>
                        <a href="#" class="font-medium"> Privacy Policy</a>
                    </span>

                    <span class="block text-gray-500 dark:text-gray-400">Need help? <a href="#"
                            class="font-semibold text-gray-600 dark:text-white"> Contact Us</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- app footer end --}}