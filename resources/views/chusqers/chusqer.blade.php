<div class="card @isset($user) @if($user->id == $chusqer->user_id) mine @endif @endisset">
    <div class="card-divider">
        <p>Añadido por <a href="/{{ $chusqer->user->slug }}">{{ $chusqer->user->name }}</a> - <a
                    href="{{ url('/') }}/chusqers/{{ $chusqer['id'] }}">Leer más</a></p>
    </div>
    <p class="chusqer-content">
        <img src="{{ $chusqer->image }}" alt="">{{ $chusqer->content }}
    </p>
    <p class="chusqer-hashtags text-right">
        @foreach($chusqer->hashtags as $hashtag)
            <a href="/hashtag/{{ $hashtag->slug }}"><span class="label label-primary">{{ $hashtag->slug }}</span></a>
        @endforeach
    </p>
    <div class="card-section">

        @include('likes.crearLike')
        @if( session('exito') )
            <div class="callout success">
                <h5>{{ session('exito') }}</h5>
            </div>
        @elseif( session('error'))
            <div class="callout alert">
                <h5>{{ session('error') }}</h5>
            </div>
        @endif

       <a href="/{{$chusqer->id}}/likes">{{$chusqer->likes->count() == 0 ? '' : "Likes:" . $chusqer->likes->count()}}</a>

    @if(Auth::user() && Auth::user()->amI())
            @can('update', $chusqer)
                <a href="{{ Route('chusqers.edit', $chusqer) }}" class="button warning">Editar</a>
            @endcan
            @can('delete', $chusqer)
                <form action="{{ Route('chusqers.delete', $chusqer->id) }}" method="POST" id="chusqer-actions-buttons">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="button alert">Borra</button>
                </form>
            @endcan
        @endif
    </div>
</div>