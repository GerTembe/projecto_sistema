@include('livewire.header');

   
<div class="content-body">
    <div class="container-fluid">
        <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Informações dos cursos</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                
                    <li class="breadcrumb-item active"><a href="{{Route('curso.enviar')}}">Adicionar</a></li>
                </ol>
            </div>
        </div>
        <div class="col-lg-12">
        <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        
                            <table class="table table-bg datatable">
                            <thead class="thead-primary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Açao</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($curso1 as $cursos)
                                    <tr>
                                        <th>{{$cursos-> id}}</th>
                                        <th>{{$cursos-> name}}</th>
                                        <th>
                                            <a class="btn btn-sm btn-info"href="{{Route('curso.editar', $cursos -> id)}}">Editar</a>
                                            <a class="btn btn-sm btn-danger" href="{{Route('curso.delete', $cursos -> id)}}">Apagar</a>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                            <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                     $('.table').DataTable();
                                });
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

       
@include('livewire.footer');
