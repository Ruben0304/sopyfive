<ul class="list cat-list">
    @foreach($comunities as $c)
        <li>

            <a href="{{route('comunidad',['id' =>$c->id])}}" class="d-flex">
                <p>{{$c->title}}</p>
                <p>({{$c->articles->count()}})</p>
            </a>
        </li>
    @endforeach
</ul>
