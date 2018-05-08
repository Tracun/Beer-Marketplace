@extends("templates.template")

@section('title', "Drink experience!")

@section('content')
<link href="{{asset('css/error.css')}}" rel="stylesheet">
            <!-- error-->
            <div class="jumbotron">
                <h1 class="display-1"><i class="fa  fa-spin fa-cog fa-3x"></i></h1>
                <h1 class="display-3">404 PAGE NOT FOUND</h1>
                <p class="lower-case"> Página web não encontrada por favor tente atualizar</p>
                <p class="lower-case">Talvez a página esteja em manutenção</p>

            </div>
            <!-- end error-->
@endsection
