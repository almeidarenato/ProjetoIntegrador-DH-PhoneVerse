@extends('admin.main')
@section('title','Dashboard')
@section('head-script')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src={{asset("js/jquery.counterup.min.js")}}></script>
<script>
jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });

    </script>

@endsection
@section('content')

@if(count($errors)>0)


<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}} </li>
        @endforeach
    </ul>

</div>
@endif


<div class="my-3 p-3 bg-white rounded box-shadow">

    <div class="row">
        <div class="column">
          <div class="card">
            <p><i class="fa fa-user megaicon"></i></p>
            <h3><span class="counter">{{$usuarios}}</span></h3>
            <p>Usuários Cadastrados</p>
          </div>
        </div>

        <div class="column">
          <div class="card" onclick="location.href='/admin/aparelho'">
            <p><i class='fas fa-mobile-alt megaicon'></i></p>
            <h3><span class='counter'>{{$aparelhos}}</span></h3>
            <p>Aparelhos Cadastrados</p>
          </div>
        </div>

        <div class="column">
          <div class="card" onclick="location.href='/admin/marcas'">
            <p><i class="fab fa-adn megaicon"></i></p>
            <h3><span class="counter">{{$marcas}}<span></h3>
            <p>Marcas Cadastradas</p>
          </div>
        </div>

        <div class="column">
          <div class="card" onclick="location.href='/admin/processador'">
            <p><i class="fa fa-microchip megaicon"></i></p>
            <h3><span class="counter">{{$processadores}}<span></h3>
            <p>Processadores Cadastrados</p>
          </div>
        </div>
      </div>
</div>
<div class="my-3 p-3 bg-white rounded box-shadow">
          <div class="row">
                <div class="column">
                  <div class="card" onclick="location.href='/admin/sisop'">
                    <p><i class="fab fa-android megaicon"></i></p>
                    <h3><span class="counter">{{$sistemaoperacional}}</span></h3>
                    <p>Sistemas Op. Cadastrados</p>
                  </div>
                </div>

                <div class="column">
                  <div class="card" onclick="location.href='/admin/memint'">
                    <p><i class="fa fa-folder megaicon" aria-hidden="true"></i></p>
                    <h3><span class='counter'>{{$memoriaInterna}}</span></h3>
                    <p>Memória Interna Cadastrada</p>
                  </div>
                </div>

                <div class="column">
                  <div class="card" onclick="location.href='/admin/memram'">
                    <p><i class="fas fa-memory megaicon"></i></p>
                    <h3><span class="counter">{{$memoriaRam}}<span></h3>
                    <p>Memória Ram Cadastrada</p>
                  </div>
                </div>

                <div class="column">
                  <div class="card" onclick="location.href='/admin/slotsim'">
                    <p><i class="fa fa-sim-card megaicon"></i></p>
                    <h3><span class="counter">{{$slotSim}}<span></h3>
                    <p>Slots Sim Cadastrados</p>
                  </div>
                </div>
              </div>

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>

@endsection
