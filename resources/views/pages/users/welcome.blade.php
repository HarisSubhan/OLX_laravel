<x-layout>
    <x-header />
    <x-slider />

    <div class="col-lg-9 col-8 mx-auto">
        <h4 class="fw-bold p-1">
            All Categories
        </h4>
        <div class="d-flex gap-5" style="flex-wrap: wrap">
            @foreach ($categories as $item)
                <div class="parent d-flex flex-column justify-content-between align-items-center">
                    <div style="background:{{ $item->color }};width:100px;height:100px"
                        class="rounded-circle d-flex justify-content-center align-items-center">
                        <img class="d-block m-auto" width="60%" height="60%"
                            src="{{ asset('/storage/' . $item->image) }}" alt="">
                    </div>
                    <h5 class="text-center" style="width:100px">{{ $item->name }}

                    </h5>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>