<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safarnama</title>


    <!--boxicon link-->
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet">


<!--google fonts link-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- style -->
<style>

*{
    padding:0;
    margin:0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    text-transform: capitalize;
    border:none;
    outline:none;
    scroll-behavior: smooth; 
    font-family: 'Open Sans', sans-serif;
}

:root{
    --text-color: #fff;
    --bg-color: #000;
    --main-color: #ffa343;

    --h1-font: 6rem;
    --h2-font: 3rem;
    --p-font: 1rem;
}

body{
    color: var(--text-color);
    background: var(--bg-color);

}

header{
    position:fixed;
    top: 0;
    right: 0;
    z-index:1000;
    width:100%;
    background:transparent;
    padding: 27px 17%;
    display:flex;
    align-items: center;
    justify-content: space-between;
    transition:all .50s ease;
}

.logo{
    font-size: 33px;
    color:var(--text-color);
    font-weight: 700;
}
span{
    color:var(--main-color);
}
.navbar{
    display:flex;
}
.navbar a{
    color: var(--text-color);
    font-size: var(--p-font);
    font-weight: 500;
    margin:15px 22px;
    transition: all .50s ease;
}

.navbar a:hover{
    color: var(--main-color);
}

.h-right{
    display: flex;
    align-items: center;
}
.h-right a:first-child{
    color:var(--text-color);
    font-size: var(--p-font);
    margin-right:20px;
}
.h-right a{
    vertical-align:middle;
    font-size: 20px;
    color: var(--text-color);
    margin-right: 18px;
    margin-left: 5px;
    transition: all .50s ease;
}

.h-right a:hover{
    color: var(--main-color);
    transform: translateY(-3px);
}
#menu-icon{
    color: var(--text-color);
    font-size: 30px;
    cursor:pointer;
    z-index: 10001;
    display:none;
}

section{
    padding:70px 17% 60px;
}
.home{
    position: relative;
    height: 100vh;
    width: 100%;
    background-image: linear-gradient(to left, rgba(0,0,0,0.6),rgba(0,0,0,0.3)), url(img/home.jpg);
    background-size: cover;
    background-position: bottom center;
    display: flex;
    align-items: center;
    justify-content: flex;
}

.home-text h4{
    font-size: 18px;
    font-weight:600;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 6px;
    color: var(--text-color);

}
.home-text h1{
    font-size: var(--h1-font);
    font-weight:800;
    line-height:1.2;
    margin-bottom:20px;
}
.home-text p{
font-size: var(--p-font);
font-weight: 500;
line-height: 30px;
color: var(--text-color);
margin-bottom: 35px;
}

.home .video-container video{
    position: absolute;
    top: 0; left: 0;
    z-index: -1;
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.btn{
    display:inline-block;
    padding:13px 40px;
    background: var(--main-color);
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
    border: 2px solid var(--text-color);
    background:transparent;
    color:var(--text-color);
}

header.sticky{
    padding: 8px 17%;
    background: transparent;
    backdrop-filter: blur(35px);
}

.feature-content{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, auto));
    align-items: center;
    text-align: center;
    gap:3rem;
}

.row-img{
    overflow:hidden;
    width: 100px;
    height:100px;
    margin: 0 auto;
    margin-bottom: 20px;
    border-radius: 50%;
    cursor:pointer;
}
.row-img img{
    width:100%;
    display:block;
    transition:transform 0.7s;
}
.row-img img:hover{
    transform:scale(1.2);
}
.feature-content h4{
    font-size: 17px;
    font-weight:500;
    cursor:pointer;
    transition: all .50s ease;
}

.feature-content h4:hover{
    color:var(--main-color);
}

.holiday{
    display:grid;
    grid-template-columns: repeat(2,1fr);
    align-items: center;
    gap:9rem;
}
.holiday-img img{
    height:auto;
    width:100%;
    border-radius:10px;
}
.holiday-text h5{
    font-size: 22px;
    font-weight: 600;
    color: var(--main-color);
    text-transform:uppercase;
    letter-spacing: 6px;
    margin-bottom:20px;
}
.holiday-text h2{
    font-size: var(--h2-font);
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 25px;

}

.heading{
    text-align: center;
    padding: 2.5rem 0;
}

.heading span{
    font-size: 3.5rem;
    background: rgba(255, 165, 0, 0.2);
    color: var(--main-color);
    border-radius: .5rem;
    padding: .2rem 1rem;
}


.tour-content{
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}
.tours{
    width: 100%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}
.box{
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
    margin-right: 25px;
}
.box img{
    width: 100%;
    height: 100%;
    display: block;
}
.holiday .btn{
    margin-top: 13px;
}
.layer{
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 0.5s;

}
.layer h3{
    width: 100%;
    font-weight: 10000;
    color: #ffffff;
    font-size: 40px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.8s;
}
.layer:hover h3{
    bottom: 49%;
    opacity: 1;
    backdrop-filter: blur(25px);
}

.arrow-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
  }
  .arrow {
    width: 60px;
    height: 60px;
    background-color:var(--bg-color);
    position: relative;
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.25s ease;
  }
  .arrow::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 15px;
    height: 15px;
    border-top: 3px solid #fff;
    border-right: 3px solid #fff;
    transform: translate(-50%, -50%) rotate(45deg);
  }
  .arrow:hover {
    background-color:var(--main-color);
  }
 
.footer{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px,auto));
    gap:2rem;
}
.footer-box{
    display:flex;
    flex-direction: column;
}
.footer-box h3{
    font-size:20px;
    font-weight:600;
    margin-bottom:15px;
}
.footer-box a{
    color:#979797;
    margin-bottom:0.8rem;
    transition: all .50s ease;
}

.footer-box a:hover{
    transform:translateX(-5px);
    color: var(--text-color);
}
.social a{
    display:inline-flex;
    align-items: center;
    justify-content: center;
    height:45px;
    width:45px;
    background: #202020;
    color:var(--text-color);
    font-size: 20px;
    border-radius:50%;
    margin-right: 8px;
    transition:transform 0.6s;
}
.social a:hover{
    background: var(--main-color);
    color:var(--bg-color);
    transform: translateX(-4px);
}
.copyright p{
    text-align: center;
    padding:20px;
    color:#979797;
    font-size: 15px;
}

@media (max-width:1700px){
    header{
        padding: 18px 8%;
    }
    header.sticky{
        padding: 7px 8%;
    }
    section{
        padding: 50px 8% 40px;
    }
    }
  
    @media (max-width:1200px){
        header{
            padding: 14px 5%;
        }
        header.sticky{
            padding: 7px 5%;
        }
        section{
            padding: 45px 5% 35px;
        }
        :root{
            --h1-font: 4.6rem;
            --h2-font: 2.8rem;
            --p-font: 15px;
        }
        .home{
            height: 90vh;
        }
        }
        @media (max-width:1050px){
            .feature-content{
                gap:1.5rem;
            }
            .holiday{
                gap:3rem;
            }
            #menu-icon{
                display:block;
            }
            .navbar{
                position:absolute;
                width:100%;
                height:100vh;
                padding: 40px 60px;
                top: 0;
                bottom: 0;
                left:0;
                display:flex;
                right:0;
                flex-direction:column;
                background: var(--bg-color);
                transition: all .50s ease;
            }
            .navbar a{
                display:block;
                color:#979797;
                padding:0;
                margin: 0px 0px 40px 0px;
                font-size:400;
            }
        }


</style>



</head>
<body>

    <!--header design-->
    <header>
        <a href="#" class="logo">SAFARNA<span>MA</span></a>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#feature">Information</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>

        <div class="h-right">
            <a href="#">Follow us</a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!--home section design-->
    <section class="home">
        <div class="home-text">
            <h4>Let's</h4>
            <h1> Plan your<br> Next Trip!</h1>
            <p>India is a vast and diverse country with a rich cultural 
            heritage and stunning natural beauty. From the towering peaks 
            of the Himalayas to the pristine beaches of the Indian Ocean, 
            there are countless places to visit in India that offer a unique
            and unforgettable experience.</p>
            <a href="#" class="btn">EXPLORE</a>

        </div>

            <div class="video-container">
                <video src="images_videos/vid.mp4" id="video-slider" loop autoplay muted></video>
            </div>

    </section>

    <!--feature section design-->
    <section class="feature">
        <div class="feature-content">
            <div class="row">
                <div class="row-img">
                    <img src="images_videos/hotels.jpg">
                </div>
                <h4>Hotel</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="images_videos/food.jpg">
                </div>
                <h4>Food</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="images_videos/trans.jpg">
                </div>
                <h4>Transport</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="images_videos/shop.jpg">
                </div>
                <h4>Attraction</h4>
            </div>

            <div class="row">
                <div class="row-img">
                    <img src="images_videos/medi.jpg">
                </div>
                <h4>Emergency</h4>
            </div>
        </div>
    </section>

<!--mountain section design-->
<section class="holiday">
    <div class="holiday-img">
        <img src="images_videos/mount.jpg">
    </div>
    <div class="holiday-text">
            <h5>Mountain</h5>
            <h2>Let the Mountains whisper tales of 
                secrets untold</h2><p> 
                 The adrenaline rush of trekking through challenging terrain or the
                 serenity of meditating amidst mist-kissed peaks, India's mountains
                 offer an unforgettable odyssey for the soul.</p>
                <a href="#" class="btn">Read more</a>
                </div>
                
            </section>

<!--tour section design-->
<section class="tours">
    <h1 class="heading">
        <span>a</span>
        <span>c</span>
        <span>t</span>
        <span>i</span>
        <span>v</span>
        <span>i</span>
        <span>t</span>
        <span>i</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="tour-content">
        <div class="box">
            <img src="images_videos/hiking.jpg">
            <div class="layer">
            <h3>Hiking</h3>       
            </div>     
        </div>

        <div class="box">
            <img src="images_videos/camp.jpg">
            <div class="layer">
            <h3>Camping</h3>       
            </div>     
        </div>

        <div class="box">
            <img src="images_videos/raft.jpg">
            <div class="layer">
            <h3>Rafting</h3>       
            </div>     
        </div>

        <div class="arrow-container">
            <div class="arrow"><a href="#"></a></div>
          </div>
    </div>
</section>


<!--heritage section design-->
<section class="holiday">
    
    <div class="holiday-text">
        <h5>Heritage</h5>
        <h2>Visit the warmth of timeless hospitality, and the soul-stirring beauty </h2><p> Explore India's heritage,
                 where every stone whispers tales of a glorious past and 
                 every monument echoes the footsteps of history's giants..</p>
            <a href="#" class="btn">Read more</a>
            </div>

            <div class="holiday-img">
                <img src="images_videos/heritage.jpg">
            </div>
        </section>

        <!--tour section design-->
<section class="tours">

    <h1 class="heading">
        <span>a</span>
        <span>c</span>
        <span>t</span>
        <span>i</span>
        <span>v</span>
        <span>i</span>
        <span>t</span>
        <span>i</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="tour-content">
        <div class="box">
            <img src="images_videos/nature.jpg">
            <div class="layer">
            <h3>Nature walk</h3>       
            </div>     
        </div>

        <div class="box">
            <img src="images_videos/events.jpg">
            <div class="layer">
            <h3>Traditions</h3>       
            </div>     
        </div>

        <div class="box">
            <img src="images_videos/culture.jpg">
            <div class="layer">
            <h3>Cultures</h3>       
            </div>     
        </div>

        <div class="arrow-container">
            <div class="arrow"><a href="#"></a></div>
          </div>
    </div>
</section>


<!--marine section design-->
<section class="holiday">
    <div class="holiday-img">
        <img src="images_videos/sea.jpg">
    </div>
    <div class="holiday-text">
            <h5>Marine</h5>
            <h2>Let the Rhythmic dance of waves serenade your soul</h2><p> 
                The horizon kisses the sky and the rhythm of the waves whispers
                 tales of adventure,lose yourself in the symphony of the sea, 
                 where every wave carries a promise of discovery.</p>
                <a href="#" class="btn">Read more</a>
                </div>
                
            </section>

<!--tour section design-->
<section class="tours">

    <h1 class="heading">
        <span>a</span>
        <span>c</span>
        <span>t</span>
        <span>i</span>
        <span>v</span>
        <span>i</span>
        <span>t</span>
        <span>i</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="tour-content">
        <div class="box">
            <img src="images_videos/surf.jpg">
            <div class="layer">
            <h3>surfing</h3>       
            </div>     
        </div>

        <div class="box">
            <img src="images_videos/scuba.jpg">
            <div class="layer">
            <h3>Scuba Diving</h3>       
            </div>     
        </div>

        <div class="box">
            <img src="images_videos/kitesurf.jpg">
            <div class="layer">
            <h3>Kite Surfing</h3>       
            </div>     
        </div>

        <div class="arrow-container">
            <div class="arrow"><a href="#"></a></div>
          </div>
    </div>
</section>

<!--footer section design-->
    <section class="footer">
        <div class="footer-box">
            <h3>Services</h3>
            <a href="#">Hotels</a>
            <a href="#">Food</a>
            <a href="#">Transport</a>
            <a href="#">Attraction</a>
            <a href="#">Emergency</a>
        </div>
        <div class="footer-box">
            <h3>About</h3>
            <a href="#">Our Story</a>
        </div>

        <div class="footer-box">
            <h3>Help</h3>
            <a href="#">FAQs</a>
            <a href="#">Contact us</a>
        </div>

        <div class="social">
            <h3>Social</h3>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
        </div>
    </section>

    <!--copysight-->
    <div class="copyright">
        <p>&copy; All copyright claims have been resrved.Thanks for visiting our website <i class="fa fa-heart"></i></p>
    </div>


    <script>
        const header=document.querySelector("header");
window.addEventListener("scroll",function(){
    header.classList.toggle("sticky",window.scrollY>60)
});
    </script>

</body>
</html>