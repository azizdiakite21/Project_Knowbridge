@extends('base')
@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Concernant la section home*/

    .home{
    position: relative;
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

/*Texte sur la vidéo*/

.home:before{
    z-index: 777;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.home video {
    z-index: 000;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.home .content{
    z-index:888;
    color: #fff;
    width: 70%;
    margin-top: 50px;
    display: none;
}

.home .content.active{
    display: block;
    text-align: center;
    margin: auto;
    padding-top: 40rem;
}

.home .content h1{
    font-size: 4em;
    font-weight: 900;
    letter-spacing: 1px;
    line-height: 75px;
    margin-bottom: 40px;

    
}

.home .content h1 span{
    font-size: 1.2em;
    font-weight: 600;
}


section p{
    text-align: center;
    margin-top: 40px;
    font-size: 2.0em;
    color: #30110D;
}

section h1 {
    text-align: center;
    font-style: bold;
}




.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  margin-top: 50px;
}

.card {
  width: calc(25% - 20px);
  margin-bottom: 20px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
  padding: 20px;
  background-color: #e5e5e5;
}

.card img {
  width: 100%;
  height: auto;
}

.card h2 {
  font-size: 1.5rem;
  margin-top: 10px;
  margin-bottom: 10px;
  text-align: center;
}

.card p {
  font-size: 1rem;
  margin-top: 0;
}

</style>



<section class="home">
    <video class="video-slide active" src="{{ asset('img/1.mp4') }}" autoplay muted loop></video>

    <div class="content active">
        <h1>Votre université Virtuelle d'<br><span>EXCELLENCE</span></h1>
    </div>

</section>

<section>
    <p>Lequel des profils vous correspond aux mieux ?</p>
    <h1>Choisissez votre profil</h1>
</section>

<section>
    <div class="card-container">
        <div class="card">
            <img src="{{ asset('img/eregulier.png') }}" alt="image1">
            <h2>ÉTUDIANT RÉGULIER</h2>
            <p>Si vous avez obtenu un BAC ou une<br>LICENCE et vous désirez étudier à temps plein.</p>
        </div>
        <div class="card">
            <img src="{{ asset('img/exe.png') }}" alt="image2">
            <h2>PROFESSIONNEL</h2>
            <p>Si vous avez un emploi ou désirez<br>étudier à temps partiel.</p>
        </div>
        <div class="card">
            <img src="{{ asset('img/pro.png') }}" alt="image3">
            <h2>EXÉCUTIF</h2>
            <p>Si vous êtes un dirigeant ou chef <br>service et vous désirez<br>étudier de façon indépendante.</p>
        </div>
    </div>

</section>


      



@endsection