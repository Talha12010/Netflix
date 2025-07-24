<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .new{
   display: flex;
  justify-content: space-between;
}
hr{
    border: 0.3mm solid gray;
}
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
.box {
  width: 280px;
  background: white;
  border-radius: 16px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  font-family: Arial, sans-serif;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e0e0e0;
}

.bo {
  background: linear-gradient(90deg, #3a0ca3, #7209b7);
  color: white;
  padding: 20px 16px;
  font-size: 18px;
  font-weight: bold;
  border-top-left-radius: 16px;
  border-top-right-radius: 16px;
  text-align: left;
}

.content {
  padding: 16px;
}

h4 {
  color: #555;
  font-size: 14px;
  margin: 12px 0 4px 0;
}

h3 {
  font-size: 16px;
  margin: 0 0 8px 0;
  font-weight: 500;
  color: #222;
}

.hh {
  width: 100%;
  margin: 12px 0;
  border: none;
  border-top: 1px solid #ddd;
}
.box{
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
  margin: 10px;
}

.box.active {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  border: 1px solid gray; /* Optional red border to match Netflix */
}
.mm
{
    margin-left: 150px;
}
.am{
    display: flex;
    margin: 10px;
    text-align: start;
    padding: 10px;
    margin: auto;
    justify-content: center;
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
    </style>
</head>
<body>
    <div class="new">
        <img class="img" src="../images/logo.png" alt="img" srcset="">
        <button class="btn">Sign In </button>
    </div>
    <hr>
    <div>
        <div class="mm">
            <h3>STEP 1 OF 3</h3>
            <h1>Choose the plan that’s right for you</h1>
        </div>
        <div class="am">
            <div class="box">
                <div class="bo">
                  Premium<br>4K + HDR
                </div>
                <div class="content">
                  <h4>Monthly price</h4>
                  <h3>Rs 1,100</h3>
                  <hr class="hh">
              
                  <h4>Video and sound quality</h4>
                  <h3>Best</h3>
                  <hr class="hh">
              
                  <h4>Resolution</h4>
                  <h3>4K (Ultra HD) + HDR</h3>
                  <hr class="hh">
              
                  <h4>Spatial audio (immersive sound)</h4>
                  <h3>Included</h3>
                  <hr class="hh">
              
                  <h4>Supported devices</h4>
                  <h3>TV, computer, mobile phone, tablet</h3>
                  <hr class="hh">
              
                  <h4>Devices your household can watch at the same time</h4>
                  <h3>4</h3>
                  <hr class="hh">
              
                  <h4>Download devices</h4>
                  <h3>6</h3>
                </div>
            </div>
 
        <div class="box">
          <div class="bo" >
            Standard<br>1080p
          </div>
          <div class="content">
            <h4>Monthly price</h4>
            <h3>Rs 800</h3>
            <hr class="hh">
      
            <h4>Video and sound quality</h4>
            <h3>Great</h3>
            <hr class="hh">
      
            <h4>Resolution</h4>
            <h3>1080p (Full HD)</h3>
            <hr class="hh">
      
            <h4>Supported devices</h4>
            <h3>TV, computer, mobile phone, tablet</h3>
            <hr class="hh">
      
            <h4>Devices your household can watch at the same time</h4>
            <h3>2</h3>
            <hr class="hh">
      
            <h4>Download devices</h4>
            <h3>2</h3>
          </div>
        </div>
      
        <div class="box">
          <div class="bo">
            Basic<br>720p
          </div>
          <div class="content">
            <h4>Monthly price</h4>
            <h3>Rs 450</h3>
            <hr class="hh">
      
            <h4>Video and sound quality</h4>
            <h3>Good</h3>
            <hr class="hh">
      
            <h4>Resolution</h4>
            <h3>720p (HD)</h3>
            <hr class="hh">
      
            <h4>Supported devices</h4>
            <h3>TV, computer, mobile phone, tablet</h3>
            <hr class="hh">
      
            <h4>Devices your household can watch at the same time</h4>
            <h3>1</h3>
            <hr class="hh">
      
            <h4>Download devices</h4>
            <h3>1</h3>
          </div>
        </div>
      
        <div class="box">
          <div class="bo">
            Mobile<br>480p
          </div>
          <div class="content">
            <h4>Monthly price</h4>
            <h3>Rs 250</h3>
            <hr class="hh">
      
            <h4>Video and sound quality</h4>
            <h3>Fair</h3>
            <hr class="hh">
      
            <h4>Resolution</h4>
            <h3>480p</h3>
            <hr class="hh">
      
            <h4>Supported devices</h4>
            <h3>Mobile phone, tablet</h3>
            <hr class="hh">
      
            <h4>Devices your household can watch at the same time</h4>
            <h3>1</h3>
            <hr class="hh">
      
            <h4>Download devices</h4>
            <h3>1</h3>
          </div>
        </div>
    </div>
      </div>
      <a href="{{ url('/signin') }}">
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
       <script>
  const boxes = document.querySelectorAll('.box');

  boxes.forEach(box => {
    box.addEventListener('click', () => {
      boxes.forEach(b => b.classList.remove('active'));
      box.classList.add('active');
    });
  });
      </script>
</body>
</html>