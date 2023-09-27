<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Parceiros Comercias Cadastrados</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Leads Capturado</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            @foreach ($list_user as $user)
            <tbody>
                <tr>
                    <td>{{ $user->codigo }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>0</td>
                    <td><a href="#">Editar</a></td>
                    <td><a href="#">Excluir</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
</div>