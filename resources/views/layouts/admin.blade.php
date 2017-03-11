
 @include('layouts.admin.top')
  <!-- //////////////////////////////////////////////////////////////////////////// -->

  

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
    
      @include('layouts.admin.leftside')
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
<main>
      <!-- START CONTENT -->
      @yield('content')
      <!-- END CONTENT -->
</main>
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
       @include('layouts.admin.rightside')
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

    <footer>
      @include('layouts.admin.rodape')
    </footer>


    <!-- ================================================
    Scripts
    ================================================ -->
     @include('layouts.admin.scripts')
    
    
</body>

</html>