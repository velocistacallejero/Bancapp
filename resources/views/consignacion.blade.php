@extends('layouts.contenido')
@section('titulo','Consignación')
@section('content')
<style>

        /* Estilos para el modal */
        .modal {
            display: none; /* Oculto por defecto */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border-radius: 8px;
            width: 30%;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .modal-body {
            padding: 20px;
        }

        .icono-exito {
            font-size: 48px;
            color: green;
            margin-bottom: 20px;
        }

        .modal h3 {
            margin-bottom: 10px;
            color: #4CAF50;
        }

        .modal p {
            color: #333;
        }

        .mensaje-advertencia {
            margin-top: 10px;
            font-size: 1rem;
            color: #e74c3c;
        }

        .cerrar-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 15px;
        }

        .cerrar-btn:hover {
            background-color: #c0392b;
        }
        .cerrar-icono {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            font-weight: bold;
            color: #e74c3c;
            cursor: pointer;
            background: none;
            border: none;
        }

        .cerrar-icono:hover {
            color: #c0392b;
        }
  
</style>
        <!-- Sección de retiro -->
        <div class="main-content">
            <!-- <div class="welcome">
                <h1>BIENVENIDO JUAN</h1>
            </div> -->
            <div class="retiro-box">
                <h2>Consignaciones</h2>
                <form onsubmit="return false;">

                <div class="text-dark">
                    <div class="d-flex align-items-baseline">
                        <label class="mr-2 mb-0">Número de Cuenta:</label>
                        <input type="number" id="cuenta" name="cuenta" class="mb-0"required>
                    </div>
                     <div class="d-flex align-items-baseline mt-2">
                        <label class="mr-2 mb-0">Monto a consignar:</label>
                        <input type="number" id="monto" name="monto" class="mb-0" required>
                     </div>
                 </div>
             <div class="buttons">
                        <button type="submit" class="btn retirar-btn" onclick="validarFormulario()" >consignar</button>
                    </div>
                </form>
                <p class="advertencia">Advertencia: Montos superiores a 3.000.000 requieren autorización adicional.</p>
            </div>
        </div>
    </div>
       <!-- Modal -->
       <div id="modalExito" class="modal">
        <div class="modal-content">
            <div class="modal-body">
                <div id="valido" class="icono-exito">
                    ✔️
                </div>
                <div id="error" class="icono-exito">
                    ❗
                </div>
                <h3 id="exitoso">¡Retiro Exitoso!</h3>
                <h3 id="fallido">¡Retiro fallido!</h3>
                <p id="mensajeExito">Tu retiro se realizó correctamente.</p>
                <p id="mensajeAdvertencia" class="mensaje-advertencia" style="display: none;">Se requiere autorización adicional.</p>
                <button class="cerrar-btn" onclick="cerrarModal()">Cerrar</button>
            </div>
        </div>
    </div>


    <script>
        // Validar que los campos estén completos antes de abrir el modal
        function validarFormulario() {
            const cuenta = document.getElementById('cuenta').value;
            const monto = document.getElementById('monto').value;

            if (cuenta === '' || monto === '') {
              
            } else {
                if (parseInt(monto) > 3000000) {
                    document.getElementById('error').style.display = 'block';
                    document.getElementById('fallido').style.display = 'block';
                    document.getElementById('mensajeAdvertencia').style.display = 'block';
                    document.getElementById('mensajeExito').style.display = 'none';
                    document.getElementById('exitoso').style.display = 'none';
                    document.getElementById('valido').style.display = 'none';

                } else {
                    document.getElementById('mensajeExito').style.display = 'block';
                    document.getElementById('exitoso').style.display = 'block';
                    document.getElementById('valido').style.display = 'block';
                    document.getElementById('mensajeAdvertencia').style.display = 'none';
                    document.getElementById('fallido').style.display = 'none';
                    document.getElementById('error').style.display = 'none';
                }
                abrirModal();
            }
        }

        // Función para abrir el modal
        function abrirModal() {
            const modal = document.getElementById('modalExito');
            modal.style.display = 'block';
        }

        // Función para cerrar el modal
        function cerrarModal() {
            const modal = document.getElementById('modalExito');
            modal.style.display = 'none';
        }
    </script>
 @endsection
