<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="{{asset('style/img/LogoAlMasoemIB.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/formulir.css')}}">
    {{-- <link href="{{ asset('/dist/css/sweetalert.css') }}" rel="stylesheet"> --}}
    <title>APLIKASI PEMBUKAAN REKENING</title>
  </head>
  <body>
    <div class="container">
      @yield('content')
      
    </div>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="{{ asset('js/disabled.js') }}" type="text/javascript" charset="utf-8" async defer></script>
      <script src="{{ asset('js/disabled-pekerjaan.js') }}" type="text/javascript" charset="utf-8" async defer></script>
      <script src="{{ asset('js/disabled-badan.js') }}" type="text/javascript" charset="utf-8" async defer></script>
      <script src="{{ asset('js/disabled-jenis-simpanan.js') }}" type="text/javascript" charset="utf-8" async defer></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      {{-- <script src="{{ asset('/dist/js/sweetalert.min.js') }}"></script> --}}
      <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
      <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
  <script>
    // $( ".disable" ).prop("disabled", true);
   $( ".yes" ).click(function() {
      $( ".disable" ).prop("disabled", true);
      $( ".nama" ).prop("disabled", false);
      $( ".nomor" ).prop("disabled", false);
    });
   $( ".no" ).click(function() {
      $( ".disable" ).prop("disabled", false);
      $( ".nama" ).prop("disabled", true);
      $( ".nomor" ).prop("disabled", true);
    });


$("#header-perorang").hide();
$("#body-perorang").hide();
$("#header-badan").hide();
$("#body-badan").hide();

   $("#perorang").click(function() {
      $("#header-perorang").show();
      $("#body-perorang").show();
      $("#header-badan").hide();
      $("#body-badan").hide();
   });
   $("#badan").click(function() {
      $("#header-badan").show();
      $("#body-badan").show();
      $("#header-perorang").hide();
      $("#body-perorang").hide();
   });
  </script>
</body>
</html>