<div>
    @section('header')
        <h1>Tambah Guru</h1>
    @endsection

    <div class="card p-3">
        <form wire:submit.prevent="store()">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nama :</label>
                        <input 
                            wire:model.defer="name"
                            type="text" 
                            class="
                                form-control
                                @error('name')
                                    is-invalid
                                @enderror
                            "
                            name="name" 
                            :value="old('name')" 
                            id="name"   
                        >
                        @error('name')
                            <i class="invalid-feedback">{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input 
                            wire:model.defer="email"
                            type="email" 
                            class="
                                form-control
                                @error('email')
                                    is-invalid
                                @enderror
                            "
                            name="email" 
                            :value="old('email')" 
                            id="email"
                        >
                        @error('email')
                            <i class="invalid-feedback">{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input 
                            wire:model.defer="password"
                            type="password" 
                            class="
                                form-control
                                @error('password')
                                    is-invalid
                                @enderror
                            "
                            name="password"
                            id="password"
                        >
                        @error('password')
                            <i class="invalid-feedback">{{ $message }}</i>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cpassword">Confirm Password :</label>
                        <input 
                            wire:model.defer="password_confirm"
                            type="password" 
                            class="
                                form-control
                                @error('password')
                                    is-invalid
                                @enderror
                            "
                            name="password_confirmation"
                            id="cpassword"
                        >
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

