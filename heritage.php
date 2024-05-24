<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safarnama</title>

    <!-- swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--boxicon link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        :root{
    --orange:#ffa343;
    --bg-color:#000;
    --white:#fff;
}

*{
    font-family:  'Open Sans', sans-serif;
    margin: 0; padding: 0;
    box-sizing: border-box;
    text-transform: capitalize;
    outline: none; border: none;
    text-decoration: none;
    scroll-behavior: smooth;
    transition: all .2s linear;
}

*::selection{
    background: var(--orange);
    color:var(--white);
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 6rem;
    scroll-behavior: smooth;
}

body{
    color: var(--white);
    background: var(--bg-color);
}

.btn{
    display:inline-block;
    padding:13px 40px;
    background: var(--orange);
    color: var(--bg-color);
    font-size: 15px;
    font-weight:600;
    border:2px solid transparent;
    border-radius:15px;
    transition:all .50s ease;
    cursor:pointer;
}
.btn:hover{
    transform:translateX(10px);
    border: 2px solid var(--white);
    background:transparent;
    color:var(--white);
}

section{
    padding: 2rem 9%;
}

.heading{
    text-align: center;
    padding: 2.5rem 0;
}

.heading span{
    font-size: 3.5rem;
    background: rgba(255, 165, 0, 0.2);
    color: var(--orange);
    border-radius: .5rem;
    padding: .2rem 1rem;
}

header{
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
    background: transparent;
    backdrop-filter: blur(35px);
}

header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: var(--white);
    text-decoration: uppercase;
}

header .logo span{
    color: var(--orange);
}

header .navbar a{
    color: var(--white);
    font-size: 2rem;
    margin: 0.8rem;
}

header .navbar a:hover{
    color:var(--orange);
}

header .icons i{
    font-size: 2.5rem;
    color: var(--white);
    cursor: pointer;
    margin-right: 2rem;
}

header .icons i:hover{
    color: var(--orange);
}

header .search-bar-container{
    position: absolute;
    top: 100%; left: 0; right: 0;
    padding: 1.5rem 2rem;
    border-top: .1rem solid rgba(255,255,255,.2);
    display: flex;
    align-items: center;
    z-index: 1001;
    clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
}

header .search-bar-container.active{
    clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
}

header .search-bar-container #search-bar{
    width: 100%;
    padding: 1rem;
    text-transform: none;
    color: var(--white);
    font-size: 1.7rem;
}

header .search-bar-container label{
    color: var(--white);
    cursor: pointer;
    font-size: 3rem;
    margin-left: 1.5rem;
}

header .search-bar-container label:hover{
    color: var(--orange);
}


#menu-bar{
    color: var(--white);
    border: .1rem solid #fff;
    border-radius: .5rem;
    font-size: 3rem;
    padding: .5rem 1.2rem;
    cursor: pointer;
    display: none;
}

.home{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    position: relative;
    z-index: 0;
}

.home .content{
    text-align: center;
}

.home .content h3{
    font-size: 4.5rem;
    color: var(--white);
    text-transform: uppercase;
    text-shadow: 0 .3rem .5rem rgba(0, 0, 0, .1);
}

.home .content p{
    font-size: 2.5rem;
    color: var(--white);
    padding: 5rem 0;
}

.home .video-container video{
    position: absolute;
    top: 0; left: 0;
    z-index: -1;
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.home .controls{
    padding: 0.5rem;
    border-radius: 5rem;
    background-color: rgba(0, 0, 0, .7);
    position: relative;
    top: 10rem;
}

.home .controls .vid-btn{
    height: 1.2rem;
    width: 1.2rem;
    display: inline-block;
    border-radius: 50%;
    background: #fff;
    cursor: pointer;
    margin: 0 .5rem;
}

.home .controls .vid-btn.active{
    background: var(--orange);
}

.packages .box-container{
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
}

.packages .box-container .box{
    flex: 1 1 30rem;
    border-radius: .5rem;
    overflow: hidden;
    box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
}

.packages .box-container .box img{
    height: 25rem;
    width: 100%;
    object-fit: cover;
}

.packages .box-container .box .content{
    padding: 2rem;
}

.packages .box-container .box .content h3{
    font-size: 1.5rem;
    color: var(--white);
}

.packages .box-container .box .content h3 i{
    color: var(--orange);
}

.packages .box-container .box .content p{
    font-size: 1.2rem;
    color: #979797;
    padding: 1rem 0;
}

.packages .box-container .box .content .stars i{
    font-size: 1.5rem;
    color: var(--orange);
}


.services .box-container{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.services .box-container .box{
    flex: 1 1 30rem;
    border-radius: .5rem;
    border-style: groove;
    border-color: grey;
    padding: 1rem;
    text-align: center;
}

.services .box-container .box i{
    padding: 1rem;
    font-size: 5rem;
    color: var(--orange);
}

.services .box-container .box h3{
    font-size: 2.5rem;
    color: var(--white);
}

.services .box-container .box p{
    font-size: 1.3rem;
    color: rgb(193, 190, 190);
    padding: 1rem 0;
}

.services .box-container .box:hover{
    box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
}


.gallery .container {
    width: 100vw;
    height: 100vh;
    top: 20px;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.gallery .img-container {
    display: flex;
    width: 100%;
    animation: slide 30s linear 1s infinite normal;
}

img {
    width: auto;
    height: 81vh;
    object-fit: contain;
    margin: 0 10px;
}

@keyframes slide {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-263%);
    }
}


.footer{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px,auto));
    gap:2rem;
}

.footer .box-container{
    display:inline-flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.footer .box-container .box{
    padding: 1rem 0;
    flex: 1 1 25rem;
}

.footer .box-container .box h3{
    padding: .7rem 0;
    color: var(--white);
    font-size:20px;
    font-weight:600;
}

.footer .box-container .box a{
    display: block;
    font-size: 1.5rem;
    padding: .7rem 0;
    color:#979797;
    transition: all .50s ease;
}

.footer .box-container .box a:hover{
    transform:translateX(-5px);
    color: var(--orange);
}

.footer .box-container .social h3{
    padding: .7rem 0;
    color: var(--white);
    font-size:20px;
    font-weight:600;
}


.footer .box-container .social a{
    display:inline-flex;
    font-weight:600;
    align-items: center;
    justify-content: center; 
    height:45px;
    width:45px;
    background: #202020; 
    color:var(--white);
    font-size: 20px;
    border-radius:50%;
    margin-right: 8px;
    transition:transform 0.6s;
}
.social a:hover{
    background: var(--orange);
    color:var(--bg-color);
    transform: translateX(-4px);
}

.copyright p{
    text-align: center;
    padding:20px;
    color:#979797;
    font-size: 15px;
}





/* media queries */
@media (max-width:1200px) {
    html{
        font-size: 55%;
    }
}

@media (max-width:991px){
    header{
        padding: 2rem;
    }
}

section{
    padding: 2rem;
}

@media (max-width:768px){
    #menu-bar{
        display: initial;
    }

    header .navbar{
        position: absolute;
        top: 100%; right: 0; left: 0;
        background-color: #333;
        border-top: .1rem solid rgba(255,255,255,.2);
        padding: 1rem 2rem;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }
    
    header .navbar a{
        display: block;
        border-radius: .5rem;
        padding: 1.5rem;
        margin: 1.5em 0;
        background: #222;
    }
}

@media (max-width:450px){
    html{
        font-size: 50%;
    }
}
    </style>


</head>
<body>

    <!-- header section starts  -->
    
<header> 

    <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo">SAFARNA<span>MA</span></a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#book">Book</a>
            <a href="#packages">Destinations</a>
            <a href="#services">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="icons">
            <i class="fa fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="profile-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="Search here...">
            <label for="search-bar" class="fa fa-search"></label>
        </form>
        
    </header>
    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home" id="home">
        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>discover new places with us, adventure awaits</p>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images_videos/vid1.mp4"></span>
            <span class="vid-btn" data-src="images_videos/vid2.mp4"></span>
            <span class="vid-btn" data-src="images_videos/vid3.mp4"></span>
            <span class="vid-btn" data-src="images_videos/vid4.mp4"></span>
            </div>

            <div class="video-container">
                <video src="images_videos/vid1.mp4" id="video-slider" loop autoplay muted></video>
            </div>

    </section>

    <!-- home sectin ends -->

    <!-- destinations section starts-->

    <section class="packages" id="packages">

    <h1 class="heading">
        <span>D</span>
        <span>E</span>
        <span>S</span>
        <span>T</span>
        <span>I</span>
        <span>N</span>
        <span>A</span>
        <span>T</span>
        <span>I</span>
        <span>O</span>
        <span>N</span>
        <span>S</span>
    </h1>

    <div class="box-container">

    <div class="box">
        <img src="images_videos/delhi.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt">&nbsp</i>Delhi</h3>
            <p>Delhi's monuments stand as silent witnesses to centuries of history, blending architectural marvels from various dynasties, such as the Mughals and the British, creating a captivating tapestry of cultural heritage and legacy.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div><br><br>
            <a href="#" class="btn">see more</a>
        </div>
    </div>

    <div class="box">
        <img src="images_videos/kolkata.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt">&nbsp</i>Kolkata</h3>
            <p>Kolkata's monuments stand as timeless testaments to its rich history and cultural heritage, echoing tales of resilience and artistic prowess through landmarks like the majestic Victoria Memorial and the iconic Howrah Bridge.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div><br><br>
            <a href="#" class="btn">see more</a>
        </div>
    </div>

    <div class="box">
        <img src="images_videos/mumbai.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt">&nbsp</i>Mumbai</h3>
            <p>Mumbai's skyline is studded with iconic monuments like the Gateway of India and the majestic Chhatrapati Shivaji Maharaj Terminus, each telling tales of the city's rich history and cultural vibrancy.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div><br><br>
            <a href="#" class="btn">see more</a>
        </div>
    </div>

    <div class="box">
        <img src="images_videos/up.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt">&nbsp</i>uttar pradesh</h3>
            <p>Uttar Pradesh's monuments stand as timeless witnesses to the state's rich cultural tapestry, weaving together the threads of history, architecture, and spirituality in a magnificent display of heritage and grandeur.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div><br><br>
            <a href="#" class="btn">see more</a>
        </div>
    </div>


    <div class="box">
        <img src="images_videos/rajasthan.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt">&nbsp</i>rajasthan</h3>
            <p>Rajasthan's monuments stand as timeless witnesses to its rich history and vibrant culture, each intricate structure echoing tales of valor, royalty, and architectural marvels amidst the desert landscape.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div><br><br>
            <a href="#" class="btn">see more</a>
        </div>
    </div>

    <div class="box">
        <img src="images_videos/gujarat.jpg" alt="">
        <div class="content">
            <h3><i class="fas fa-map-marker-alt">&nbsp</i>Gujarat</h3>
            <p>Punjab's monuments stand as proud witnesses to its rich cultural heritage, blending architectural marvels with historical narratives, echoing tales of valor and spirituality across the ages.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div><br><br>
            <a href="#" class="btn">see more</a>
        </div>
    </div>

    </div>

    </section>

    <!-- packages section ends-->



<!-- Services section starts -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

    <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>Discover comfort without breaking the bank; our selection of affordable hotels ensures a wallet-friendly stay without compromising quality. Explore your destination worry-free with budget-friendly accommodations tailored to your travel needs.</p>
    </div>

    <div class="box">
        <i class="fas fa-utensils"></i>
        <h3>foods and drinks</h3>
        <p>Indulge in a rich tapestry of global flavors, where every dish tells a story, and each sip unveils a new adventure. Let your taste buds be your guide as you explore culinary delights from around the world, creating unforgettable memories with every bite and sip.</p>
    </div>

    <div class="box">
        <i class="fas fa-car-side"></i>
        <h3>transport</h3>
        <p>Explore seamless travel experiences with our diverse transportation options, ensuring your journey to captivating destinations is as delightful as the destinations themselves.</p>
    </div>

    <div class="box">
        <i class="fas fa-camera"></i>
        <h3>attractions</h3>
        <p>Discover hidden gems tucked away in quaint alleys, offering a glimpse into the local culture. Explore panoramic vistas that unveil nature's breathtaking beauty at every turn.</p>
    </div>

    <div class="box">
        <i class="fa-regular fa-bookmark"></i>
        <h3>booking</h3>
        <p>Discover seamless travel planning with our intuitive booking system, simplifying your journey from dream destination to confirmed reservation.</p>
    </div>

    <div class="box">
        <i class="fas fa-hospital"></i>
        <h3>emergency</h3>
        <p>From minor ailments to unexpected emergencies, our on-site medical expertise ensures you can explore worry-free, knowing help is always at hand.</p>
    </div>

    </div>
</section>

<!-- Services sections ends -->

<!-- gallery section starts -->

    <section class="gallery" id="gallery">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="container">
        <div class="img-container">
            
            <img src="images_videos/pic1.jpg">
            <img src="images_videos/pic2.jpg">
            <img src="images_videos/pic5.jpg">
            <img src="images_videos/pic7.jpg">
            <img src="images_videos/pic6.jpg">
            <img src="images_videos/pic9.jpg">
            <img src="images_videos/pic12.jpg">
            <img src="images_videos/pic4.jpg">
            <img src="images_videos/pic8.jpg">
            <img src="images_videos/pic11.jpg">
            <img src="images_videos/pic3.jpg">
            <img src="images_videos/pic10.jpg">
            <img src="images_videos/pic13.jpg">


        </div>
    </div>
    </section>

<!-- gallery section ends -->


<!-- footer section starts -->

<section class="footer">

        <div class="box-container">

            <div class="box">
            <h3>quick links</h3>
            <a href="#home">Home</a>
            <a href="#book">Book</a>
            <a href="#packages">destinations</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            </div>

        <div class="box">
            <h3>About us</h3>
            <a href="#">Our Story</a>
        </div>

        <div class="box">
            <h3>Help</h3>
            <a href="#">FAQs</a>
            <a href="#">Contact us</a>
        </div>

        <div class="social">
            <h3>Social</h3>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
        </div>
    </section>

<!-- footer section ends -->

<!--copysight-->
<div class="copyright">
        <p>&copy; All copyright claims have been resrved.Thanks for visiting our website <i class="fa fa-heart"></i></p>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');




window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

videoBtn.forEach(btn => {
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});


</script>

</body>
</html>