<h1>
    <body>
        <h1>DETALHES DA ATIVIDADE ID: {{$atividade->id}}</h1>
        <hr>
        <p>Título: {{$atividade->title}}</p>
        <p>Descrição: {{$atividade->description}}</p>
        <p>Agendado Para: {{$atividade->scheduledto}}</p>
        <br>
        <p>Criado em: {{$atividade->created_at}}</p>
        <p>Atualizado em: {{$atividade->updated_at}}</p>
        <br>
        <a href="/atividade/{{ $atividade->id }}/delete">Deletar</a>
        <a href="/atividade/{{ $atividade->id }}/edit">Editar</a>
    </body>
</h1>