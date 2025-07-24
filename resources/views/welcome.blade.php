<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    .background {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background: url('./images/image.jpg') no-repeat center center / cover;
    z-index: -2;
    filter: blur(0.6px);
   
  }
.new{
   display: flex;
  justify-content: space-between;
}
.img{
    height: 100px ;
    width: 200px ;
}
.btn{
    background-color: red;
    color: white;
    font-size: 20px;
    height: 40px;
    border: 5px solid red;
    margin-top: 22px;
    margin-right: 10px;
}
.text{
    color: white;
    font-size: 28px;
    font-weight: 50px;
    justify-content: center;
    text-align: center;
    width: 550px;
   margin: auto;
   margin-top: 160px;
}
.text1{
    color: white;
    font-size: 28px;
    justify-content: center;
    text-align: center;
    width: 550px;
   margin: auto;
   margin-top: 20px;
}
.input{
    width: 300px;
    height: 50px;
    font-size: 20px;
    border: 1px solid gray;
    border-radius: 4px;
    background-color: black;
    padding: 5px;
}
.btn1{
    background-color: red;
    color: white;
    height: 50px;
    width: 180px;
    border: 2px solid red;
    font-size: 19px;
}
.text2{
  color: white;
  margin: auto;
  justify-content: center;
  text-align: center;
}

body {
  background-color: black;
  color: white;
  font-family: Arial, sans-serif;
}

.trending {
  padding: 2rem;
  position: relative;
  margin-top: 90px;
}

.trending h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
  margin-top: 100px;
}

.carousel-container {
  position: relative;
  overflow: hidden;
  width: 1100px;
  margin: auto;
  margin-top: 10px;
  padding:20px;
}

.carousel {
  display: flex;
  gap: 1rem;
  overflow-x: auto;
  scroll-behavior: smooth;
  padding-bottom: 10px;
  scrollbar-width: none; 
  -ms-overflow-style: none;
}
.carousel::-webkit-scrollbar {
  display: none; 
}

.movie {
  position: relative;
  flex: 0 0 auto;
  width: 160px;
  border-radius: 8px;
  overflow: hidden;
}

.movie img {
  width: 100%;
  display: block;
  border-radius: 8px;
}

.rank {
  position: absolute;
  bottom: 10px;
  left: 10px;
  font-size: 3rem;
  font-weight: 900;
  color: white;
  -webkit-text-stroke: 2px black;
}

.scroll-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.6);
  border: none;
  color: white;
  font-size: 2rem;
  padding: 0 10px;
  cursor: pointer;
  z-index: 1;
  border-radius: 50%;
}

.scroll-btn.left {
  left: 0;
}

.scroll-btn.right {
  right: 0;
}
.movie:hover {
  transform: scale(1.05);
  transition: transform 0.3s ease;
 
}
.movie img:hover {
  filter: brightness(0.8);
  transition: filter 0.3s ease;
  width: 160px;
  height: 240px;
} 
.gg{
  margin-left: 180px;
}
.boxes{
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent;
  margin-top: 20px;
}

.box{
  height: 250px;
  width: 230px;
  padding: 18px;
  background: linear-gradient(to bottom right, #0c0c2c, #2e003e);

  border-radius: 12px;
  margin: 10px;
}
.faq{
  color: white;
  font-size: 28px;
  width: 1000px;
  margin-left: 160px;
  background-color: rgba(14, 14, 12, 0.764);
  padding: 10px;
  margin-top: 15px;
  font-size: 40px;
}
.ggg{
  margin-top: 50px;
}
.footer{
  background-color: black;
  margin-top: 10px;
}
.footer1{
  background-color: black;
  color: white;
  padding: 20px;
  text-align: center;
  margin: auto;
  width: 1100px;
  margin-top: 50px;
  justify-content: center;
}
.footer1 a{
  color: white;
  display: inline-block;
  text-decoration: none;
  flex: row;
  padding: 40px;
   font-size: 15px;  
  margin: auto;
  text-decoration: underline;
}
   </style>
    <title>Welcome</title>
</head>
<body>
    <div class="background"></div>
    <div class="new">
    <img class="img" src="./images/logo.png" alt="img" srcset="">
    <a href="{{ url('signin') }}">
    <button class="btn">Sign In </button>
    </a>
    </div class="g">
    <div class="text">
        <h1>Unlimited movies, TV shows, and more</h1>
    </div>
    <div class="text2">
        <h2>Starts at Rs 250. Cancel anytime</h2>
        <h4>Ready to watch? Enter your email to create or restart your membership.</h4>
    </div>
    <div class="text1">
        <input type="text" class="input" placeholder="Email address">
        <a href="{{ url('/login') }}">
    <button class="btn1">Get Started &gt;</button>
</a>
    </div>
    <section class="trending">
        <h2>Trending Now</h2>
        <div class="carousel-container">
          <button class="scroll-btn left">&lt;</button>
          <div class="carousel" id="carousel">
            <div class="movie"><span class="rank">1</span><img src="./images/poster.jpeg" alt="Movie 1"></div>
            <div class="movie"><span class="rank">2</span><img src="./images/poster.jpeg" alt="Movie2" ></div>
            <div class="movie"><span class="rank">3</span><img src="./images/poster.jpeg" alt="Movie 3"></div>
            <div class="movie"><span class="rank">4</span><img src="./images/poster.jpeg" alt="Movie 4"></div>
            <div class="movie"><span class="rank">5</span><img src="./images/poster.jpeg" alt="Movie 5"></div>
            <div class="movie"><span class="rank">6</span><img src="./images/poster.jpeg" alt="Movie 6"></div>
            <div class="movie"><span class="rank">4</span><img src="./images/poster.jpeg" alt="Movie 4"></div>
            <div class="movie"><span class="rank">5</span><img src="./images/poster.jpeg" alt="Movie 5"></div>
            <div class="movie"><span class="rank">6</span><img src="./images/poster.jpeg" alt="Movie 6"></div>
            <div class="movie"><span class="rank">4</span><img src="./images/poster.jpeg" alt="Movie 4"></div>
           
          </div>
          <button class="scroll-btn right">&gt;</button>
        </div>
      </section>
      <h1 class="gg">More Reasons to Join</h1>
     <div class="boxes">
     
      <div class="box">
        <h2>Enjoy on your TV</h2>
        <h4>Watch on Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.</h4>
      </div>
      <div class="box">
        <h2>Download your shows to watch offline</h2>
        <h4>Save your favorites easily and always have something to watch.</h4>
      </div>
      <div class="box">
        <h2>Watch everywhere</h2>
        <h4>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</h4>
      </div>
      <div class="box">
        <h2>Create profiles for kids</h2>
        <h4>Send kids on adventures with their favorite characters in a space made just for them—free with your membership.</h4>
      </div>
      <br/>

     
     </div>
     <h1 class="gg">Frequently Ask Questions</h1>
     
     <details class="faq">
        <summary>What is Netflix</summary>
        <p>Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices.

          You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There's always something new to discover and new TV shows and movies are added every week!</p>
     </details>
     <details class="faq">
        <summary>How much does Netflix cost?</summary>
        <p>Netflix offers several membership plans to suit your needs. The basic plan starts at Rs 250 per month, and you can cancel anytime.</p>
     </details>
      <details class="faq">
          <summary>Where can I watch?</summary>
          <p>Watch instantly from any internet-connected device, including Smart TVs, game consoles, streaming media players, set-top boxes, and mobile devices.</p>    
      </details>
      <details class="faq">
          <summary>How do I cancel?</summary>
          <p>Netflix is flexible. There are no annoying contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.</p>
      </details>
      <details class="faq">
          <summary>What can I watch on Netflix?</summary>
          <p>Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Netflix originals, and more. Watch as much as you want, whenever you want, without a single commercial – all for one low monthly price.</p>
      </details>
      <details class="faq">
          <summary>Is Netflix good for kids?</summary>
          <p>The Netflix Kids experience is included in your membership to give parents control while kids enjoy family-friendly TV shows and movies in their own space. Kids can watch what they want, when they want, without having to wait for the grown-ups.</p>
      </details>
      <details class="faq">
          <summary>How do I get Netflix?</summary>
          <p>Netflix is available on Smart TVs, game consoles, streaming media players, set-top boxes, and mobile devices. You can also watch on your laptop or desktop computer.</p>
      </details>

     
     
     <div class="ggg">
      <div class="text1">
        <input type="text" class="input" placeholder="Email address">
        <button class="btn1">Get Started ></button>
    </div>
    </div>
     
        
        <div class="footer">
        <div class="footer1">
            <a href="#">FAQ</a>
            <a href="#">Help Center</a>
            <a href="#">Terms of Use</a>
            <a href="#">Privacy</a>
            <a href="#">Cookie Preferences</a>
            <a href="#">Corporate Information</a>
            <a href="#">Contact Us</a>
            <a href="#">Speed Test</a>
            <a href="#">Legal Notices</a>
            <a href="#">Only on Netflix</a>
            <a href="#">Media Center</a>
            <a href="#">Ways to Watch</a>
            <a href="#">Terms of Use</a>
            <a href="#">Privacy</a>
            <a href="#">Cookie Preferences</a>
        </div>
       </div>
     
     
     
     <script>
        const carousel = document.getElementById('carousel');
        const leftBtn = document.querySelector('.scroll-btn.left');
        const rightBtn = document.querySelector('.scroll-btn.right');
      
        leftBtn.addEventListener('click', () => {
          carousel.scrollBy({ left: -300, behavior: 'smooth' });
        });
      
        rightBtn.addEventListener('click', () => {
          carousel.scrollBy({ left: 300, behavior: 'smooth' });
        });
      </script>
</body>
</html>