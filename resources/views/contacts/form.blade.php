<form action="/sendMsg" method="POST">
    @csrf
<div>
    <input type="email" name="email" placeholder="votre adresse mail">
    <textarea name="message" id="" cols="30" rows="10" placeholder="votre message"></textarea>
    <select name="sujets_id" id="">
        <option value=""></option>
        @foreach ($sujets as $sujet)
        <option value="{{$sujet->id}}">{{$sujet->sujets}}</option>
        @endforeach

    </select>
    <button type="submit">envoyer</button>
</div>
</form>
