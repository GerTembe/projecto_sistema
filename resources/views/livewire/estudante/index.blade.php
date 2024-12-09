@include('livewire.header');

   
<div class="content-body">
    <div class="container-fluid">
        <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Informações dos estudantes</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                
                    <li class="breadcrumb-item active"><a href="{{Route('estudante.enviar')}}">Adicionar</a></li>
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
                                    <th scope="col">Curso</th>
                                    <th scope="col">Data da conclusão</th>
                                    <th scope="col">Contacto</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Açao</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($estudante1 as $estudante)
                                    <tr>
                                        <th>{{$estudante-> id}}</th>
                                        <th>{{$estudante-> name}}</th>
                                        <th>{{$estudante-> Curses->name}}</th>
                                        <th>{{$estudante-> conclusion_date}}</th>
                                        <th>{{$estudante-> contact}}</th>
                                        <th>{{$estudante-> email}}</th>
                                        <th> 
                                            <a class="btn btn-sm btn-info"href="{{Route('estudante.editar', $estudante -> id)}}">Editar</a>
                                            <a class="btn btn-sm btn-danger" href="{{Route('estudante.delete', $estudante -> id)}}">Apagar</a>
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



        
