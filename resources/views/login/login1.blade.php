<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .img{
    height: 100px ;
    width: 200px ;
}
.btn{
    border: none;
    color: black;
    font-size: 24px;
    height: 40px;
    background-color:transparent ;
    margin-top: 25px;
    margin-right: 10px;
}
.new{
   display: flex;
  justify-content: space-between;
}
hr{
    border: 0.3mm solid gray;
}
.nn{
    justify-content: center;
    margin: auto;
    text-align: center;
    margin-top: 60px;
    width: 500px;
}
img{
    height: 120px;
    width: 320px;
}

.footer {
      background-color: #f3f3f3;
      padding: 40px 60px;
      color: #666;
    }

    .footer h3 {
      margin-bottom: 20px;
      font-size: 16px;
    }

    .footer-links {
      display: flex;
      flex-wrap: wrap;
      gap: 60px;
    }

    .footer-column {
      min-width: 150px;
    }

    .footer-column a {
      display: block;
      color: #666;
      text-decoration: none;
      margin-bottom: 10px;
      font-size: 14px;
    }

    .footer-column a:hover {
      text-decoration: underline;
    }
.ff{
    margin-top: 40px;
}
.ii{
    height: 500px;
    width: 450px;
    justify-content: center;
    margin: auto;
}
input{
    height: 50px;
    width: 400px;
    margin-top: 15px;
    font-size: 17px;
}
button{ 
    font-size: 28px;
    height: 78px;
    width: 410px;
    background-color: red;
    color: white;
    border-radius: 3px;
    border: none;
    margin-top: 15px;
}

    </style>
</head>
<body>
    <div class="new">
        <img class="img" src="../images/logo.png" alt="img" srcset="">
        <button class="btn">Sign In </button>
    </div>
    <hr>
   
   
   
  <form method="POST" action="{{ url('/registerstep1') }}">
    @csrf
    <div class="ii">
        <h4>STEP 1 OF 3</h4>
        <h1>Create a password to start your membership</h1>
        <h3>Just a few more steps and you're done! We hate paperwork, too.</h3>
        
        <input type="text" name="email_or_phone" placeholder="Email or phone number" required>
        <input type="password" name="password" placeholder="Create a password" required>
        <input type="text" name="name" placeholder="Full name" required>
        <input type="password" name="password_confirmation" placeholder="Confirm password" required>
        <button type="submit">Next</button>
    </div>
</form>

    <div class="ff">
        
  <footer class="footer">
    <h3>Questions? Contact us.</h3>
    <div class="footer-links">
      <div class="footer-column">
        <a href="#">FAQ</a>
        <a href="#">Cookie Preferences</a>
      </div>
      <div class="footer-column">
        <a href="#">Help Center</a>
        <a href="#">Corporate Information</a>
      </div>
      <div class="footer-column">
        <a href="#">Terms of Use</a>
      </div>
      <div class="footer-column">
        <a href="#">Privacy</a>
      </div>
    </div>
  </footer>
    </div>
</body>
</html>