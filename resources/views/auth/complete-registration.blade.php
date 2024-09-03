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
          <div class="mt-24 box_container user_page">
            <h1 class="mb-6 text-3xl font-bold gray-800">Sign Up</h1>
            <p class="gray-500 text-15 font-base">
              Create a free account to get started with Work-Force Merge
            </p>
            {{-- <div class="flex justify-center">
              <ul class="switch-tabs">
                <li class="active" id="talent_tab">Talent</li>
                <li id="recruiter_tab">Recruiter</li>
              </ul>
            </div> --}}

            <form method="POST" action="{{ route('complete-registration.post') }}">
              @csrf
              
              <div class="mt-6 user_form" id="recruiter_form">
                <div class="form-control">
                  <label for="email">Your email address</label>
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  <div class="form-input-icon">
                    <input
                      type="email"
                      name="email"
                      id="email"
                      value="{{request('email', old('email'))}}"
                      class="form-input"
                      required
                    />
                    {{-- <span class="input_icon"
                      ><img src="../src/assets/x-circle.svg" alt=""
                    /></span> --}}
                  </div>
                </div>
                <div class="form-control">
                  <label for="verification">Verification Code</label>
                  <x-input-error :messages="$errors->get('otp')" class="mt-2" />
                  <div class="form-input-icon">
                    <input
                      type="text"
                      name="otp"
                      value="{{ request('otp', old('otp')) }}"
                      id="verification"
                      class="form-input"
                      placeholder="Paste sign up code"
                      required autofocus autocomplete="otp"
                    />
                    {{-- <span class="input_icon">Paste</span> --}}
                  </div>
                </div>
                <div class="flex justify-between my-4">
                  <span class="text-sm gray-400"
                    >We sent a verification code to your inbox</span
                  >
                  <a href="#" id="resendVerification" data-last-sent="{{ $time }}" style="display: none;" class="text-sm primary-blue">Resend</a>
                </div>
                
                  <!-- Name -->
                <div class="form-control">
                  <label for="email">Full Name</label>
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  <div class="form-input-icon">
                    <input
                      type="text"
                      name="name"
                      value="{{ old('name') }}"
                      id="name"
                      class="form-input"
                      required
                    />
                    {{-- <span class="input_icon"
                      ><img src="../src/assets/x-circle.svg" alt=""
                    /></span> --}}
                  </div>
                </div>

                <div class="form-control">
                  <label for="password">Create Your Password</label>
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  <div class="form-input-icon">
                    <input
                      type="password"
                      name="password"
                      id="password"
                      class="form-input"
                      placeholder="*****"
                      required autofocus autocomplete="new-password"
                    />
                    <span class="input_icon toggle-password" data-target="#password">Show</span>
                  </div>
                </div>
                <div class="form-control">
                  <label for="password_confirmation">Confirm Your Password</label>
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                  <div class="form-input-icon">
                    <input
                      type="password"
                      name="password_confirmation"
                      id="password_confirmation"
                      class="form-input"
                      placeholder="*****"
                      required autocomplete="confirm-password"
                    />
                    <span class="input_icon toggle-password" data-target="#password_confirmation">Show</span>
                  </div>
                </div>
              </div>
              <div class="my-6">
                <button type="submit" class="btn-blue btn">Continue with email</button>
              </div>
            </form>


            <div class="mt-6 continue_txt">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
          const cooldownPeriod = 20 * 60 * 1000; // 20 minutes in milliseconds
          let lastSentTime = $('#resendVerification').data('last-sent') * 1000;
          
          let resendButton = $('#resendVerification');

          function updateResendButton() {
              let currentTime = new Date().getTime();
              
              if (currentTime - lastSentTime < cooldownPeriod) {
                  resendButton.hide();
              } else {
                  resendButton.show();
              }
          }

          resendButton.click(function(e) {
              e.preventDefault();
              if ($(this).is(':hidden')) {
                  return; // Prevent function from running if button is hidden
              }
              
              let email = $('#email').val();
              if (!email) {
                  alert('Please enter your email address.');
                  return;
              }

              $.ajax({
                  url: '/resend-otp',
                  method: 'POST',
                  data: {
                      email: email,
                      _token: '{{ csrf_token() }}' // Laravel CSRF token
                  },
                  beforeSend: function() {
                      resendButton.hide(); // Hide button immediately when sending request
                  },
                  success: function(response) {
                      alert('Verification code resent successfully.');
                      lastSentTime = new Date().getTime(); // Reset last sent time
                      updateResendButton(); // Update button visibility based on new time
                  },
                  error: function(xhr) {
                      alert('Error: ' + xhr.responseText);
                      resendButton.show(); // Show button in case of error
                  }
              });
          });

          // Check to update button status periodically
          setInterval(updateResendButton, 1000);
          updateResendButton(); // Initial check on page load

          $('.toggle-password').click(function() {
            var input = $($(this).data('target'));
            var icon = $(this);
            if (input.attr('type') === 'password') {
              input.attr('type', 'text');
              icon.text('Hide'); // Change button text to 'Hide'
            } else {
              input.attr('type', 'password');
              icon.text('Show'); // Change button text to 'Show'
            }
          });
      });
    </script>

  </body>
</html>
