@extends ('plantilla')

@section('contenido')


<div class="container">
    <div class="row">
        <h1 class="centrado col-12 mt-5">Matagalpa</h1>
        <div class="cont">
            <p class="text-white bold mb-5">El clima fresco propicia el cultivo del café, que aquí tiene uno de sus cunas
                históricas y
                que caracteriza tanto la economía como la cultura y la sociedad de estos municipios. Además de las
                fincas cafetaleras
                en la zona rural, este rubro se hace evidente en la ciudad y a lo largo del corredor entre Sébaco y
                Matagalpa, con las
                estructuras de los beneficios,
                que son las plantas agroindustriales donde se procesa, selecciona y finalmente despacha el café para la
                exportación.
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
