<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <style>
            .titulo {
                border: 1px;
                background-color: #c2c2c2;
                text-align: center;
                width: 100%;
                text-transform: uppercase;
                font-weight: bold;
                margin-bottom: 25px;
            }

            table {
                width: 100%;
            }

            table th {
                text-align: left;
            }
        </style>
    </head>

    <body>
        <div class="titulo">Lista de Tarefas</div>

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
    </body>

</html>