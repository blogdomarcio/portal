
@if(count($registros)>0)

    <table>
        <thead>
        <tr >
            <td>Id</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Ação</td>
        </tr>
        </thead>

        <tbody>
        @foreach($registros as $registro => $u)
            <tr class="id{{$u->id}}">

                <td> {{ $u->id }}</td>
                <td> {{ $u->name }}</td>
                <td> {{ $u->email }}</td>
                <td>
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <!-- <a class="btn orange btn-edit" href="#">Editar</a> -->
                    <!-- <a class="btn blue" href="#">Papel</a> -->
                <!-- <a class="btn red btn-dell" href="{{ url('deleteajax', $u->id) }}">Deletar</a> -->

                    <button value="{{$u->id}}" href="#popup-update" class="btn red btn-edit">Editar</button>

                    <button value="{{$u->id}}" class="btn red btn-papel">Papel </button>

                    <button value="{{$u->id}}" class="btn red btn-dell">Deletar</button>



                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

@else

    <h1> Nenhum cadastrado </h1>

@endif
