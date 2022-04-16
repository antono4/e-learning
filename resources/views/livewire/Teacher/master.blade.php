<!DOCTYPE html>
<html lang="en">
<head>
    @include('livewire.teacher.layouts.head')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
        @include('livewire.teacher.layouts.nav')
        @include('livewire.teacher.layouts.aside')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            <div class="section-header">
                Title
            </div>
        
            <div class="section-body">
                @yield('content')
            </div>
        </section>
      </div>
      @include('livewire.teacher.layouts.footer')
    </div>
  </div>

  @include('livewire.teacher.layouts.feet')
  
</body>
</html>
