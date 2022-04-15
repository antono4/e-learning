<div class="bg-gray-50">
    <div class="pt-20 container mx-auto">
        @if ($questions->count() >= 1)
            <div class="grid grid-cols-9 gap-6">
                <div class="col-span-6">
                    @foreach ($questions as $index => $question)
                        <div class="border-2 rounded-md shadow bg-white mb-5 p-7">
                            
                            <div class="flex gap-3 items-center">
                                <div>
                                    <i class="fa-solid fa-circle-user text-4xl text-gray-600"></i>
                                </div>
                                <div>
                                    <h5>Bahasa Indonesia</h5>
                                    <small class="flex items-center text-gray-800">
                                        <span>Akmal Rahman</span>
                                        <i class="fa-solid fa-circle text-[5px] mx-2"></i>
                                        <span>PPKn</span>
                                        <i class="fa-solid fa-circle text-[5px] mx-2"></i>
                                        <span>SMK PERTIWI KUNINGAN</span>
                                    </small>
                                </div>
                            </div>

                            <p class="mb-3 mt-5 text-xl">{{ $question->question }}</p>
                            <div>
                                <ul>
                                    <li class="mb-2">
                                        <input 
                                            type="radio" 
                                            name="answer{{$question->id}}" 
                                            id="{{$question->id}}-{{$question->a}}" 
                                            wire:model="answer"
                                            value="{{$question->a}}"
                                            class="mr-2

                                        ">
                                        <label class="text-[17px]" for="{{$question->id}}-{{$question->a}}">
                                            A. {{ $question->a }}
                                        </label>
                                    </li>
                                    <li class="mb-2">
                                        <input 
                                            type="radio" 
                                            name="answer{{$question->id}}" 
                                            id="{{$question->id}}-{{$question->b}}"
                                            wire:model="answer"
                                            value="{{$question->b}}"
                                            class="mr-2" 
                                        ">
                                        <label class="text-[17px]" for="{{$question->id}}-{{$question->b}}">
                                            B. {{ $question->b }}
                                        </label>
                                    </li>
                                    <li class="mb-2">
                                        <input 
                                            type="radio" 
                                            name="answer{{$question->id}}" 
                                            id="{{$question->id}}-{{$question->c}}" 
                                            wire:model="answer"
                                            value="{{$question->c}}"
                                            class="mr-2
                                        ">
                                        <label  class="text-[17px]" for="{{$question->id}}-{{$question->c}}">
                                            C. {{ $question->c }}
                                        </label>
                                    </li>
                                    <li class="mb-2">
                                        <input 
                                            type="radio" 
                                            name="answer{{$question->id}}" 
                                            id="{{$question->id}}-{{$question->d}}" 
                                            wire:model="answer"
                                            value="{{$question->d}}"
                                            class="mr-2">
                                        <label  class="text-[17px]" for="{{$question->id}}-{{$question->d}}">
                                            D. {{ $question->d }}
                                        </label>
                                    </li>
                                    <li class="mb-2">
                                        <input 
                                            type="radio" 
                                            name="answer{{$question->id}}" 
                                            id="{{$question->id}}-{{$question->e}}"
                                            wire:model="answer"
                                            value="{{$question->e}}" 
                                            class="mr-2
                                        ">
                                        <label  class="text-[17px]" for="{{$question->id}}-{{$question->e}}">
                                            E. {{ $question->e }}
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <p class="text-gray-500">
                                Soal Ke 
                                <span class="font-bold">{{ request('page') }}</span> 
                                dari 
                                <span class="font-bold">{{ $pages->count() }}</span> 
                                soal
                            </p>
                            <div>
                                <button 
                                    class="mr-3 hover:bg-[#3aaca5] text-white bg-[#37b68f] px-7 py-2 rounded-md"
                                    wire:click="
                                        submitAnswer(
                                            {{$question->id}}, 
                                            '{{$question->lesson->name}}', 
                                            {{$question->page}}, 
                                            '{{$question->correct}}',
                                            'prev'
                                        )
                                ">
                                    Soal Sebelumnya 
                                </button>
                                @if ($pages->count() == request('page'))
                                    <a 
                                        href="{{ route('student.dashboard') }}"
                                        class="hover:bg-[#3aaca5] text-white bg-[#37b68f] px-7 py-2 rounded-md">
                                        Selesai
                                    </a>
                                @else
                                    <button 
                                        class="hover:bg-[#3aaca5] text-white bg-[#37b68f] px-7 py-2 rounded-md"
                                        wire:click="
                                            submitAnswer(
                                                {{$question->id}}, 
                                                '{{$question->lesson->name}}', 
                                                {{$question->page}}, 
                                                '{{$question->correct}}',
                                                'next'
                                            )
                                        ">
                                        Soal Berikutnya 
                                    </button>
                                    
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-span-3">
                    <div 
                        class="
                            cursor-pointer overflow-hidden rounded-md px-4 py-3 border shadow flex-wrap items-center mb-5 text-white"
                        "
                        style="background: linear-gradient(213deg,#3ba5b4 0,#38ba8a 100%)"
                    >
                        <a href="{{ route('student.dashboard') }}" class="h-full w-full block">
                            <i class="fa-solid fa-gauge mr-3"></i>
                            Kembali ke Dashboard
                        </a>
                    </div>
                    <div class="border-2 overflow-hidden rounded-md shadow bg-white mb-5">
                        <div class="flex p-3">
                            @foreach ($pages as $page)
                                <div 
                                    class="
                                        @if (request('page') == $page->page)
                                            text-white
                                        @else
                                            bg-white 
                                        @endif
                                        cursor-pointer overflow-hidden px-2 py-1 mx-1 rounded border shadow flex-wrap
                                    " 
                                    wire:click="navigationControl({{$page->page}}, '{{request('slug')}}')"
                                    @if (request('page') == $page->page)
                                        style="background: linear-gradient(213deg,#3ba5b4 0,#38ba8a 100%)"
                                    @endif
                                >
                                    {{$page->page}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @else
            <h1 class="text-red-500 text-xl mt-10">Tidak ditemukan soal untuk pelajaran ini</h1>
            <p class="text-red-500">Silakan <a href="{{ route('add.question') }}" class="text-indigo-500">buat soal</a> terlebih dahulu</p>
        @endif
    </div>

    <footer class="bg-[#48556c] mt-20 p-10 text-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 gap-20">
                <div>
                    <div class="flex justify-between">
                        <h2 class="text-xl font-bold tracking-wider">IL-Learning</h2>
                        <div class="flex justify-center items-center">
                            <div
                                x-data="{
                                    open: false,
                                    toggle() {
                                        if (this.open) {
                                            return this.close()
                                        }
                        
                                        this.$refs.button.focus()
                        
                                        this.open = true
                                    },
                                    close(focusAfter) {
                                        if (! this.open) return
                        
                                        this.open = false
                        
                                        focusAfter && focusAfter.focus()
                                    }
                                }"
                                x-on:keydown.escape.prevent.stop="close($refs.button)"
                                x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                x-id="['dropdown-button']"
                                class="relative"
                            >
                                <!-- Button -->
                                <button
                                    x-ref="button"
                                    x-on:click="toggle()"
                                    :aria-expanded="open"
                                    :aria-controls="$id('dropdown-button')"
                                    type="button"
                                    class="border border-gray-400 px-8 py-2 rounded-3xl shadow hover:bg-gray-400 hover:bg-opacity-40"
                                >
                                    <span>Bahasa Indonesia</span>
                                </button>
                        
                                <!-- Panel -->
                                <div
                                    x-ref="panel"
                                    x-show="open"
                                    x-transition.origin.top.left
                                    x-on:click.outside="close($refs.button)"
                                    :id="$id('dropdown-button')"
                                    style="display: none;"
                                    class="absolute left-0 mt-2 w-full bg-white border border-black rounded shadow-md overflow-hidden"
                                >
                                    <div>
                                        <a href="#" class="block w-full text-gray-800 px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                            Indonesia
                                        </a>
                        
                                        <a href="#" class="block w-full text-gray-800 px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                            Inggris
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-7">

                    <p class="mt-7 text-sm text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est earum delectus exercitationem, quaerat ipsam ratione
                    </p>
                    <p class="mt-8 text-gray-300 text-sm">
                        &copy; 2022 Diprella LLC. All rights reserved.
                    </p>
                </div>
                <div class="grid grid-cols-3 gap-10">
                    <div>
                        <h3 class="text-[#3bb497] text-xl font-semibold tracking-widest">About</h3>
                        <ul class="mt-3">
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Courses</a>
                            </li>
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Prices</a>
                            </li>
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">For Business</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-[#3bb497] text-xl font-semibold tracking-widest">IL-Learning</h3>
                        <ul class="mt-3">
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Company</a>
                            </li>
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Road Map</a>
                            </li>
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Term and Condition</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-[#3bb497] text-xl font-semibold tracking-widest">Need Help?</h3>
                        <ul class="mt-3">
                            <li class="mb-2 text-gray-300 hover:text-white">
                                <a href="">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="https://kit.fontawesome.com/d02202f823.js" crossorigin="anonymous"></script>
