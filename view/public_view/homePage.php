<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet </title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    <script defer  src="js/captcha.js"></script>

</head>
<body>
    
    <!-- header  -->
    <header>
        
        <!-- menu responsive -->
        
        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <p><span>Pro</span>jet</p> <!--nom sur la barre nav-->
        </div>
        <ul class="menu">
            <li><a href="#home">Acceuil</a></li> <!--lien vers les pages -->
            <li><a href="#cars">Instruments</a></li> <!--lien vers les pages -->
            <li><a href="#services">Services</a></li> <!--lien vers les pages -->
            <li><a href="#contact">Contact</a></li> <!--lien vers les pages -->
        </ul>
        <nav class="navbar bg-light">
            <div class="container-fluid">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </nav>
        
        <button class="login_btn">LOGIN</button> <!--cée le bouton -->
        
    </header> 
    
    
    <!-- section Acceuil -->
    
     
    <section id="home">
        <div class="left">
            <h1>Les <span>Instruments</span> De Percussion</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit doloremque earum, totam laudantium dolor voluptatum fugiat. Odio doloribus nostrum harum corporis. Natus omnis deleniti reiciendis illum maxime necessitatibus accusantium esse.</p>
            
        </div>
        <div class="images">
            <img src="img/set-realistic-drums-metal-cymbals-260nw-2128767320.png" class="shape">
        </div>
    </section>


    <!-- section vehicule -->

    <section id="cars">
        <h1 class="section_title">Nos Instruments</h1>
        <div class="images">
            <ul>
                <li class="car">
                   <div>
                        <a href="images/Capture d’écran 2023-04-04 125651.png" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="images/toms.jpg" alt="">
                        </a>                       
                   </div>
                   <div class="btn_main"><button class="bout">TOMS</button>
                  </div>
                </li>

                <li class="car">
                    <div>
                        <a href="images/lito.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="images/lito.jpg" alt="">
                        </a>   
                    </div>
                    <div class="btn_main"><button class="bout">LITHOPHONE</button>
                    </div>
    
                 </li>
                 <li class="car">
                    <div>
                        <a href="images/piano.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="images/piano.jpg" alt="">
                        </a> 
                    </div>
                    <div class="btn_main"><button class="bout">PIANO</button>
                    </div>
                 </li>
                 <li class="car">
                    <div>
                        <a href="images/car5.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="images/piano.jpg" alt="">
                        </a> 
                    </div>
                    <div class="btn_main"><button class="bout">dgfsgfd</button>
                    </div>
                 </li>
                 <li class="car">
                    <div>
                        <a href="images/car1.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src="images/lito.jpg" alt="">
                        </a>   
                    </div>
                    <div class="btn_main"><button class="bout">dgfsgfd</button>
                    </div>
    
                 </li>
                 <li class="car">
                    <div>
                         <a href="images/toms.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                             <img src="images/toms.jpg" alt="">
                         </a>                       
                    </div>
                    <div class="btn_main"><button class="bout">dgfsgfd</button>
                   </div>
                 </li>
                 <li class="car">
                    <div>
                         <a href="images/toms.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                             <img src="images/toms.jpg" alt="">
                         </a>                       
                    </div>
                    <div class="btn_main"><button class="bout">dgfsgfd</button>
                   </div>
                 </li>
                 <li class="car">
                    <div>
                         <a href="images/toms.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                             <img src="images/toms.jpg" alt="">
                         </a>                       
                    </div>
                    <div class="btn_main"><button class="bout">dgfsgfd</button>
                   </div>
                 </li>
                 <li class="car">
                    <div>
                         <a href="images/toms.jpg" data-toggle="lightbox" data-gallery="example-gallery">
                             <img src="images/toms.jpg" alt="">
                         </a>                       
                    </div>
                    <div class="btn_main"><button class="bout">dgfsgfd</button>
                   </div>
                 </li>
            </ul>
        </div>
        <div class="main"></div>
    </section>

    

    <!-- section services -->
    <!-- CAPTCHA
    <div class="cap">
        <p id="captcha"></p><br>
        <input id="captchaInput" type="text" placeholder="Remplir"><span></span></br></br>
        <button id="captchaValidate">Envoyer</button>
        <button id="captchaRefresh">Autres</button>
    </div>
   -->


    

    <!-- section contact -->

    <section id="contact">
        <h1 class="section_title">Contact</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="images/Capture d’écran 2023-04-04 125651.png" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="form_contact">
                <h3>Envoyer un message</h3>
                <form action="#">
                    <input type="text"placeholder="Nom">
                    <input type="email"placeholder="Adresse Mail">
                    <input type="text"placeholder="Objet">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </section>
 

    <footer>
        <p> Copyright 2022 </p>
    </footer>

    <script>
        //menu responsive code JS

        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function(){
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }

    </script>

<script>
    let body = document.querySelector("body");
    let main = document.querySelector(".main");
    body.addEventListener("click", function (e) {
      if (e.target.classList[0] == "airimage") {
        main.classList.add("main2");
        main.innerHTML = `<img class="boximage" src="${e.target.dataset.url}" alt="one"  />; <i class="fa-solid fa-xmark close"></i>`;
      } else {
        main.classList.remove("main2");
        main.innerHTML = "";
      }
    });
</script>


    
    
</body>
</html>