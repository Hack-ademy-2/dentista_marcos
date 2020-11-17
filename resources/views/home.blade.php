@extends('layouts.app')
@section('content')

{{-- Hero --}}
@include('modules.hero')

{{-- Pricing --}}
@include('modules.pricing')

{{-- Servicios --}}
@include('modules.servicios')

<br>

{{-- Mapa --}} {{-- Formulario --}}
@include('modules.mapa')
@include('modules.formulario')

<!-- FOOTER -->
@include('modules.footer')


@endsection

