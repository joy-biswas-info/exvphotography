<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        @include('layouts.gust_navigation')

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div class="flex items-center justify-center">
                <div class="bg-cove"
                style="width:50%;">

                <p class=" self-center p-10 text-white">
                    On behalf of the entire team, we would like to express our deep gratitude for choosing us to capture the memorable moments of your wedding or other special event. It is with great honor and responsibility that we have taken part in these unique moments of your life.
        
                    Each of your stories is a source of inspiration for us. Your smiles, your emotions and your joys have enabled us to create timeless visual memories. The images we capture are not just pictures, but authentic testimonies to the love, celebration and importance of each moment.
        
                    Your confidence in our photography skills is a constant motivation to improve and raise our artistic standards. We're honored to have had the chance to help preserve these precious memories, and hope they remain a source of joy and reflection for years to come.
        
        
                    If you have a moment, we'd love to hear your comments and thoughts on your experience with our service. Your feedback will help us continue to provide quality services and better meet your expectations and those of our future customers.
        
                    Once again, thank you for choosing us to be the visual witnesses to your story. We greatly appreciate your trust and look forward to serving you again in the future, for more moments of joy, celebration and happiness.
        
                    Sincerely, The Exclusive visuals photography team
                  </p>

                </div>
                <div class="self-center flex justify-center items-center flex-col" style="width:50%">
                    <div class="">
                        <a href="/">
                            <img class="w-56 mt-4" src={{asset('logo/logo.png')}} alt="">
                        </a>
                    </div> 
                    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
