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
                            class="form-control"
                            name="name" 
                            :value="old('name')" 
                            id="name"
                            required    
                        >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input 
                            wire:model.defer="email"
                            type="email" 
                            class="form-control"
                            name="email" 
                            :value="old('email')" 
                            id="email"
                            required
                        >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input 
                            wire:model.defer="password"
                            type="password" 
                            class="form-control"
                            name="password"
                            id="password"
                            required
                        >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cpassword">Confirm Password :</label>
                        <input 
                            wire:model.defer="password_confirm"
                            type="password" 
                            class="form-control"
                            name="password_confirmation"
                            id="cpassword"
                        >
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

</div>

