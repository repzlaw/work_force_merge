<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css" />
  </head>
  <body>
    <div class="grid grid-cols-2">
      <div class="col-md-6">
        <div class="container">
          <div class="box_container user_page mt-24">
            <h1 class="gray-800 text-3xl font-bold mb-6">Sign Up</h1>
            <p class="gray-500 text-15 font-base">
              Create a free account to get started with Work-Force Merge
            </p>

            <form method="POST" action="{{ route('register') }}">
                @csrf


            <div class="flex justify-center">
              <ul class="switch-tabs">
                <li class="active" id="talent_tab">Talent</li>
                <li id="recruiter_tab">Recruiter</li>
              </ul>
            </div>
            <div class="user_form mt-6" id="talent_form">

              <div class="form-control">

                <label for="email">Your email address</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <div class="form-input-icon">
                  <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-input"
                    
                  />
      
                  <span class="input_icon"
                    ><img src="../src/assets/x-circle.svg" alt=""
                  /></span>
                </div>
              </div>
            </div>
            <div class="my-6">
              <button type="submit" class="btn-blue btn">Continue with email</button>
            </div>
            
            </form>

            <div class="continue_txt mt-6">
              <span
                >By clicking continue, you agree to our
                <a href="#">Terms of Service </a><span> and </span
                ><a href="#">Privacy Policy</a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="logo_banner">
        <img src="../src/assets/left-side-banner.png" alt="" />
      </div>
    </div>
    <script src="../src/js/index.js"></script>
  </body>
</html>
