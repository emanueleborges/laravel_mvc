<x-layout title="Cadastro de Série">
    <x-series.form :action="route('series.store')" :nome="old('nome')" :update="false"/>
</x-layout>
