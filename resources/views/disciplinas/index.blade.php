<ul>
	@foreach ($disciplinas as $disciplina)
		<li>
<a href="/disciplinas/{{$disciplina->id}}"> 
			{{$disciplina->titulo}}
		</a>
		</li>
		<li>
			<br>
	<a href="/disciplnas/{{$disciplina->id}}/edit">Editar</a>
</li>
	@endforeach

</ul>
</ul>