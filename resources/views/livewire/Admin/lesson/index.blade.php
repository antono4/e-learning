<div class="row">
    @section('header')
        <h1>Daftar Pelajaran</h1>
    @endsection


   

    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Advanced Table</h4>
          <div class="card-header-form">
            <form>
              <div class="input-group" >
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>

            <a href="{{ route('admin.lessons.add') }}" class="btn btn-primary">Tambah Pelajaran</a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th>Pelajaran</th>
                <th>Guru Pengajar</th>
                <th>Action</th>
              </tr>
              @foreach ($lessons as $lesson)
                <tr>
                    <td>
                        <button class="btn btn-transparent d-flex align-items-center" style="cursor: pointer" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">
                            {{ $lesson->name }}
                        </div>
                    </td>
                    <td>
                        <img alt="image" src="{{ asset('template/stisla') }}/assets/img/avatar/avatar-5.png" class="rounded-circle mr-3" width="35" data-toggle="tooltip" title="{{ $lesson->user->name }}">
                        {{ $lesson->user->name }}
                    </td>
                    <td>
                        <a href="{{ route('admin.lessons.show', $lesson->slug) }}" class="btn btn-secondary">
                            <i class="fas fa-cog"></i>
                        </a>
                    </td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
