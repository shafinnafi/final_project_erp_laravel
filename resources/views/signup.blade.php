<html>
<head>
<title> Signup Form Design Tutorial </title>   
    <link rel="stylesheet" href="{{ URL::asset('/asset/css/signup.css') }}" />
</head>
<body>

    <div id="login-box">
      <div class="left-box">
        <h1> Sign Up</h1>
          
          <input type="text" name="username" placeholder="Username"/>
          <input type="text" name="email" placeholder="Email"/>
          <input type="password" name="password" placeholder="Password"/>
        
          <input type="password" name="password2" placeholder="Retype password"/>
        
          <input type="submit" name="signup-button" value="Sign Up"/>
        
        </div>
        <div class="right-box">
          <span class="signinwith">Sign in with<br/>Social Network     </span>
        
        <a href="/login/facebook"><button class="social facebook">Log in with Facebook</button>  </a>  
        <button class="social twitter">Log in with Twitter</button> 
        <button class="social google">Log in with Google+</button> 
            
        
        </div>
        <div class="or">OR</div>
    </div>
    
</body>    
</html>