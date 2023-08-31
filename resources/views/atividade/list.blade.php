<h1>
    <body>

        <!-- EXIBE MENSAGENS DE SUCESSO -->
        @if(\Session::has('success'))
            <div class="container">
                <div class="alert alert-success">
                    {{\Session::get('success')}}
                </div>
            </div>
        @endif

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

