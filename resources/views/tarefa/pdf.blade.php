<h2>Lista de Tarefas</h2>

<table>
    <thead>
        <th>ID</th>
        <th>Tarefa</th>
        <th>Data Limite Conclusão</th>
    </thead>
    <tbody>
        @foreach($tarefas as $key => $tarefa)
            <tr>
                <td>{{ $tarefa->id }}</td>
                <td>{{ $tarefa->tarefa }}</td>
                <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>