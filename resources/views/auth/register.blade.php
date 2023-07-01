<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}


.outer-box{
    width: 100vw;
    height: 100vh;
    background: linear-gradient(to top left, rgb(54, 109, 228), rgb(77, 181, 241));
    position: relative;
}



.inner-box{
    width: 400px;
    height: 620px;
    /* border: 2px solid green; */
    margin: 0 auto;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    background-color: #ffffffaa;
    border-radius: 20px;
    padding: 20px 40px;
}


.signup-header h1{
    font-size: 2.5rem;
    color: #212121;
}

.signup-header p{
    color: #555;
    padding: 5px 0;
}


.signup-body{
    padding: 10px 0;
}

.signup-body p{
    padding: 4px;
}

.signup-body label{
    display: block;
    font-weight: bold;
    padding: 5px 0;
}

.signup-body input{
    display: block;
    width: 100%;
    padding: 10px;
    border-radius: 5px solid gray;
    font-size: 0.9rem;
}

#submit{
    background-color: rgb(81, 98, 153);
    border: none;
    border-radius: 5px;
    font-weight: bold;
}

footer{
    text-align: center;
}

footer a{
    color:  rgb(81, 98, 153);
}


#submit:hover{
    background-color: rgb(61, 94, 201);
    border: none;
    border-radius: 5px;
    color: #ffffffaa;
    cursor: pointer;
    font-weight: bold;
}
    </style>
  </head>
  <body>
  <div class="outer-box">
    <div class="inner-box">
        <header class="signup-header">
            <h1>SignUp</h1>
            <p>It just takes 30 seconds</p>
        </header>
        <main class="signup-body">
            <form method="post" action="{{ url('/register') }}">
              @csrf
                <p>
                    <label for="fullname">Enter your Full Name</label>
                    <input type="text" id="fullname" placeholder="Your Name" required>
                </p>
                <p>
                    <label for="email">Enter your Email</label>
                    <input type="email" id="email" placeholder="abc@gmail.com" required>
                </p>
                <p>
                    <label for="password">Enter Your New Password</label>
                    <input type="password" id="password" placeholder="Password">
                </p>
                <p>
                    <label for="cfm_password">Confirm Password</label>
                    <input type="password" id="cfm_password" placeholder="Password">
                </p>
                <p>
                    <input type="submit" id="submit" value="Create Account">
                </p>
            </form>
        </main>
        <footer>
            <p>Already have an accout. <a href="{{url('/login')}}">Sign In</a></p>
        </footer>
    </div>
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>