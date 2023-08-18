<x-app-layout>
    <div class="flex gap-6">
    <div class=" flex-auto w-96 bg-white rounded-lg shadow-md p-8 mb-12">
        <div class="flex items-center space-x-4 mb-6">

            <div>
                <h1 class="text-2xl font-semibold">{{ $user->name }}</h1>
                <p class="text-gray-600">{{ $user->email }}</p>
            </div>
        </div>

        <div class="flex items-center space-x-4 mb-8">
            <div>
                <i class="fas fa-phone text-gray-600"></i>
            </div>
            <div>
                <p class="text-lg">{{ $user->phone }}</p>
                <a href="tel:{{ $user->phone }}" class="text-indigo-600 hover:underline">Make a Call</a>
            </div>
        </div>

        <div class="flex items-center space-x-4">
            <div>
                <i class="fas fa-envelope text-gray-600"></i>
            </div>
            <div>
                <p class="text-lg">{{ $user->email }}</p>
                <a href="mailto:{{ $user->email }}" class="text-indigo-600 hover:underline">Send Email</a>
            </div>
        </div>
    </div>

    <div class=" flex-auto bg-white rounded-lg shadow-md p-8 mb-12">
        <h2 class="text-xl font-semibold mb-6">Upload Photo</h2>
        <form action="/save-photo" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="photo" class="block text-sm font-medium text-gray-700">Select Photo (JPG, PNG,JPEG)</label>
                <input required type="file" name="photo" id="photo" accept=".jpg, .jpeg, .png" class="mt-1 border-2 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-200 rounded-md">
            </div>
            <div class="mb-4">
                <label for="link" class="block text-sm font-medium text-gray-700">Photo/video drive links</label>
                <input type="text" name="link" class="mt-1 border-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-200 rounded-md py-2">
            </div>
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <button type="submit" class="btn-primary bg-black text-white px-4 py-2 rounded">
                Upload Photo
            </button>
        </form>
    </div>
    <div class="w-96 flex-auto">
        <x-link-list class="" :photos="$photos" />
    </div>
    
</div>

<div class="flex bg-white">

    <div class=" flex-auto">
        <x-photo-list :photos="$photos" />
    </div>
</div>
</x-app-layout>
