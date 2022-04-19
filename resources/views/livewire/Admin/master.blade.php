<!DOCTYPE html>
<html lang="en">
<head>
    @include('livewire.admin.layouts.head')
    <livewire:styles />
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
        @include('livewire.admin.layouts.nav')
        @include('livewire.admin.layouts.aside')

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
      @include('livewire.admin.layouts.footer')
    </div>
  </div>

  @include('livewire.admin.layouts.feet')
  <livewire:scripts />

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <x-livewire-alert::scripts />
  
</body>
</html>
