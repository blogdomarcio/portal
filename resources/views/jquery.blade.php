@include('layouts.admin.top')



{!!Form::open(['url'=>'admin/usuarios/post','method'=>'POST','id'=>'frm-insert'])!!}



<div class="col m12 s12">
    <label for="name" id="name">Nome</label>
    <input type="text" name="name" id="name" class="form-control required " >
</div>

<div class="col m12 s12">
    <label for="email" id="Email">Email</label>
    <input type="email" name="email" id="email" class="form-control">
</div>

<div class="col m12 s12">
    <label for="password" id="password">Senha</label>
    <input type="password" name="password" id="password" class="form-control required" >
</div>


<div class="row">
    <div class="col s6">
        <input type="submit" value="Adicionar" class="btn btn-primary modal-action modal-close">
    </div>
    <div class="col s6">
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
        </div>
    </div>
</div>

{!!Form::close()!!}



<div class="table-responsive">



</div>


















@include('layouts.admin.scripts')