<form action='{{ $action }}' method="POST">
    @csrf
    @if($update)
        @method('put')
    @endif
    <div class="mb-3">
        <label class="form-label"> Nome </label>
        <input type="text"
               id="nome"
               name="nome"
               class="form-control mt-4"
               @isset($nome)value="{{ $nome }}"@endisset>
        <button type='submit' class="btn btn-success"> Salvar </button>
        <a href="/series" class="btn btn-primary "> Return </a>
    </div>
</form>
