 @extends('layouts.admin')

@section('content')

 <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Escrita Contabilidade</h5>
                <ol class="breadcrumb">
                  <li><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                  </li>
                  <li class="active">Usuarios</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <p class="caption">Cadastro de Usuarios para acesso Administrativo.</p>
          <div class="divider"></div>

          <!--Modal With Fixed Footer-->
          <div class="divider"></div>
          <div id="modal-fixed-footer">

            <div class="row">

              <div class="col s12 m8 l9">
            <p></p>
            <p><a class="waves-effect waves-light btn modal-trigger  light-blue" href="#modal2">Adicionar Novo</a>
            </p>




                <div class="container">

          <div class="table-responsive">



          </div>


        </div>


          </div>
          </div>
          </div>

          <div class="container">


        @include('admin.usuarios.cadastroajax')
        @include('admin.usuarios.updateajax')

          </div>


        </div>
        <!--end container-->

      </section>




@endsection