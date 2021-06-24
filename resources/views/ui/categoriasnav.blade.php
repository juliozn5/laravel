@foreach ($categorias as $categoria )
   <a
   class="text-white text-sm uppercase font-bold p-3"
   href="{{route('categorias.show', ['categoria' => $categoria->id ])}}"
   >
    {{$categoria->nombre}}
   </a>
@endforeach
