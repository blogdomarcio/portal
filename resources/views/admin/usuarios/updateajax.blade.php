<!-- Modal Structure -->
<div id="popup-update" class="modal">
    <div class="modal-content">
        <div class="panel-body">

            {!!Form::open(['url'=>'admin/usuarios/updateajax','method'=>'POST','id'=>'frm-update'])!!}

            {!! Form::hidden('id',null,['id'=>'id']) !!}

            <div class="row">

                <div class="col s4 m12 col-sm-3">
                    <div class="form-group">
                        {!! Form::label('name','Nome') !!}
                        {!! Form::text('name', null,['id'=>'name','class'=>'form-control'])!!}
                    </div>
                </div>

                <div class="col s4 m12 col-sm-3">
                    <div class="form-group">
                        {!! Form::label('email','E-Mail') !!}
                        {!! Form::email('email', null,['id'=>'email','class'=>'form-control'])!!}
                    </div>
                </div>

                <div class="col s4 m12 col-sm-4">
                    <div class="form-group">
                        {!! Form::label('password','Senha') !!}
                        {!! Form::password('password', null,['id'=>'password','class'=>'form-control'])!!}
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col s6">
                    <!-- <hr> -->
                    {!! Form::submit('Atualizar',['class'=>'btn btn-primary modal-action modal-close']) !!}
                </div>

                <div class="col s6">
                    <div class="modal-footer">
                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    {!!Form::close()!!}
</div>

