<div>
    @if ($hideSelectLesson)    
        <div class="flex items-center gap-3 justify-end m-5">
            <label class="block" for="lesson">Pilih Pelajaran :</label>
            <select wire:model="optionLesson" required id="lesson" class="rounded border-gray-500">
                <option value="" selected hidden>pilih</option>
                @forelse ($lessons as $lesson)
                    <option value="{{ $lesson->id }}">{{ $lesson->name }}</option>
                @empty
                    
                @endforelse
            </select>
        </div>
    @endif
    <br><br><br>
    
    
    <div class="container mx-auto">
        <header class="mb-16">
            <h1 class="text-2xl font-bold tracking-wide">Soal No. {{ $no }}</h1>
            @if ($optionLesson)
                <h2 class="text-xl text-gray-500 font-bold">Soal Ujian {{ $selectedLesson->name }}</h2>
            @elseif(!$optionLesson)
                <h2 class="text-xl text-red-500 font-bold">Pilih Pelajaran Terlebih Dahulu</h2>
            @endif
        </header>
       
        @if ($optionLesson)
            @if ($optionD && !$optionE)
                <button wire:click="swictOptionD()" class="bg-emerald-500 px-5 py-2 rounded-md text-white hover:bg-emerald-400"
                wire:click="swictOptionD()"> Hapus Pilihan </button>
            @elseif($optionE)
                <button wire:click="swictOptionE()" class="bg-emerald-500 px-5 py-2 rounded-md text-white hover:bg-emerald-400"> Hapus Pilihan </button>
            @endif

            <form wire:submit.prevent="store" method="POST">
                <div class="grid grid-cols-3 gap-10">
                    <div class="col-span-3">
                        <label class="block font-semibold tracking-wider" for="question">Soal</label>
                        <textarea wire:model="question" id="question" class="border rounded border-gray-300 w-full h-36"></textarea>
                        @error('question')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-semibold tracking-wider" for="a">Pilihan A</label>
                        <textarea wire:model="a" id="a" class="border rounded border-gray-300 w-full h-28"></textarea>
                        @error('a')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-semibold tracking-wider" for="b">Pilihan B</label>
                        <textarea wire:model="b" id="b" class="border rounded border-gray-300 w-full h-28"></textarea>
                        @error('b')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-semibold tracking-wider" for="c">Pilihan C</label>
                        <textarea wire:model="c" id="c" class="border rounded border-gray-300 w-full h-28"></textarea>
                        @error('c')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        {{-- Button tambah opsi D --}}
                        @if ($a && $b && $c && $optionButton && !$optionD)
                            <button type="button" wire:click="swictOptionD" class="bg-emerald-500 px-5 py-2 rounded-md text-white hover:bg-emerald-400">Tambah Pilihan D</button>
                        @endif

                        @if ($optionD)
                            <label class="block font-semibold tracking-wider" for="d">Pilihan D</label>
                            <textarea wire:model="d" id="d" class="border rounded border-gray-300 w-full h-36"></textarea>
                            @error('d')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        @endif
                    </div>
                    <div>
                        {{-- Button tambah opsi E --}}
                        @if ($d && $optionButton && $optionD && !$optionE)
                            <button type="button" wire:click="swictOptionE" class="bg-emerald-500 px-5 py-2 rounded-md text-white hover:bg-emerald-400">Tambah Pilihan E</button>
                        @endif

                        @if ($optionE)
                            <label class="block font-semibold tracking-wider" for="e">Piihan E</label>
                            <textarea wire:model="e" id="e" class="border rounded border-gray-300 w-full h-36"></textarea>
                            @error('e')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        @endif
                    </div>

                    {{-- div reset kolom --}} <div></div>

                    <div class="bg-white col-span-3 rounded-md shadow overflow-hidden">
                        <div class="bg-gray-700 px-10 py-4">
                            <h5 class="text-white text-xl font-semibold">Preview</h5>
                        </div>
                        <div class="p-10">
                            <span class="block font-semibold tracking-wider">Soal :</span>
                            @if ($question)
                                <p class="mb-3">{{ $question }}</p>
                            @else
                                <p class="mb-3 text-red-500">Isi kolom soal terlebih dahulu</p>
                            @endif

                            <label class="block font-semibold tracking-wider mb-3" for="correct">Jawaban Benar :</label>
                            @error('correct')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                            <ul>
                                @if ($a && $b && $c)
                                <li class="mb-2">
                                    <input type="radio" wire:model="correct" value="{{$a}}" name="answer">
                                    <span class="ml-3">A. {{$a}}</span>
                                </li>
                                <li class="mb-2">
                                    <input type="radio" wire:model="correct" value="{{$b}}" name="answer">
                                    <span class="ml-3">B. {{$b}}</span>
                                </li>
                                <li class="mb-2">
                                    <input type="radio" wire:model="correct" value="{{$c}}" name="answer">
                                    <span class="ml-3">C. {{$c}}</span>
                                </li>
                                    @if ($optionD)
                                        <li class="mb-2">
                                            <input type="radio" wire:model="correct" value="{{$d}}" name="answer">
                                            <span class="ml-3">D. {{$d}}</span>
                                        </li>
                                    @endif
                                    @if ($optionE)
                                        <li class="mb-2">
                                            <input type="radio" wire:model="correct" value="{{$e}}" name="answer">
                                            <span class="ml-3">E. {{$e}}</span>
                                        </li>
                                    @endif
                                @else
                                    <span class="text-red-500 font-bold">Isi dulu Opsi A, Opsi B dan Opsi C terlebih dahulu</span>
                                @endif
                            </ul>
                        </div>
                    </div>
                    {{-- div reset kolom --}} <div></div>
                    {{-- div reset kolom --}} <div></div>
                    <div>
                        <button wire:click="hideElements" class="text-white bg-indigo-500 hiver:bg-indigo-400 px-5 py-1 rounded-md">submit</button>
                    </div>
                </div>
            </form>
        @endif

    </div>
</div>
