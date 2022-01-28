@extends('blog.template.layout')
@section('titulo')
<h1>Presentacion</h1>
@endsection
@section('contenido')
<!-- Content -->
<h2 id="content">Videojuegos</h2>
										<p>Bueno en este apartado hablare un poco sobre los videojuegos que e probado recientemente asi como tambien pondre mis videojuegos favoritos bueno espero que disfruten.</p>
										<div class="row">
											<div class="col-6 col-12-small">
											<h2 id="content">Juegos probados recientemente</h2>
												<h3>Halo infiniti</h3>
												<p>Bueno para empezar tenemos a halo infiniti uno de los titulos mas esperados por los fanaticos de xbox recientemente lo puede probar y como fan de la franqucia solo puedo decir que me encanto las nuevas mecanicas le agregan mas complejidad al juego, el poner explorar te da una libertad que no se sentia en anteriores entregar, el multi ni hablar no se siente ni muy rapido como un cod pero tampoco tan lento como halo 3 el unico punto malo que le veo al juego seria que el final de la campaña no se siente como un final mas bien se siente como un continuara.</p>
												<span class="image object">
										            <img src="images/halo.png" alt="" />
									             </span>
											</div>
											<div class="col-6 col-12-small">
												<h3>mass effect legendary edition</h3>
												<p>Otro juego que e tuve la oportunidad de probar gracias gamepass ultimate no hay mucho que decir son los mass effect de toda la vida solo que porfin arreglaron algunos errores como que el juego no se guardaba automaticamente o que los tanques eran de papeles ya que un simple npc le podia bajar toda la vida de un disparo pero bueno dejando eso de lado es una buena opcion si estas interesado en la saga y no quieres sufrir de las malas mecanicas de la version de 360.</p>
												<span class="image object">
										            <img src="images/mass.png" alt="" />
									             </span>
											</div>
											<!-- Break -->
											<div class="col-4 col-12-medium">
												<h3>Stardew valley</h3>
												<p>Bueno de este juego lo unico que puedo comentar es que es una buena opcion por si estas un poco cansado de los juegos muy frenitos o de los multijugadores esta opcion es la mejor stardew valley es un juego para poder crear tu granja interactuar con diferentes npcs y encontrar los secretos de este pueblo.</p>
												<span class="image object">
										            <img src="images/stardew.png" alt="" />
									             </span>
											</div>
										</div>
										<h2 id="content">Lista de mis juegos favoritos</h2>
@foreach ($uni->JuegosFavoritos() as $favoritos)
<h3>Juegos favoritos: {{$favoritos}}</h3>
@endforeach

<h2 id="content">Lista de consolas que tengo </h2>
@foreach ($uni->Consolas() as $consola)
<h3>Consolas que tengo: {{$consola}}</h3>
@endforeach
@endsection