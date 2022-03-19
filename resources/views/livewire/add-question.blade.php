<div>
    @if ($hideSelectLesson)    
        <label for="lesson">Pelajaran</label>
        <select wire:model="lesson" id="lesson">
            <option value="" selected hidden>pilih</option>
            @forelse ($lessons as $lesson)
                <option value="{{ $lesson->id }}">{{ $lesson->name }}</option>
            @empty
                
            @endforelse
        </select>
    @endif
    {{ $no }}
    <form wire:submit.prevent="store" method="POST">
        <label for="question">Soal</label>
        <textarea wire:model="question" id="question" class="border"></textarea>
        <br>
        <label for="a">a</label>
        <textarea wire:model="a" id="a" class="border"></textarea>
        <br>
        <label for="b">b</label>
        <textarea wire:model="b" id="b" class="border"></textarea>
        <br>
        <label for="c">c</label>
        <textarea wire:model="c" id="c" class="border"></textarea>
        <br>
        @if ($optionButton)
            <button type="button" wire:click="swictOptionD">tambah opsi d</button>
        @endif
        @if ($optionD)
            <label for="d">d</label>
            <textarea wire:model="d" id="d" class="border"></textarea><label for="d">d</label>
            <br>
            @if ($optionButton)
                <button type="button" wire:click="swictOptionE">tambah opsi E</button>
            @endif
        @endif
        <br>
        @if ($optionE)
            <label for="e">e</label>
            <textarea wire:model="e" id="e" class="border"></textarea>
        @endif
        <br>
        <label for="correct">correct</label>
        <textarea wire:model="correct" id="correct" class="border"></textarea>
        <button wire:click="hideElements">submit</button>
    </form>
</div>
