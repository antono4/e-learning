<div class="row">

    @section('header')
        <h1>Daftar Nilai Siswa</h1>
    @endsection

    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Advanced Table</h4>
          <div class="card-header-form">
            <form>
              <div class="input-group">
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
                    <th>Nama Siswa</th>
                    <th>Progress</th>
                    <th>Nilai</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Action</th>
                </tr>
                @if ($lesson_count)
                    @foreach ($scores as $index => $score)
                        <tr>
                            <td>
                                <img 
                                    alt="image" 
                                    src="{{ asset('template/stisla') }}/assets/img/avatar/avatar-5.png"
                                    class="rounded-circle mr-3" 
                                    width="35" 
                                    data-toggle="tooltip" 
                                    title="{{ $score->user->name }}"
                                >
                                {{ $score->user->name }}
                            </td>
                            <td class="align-middle">
                                <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                    <div class="progress-bar bg-success" data-width="100"></div>
                                </div>
                            </td>
                            <td>{{ $score->score }}</td>
                            <td>
                                <div 
                                    class="
                                        badge
                                        @if($score->status == 'Diatas KKM')
                                            badge-success
                                        @elseif($score->status == 'Dibawah KKM')
                                            badge-danger
                                        @elseif($score->status == 'Setara KKM')
                                            badge-warning
                                        @endif
                                    "
                                >{{ $score->status }}</div>
                            </td>
                            <td>2018-01-20</td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="6">
                            <center>Belum ada data nilai</center>
                        </th>
                    </tr>
                @endif
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
