@extends('layouts.app')

@section('title', 'Enviar Feedback')

{{-- Importar solo este CSS --}}
@vite(['resources/css/feedback.css'])

@section('content')

<div class="feedback-container">

    <h1 class="feedback-title">📝 Enviar Feedback</h1>

    <div class="feedback-card">

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

        <form method="POST" action="/feedback">
            @csrf

            <label>Tu nombre (opcional)</label>
            <input type="text" name="usuario">

            <label>Categoría</label>
            <select name="categoria">
                <option value="general">General</option>
                <option value="ui">Interfaz / Diseño</option>
                <option value="estadisticas">Estadísticas</option>
                <option value="cuotas">Cuotas</option>
                <option value="rendimiento">Rendimiento</option>
            </select>

            <label>Mensaje</label>
            <textarea name="mensaje" required rows="4"></textarea>

            <button class="feedback-submit">Enviar Feedback</button>

        </form>

    </div>

</div>

@endsection
