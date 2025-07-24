<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background-color: rgb(59, 57, 57);
    color: white;
}
.img{

    height: 100px ;
    width: 200px ;
}
.nav{
    display: flex;
    justify-content: space-between;
}
.nav ul{
    display: flex;
    
}
.nav ul li{
    list-style: none;
    margin: 0 20px;
}
.nav ul li a{
    text-decoration: none;
    color: white;
    font-size: 17px;
}
.nav-left {
    display: flex;
    align-items: center;
}
 .search-container {
      position: relative;
      display: inline-block;
    }

    .search-bar {
      display: none;
      padding: 5px;
      font-size: 16px;
      border: 1px solid gray;
      border-radius: 2px;
      width: 200px;
      margin-left: 5px;
      background-color: transparent;
    }
    .search-icon {
      font-size: 44px;
      cursor: pointer;
      margin-right: 19px;

    }



    .carousel-container {
  position: relative;
  overflow: hidden;
  width: 1300px;
  margin: auto;
  margin-top: 10px;
  padding:20px;
}
.nm
{
    margin-left: 96px;
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
  width: 270px;
  height: 170px;
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
  width: 290px;
  height: 190px;
}

.footer {
     background-color: rgb(59, 57, 57);
      padding: 40px 60px;
      color: white;
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
      color: white;
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
    <div class="nav">
        <div class="nav-left">
            <img class="img" src="./images/logo.png" alt="">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV Series</a></li>
            </ul>
        </div>
        <div class="search-container" id="searchContainer">
            <!-- Search icon -->
            <span class="search-icon" onclick="toggleSearchBar()">🔍</span>
            <!-- Search input bar, initially hidden -->
            <input type="text" class="search-bar" id="searchInput" placeholder="Search...">
          </div>
    </div>
    <div>
      <h1 class="nm">New</h1>
       <div class="carousel-container">
          <button class="scroll-btn left">&lt;</button>
          <div class="carousel" >
  <div class="movie"><span class="rank">1</span><img src="./images/poster.jpeg" alt="Movie 1" data-video="https://www.youtube.com/watch?v=45kQXMcmkuU"></div>
  <div class="movie"><span class="rank">2</span><img src="./images/poster.jpeg" alt="Movie 2" data-video="./videos/movie2.mp4"></div>
  <div class="movie"><span class="rank">3</span><img src="./images/poster.jpeg" alt="Movie 3" data-video="./videos/movie3.mp4"></div>
  <div class="movie"><span class="rank">4</span><img src="./images/poster.jpeg" alt="Movie 4" data-video="./videos/movie4.mp4"></div>
  <div class="movie"><span class="rank">5</span><img src="./images/poster.jpeg" alt="Movie 5" data-video="./videos/movie5.mp4"></div>
  <div class="movie"><span class="rank">6</span><img src="./images/poster.jpeg" alt="Movie 6" data-video="./videos/movie6.mp4"></div>
  <div class="movie"><span class="rank">7</span><img src="./images/poster.jpeg" alt="Movie 7" data-video="./videos/movie7.mp4"></div>
  <div class="movie"><span class="rank">8</span><img src="./images/poster.jpeg" alt="Movie 8" data-video="./videos/movie8.mp4"></div>
  <div class="movie"><span class="rank">9</span><img src="./images/poster.jpeg" alt="Movie 9" data-video="./videos/movie9.mp4"></div>
  <div class="movie"><span class="rank">10</span><img src="./images/poster.jpeg" alt="Movie 10" data-video="./videos/movie10.mp4"></div>
</div>
<button class="scroll-btn right">&gt;</button>
<!-- Video Modal -->
<div id="videoModal" style="
  display:none; 
  position:fixed; 
  top:0; left:0; 
  width:100vw; height:100vh; 
  background:rgba(0,0,0,0.8); 
  justify-content:center; 
  align-items:center; 
  z-index:1000;
">
  <div style="position:relative; width:97%;  ">
    <button id="closeVideo" style="
      position:absolute; 
      top:-40px; 
      right:0; 
      font-size:30px; 
      background:none; 
      border:none; 
      color:white; 
      cursor:pointer;
    ">&times;</button>
    <video id="videoPlayer" width="100%" controls>
      <source src="" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
  </div>
          
        </div>
    </div>
     <div>
      <h1 class="nm">Top 10</h1>
       <div class="carousel-container">
          <button class="scroll-btn left">&lt;</button>
          <div class="carousel" >
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
    </div>
     <div>
      <h1 class="nm">Trending</h1>
       <div class="carousel-container">
          <button class="scroll-btn left">&lt;</button>
          <div class="carousel" >
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
    </div>
     <div>
      <h1 class="nm">Most Famous</h1>
       <div class="carousel-container">
          <button class="scroll-btn left">&lt;</button>
          <div class="carousel" >
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
    <script>
     function toggleSearchBar() {
      var searchBar = document.getElementById('searchInput');
      if (searchBar.style.display === 'none' || searchBar.style.display === '') {
        searchBar.style.display = 'inline-block';
        searchBar.focus(); // Automatically focus on the input field when it appears
      } else {
        searchBar.style.display = 'none';
      }
    }
    document.querySelectorAll('.carousel-container').forEach(container => {
  const carousel = container.querySelector('.carousel');
  const leftBtn = container.querySelector('.scroll-btn.left');
  const rightBtn = container.querySelector('.scroll-btn.right');

  leftBtn.addEventListener('click', () => {
    carousel.scrollBy({ left: -300, behavior: 'smooth' });
  });

  rightBtn.addEventListener('click', () => {
    carousel.scrollBy({ left: 300, behavior: 'smooth' });
  });
});
document.addEventListener('DOMContentLoaded', () => {
  const videoModal = document.getElementById('videoModal');
  const videoPlayer = document.getElementById('videoPlayer');
  const closeBtn = document.getElementById('closeVideo');

  document.querySelectorAll('.movie img').forEach(img => {
    img.style.cursor = 'pointer'; // pointer cursor on hover
    img.addEventListener('click', () => {
      const videoUrl = img.getAttribute('data-video');
      if (!videoUrl) {
        alert('No video available for this movie.');
        return;
      }
      videoPlayer.src = videoUrl;
      videoPlayer.load();
      videoModal.style.display = 'flex';
      videoPlayer.play();
    });
  });

  closeBtn.addEventListener('click', () => {
    videoPlayer.pause();
    videoPlayer.currentTime = 0;
    videoModal.style.display = 'none';
    videoPlayer.src = ''; // clear src to stop loading
  });

  // Close modal if clicking outside video
  videoModal.addEventListener('click', (e) => {
    if (e.target === videoModal) {
      closeBtn.click();
    }
  });
});
    </script>
</body>
</html>