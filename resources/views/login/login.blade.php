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
h1{
    font-size: 39px;
}
p{
    font-size: 18px;
}
h3{
    font-size: 22px;
}
button{
    font-size: 28px;
    height: 78px;
    width: 340px;
    background-color: red;
    color: white;
    border-radius: 3px;
    border: none;
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
    </style>
</head>
<body>
    <div class="new">
        <img class="img" src="../images/logo.png" alt="img" srcset="">
        <button class="btn">Sign In </button>
    </div>
    <hr>
    <div class="nn">
        <img src="../images/icons.jpg" alt="" srcset="">
        <p>STEP 1 OF 3 </p>
        <h1>Finish setting up your account</h1>
        <h3>
            Netflix is personalized for you. Create a password to watch on any device at any time.
        </h3>
        <a href="{{ url('/login1') }}">
        <button>Next</button>
        </a>
    </div>
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