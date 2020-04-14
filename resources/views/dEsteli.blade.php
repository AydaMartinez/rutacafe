@extends ('plantilla')

@section('contenido')


<div class="container">
    <div class="row">
        <h1 class="centrado col-12 mt-5">Esteli</h1>
        <div class="cont">
            <p class="text-white bold mb-5">El Departamento de Estelí está ubicado en la región Norte de Nicaragua
                 y tiene una extensión de 2,230 Km2, con una población de 230 mil habitantes. Se compone de seis 
                 municipios que son La Trinidad, San Nicolás, Condega, Pueblo Nuevo y San Juan de Limay además de 
                 Estelí, su cabecera departamental.
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
