<x-app-layout>
    <div>
        <div>
            <div class="md:px-4">
                <h2 class="text-2xl mt-6 text-white">
                    Welcome {{Auth::user()->name}} !
                </h2>
                <p class="text-white">
                    {{Auth::user()->email}}
                </p>
            </div>
            <h2 class="text-2xl my-6 text-white text-center">
                Your All Photos
            </h2>

            <x-photo-list :photos="$photos"/>
        </div>
    </div>
</x-app-layout>