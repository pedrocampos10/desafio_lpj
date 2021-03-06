<div class="table-responsive-sm">
    <table class="table table-striped" id="produtos-table">
        <thead>
            <th>Nome</th>
        <th>Valor</th>
        <th>Descricao</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($produtos as $produtos)
            <tr>
                <td>{{ $produtos->nome }}</td>
            <td>{{ $produtos->valor }}</td>
            <td>{{ $produtos->descricao }}</td>
                <td>
                    {!! Form::open(['route' => ['produtos.destroy', $produtos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('produtos.show', [$produtos->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('produtos.edit', [$produtos->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>