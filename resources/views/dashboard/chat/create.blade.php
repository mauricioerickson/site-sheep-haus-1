
<style>
  .box-mensagem {
    display: flex;
    width: 100%;
  }
  .box-mensagem ul {
    flex: 1;
    max-width: 150px;
  }
  #chat {
    flex: 1;
    display: flex;
    flex-direction: column;
  }
  #mensagens {
    display: flex;
    flex-direction: column;
    height: 100px;
    overflow: scroll;
  }
  #mensagens .from {
    background-color: red;
    display: flex;
    align-items: center;
    justify-content: flex-end;
  }
  
  #mensagens .to {
    background-color: #eee;
  }

  #chat .editor {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  #chat input {
    width: 100%;
  }
      
</style>

<section class="box-mensagem">
  <ul class="">
    @foreach($mensages as $key => $mensage)
      @php 
        if($mensage->to == $auth_login) {
          $item = $mensage->getUserFrom;
        } else {
          $item = $mensage->getUserTo;
        }
      @endphp
      <li class="mensagens-item">
        <a href="{{route('email.create', [$item->id, $mensage->property_id])}}">
          <header class="item-titulo">
            <h3 class="titulo-nome">{{ $item->name }}</h3>
          </header>
          <p class="texto">{{ $mensage->last_mensagem }}</p>
          <footer class="item-rodape">
            <p class="item-data">{{ date_format($mensage->updated_at, 'd/m/Y') }}</p>
            <p class="item-hora">{{ date_format($mensage->updated_at, 'H:i') }}</p>
          </footer>
        </a>
      </li>
    @endforeach
  </ul>
  <div id="chat">
    <div id="mensagens">
      @foreach($subjects as $key => $value)
        @if($auth_login == $value->from)
          <div class="from">
            {{ $value->mensagem }}
          </div>
        @else 
          <div class="to">
            {{ $value->mensagem }}
          </div>
        @endif
      @endforeach
    </div>
    <div class="editor">
      {{ Form::open(array('route' => ['email.store', $recipient, $property], 'method' => 'post')) }}
        {{ Form::text('mensagem', null, array('class' => 'input-padrao','placeholder' => 'Mensagem')) }}
        {{ Form::submit('Enviar') }}
      {{ Form::close() }}
    </div>
  </div>
</section>

<script>
var element = document.getElementById("mensagens");
element.scrollTop = element.scrollHeight;
</script>