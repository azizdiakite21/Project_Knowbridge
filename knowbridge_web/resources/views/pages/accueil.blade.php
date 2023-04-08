@extends('base')
@section('content')

<style>
    .titre {
	    text-align: center;
	    padding: 30px;
    }

    .titre h1 {
        font-weight: bold;
        font-size: 50px;
        color: #30110D;
        letter-spacing: .1rem;
        
    }

    .sous-titre {
        text-align: center;
        margin-top: 10px;
    }

    .sous-titre p{
        margin-bottom: 10px;
        font-size: 28px;
        color: #30110D;
    }

    .btn {
	display: inline-block;
	padding: 10px 20px;
	background-color: #4CAF50;
	color: white;
	text-align: center;
	font-size: 18px;
	margin: 20px 10px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

.btn-container {
	text-align: center;
}
</style>

<section>
    <div class="titre">
        <h1>
            Étudiez & travaillez<br> en même temps.
        </h1>
    </div>

    <div class="sous-titre">
        <p>
            Avec Knowbridge, étudies depuis chez toi et<br>puis obtient une formation diplômante et qualifiante<br>basée sur le système nord-américain. 
        </p>
    </div>

    <div class="btn-container">
		<button class="btn">En savoir plus</button>
		<button class="btn">Demande d'Admission</button>
	</div>
</section>
@endsection