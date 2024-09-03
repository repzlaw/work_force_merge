<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Work force</title>
    <link rel="stylesheet" href="../src/output.css" />
  </head>
  <body>
    <div class="grid grid-cols-2">
      <div class="col-md-6">
        <div class="container ">
          <div class="mt-24 box_container">
            <h1 class="mb-6 text-3xl font-bold gray-800">Sign In</h1>
            <p class="mb-4 gray-500 text-15 font-base">
              Create a free account to get started with Work-Force Merge
            </p>
            {{-- <div class="pt-1 mt-14">
              <a href="#" class="block text-sm gray-500 white_btn"
                ><img src="../src/assets/google.svg" alt="" /> Continue with
                Google</a
              >
            </div> --}}
            {{-- <div class="my-6 divider_line">
              <span></span>
              <span class="uppercase text-15 gray-500">or</span>
              <span></span>
            </div> --}}
            <form method="POST" action="{{ route('login') }}">
              @csrf

            <div class="form-control">
              <label for="email">Your email address</label>
              <input type="email" name="email" id="email" class="form-input" 
              required
              />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <div class="form-control">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-input"
              required 
              />
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
        

    
            <div class="my-6">
              <button type="submit" class="btn-blue btn">Continue</a>
            </div>

            </form>
            <div class="already_account_txt">
              @if (Route::has('password.request'))
                  <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                      {{ __('Forgot your password?') }}
                  </a>
              @endif

            </div>
            <div class="mt-6 continue_txt">
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
