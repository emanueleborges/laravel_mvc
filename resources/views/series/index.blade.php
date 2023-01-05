<x-layout title="Lista de Series">
    <a href="{{ route('series.create') }}" class="btn btn-success mb-1"> Inserir </a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{$mensagemSucesso}}
    </div>
    @endisset


    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">

                <a href="{{ route('seasons.index', $serie->id) }}" class="btn btn-success mb-1">
                     {{$serie->nome}}
                </a>


                <span class="d-flex">
                    <a href="{{ route('series.edit', $serie->id ) }} " class="href btn btn-primary btn-sm "> Editar </a>
                    <form action="{{ route('series.destroy', $serie->id) }} " method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm ms-2">
                            Deletar
                        </button>
                    </form>
                </span>

            </li>
        @endforeach
    </ul>

    <script>
        const series = {{ Js::from($series)}}
        console.log(series)
    </script>


</x-layout>
