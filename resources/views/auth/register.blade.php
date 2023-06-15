<!-- Section: Design Block --><!doctype html>
<html lang="en">

<head>
  <title>SING IN</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

<div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Sign In</h2>
            <form action="{{ route('register')}}" method="post">
            @csrf
              <!-- 2 column grid layout with text inputs for first and last names -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Name</label>
                <input type="text" name="name" id="form3Example3" class="form-control" placeholder="Ingrese Nombre" />
                
              </div>
                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Email </label>
                <input type="email" name="email" id="form3Example3" class="form-control" placeholder="Ingrese Email" />
                
              </div>
             

              <!-- Email input -->
              <!-- <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Email Verified</label>
                <input type="email" name="email_verified_at"id="form3Example3" class="form-control" placeholder="Ingrese Confirmación de Email" />
                
              </div> -->

              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Password</label>
                <input type="password"  name="password"id="form3Example4" class="form-control" placeholder="Ingrese Contraseña"/>
                
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Verify Password </label>
                <input type="password" name="password_confirmation" id="form3Example4" class="form-control" placeholder="Ingrese Confirmación de Contraseña"/>
                
              </div> 

              <!-- Checkbox -->

              <!-- Submit button -->
              <button type="submit"  class="btn btn-primary btn-block mb-4">
                Sign In
              </button>

              <!-- Register buttons -->
              <div class="text-center">

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-80 rounded-4 shadow-4"alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>







  <!-- Jumbotron -->
  