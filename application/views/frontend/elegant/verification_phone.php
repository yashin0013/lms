   <div class="row justify-content-center pt-5 pb-5 px-3" style="background-color: #4b4559; overflow-x: hidden;">
      <div class="col-md-6 col-lg-4 mt-5 pt-4 mb-5">
        <h4 class="text-white text-center "><?php echo site_phrase('verify_email_address'); ?></h4>
        <div class="user-dashboard-box mt-3">
            <div class="user-dashboard-content w-100 login-form">
                <div class="content-title-box text-center">
                    <div class="title text-white text-center"><?php echo site_phrase('enter_the_code_from_your_email'); ?></div>
                    <small class=" text-white text-center"><?php echo site_phrase('let_us_know_that_this_email_address_belongs_to_you'); ?> <?php echo site_phrase('Enter_the_code_from_the_email_sent_to').' '.$this->session->userdata('register_email'); ?>.</small>
                </div>
                <form>
        <input type="text" id="verificationcode" placeholder="Enter OTP">
        <input type="button" value="Submit" onclick="myFunction()">
    </form>
    
    <div id="recaptcha-container"></div>
            </div>
        </div>
      </div>
  </div>
  <div class="container mt-4" >
       
  </div>
  
    <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>

    <script>
        
        var config = {
            apiKey: "AIzaSyCgq6o_DyM4czcxJBmue3uDd8eGSTVTzW4",
            authDomain: "registor-14c83.firebaseapp.com",
            databaseURL: "https://registor-14c83.firebaseio.com",
            projectId: "registor-14c83",
            storageBucket: "registor-14c83.appspot.com",
            messagingSenderId: "58335169367",
            appId: "1:58335169367:web:57519c792dfcb372924c12",
            measurementId: "G-P4DZWX7RGZ"
        };

        firebase.initializeApp(config);

    </script>

    <script type="text/javascript">
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
        firebase.auth().signInWithPhoneNumber("+919876543210", window.recaptchaVerifier)
            .then(function (confirmationResult) {
                window.confirmationResult = confirmationResult;
                a(confirmationResult);
            });
        var myFunction = function () {
            window.confirmationResult.confirm(document.getElementById("verificationcode").value)
                .then(function (result) {
                    alert('login process successfull!');
                    window.location.href = "https://www.google.com/";
                }, function (error) {
                    alert('Error in login');
                    alert(error);
                });
        };
    </script>