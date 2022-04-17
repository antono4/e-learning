<!DOCTYPE html>
<html lang="en">
<head>
    @include('livewire.teacher.layouts.head')
    <livewire:styles />
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
                @yield('header')
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
  <livewire:scripts />
  
</body>
</html>
