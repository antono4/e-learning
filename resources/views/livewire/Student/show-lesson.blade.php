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
                                        <input 
                                            type="radio" 
                                            name="answer{{$question->id}}" 
                                            id="{{$question->id}}-{{$question->a}}" 
                                            value="{{$question->a}}"
                                            wire:model="answer"
                                            class="mr-2

                                        ">
                                        <label for="{{$question->id}}-{{$question->a}}">A. {{ $question->a }}</label>
                                    </li>
                                    <li class="mb-2">
                                        <input type="radio" name="answer{{$question->id}}" id="{{$question->id}}-{{$question->b}}" class="mr-2">
                                        <label for="{{$question->id}}-{{$question->b}}">B. {{ $question->b }}</label>
                                    </li>
                                    <li class="mb-2">
                                        <input type="radio" name="answer{{$question->id}}" id="{{$question->id}}-{{$question->c}}" class="mr-2">
                                        <label for="{{$question->id}}-{{$question->c}}">C. {{ $question->c }}</label>
                                    </li>
                                    <li class="mb-2">
                                        <input type="radio" name="answer{{$question->id}}" id="{{$question->id}}-{{$question->d}}" class="mr-2">
                                        <label for="{{$question->id}}-{{$question->d}}">D. {{ $question->d }}</label>
                                    </li>
                                    <li class="mb-2">
                                        <input type="radio" name="answer{{$question->id}}" id="{{$question->id}}-{{$question->e}}" class="mr-2">
                                        <label for="{{$question->id}}-{{$question->e}}">E. {{ $question->e }}</label>
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
                            <div class="bg-red-500 px-2 py-1 mx-1 rounded text-white flex-wrap">{{$i+1}}</div>
                        @endfor
                    </div>
                    <h2 class="block">Finalisasi</h2>
                    <button class="bg-indigo-500 text-white hover:bg-indigo-400 px-7 py-1 rounded" wire:click="finalisasi()">
                        Finalisasi
                    </button>
                    <button wire:click="showanswer()">few</button>
                </div>
            </div>
        @else
            <h1 class="text-red-500 text-xl mt-10">Tidak ditemukan soal untuk pelajaran ini</h1>
            <p class="text-red-500">Silakan <a href="{{ route('add.question') }}" class="text-indigo-500">buat soal</a> terlebih dahulu</p>
        @endif
    </div>
</div>
