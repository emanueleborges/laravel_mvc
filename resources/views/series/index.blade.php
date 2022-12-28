<x-layout title="Series">
    <a href="/series/create" class="btn btn-success mb-1"> Add </a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item"> {{$serie->nome}} </li>
        @endforeach
    </ul>

    <script>
        const series = {{ Js::from ($series)}};
    </script>
</x-layout>
