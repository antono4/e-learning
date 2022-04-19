<div>
    <section class="section">
      @section('header')
            <h1>Dashboard</h1>
      @endsection
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Admin</h4>
                    </div>
                    <div class="card-body">
                        {{ $adminCount }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Guru</h4>
                    </div>
                    <div class="card-body">
                        {{ $teacherCount }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Murid</h4>
                    </div>
                    <div class="card-body">
                        {{ $studentCount }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Pelajaran</h4>
                    </div>
                    <div class="card-body">
                        {{ $lessonCount }}
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
</div>