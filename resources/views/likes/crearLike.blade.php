<form class="form-horizontal" action="{{ route('like.create', $chusqer->id)}}" method="post">
    {{ csrf_field() }}

    <label for="like"></label>
    <div>
        <button type="submit" class="button success">LIKE</button>
    </div>

</form>


