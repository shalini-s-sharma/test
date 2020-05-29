
<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
  <body>
    <div class="container-scroller">
    <div class="loading" style="display:none;"></div>
      <!-- partial:partials/_navbar.html -->
      @include('layouts.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.sidebar')
        <!-- partial -->
        <div class="main-panel"  >
          <div class="content-wrapper" id="main">
            @yield('content')
          </div>
          <!-- partial:partials/_footer.html -->
          @include('layouts.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script>
    $(window).load(function() {
		// Animate loader off screen
		$(".loading").fadeOut("slow");;
	});</script>
  </body>
</html>