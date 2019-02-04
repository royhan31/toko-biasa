<!DOCTYPE html>
<html lang="en">


@include('layouts.partial._head')

<body class="sidebar-fixed">
  <div class="container-scroller">

    @include('layouts.partial._navbar')

    <div class="container-fluid page-body-wrapper">

      @include('layouts.partial._sidebar')

      <div class="main-panel">

        @yield('content')

        @include('layouts.partial._footer')

      </div>

    </div>

  </div>

  @include('layouts.partial._script')

</html>

