<!-- resources/views/test_feedback.blade.php -->
<form method="POST" action="/feedback">
    @csrf
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="text" name="mensaje" placeholder="Mensaje">
    <button type="submit">Enviar</button>
</form>
