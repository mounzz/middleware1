
<h1>articles</h1>
    @foreach ($articles as $article )


<div class="flex">
   titre: {{$article -> titre}}
   description: {{$article -> texte}}
   par: {{$article -> user -> name}}
   <a href="/backofficeEdit/{{ $article->id }}">
    <button type="submit">edit</button>
   </a>

   <form action="/articles/{{ $article->id }}/delete" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">supprimer</button>
   </form>
</div>
@endforeach
