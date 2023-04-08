<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Required meta tags -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <title>Laravel</title>


       
            
    </head>
    <body>

    <section>

        <div class="container-fluid top-header">
            <div class="top-header-university float-start">
                Université virtuelle d'excellence
            </div>
            <div class="top-header-right-content float-end">
                <div class="">
                    Demande d'info
                </div> 
                <div class="">
                    Chat direct
                </div>
            </div>
        </div>

        <div class="navbar-box">
            <nav class="navbar navbar-expand-lg shadow-sm">
                <div class="container-fluid">

                    <a class="navbar-brand" href="#">
                        <div class="navbar-logo">
                            <img src="{{ asset('img/knowbridge.png') }}" alt="" srcset="">
                        </div>
                    </a>
                    
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                        <div class="navbar-nav">
                            <a class="nav-link" href="#">Accueil</a>
                            <a class="nav-link" href="#">Programmes</a>
                            <a class="nav-link" href="#">Admission</a>
                            <a class="nav-link" href="#">Frais</a>
                            <a class="nav-link" href="#">Bourses</a>
                            <a class="nav-link" href="#">Département</a>
                        </div>

                        <div class="navbar-right-content">

                            <button class="apply">Appliquer maintenant</button>

                            <div class="small-icons row">

                                <div class="col-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                </div>

                                <div class="col-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </div>

                                <div class="col-4">EN</div>

                            </div>
                        </div>

                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>
            </nav>
        </div>
    </section>
    
    @yield('content')


    <footer>
            <div class="row">
                <div class="col">
                <div class="inputbox">
                    <input required="required" type="text">
                    <span>Nom</span>
                    <i></i>
                </div>
                </div>
                <div class="col">
                <div class="inputbox">
                    <input required="required" type="text">
                    <span>Prénom</span>
                    <i></i>
                </div>
                </div>
                <div class="col">
                <div class="inputbox">
                    <input required="required" type="text">
                    <span>Email</span>
                    <i></i>
                </div>
                </div>
                <div class="col">
                <div class="inputbox">
                    <input required="required" type="text">
                    <span>Téléphone</span>
                    <i></i>
                </div>              
                </div>
                <div class="col-12">
                <button> S'abonner</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('img/knowbridge2.png') }}" alt="Knwbridge">
                    <p>Devenez expert en Cybersécurité</br>aux métiers digital et bien d'autres.</p>
                    <ul style="list-style-type : none;">
                    <li><a href="#"><i class="fas fa-map-marker-alt me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i>300 BP 40 ,Sokodé,Togo</a></li>
                    <li><a href="#"><i class="fas fa-phone me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i>+1 613 908-5283 / +228 93 53 38 91</a></li>
                    <li><a href="#"><i class="fas fa-envelope me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i>contact@knowbridge.com</a></li>
                    </ul>

                    <a href="#"><i class="fab fa-telegram me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>
                    <a href="#"><i class="fab fa-facebook me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>
                    <a href="#"><i class="fab fa-instagram me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>
                    <a href="#"><i class="fab fa-linkedin me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>
                    <a href="#"><i class="fab fa-twitter me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>
                    <a href="#"><i class="fab fa-youtube me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="choisissez votre demande d'études" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text text-white" style="background-color: #30110D;">Appliquer maintenant</span>
                    </div>

                    
                </div>
                <div class="col-md-3">
                <h5>Étudiants actuels</h5>
                    <ul style="list-style-type: disc;">
                        <li><a href="#">Portail étudiant</a></li>
                        <li><a href="#">Horaire des cours</a></li>
                        <li><a href="#">Inscription au cours</a></li>
                        <li><a href="#">Outils technologiques</a></li>
                        <li><a href="#">Calendrier universitaire</a></li>
                        <li><a href="#">Stages et emplois</a></li>
                        <li><a href="#">Autre service</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                <h5>Futurs étudiants</h5>
                    <ul style="list-style-type: disc;">
                        <li><a href="#">Profil étudiant</a></li>
                        <li><a href="#">Programmes</a></li>
                        <li><a href="#">Admission</a></li>
                        <li><a href="#">Frais</a></li>
                        <li><a href="#">Bourses</a></li>
                        <li><a href="#">Départements</a></li>
                        <li><a href="#">Notre université</a></li>
                        <li><a href="#">Orientation universitaire</a></li>

                    </ul>
                </div>
                <div class="col-md-3">
                <h5>Liens utiles</h5>
                <ul style="list-style-type: disc;">
                        <li><a href="#">Portail professeurs </a></li>
                        <li><a href="#">Carrières</a></li>
                        <li><a href="#">Nos partenaires</a></li>
                        <li><a href="#">Embaucher un étudiant</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Nous joindre</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <p>KNOWBRIDGE UNIVERSITY INSTITUTE</p>
                    <h6>Système universitaire nord-américain</h6>          
                </div>
                <div class="col-md-2" style="border-left: 1px solid #000;">
                <p>Protection de la vie privée</p>
                </div>
                <div class="col-md-2" style="border-left: 1px solid #000;">
                <p>&copy; 2022 Tous droits réservés</p>
                </div>
                <div class="col-md-2" style="border-left: 1px solid #000;">
                <p>Accessibilité</p>
                </div>
                <div class="col-md-2" style="border-left: 1px solid #000;">
                <p>Politiques universitaires</p>
                </div>
            </div>
    </footer>


<style>

body {
        min-height: 100vh;
        width: 100%;
        overflow-x: hidden;
    }
            
           footer {
  background-color: #F2BC94;;
  padding: 20px;
  margin-top: 250px;
}

footer ul li a{
    text-decoration: none;
    color: #30110D;
}

footer h5{
    color: #722620;
}


footer button {
 padding: 15px 25px;
 border: unset;
 border-radius: 15px;
 color: #212121;
 z-index: 1;
 background: #e8e8e8;
 position: relative;
 font-weight: 1000;
 font-size: 17px;
 -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 transition: all 250ms;
 overflow: hidden;
}

button::before {
 content: "";
 position: absolute;
 top: 0;
 left: 0;
 height: 100%;
 width: 0;
 border-radius: 15px;
 background-color: #30110D;
 z-index: -1;
 -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 transition: all 250ms
}

button:hover {
 color: #e8e8e8;
}

button:hover::before {
 width: 100%;
}

.mb-3 input::placeholder {
  font-size: 0.9em;

}

.inputbox {
  position: relative;
  width: 196px;
}

.inputbox input {
  position: relative;
  width: 100%;
  padding: 20px 10px 10px;
  background: transparent;
  outline: none;
  box-shadow: none;
  border: none;
  color: #23242a;
  font-size: 1em;
  letter-spacing: 0.05em;
  transition: 0.5s;
  z-index: 10;
}

.inputbox span {
  position: absolute;
  left: 0;
  padding: 20px 10px 10px;
  font-size: 1em;
  color: #8f8f8f;
  letter-spacing: 00.05em;
  transition: 0.5s;
  pointer-events: none;
}

.inputbox input:valid ~span,
.inputbox input:focus ~span {
  color: #fff;
  transform: translateX(-10px) translateY(-34px);
  font-size: 0,75em;
}

.inputbox i {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  border-radius: 4px;
  transition: 0.5s;
  pointer-events: none;
  z-index: 9;
}

.inputbox input:valid ~i,
.inputbox input:focus ~i {
  height: 44px;
}


footer ul {
    color: #722620;
}

.fa-map-marker-alt {
  max-width: 100%;
  height: auto;
  margin-top: 10px;
}

.fa-phone {
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

.fa-envelope {
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

.fa-youtube{
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

.fa-twitter{
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

.fa-instagram{
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

.fa-facebook{
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

.fa-telegram{
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

.fa-linkedin{
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

.mb-3{
    margin-top: 10px;
    position: flex;
    display: flex;

    background-color: #30110D;
    color: #fff;
    border-radius: 10px;
    
}

.form-control {
    border-radius: 10px;
  
}


.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 20px;
}


.col-12 {
  flex-basis: 100%;
}

.col-md-3 img {
  max-width: 80%;
  height: auto;
}

.col-md-3 p {
    margin: 0;
    color:#30110D;
    margin-top: 10px;
}

.col-md-3 a {
    text-decoration: none;
    color: #30110D;
}

button {
  display: block;
  margin: 20px auto 0;
}

hr {
  border: none;
  border-top: 1px solid black;
  margin: 20px 0;
}

@media (min-width: 768px) {
  .col-md-2,
  .col-md-3 {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }

  .col-md-2 {
    margin-bottom: 20px;
  }
}




.top-header{
        background-color: #722620;
        height: 40px;
        color: #fff;
        padding-top: 7px;
        padding-left: 25px;
    }




    .top-header-right-content{
        display: flex;
    }



    .top-header-right-content div {
            margin-right: 20px;
    }




    .navbar {
        width: 100%;
        padding-top: 0px;
    }




    .navbar-collapse .collapse .show .navbar-right-content{
        width: 100%;
    }




    .navbar-collapse.collapse.show .nav-link{
        margin-top: 10px;
        padding-left: 20px;
    }




    .navbar-collapse.collapse.show .navbar-right-content button{
        width: 100%;
    }


    .navbar-logo {
        background-color: #f2bc94;
        border-radius: 50px;
        margin-top: 5px;
        margin-left: 10px;
        padding: 5px 30px ;
        max-width: 200px;
        height: 50px;
    }



    .navbar-logo img{
        width: 100%;
        margin-top: 3px;
    }



    .nav-link {
        color: #722620;
        font-weight: 900;
        margin: 0px 10px;
        padding-left: 10px;
        transition: all 0.7s ease-in;
    }



    .nav-link:hover {
        border: 1px solid  #722620;
        border-radius: 50px;
        background-color: #722620;
        color: #fff;
    }


    .navbar-collapse {
        flex-basis: 100%;
        flex-grow: 0;
    }

    .navbar-right-content{
        padding-right: 20px ;
    }

    .navbar-right-content .apply{
        color: #fff;
        background-color: #722620;
        border-radius: 50px;
        padding: 10px 25px;
        margin-top: 25px;
        border: none;
    }

    .navbar-right-content .apply:active {
        transform: scaleX(0.98);
    }

   

    .navbar-right-content .small-icons{
        margin: auto;
        margin-top: 7px;
        width: 75%;
    }




    .navbar-right-content .small-icons div{
        display: flex;
        justify-content: center;
    }




    .navbar-right-content .small-icons div:nth-child(2){
        border-left: #000 solid 2px;
        border-right: #000 solid 2px;
    }

    @media (max-width: 1103px) {

.navbar-right-content .apply{
    color: #fff;
    background-color: #722620;
    border-radius: 50px;
    padding: 10px 25px;
    font-size: 13px;
    margin-top: 19px;
    border: none;
}

}



@media (max-width: 1067px) {

.navbar-right-content .small-icons div{
    font-size: 15px;
    padding: 5px;
}

}


@media (max-width: 970px)  {

.image-slide div.slide-text p{
    font-size: 45px;
}

.image-slide div.image img{
    width: 100%;
    height: fit-content;
    position: relative;
    top: 50px
    
}

}


@media (max-width: 790px)  {

.image-slide div.slide-text p{
    font-size: 40px;
    top: 30%;
    left: 20%;
}

.image-slide div.image img{
    width: 100%;
    height: fit-content;
    position: relative;
    top: 70px
    
}

}


@media (max-width: 450px)  {

.image-slide div.slide-text p{
    font-size: 45px;
    margin: auto;
}

.image-slide div.image img{
    width: 100%;
}

}




    @media (max-width: 640px) {
        .top-header{
            padding-left: 25px;
            font-size: 15px;
        }
    }

    @media (max-width: 560px) {
        .top-header{
            padding-top: 9px;
            padding-left: 25px;
            font-size: 13px;
        }

        .top-header-right-content {
            display: flex;
        }

        .top-header-right-content div {
            margin-right: 5px;
        }

        .top-header-right-content div:nth-child(1) {
            margin-right: 15px;
        }
        
    }

        </style>

        
    </body>
</html>
