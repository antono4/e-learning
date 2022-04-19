<div>
    @section('header')
        <h1>Tambah Pelajaran</h1>
    @endsection

    <div class="card p-3">
        <form wire:submit.prevent="store()">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nama :</label>
                        <input 
                            type="text" 
                            class="
                                form-control
                                @error('name')
                                    is-invalid
                                @enderror
                            "
                            wire:model="name"
                            id="name"
                            :value="old('name')"
                        >
                        @error('name')
                            <i class="invalid-feedback">{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Pilih Guru Pengajar :</label>
                        <select name="" id="" class="form-control">
                            @foreach ($teachers as $teacher)
                                <option value="">{{ $teacher->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="d-flex align-items-center justify-content-end">
                        <button class="btn btn-danger mr-3" type="reset">Reset</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

