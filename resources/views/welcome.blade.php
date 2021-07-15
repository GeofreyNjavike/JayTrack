<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JayTrack</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>JayTrack</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <div class="contact-link float-right">
        <a href="#contact" class="scrollto">Contact Us</a>
      </div>

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container-fluid">
     <div class="text-center">
        <h1>JayTrack</h1>
        <h2>System Requirements Collection Platform</h2>
        <div class="countdown" data-count="2024/01/01" data-template="%w weeks %d days <br> %h:%m:%s"></div>

     </div>
     <div class="row">
<div class="col-sm-6 card shadow" >
    <div class="card-header">
        <h6 class="text-center"><strong>Please Provide Your suggestions</strong></h6>
    </div>
    <form action="{{ Route('save-data') }}" method="post"  >
        @csrf
        <div class="form-group">
           <label><strong>Who are You?</strong><span style="color: red">*</span></label>
           <select class="form-control" id="id" name="user_id">
            <option>--Select Your Identity--</option>
            @forelse ($user as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @empty

            @endforelse

          </select>

        </div>
          <div class="form-group">
            <label for="header"><strong>System Requirement</strong> <span style="color: red">*</span></label>
        <input class="form-control" placeholder="provide your suggestion !" name="header">
        </div>
 <div class="form-group">
<label for="description "><strong>Descriptions</strong></label>
<textarea  class="form-control"  name="description" rows="4" placeholder="Please Provide descriptions on the suggestion provided !">
</textarea>
 </div>


<br>
      <div class="text-center">
         <button class="btn btn-primary btn-sm">Send</button>
      </div>
      </form>


</div>

<div class="col-sm-6">
    <div class="card">
        <div class="card-header">
  <h6 class="text-center text-black"><strong>Requirements made so far !</strong></h6>
  <div class="overflow-auto h-62">

    <table class="table table-sm overflow-auto h-64">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($requirements as $key => $rq)
          <tr>
            <th scope="row" class="text-xs">{{ $key+1 }}</th>
            <td class="text-sm">{{ $rq->name }}
            </td>
            <td class="text-xs">
                {{ \Illuminate\Support\Str::limit($rq->header, 50, $end='...')  }}</td>

          </tr>
          @empty

          @endforelse
        </tbody>
    </table>

  </div>
        </div>
        </div>
</div>
     </div>
    </div>
  </section><!-- End Hero -->


  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
