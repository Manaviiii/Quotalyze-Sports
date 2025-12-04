<!DOCTYPE html>
<html>
<head>
    <title>Probar Reportes</title>

    <style>
        #matchError, #mensajeError {
            color: red;
            display: none;
            margin-top: 5px;
        }

        .input-error {
            border: 2px solid red !important;
        }
    </style>
</head>
<body>
    <h1>Enviar un reporte</h1>

    <form id="reportForm" method="POST" action="/reportar">
        @csrf

        <label>Nombre (opcional):</label><br>
        <input type="text" name="usuario"><br><br>

        <label>Tipo:</label><br>
        <select name="tipo">
            <option value="general">General</option>
            <option value="partido">Partido</option>
            <option value="cuota">Cuota</option>
            <option value="error">Error técnico</option>
        </select><br><br>

        <label>ID del partido (opcional):</label><br>
        <input type="number" name="match_id" id="match_id">
        <p id="matchError">Error: el ID del partido no existe.</p>
        <br><br>

        <label>Mensaje:</label><br>
        <textarea name="mensaje" id="mensaje" required></textarea>
        <p id="mensajeError">Error: el mensaje no puede estar vacío.</p>
        <br><br>

        <button type="submit">Enviar Reporte</button>
    </form>


<script>
document.getElementById("reportForm").addEventListener("submit", async function(e) {
    e.preventDefault();

    const matchInput = document.getElementById("match_id");
    const errorMatch = document.getElementById("matchError");

    const mensajeInput = document.getElementById("mensaje");
    const errorMensaje = document.getElementById("mensajeError");

    // Resetear estilos
    matchInput.classList.remove("input-error");
    mensajeInput.classList.remove("input-error");
    errorMatch.style.display = "none";
    errorMensaje.style.display = "none";

    // VALIDACIÓN LOCAL: mensaje vacío
    if (mensajeInput.value.trim() === "") {
        mensajeInput.classList.add("input-error");
        errorMensaje.style.display = "block";
        return; 
    }

    const formData = new FormData(this);

    try {
        const response = await fetch("/reportar", {
            method: "POST",
            headers: {
                "Accept": "application/json"
            },
            body: formData
        });

        const result = await response.json();

        if (!response.ok) {
            if (result.errors) {
                if (result.errors.match_id) {
                    matchInput.classList.add("input-error");
                    errorMatch.innerText = result.errors.match_id[0];
                    errorMatch.style.display = "block";
                }

                if (result.errors.mensaje) {
                    mensajeInput.classList.add("input-error");
                    errorMensaje.innerText = result.errors.mensaje[0];
                    errorMensaje.style.display = "block";
                }
            }
            return;
        }

        alert("Reporte enviado correctamente 🎉");
        this.reset();

    } catch (error) {
        console.error("Error:", error);
    }
});
</script>

</body>
</html>
