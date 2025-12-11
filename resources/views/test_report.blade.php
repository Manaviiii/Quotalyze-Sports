@extends('layouts.app')

@section('title', 'Reportar Problema')

{{-- Importar solo el CSS de esta página --}}
@vite(['resources/css/report.css'])

@section('content')

<div class="report-container">

    <h1 class="report-title">⚠️ Reportar un Problema</h1>

    <div class="report-card">

        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/reportar">
            @csrf

            <label>Tu nombre (opcional)</label>
            <input type="text" name="usuario">

            <label>Tipo de reporte</label>
            <select name="tipo">
                <option value="general">General</option>
                <option value="partido">Partido</option>
                <option value="cuota">Cuota incorrecta</option>
                <option value="error">Error técnico</option>
            </select>

            <label>ID del partido (opcional)</label>
            <input type="number" name="match_id">

            <label>Descripción del problema</label>
            <textarea name="mensaje" required></textarea>

            <button class="report-submit">Enviar Reporte</button>

        </form>

    </div>

</div>

@endsection
