<?php
	include('../app/views/header.php');
?>


<link rel="stylesheet" href="/css/mystyle.css">
<?php if (isset($data['error']))
        echo '  <div class="alert alert-danger alert-dismissible">' . $data['error'] . '</div>'; 
?>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="" method="POST">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="https://www.facebook.com/" class="social"><i class="fa fa-facebook-f"></i></a>
                <a href="http://gmail.com/" class="social"><i class="fa fa-google-plus"></i></a>
                <a href="https://www.linkedin.com/" class="social"><i class="fa fa-linkedin"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" name="username" placeholder="Username " required />
            <input type="password" name="password" placeholder="Password" required />
            <button type='submit' name='signup'>Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="" method="POST">
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="https://www.facebook.com/" class="social"><i class="fa fa-facebook-f"></i></a>
                <a href="http://gmail.com/" class="social"><i class="fa fa-google-plus"></i></a>
                <a href="https://www.linkedin.com/" class="social"><i class="fa fa-linkedin"></i></a>
            </div>
            <span>or use your account</span>
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <a href="#">Forgot your password?</a>
            <button type="submit" name="signin">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>
<button id ="back" onclick="history.back()"> <i class="fa fa-arrow-left"></i> </button>
<style> 
#back{
    background-color: gray;
    border: none;
    font-size: 15px;
     margin-top: 10px;
     margin-left:20px;
     position: absolute;
     top:0;
     left: 0;
}
</style>

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
</script>
<?php
	// include('../app/views/footer.php');
?>