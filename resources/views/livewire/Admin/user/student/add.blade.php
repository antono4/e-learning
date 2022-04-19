<div>
    @section('header')
        <h1>Tambah Pelajaran</h1>
    @endsection

    <div class="card p-3">
        <form action="">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama :</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Email :</label>
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Password :</label>
                        <input type="password" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Confirm Password :</label>
                        <input type="password" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Select Lesson :</label>
                        <select name="" id="" class="form-control">
                            @foreach ($lessons as $lesson)
                                <option value="">{{ $lesson->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

