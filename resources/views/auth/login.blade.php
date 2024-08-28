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
        <div class="container ">
          <div class="box_container mt-24">
            <h1 class="gray-800 text-3xl font-bold mb-6">Sign In</h1>
            <p class="gray-500 text-15 font-base">
              Create a free account to get started with Work-Force Merge
            </p>
            <div class="mt-14 pt-1">
              <a href="#" class="text-sm block gray-500 white_btn"
                ><img src="../src/assets/google.svg" alt="" /> Continue with
                Google</a
              >
            </div>
            <div class="my-6 divider_line">
              <span></span>
              <span class="uppercase text-15 gray-500">or</span>
              <span></span>
            </div>
            <form method="POST" action="{{ route('login') }}">
              @csrf

            <div class="form-control">
              <label for="email">Your email address</label>
              <input type="email" name="email" id="email" class="form-input" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <div class="form-control">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-input" />
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
        

    
            <div class="my-6">
              <button type="submit" class="btn-blue btn">Continue with email</a>
            </div>

            </form>
            <div class="already_account_txt">
                <span>Already have an account? <a href="#">Log In</a></span>
            </div>
            <div class="continue_txt mt-6">
                <span>By clicking continue, you agree to our <a href="#">Terms of Service </a><span> and </span><a href="#">Privacy Policy</a> </span>
            </div>
          </div>
        </div>
      </div>
      <div>
        <img src="../src/assets/left-side-banner.png" alt="" />
      </div>
    </div>
  </body>
</html>
