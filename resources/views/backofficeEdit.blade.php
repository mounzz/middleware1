<h1>edit lol</h1>

<form action="/backofficeEdit/{{ $article->id }}/update" method="POST">
    @csrf
    @method('PUT')
<div>
    <input type="text" name="titre" value="{{ $article->titre }}">
    <input type="text" name="texte" value="{{ $article->texte }}">
    <button type="submit">update</button>
</div>
</form>
