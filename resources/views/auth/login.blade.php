<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sign In Page</title>
    
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
    height: 400px;
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
  <div class="outer-box">
    <div class="inner-box">
        <header class="signup-header">
            <h1>SignIn</h1>
            <p>It's Just Begining</p>
        </header>
        <main class="signup-body">
            <form method="get" action="{{ url('/home') }}">
              @csrf
                <p>
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="abc@gmail.com" required>
                </p>
                <p>
                    <label for="password">Enter Your Password</label>
                    <input type="password" id="password" placeholder="Password">
                </p>
                <p>
                    <input type="submit" id="submit" value="Login">
                </p>
            </form>
        </main>
        <footer>
            <p>Don't have an Account. <a href="{{url('/register')}}">SignUp</a></p>
        </footer>
    </div>
</div>

  </body>
</html>