
@include('livewire.header')
@if($errors->all())
        @foreach($errors-> all() as $erros)
            {{$erros}}
        @endforeach
    @endif
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4> Atualizacao de Monografias</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{Route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{Route('monografia.index')}}">ads</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{Route('monografia.update', $resultado->id)}}" method="post" id="step-form-horizontal" class="step-form-horizontal">
                            @csrf()
                            @method('PUT')
                            <div>  
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="2"class="text-label">estudante</label>
                                                <select name="students_id" id="2" class="form-control">
                                                    <option selected>{{$resultado->students_id}}</option>
                                                    @foreach($estudante as $estudante)
                                                      <option value="{{$estudante->id}}">{{$estudante->name}}</option>
                                                    @endforeach
                            
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="1" class="text-labe">Orientador</label>
                                                <select name="advisors_id" id="1" class="form-control">
                                                    <option selected>{{$resultado->advisors_id}}</option>
                                                    @foreach($ad as $ad)
                                                      <option value="{{$ad->id}}">{{$ad->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name"class="text-label">Data da submissão</label>
                                                <input type="date" name="submission_date" id= "name" class="form-control" value="{{$resultado->submission_date}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name1"class="text-label">Arquivo</label>
                                                <input type="file" name="file" id= "name1" class="form-control" value="{{$resultado->file}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name1q"class="text-label">Título</label>
                                                <input type="text" name="title" id= "name1q" class="form-control" value="{{$resultado->title}}" required>
                                            </div>
                                        </div>   
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name1q"class="text-label">Nota</label>
                                                <input type="text" name="title" id= "name1q" class="form-control" value="{{$resultado->note}}" required>
                                            </div>
                                        </div>   
                                    </div>
                              
                            </div>
                            <button class="btn btn-md btn-primary" type="submit">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('livewire.footer')