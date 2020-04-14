@extends ('plantilla')

@section('contenido')
<div class="container">
    <div class="row">
        <h1 class="centrado col-12 mt-5">Jiinotega</h1>
        <div class="cont">
            <p class="text-white bold mb-5">El departamento de Jinotega, con sus 9,222 kilómetros cuadrados, es el
                 departamento más grande a nivel nacional, superado solamente por las dos regiones autónomas del 
                 Atlántico. La población residente en el 2010 es de 400 mil habitantes, lo hace el segundo más poblado 
                 en el Norte, pero resulta el de menor densidad, por su grande extensión. El territorio departamental 
                 se divide en los municipios de Jinotega, San Rafael del Norte, La Concordia, San Sebastian de Yali en 
                 el sector sur, Santa María de Pantasma y El Cuá en el centro, Wiwilí y San José de Bocay en el extremo noreste.
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