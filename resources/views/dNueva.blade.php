@extends ('plantilla')

@section('contenido')


<div class="container">
    <div class="row">
        <h1 class="centrado col-12 mt-5">Nueva Segovia</h1>
        <div class="cont">
            <p class="text-white bold mb-5">El departamento de Nueva Segovia, con sus casi 3,500 kilómetros cuadrados
                 y 212 mil habitantes, conforma junto a Madriz y Estelí, la Región de ‘’Las Segovias’’. Está caracterizado 
                 por su historia colonial y revolucionaria y su variada artesanía, producto de una comunidad indígena activa,
                  en un escenario natural de altas montañas, bellezas paisajísticas y valles productivos.
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