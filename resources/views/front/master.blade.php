<!DOCTYPE html>
<html lang="en">

    @include('front.partilas.head')
    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
       @include('front.partilas.navbar')
        <!-- Navbar End -->

        @yield('content')
        <!-- Modal Search Start -->
        


        <!-- Footer Start -->
       @include('front.partilas.footer')
        <!-- Footer End -->

        <!-- Copyright Start -->
    
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
   @include('front.partilas.scripts')
    </body>

</html>