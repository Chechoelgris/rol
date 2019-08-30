@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center ">
        <div class="col-md-3">
            <div class="border border-success rounded text-light bg-dark-t m-4">
                    <div class="card-header ">
                    <div class="row  justify-content-between container">

                            <div class="">Perfil</div>
                            <div><a href="#" class="btn btn-outline-success">Detalles</a></div>
                    </div>
                    

                </div>

                <hr class="bg-success">
                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-7">
                <div class="border border-success rounded text-light bg-dark-t m-4">
                        <div class="card-header ">
                            <div class="row  justify-content-between container">

                                    <div class="">Personajes</div>
                                    <div><a href="#" class="btn btn-outline-success">Detalles</a></div>
                            </div>
                            

                        </div>
                        <hr class="bg-success">
                        <div class="card-body ">
                            You are logged in!
                            
                            You are logged in!
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection
