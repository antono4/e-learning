<div>
    <div class="container mx-auto">
        <h1>Pelajaran {{ auth()->user()->name }}</h1>
        <div class="grid grid-cols-4 gap-5">
            @foreach ($lessons as $lesson)
                <div class="shadow py-5 px-2 text-center">
                    <img src="{{ asset('img/no-image.jpg') }}" alt="" width="100%" class="h-40 object-cover">
                    <h3 class="text-xl mt-3 text-center font-semibold tracking-wider mb-5">{{ $lesson->name }}</h3>
                    <a href="" class="bg-indigo-500 hover:bg-indigo-400 px-10 py-2 mx-auto text-center text-white rounded">Lihat Soal</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
