@props(['photos'])
    <div class="mx-4">
        <div class="flex gap-4 flex-wrap">
            @unless ($photos->isEmpty())
            @foreach ($photos as $photo)
            <div>
                <img
                style="width:250px;height:250px"
                src="{{asset('storage/' . $photo->photo)}}"
                alt=""
            />
            </div>
             @endForEach
            @else
            <tr>
                no photo Found
            </tr>
            @endUnless
        </div>
    </div>
