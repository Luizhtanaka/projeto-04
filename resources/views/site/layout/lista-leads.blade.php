<div class="row">                    
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Parceiros Cadastrados (Mês)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $quantidade_lead }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Link de Divulgação
                        </div>
                        <div>
                            <a class="btn btn-primary h5 mb-0 font-weight-bold text-white-800" href="{{ route('site.home') }}?resource={{$user->codigo}}">{{ route('site.home') }}?resource={{$user->codigo}}</a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Leads do Parceiro</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data Cadastro</th>
                    </tr>
                </thead>
                @foreach ($list_lead as $lead)
                <tbody>
                    <tr>
                        <td>{{ $lead->Nome }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->created_at }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>