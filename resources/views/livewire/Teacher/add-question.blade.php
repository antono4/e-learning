<div>
    
    @section('header')
        <h1>Soal no. {{$no}}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Forms</a></div>
            <div class="breadcrumb-item">Form Validation</div>
        </div>
    @endsection

    <div class="container">
        @if ($optionD && !$optionE)
            <button wire:click="swictOptionD()" class="btn btn-danger mb-3"> Hapus Pilihan </button>
        @elseif($optionE)
            <button wire:click="swictOptionE()" class="btn btn-danger mb-3"> Hapus Pilihan </button>
        @endif

        <form wire:submit.prevent="store" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="question">Soal</label>
                        <textarea 
                            wire:model="question" 
                            id="question" 
                            class="form-control" 
                            required 
                            style="min-height: 100px"
                        ></textarea>
                    </div>
                    @error('question')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="a">Pilihan A</label>
                        <textarea 
                            wire:model="a" 
                            id="a" 
                            class="form-control" 
                            required 
                            style="min-height: 100px"
                        ></textarea>
                    </div>
                    @error('a')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="b">Pilihan B</label>
                        <textarea 
                            wire:model="b" 
                            id="b" 
                            class="form-control" 
                            required 
                            style="min-height: 100px"
                        ></textarea>
                    </div>
                    @error('b')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label for="c">Pilihan C</label>
                        <textarea 
                            wire:model="c" 
                            id="c" 
                            class="form-control" 
                            required 
                            style="min-height: 100px"
                        ></textarea>
                    </div>
                    @error('c')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-4">
                    {{-- Button tambah opsi D --}}
                    @if ($a && $b && $c && $optionButton && !$optionD)
                        <button type="button" wire:click="swictOptionD" class="btn btn-success">Tambah Pilihan D</button>
                    @endif

                    @if ($optionD)
                    <div class="form-group mb-3">
                        <label for="d">Pilihan D</label>
                        <textarea 
                            wire:model="d" 
                            id="d" 
                            class="form-control" 
                            required 
                            style="min-height: 100px"
                        ></textarea>
                    </div>
                        @error('d')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    @endif
                </div>
                <div class="col-md-4">
                    {{-- Button tambah opsi E --}}
                    @if ($d && $optionButton && $optionD && !$optionE)
                        <button type="button" wire:click="swictOptionE" class="btn btn-success">Tambah Pilihan E</button>
                    @endif

                    @if ($optionE)
                    <div class="form-group mb-3">
                        <label for="e">Pilihan E</label>
                        <textarea 
                            wire:model="e" 
                            id="e" 
                            class="form-control" 
                            required 
                            style="min-height: 100px"
                        ></textarea>
                    </div>
                        @error('e')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    @endif
                </div>

                <div class="col-md-12 mt-3">
                    <div class="bg-white rounded overflow-hidden">
                        <div class="bg-primary py-3 px-4">
                            <h5 class="text-white m-0">Preview</h5>
                        </div>
                        <div class="py-3 px-4">
                            <h6>Soal :</h6>
                            @if ($question)
                                <p class="mb-3">{{ $question }}</p>
                            @else
                                <p class="mb-3 text-danger">
                                    <i>Isi kolom soal terlebih dahulu</i>
                                </p>
                            @endif
    
                            <h6 class="mb-3">Jawaban Benar :</h6>
                            @error('correct')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                            <ul class="p-0 m-0" style="list-style:none">
                                @if ($a && $b && $c)
                                <li class="mb-2">
                                    <input type="radio" id="acorrect" wire:model="correct" value="{{$a}}" name="answer">
                                    <span class="ml-3" for="acorrect">A. {{$a}}</span>
                                </li>
                                <li class="mb-2">
                                    <input type="radio" id="bcorrect" wire:model="correct" value="{{$b}}" name="answer">
                                    <span class="ml-3" for="bcorrect">B. {{$b}}</span>
                                </li>
                                <li class="mb-2">
                                    <input type="radio" id="ccorrect" wire:model="correct" value="{{$c}}" name="answer">
                                    <span class="ml-3" for="ccorrect">C. {{$c}}</span>
                                </li>
                                    @if ($optionD)
                                        <li class="mb-2">
                                            <input type="radio" id="dcorrect" wire:model="correct" value="{{$d}}" name="answer">
                                            <span class="ml-3" for="dcorrect">D. {{$d}}</span>
                                        </li>
                                    @endif
                                    @if ($optionE)
                                        <li class="mb-2">
                                            <input type="radio" id="ecorrect" wire:model="correct" value="{{$e}}" name="answer">
                                            <span class="ml-3" for="ecorrect">E. {{$e}}</span>
                                        </li>
                                    @endif
                                @else
                                    <li class="text-danger">
                                        <i>Isi dulu Opsi A, Opsi B dan Opsi C terlebih dahulu</i>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- div reset kolom --}} <div></div>
                {{-- div reset kolom --}} <div></div>
                <div class="d-flex justify-content-end w-100 mt-4 pr-3">
                    <button wire:click="hideElements" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>