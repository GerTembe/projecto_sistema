@include('livewire.header')

   
<div class="content-body">
    <div class="container-fluid">
        <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Gestão de monografias</h4>
                    
                </div>
           
           
                
                <div class="row">
                    
                    <a class=" btn-sm btn-primary" href="{{Route('monografia.enviar')}}">Adicionar</a>
                
                    <a class=" btn-sm btn-primary" href="{{Route('gerar.relatorio')}}">Relatorio</a>

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
                                    <th scope="col">Estudante</th>
                                    <th scope="col">Orientador</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Data de submissão</th>
                                    <th scope="col">Arquivo</th>
                                    <th scope="col">Nota</th>
                                    <th scope="col">Açao</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($monografia1 as $monografia)
                                    <tr>
                                        <th>{{$monografia-> id}}</th>
                                        <th>{{$monografia-> Students->name}}</th>
                                        <th>{{$monografia-> Advisors->name}}</th>
                                        <th>{{$monografia-> title}}</th>
                                        <th>{{$monografia-> submission_date}}</th>
                                        <th>{{$monografia-> file}}</th>
                                        <th>{{$monografia-> note}}</th>
                                        <th> 
                                            <a class="btn btn-sm btn-info"href="{{Route('monografia.editar', $monografia -> id)}}">Editar</a>
                                            <a class="btn btn-sm btn-danger" href="{{Route('monografia.delete', $monografia -> id)}}">Apagar</a>
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




        
