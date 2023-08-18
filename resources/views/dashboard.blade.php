<x-app-layout>
    <div class="mx-auto p-6 bg-black text-white">
        <x-photo-list :photos="$photos" />
    </div>
        <div class="flex pt-8">
            <div class="flex-1">
                <x-link-list class="" :photos="$photos" />
            </div>
            <div class="text-white flex-1 self-stretch">
                <img class="w-72" src="images/logo.png" alt="">
                <ul class="text-xl font-semibold">
                    <li class="flex items-center gap-2 mb-10"><i class="fa-solid fa-envelope "></i></i><a href="mailto:exclusivevisualsservices@gmail.com">exclusivevisualsservices@gmail.com</a></li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-phone"></i><a href="tel:+14388845317">+14388845317</a>
                    </li>
                    <ul class="flex gap-10 mt-14">
                        <li><a href="https://twitter.com/ExclusiveVisua1"><i class="fa-brands fa-twitter"></i></a></li>
    
                        <li><a href="https://instagram.com/xclusivevisuals_art"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.snapchat.com/add/Ea_plus"><i class="fa-brands fa-snapchat"></i></a></li>
                    </ul>
                </ul>
            </div>
            <div class="flex-1">
                <x-contact-form></x-contact-form>
            </div>
        </div>


</x-app-layout>
