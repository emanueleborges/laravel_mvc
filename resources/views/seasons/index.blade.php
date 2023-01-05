<x-layout title="Lista de Seasons de {!! $series->nome !!}">

    <ul class="list-group">
        @foreach ($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Temporada {{$season->number}}
                <span class="bdage">
                   {{ $season->episodes->count() }} Episodes
                </span>
            </li>

        @endforeach
    </ul>

</x-layout>
