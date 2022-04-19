<div class="row">
    @section('header')
        <h1>Daftar Guru</h1>
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
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th>Nama Guru</th>
                <th>Action</th>
              </tr>
              @foreach ($students as $student)
                <tr>
                    <td>
                        <button class="btn btn-transparent d-flex align-items-center" style="cursor: pointer" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">
                            <img alt="image" src="{{ asset('template/stisla') }}/assets/img/avatar/avatar-5.png" class="rounded-circle mr-3" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                            {{ $student->name }}
                        </div>
                    </td>
                    <td>
                        <a href="" class="btn btn-secondary">
                          <i class="fas fa-cog"></i>
                        </div>
                    </td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
