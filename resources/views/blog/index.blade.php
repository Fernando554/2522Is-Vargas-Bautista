@extends('blog.template.layout')
@section('titulo')
<h1>Presentacion</h1>
@endsection
@section('contenido')

<h2 id="content">Inicio</h2>
<hr class="major" />
<h3>Nombre: {{$uni->nombre}}</h3>
<h3>Edad: {{$uni->edad}}</h3>
<h3>Pais: {{$uni->pais}}</h3>
<h3>Apodo: {{$uni->apodo}}</h3>

@foreach ($uni->mostrarCosasquemeGustan() as $gustos)
<h3>Gustos: {{$gustos}}</h3>
@endforeach
<span class="image object">
										<img src="images/dragon_ball.png" alt="" />
									</span>
                                    <span class="image object">
										<img src="images/starwars.png" alt="" />
									</span>
                                    <span class="image object">
										<img src="images/videojuegos.png" alt="" />
									</span>
                                    <h2 id="content">Canciones preferidas</h2>
										<p>A continuacion veran una lista con algunas de mis canciones favoritas actualmente.</p>
 @foreach ($uni->CancionesFavoritas() as $canciones)
<h3>Canciones Preferidas: {{$canciones}}</h3>
@endforeach
<span class="image object">
										<img src="images/welcome to the jungle.png" alt="" />
									</span>
                                    <span class="image object">
										<img src="images/sabaton.png" alt="" />
@endsection