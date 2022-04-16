{{-- <div class="pt-32">
    <div class="container mx-auto">
        <table class="border w-full rounded-md shadow overflow-hidden">
            <tr class="border bg-gray-800 text-white">
                <td class="px-6 w-[60px]"></td>
                <td class="py-3">
                    <span class="font-bold">Nama Siswa</span>
                </td>
                <td>
                    <span class="font-bold">Nilai</span>
                </td>
                <td>
                    <span class="font-bold">Status</span>
                </td>
            </tr>

            @forelse ($scores as $index => $score)
                <tr 
                    class="
                        border
                        @if ($index %2 == 1)
                            bg-gray-100
                        @else
                            bg-white
                        @endif
                ">
                    <td class="py-3 px-4">
                        <span class="font-semibold">{{ $index+1 }}</span>
                    </td>
                    <td>
                        {{ $score->user->name }}
                    </td>
                    <td>
                        {{ $score->score }}
                    </td>
                    <td>
                        <span 
                            class="px-3 text-sm rounded-xl text-white"
                            style="
                            @if($score->status == 'Diatas KKM')
                                background: linear-gradient(213deg,#3ba5b4 0,#38ba8a 100%)
                            @elseif($score->status == 'Dibawah KKM')
                                background-image: linear-gradient(315deg, #fe8c00 0%, #f83600 74%)
                            @elseif($score->status == 'Setara KKM')
                                background-image: linear-gradient(315deg, #FF8008 0%, #FFC837 74%)
                            @endif
                            "    
                        >{{ $score->status }}</span>
                    </td>
                </tr>
            @empty
                <tr class="bg-white">
                    <th class="py-3 px-4" colspan="4">
                        Belum ada siswa submit nilai
                    </th>
                </tr>
            @endforelse
        </table>
    </div>
</div> --}}

<div class="row">
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
                {{-- @empty
                    <tr class="bg-white">
                        <th class="py-3 px-4" colspan="4">
                            Belum ada siswa submit nilai
                        </th>
                    </tr> --}}
                @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
</div>