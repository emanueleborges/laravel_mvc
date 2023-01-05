<x-layout title="Nova Série">

    <form action="{{ route('series.store')}}" method="POST">
        @csrf

        <div class="row mb-3">
            <div class="class col-6">
                <label for="nome" class="form-label"> Nome </label>
                <input type="text"
                       autofocus
                       id="nome"
                       name="nome"
                       class="form-control mb-4"
                       value="{{old('nome')}}">

            </div>

            <div class="class col-2">
                <label for="seasonsQtd" class="form-label"> Nº Seasons </label>
                <input type="text"
                       id="seasonsQtd"
                       name="seasonsQtd"
                       class="form-control mb-4"
                       value="{{old('seasonsQtd')}}">
            </div>

            <div class="class col-2">
                <label for="espisodesQtd" class="form-label"> Episodes </label>
                <input type="text"
                       id="espisodesQtd"
                       name="espisodesQtd"
                       class="form-control mb-4"
                       value="{{old('espisodesQtd')}}">
                       <button type='submit' class="btn btn-success"> Salvar </button>
                       <a href="/series" class="btn btn-primary "> Return </a>

            </div>


        </div>


    </form>

</x-layout>
