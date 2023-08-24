<h1>
    <body>
        <ul>
            @foreach($atividades as $umaAtividade)
            <li>
                <a href="/atividade/{{$umaAtividade->id}}">
                    Título: {{$umaAtividade->title}}
                </a>
            </li>
            @endforeach
        </ul>
    </body>
</h1>

