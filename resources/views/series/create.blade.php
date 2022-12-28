<x-layout title="Nova Série">
    <form action='/series/salvar' method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label"> Nome </label>
            <input type='text' id='nome' name='nome' class="form-control mb-3">
            <button type='submit' class="btn btn-success"> Salvar </button>
            <a href="/series" class="btn btn-primary"> Return </a>
        </div>
    </form>
</x-layout>
