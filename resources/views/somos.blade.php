@extends('layouts.app')
@section('content')




{{-- Album --}}
@include('modules.equipo')


<br>

{{-- Pricing --}}
@include('modules.pricing')

{{-- Mapa --}} {{-- Formulario --}}
@include('modules.mapa')
@include('modules.formulario')

<!-- FOOTER -->
@include('modules.footer')


@endsection

