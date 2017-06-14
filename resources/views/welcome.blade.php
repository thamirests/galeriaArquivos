@extends('oficial')

@section('conteudo')

  <div class="container">

    <div class="row">

      <div class="input-field col s10">
        <!-- <label for="pesquisa">Pesquisa: </label> -->
        <input type="text" name="" value="" placeholder="Digite sua pesquisa">
      </div>
      <div class="input-field col s2">
          <a href="/pesquisando" class="btn-floating waves-effect waves-light" id="pesquisa" type="submits"><i class="large material-icons">search</i></a>
      </div>
    </div>

      <div class="row" >
      @foreach($arquivos as $a)
      <div id="muda">
        <div class="col s12 m4 l2">
            <div class="card">
                <div class="card-image">
                  <a href="{{$a->link}}" target="_blank"><img src="/image/pdf2.png" title="{{$a->nome}}"></a>
                </div>
                <div class="card-content">
                  <p><a href="{{$a->link}}" target="_blank">{{$a->nome}}</a></p>
                </div>
            </div>
        </div>
      </div>
    @endforeach
  </div>
  </div>
  <script type="text/javascript">
    $(function(){
      $('#pesquisa').on('click', function(){
        $valor = $(this).val();
        $.ajax({
          type:'get',
          url:'{{URL::to('/pesquisando')}}',
          data: {
            'pesquisa':$valor
          },
          sucess: function(data){
            $('#muda').html(data);
            console.log('teste');
          }
        });
      })
    });
  </script>
@endsection
