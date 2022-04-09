<div class="bg-gray-50">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
    </style>
    
    <div class="container mx-auto mt-20">
        <div class="text-center mb-16">
            <h2 class="font-semibold text-4xl tracking-wider">Pilih Pelajaran</h2>
            <p class="text-gray-700 mt-3">
                Pilih pelajaran sesuai jadwal hari 
                <span class="font-bold text-xl tracking-wider ml-2 text-[#00a498]">SENIN 07 Oktober</span>
            </p>
        </div>
        <div class="grid grid-cols-4">
            @foreach ($lessons as $lesson)    
                <div class="hover:shadow-md border flex justify-center items-center">
                    <a 
                        href="{{ route('student.lesson.show', ['slug'=>$lesson->slug,'page'=>1]) }}"
                        class="w-full h-full py-20 px-10
                    ">
                        <img src="{{ asset('img/development.svg') }}" width="100px" class="mx-auto">
                        <h5 class="text-center mt-5 text-md tracking-wider">
                            {{ $lesson->name }}
                        </h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- <div class="container mx-auto mt-20">
        <div class="grid grid-cols-4 gap-5">
            @foreach ($lessons as $lesson)
                <div class="shadow py-5 px-2 bg-white rounded text-center">
                    <img src="{{ asset('img/no-image.jpg') }}" alt="" width="100%" class="h-40 object-cover">
                    <h3 class="text-xl mt-3 text-center font-semibold tracking-wider mb-5">{{ $lesson->name }}</h3>
                    <a href="{{ route('student.lesson.show', ['slug'=>$lesson->slug,'page'=>1]) }}" class="bg-indigo-500 hover:bg-indigo-400 px-10 py-2 mx-auto text-center text-white rounded">Lihat Soal</a>
                    @if ($lesson->status == 'finished')
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    @elseif ($lesson->status == 'not')
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                        </svg>
                    @endif
                </div>
            @endforeach
        </div>
    </div> --}}
</div>
