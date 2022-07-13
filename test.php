<!DOCTYPE html>
<html lang="en">
<head>
    <title>OTP</title>
</head>

<body>
    
    <form>
        <input type="text" id="verificationcode" placeholder="Enter OTP">
        <input type="button" value="Submit" onclick="myFunction()">
    </form>
    
    <div id="recaptcha-container"></div>
    <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
    <script>
        var config = {
            apiKey: "AIzaSyA7Bk_YdfjqTsft3f_Q-b1qsZ0km5niKyM",
            authDomain: "dexito-otp.firebaseapp.com",
            projectId: "dexito-otp",
            storageBucket: "dexito-otp.appspot.com",
            messagingSenderId: "933242920504",
            appId: "1:933242920504:web:7ccf86eecdfab1bac550cd"
        };
        firebase.initializeApp(config);
    </script>

    <script type="text/javascript">
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
        firebase.auth().signInWithPhoneNumber("+918808362815", window.recaptchaVerifier)
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
</body>

</html>