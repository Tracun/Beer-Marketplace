@extends("templates.template")

@section('title', "Drink experience!")

@section('content')
<link href="{{asset('css/error.css')}}" rel="stylesheet">
            <!-- error-->
            <div class="jumbotron">
                <h1 class="display-1"><i class="fa  fa-spin fa-cog fa-3x"></i></h1>
                <h1 class="display-3">{{$error}}</h1>
          
            </div>
            <!-- end error-->
@endsection
