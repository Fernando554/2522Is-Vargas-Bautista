@extends('blog.template.layout')
@section('titulo')
<h1>Presentacion</h1>
@endsection
@section('contenido')
<!-- Content -->
<h2 id="content">Dragon ball</h2>
<span class="image object">
	<img src="images/Shenlong.gif" alt="" />
</span>
										<p>En esta seccion hablara sobre mi serie favorita y la cual me a apoyado a ser la persona que soy hoy en dia.</p>
										<div class="row">
											<div class="col-6 col-12-small">
											<h2 id="content">Personajes favoritos</h2>
												<h3>Gohan</h3>
												<p>En el primer lugar tenemos a gohan bueno este personaje en especifico a sido el que mas me ayudo y esto es debido a que en la secundaria no me importaba reprobar examenes, no estudia, etc. el chiste es que despues de ver a gohan durante la saga de cell me di cuenta que este personaje se parecia mucho a mi tenia el potencial para ser el mejor pero por miedo no lo utilizaba despues de ver esta saga me empeze a esforzar mas en la escuela, estudiaba mucho, sacaba 9 y despues de mucho esfuerzo logre obtener un pase directo a una de las mejores prepas de neza que era la universidad la salle nezahualcoyotl.</p>
												<span class="image object">
										            <img src="images/gohan.png" alt="" />
									             </span>
											</div>
											<div class="col-6 col-12-small">
												<h3>Majin buu</h3>
												<p>Mi segundo personaje favorito es majin buu bueno a diferencia de gohan con el no hay una historia de fondo tan solo se me hace un personaje muy noble y divertido pero al mismo tiempo es de los mas poderosos del universo llegando a derrotar a goku el protagonista.</p>
												<span class="image object">
										               <img src="images/buu.png" alt="" />
									            </span>
											</div>
											<!-- Break -->
											<div class="col-4 col-12-medium">
												<h3>Goku</h3>
												<p>En tercer lugar tenemos a goku bueno con el ademas de el hecho de que es el protegonista es un personaje que me encanta debido a que por mas que se enfrente a enemigos mas fuertes que el este siempre encontrara la forma de superar sus limites y encontrar la forma de derrotarlo con tal de proteger a sus amigos, ademas de que tiene una de las mejores transformaciones que es el ultra instinto :3.</p>
												<span class="image object">
										            <img src="images/goku.png" alt="" />
									             </span>
											</div>
											<div class="col-4 col-12-medium">
												<h3>Vegeta</h3>
												<p>Este personaje esta empatado con goku aun que vegeta me cai mejor jejejej, bueno pasando a lo otro este personaje aunque al principio no me gustaba como han ido pasando las diferentes saga no a dejado de evolucionar paso de ser alguien orgulloso y despreocupado a alguien que es capaz de dejar su orgullo de lado con tal de defender a los que ama, otra cosa por la que vegeta se transformo en uno de mis personajes favoritos es que a diferencia de goku que a pasado por varios maestros que lo apoyan a ser mas fuerte vegeta se a hecho fuerte por el solo no a necesitado de maestros para poder rivalizar con goku.</p>
												<span class="image object">
										            <img src="images/vegeta.png" alt="" />
									             </span>
											</div>
										</div>
<h3>Lista de series de dragon ball</h3>
@foreach ($uni->DragonBallSeries() as $dragon)
<h3>Series de dragon ball: {{$dragon}}</h3>
@endforeach

@endsection