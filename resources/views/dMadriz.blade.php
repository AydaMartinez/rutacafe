@extends ('plantilla')

@section('contenido')


<div class="container">
    <div class="row">
        <h1 class="centrado col-12 mt-5">Madriz</h1>
        <div class="cont">
            <p class="text-white bold mb-5">El de partamento de Madriz se extiende en parte de la región montañosa que limita
                 con la República de Honduras.
                    El paisaje montañoso del departamento se conforma a partir de las pequeñas planicies en donde se asientan 
                    Somoto y Palacaguina, rodeados de alturas y cerros, como la serranía de Tepesomoto – La Patasta, hoy área 
                    protegida, o el conjunto de El Majaste.
            </p>

            <!-- Search form -->
            <input class="form-control mb-2" type="text" placeholder="Buscar" aria-label="Buscar">
            <button type="button" class="btn btn-light col-10 mt-1 animated bounceIn delay-1s"><i class="fas fa-utensils"></i> ¿Dónde comer?</button>
            <button type="button" class="btn btn-light col-10 mt-1 animated bounceIn delay-2s"><i class="fas fa-store"></i> ¿Dónde comprar?</button>
            <button type="button" class="btn btn-light col-10 mt-1 animated bounceIn delay-3s"><i class="fas fa-umbrella-beach"></i> ¿Dónde pasear?</button>
            <button type="button" class="btn btn-light col-10 mt-1 animated bounceIn delay-4s mb-3"><i class="fas fa-h-square"></i> ¿Dónde dormir?</button>
        </div>
    </div>
</div>

@endsection