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
button{ 
    font-size: 28px;
    height: 78px;
    width: 410px;
    background-color: red;
    color: white;
    border-radius: 3px;
    border: none;
    margin-top: 15px;
    margin-left: 500px;
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
.img1{
    height: 50px ;
    width: 50px ;
}
.yy {
    display: flex;
  flex-direction: column;
  align-items: flex-start;  
  justify-content: center;
  gap: 20px;
  width: 400px;             
  margin: 0 auto; 
  height: 500px;
}

.ll {
  display: flex;
  align-items: center;
  gap: 10px;
}


    </style>
</head>
<body>
    <div class="new">
        <img class="img" src="../images/logo.png" alt="img" srcset="">
        <button class="btn">Sign In </button>
    </div>
    <hr>
    <div class="yy">
        <img class="img1" src="../images/checked.png" alt="" srcset="">
        <h3>STEP 2 OF 3</h3>
        <h1>Chose your plan</h1>
        <div class="ll">
            <img class="img1" src="../images/mark.png" alt="" srcset="">
            <h4>No commitments, cancel anytime</h4>
        </div>

        <div class="ll">
            <img class="img1" src="../images/mark.png" alt="" srcset="">
            <h4>Everything on Netflix for one low price.</h4>
        </div>

        <div class="ll">
            <img class="img1" src="../images/mark.png" alt="" srcset="">
            <h4>No ads and no extra fees. Ever.</h4>
        </div>
    </div>
    <a href="{{ url('/login3') }}">
    <button>Next</button>
    </a>
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