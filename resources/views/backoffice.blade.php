<h1>backoffice</h1>

<h2>créer un article</h2>
<form action="/backoffice" method="POST">
    @csrf
    <input type="text" name="titre" id="" placeholder="titre">
    <input type="text" name="texte" id="" placeholder="texte">
    <button type="submit">envoyer</button>
</form>
