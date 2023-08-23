@props(['photos'])

<div class="mx-4 pb-72 ps-1">
    <div class="flex gap-1 flex-wrap">
        @unless ($photos->isEmpty())
            <div class="text-white">
                @if (Auth::user()->role !== 'Admin')
                    <h4 class="text-2xl text-center ">Click here to download your photos</h4>
                @else
                    <h4 class="text-2xl text-center ">Manage Photo Links</h4>
                @endif
            </div>
            @foreach ($photos as $photo)
                @if ($photo->link)
                    <div class="flex items-center gap-2 border-2 bg-black border-gray-200 pe-3 flex-wrap">
                        <a href="{{ $photo->link }}" class="border rounded p-2 bg-black text-white" target="_blank">Go To
                            Download</a>
                        <p class="text-white">Date: {{ $photo->created_at }}</p>
                        @if (Auth::user()->role === 'Admin')
                            <form action="/photos/{{ $photo->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa fa-trash text-red-700"></i></button>
                            </form>
                        @endif
                    </div>
                @endif
            @endforeach
        @else
            <p class="text-white">No link found</p>
        @endunless
    </div>
</div>
