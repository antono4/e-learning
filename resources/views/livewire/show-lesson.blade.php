<div>
    <div class="container mx-auto">
        @if ($questions->count() >= 1)
            <div class="grid grid-cols-4 gap-6">
                <div class="col-span-3">
                    @foreach ($questions as $index => $question)
                        <div class="bg-green-100 mb-5 p-5">
                            <p class="mb-3">{{ $question->question }}</p>
                            <div>
                                <ul>
                                    <li class="mb-2">
                                        <input type="radio" class="mr-2" 
                                            @if ($question->correct == $question->a)
                                                checked
                                            @endif
                                            onclick="return false">
                                        <label>A. {{ $question->a }}</label>
                                    </li>
                                    <li class="mb-2">
                                        <input type="radio" class="mr-2" 
                                            @if ($question->correct == $question->b)
                                                checked
                                            @endif onclick="return false">
                                        <label>B. {{ $question->b }}</label>
                                    </li>
                                    <li class="mb-2">
                                        <input type="radio" class="mr-2" 
                                            @if ($question->correct == $question->c)
                                                checked
                                            @endif
                                        onclick="return false">
                                        <label>C. {{ $question->c }}</label>
                                    </li>
                                    <li class="mb-2">
                                        <input type="radio" class="mr-2" 
                                            @if ($question->correct == $question->d)
                                                checked
                                            @endif
                                        onclick="return false">
                                        <label>D. {{ $question->d }}</label>
                                    </li>
                                    <li class="mb-2">
                                        <input type="radio" class="mr-2" 
                                            @if ($question->correct == $question->e)
                                                checked
                                            @endif
                                        onclick="return false">
                                        <label>E. {{ $question->e }}</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <h1>Navigation</h1>
                    <div class="flex">
                        @for ($i=0; $i <= $index; $i++)
                            <div class="bg-red-500 px-2 py-1 mx-2 rounded text-white flex-wrap">{{$i+1}}</div>
                        @endfor
                    </ul>
                </div>
            </div>
        @else
            <h1 class="text-red-500 text-xl mt-10">Tidak ditemukan soal untuk pelajaran ini</h1>
            <p class="text-red-500">Silakan <a href="{{ route('add.question') }}" class="text-indigo-500">buat soal</a> terlebih dahulu</p>
        @endif
    </div>
</div>
