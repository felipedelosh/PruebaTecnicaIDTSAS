<h1>Ejercicio 1: MVC en PHP</h1>
<p>Imagina que estás construyendo un sistema de registro de usuarios en PHP utilizando el patrón MVC. A continuación, se describen las responsabilidades de cada componente:</p>
<h3>Modelo (UsuarioModelo):</h3>
<p>Se encarga de interactuar con la base de datos para realizar operaciones relacionadas con los usuarios (crear, leer, actualizar, eliminar). Contiene los métodos crearUsuario($datos), obtenerUsuario($id), actualizarUsuario($id, $datos), eliminarUsuario($id), entre otros.</p>
<h3>Vista (UsuarioVista):</h3>
<p>Se encarga de mostrar la interfaz de usuario para el registro de usuarios. Contiene un formulario con campos como nombre, correo electrónico, contraseña, etc. Al enviar el formulario, llama al controlador para procesar los datos.</p>
<h3>Controlador (UsuarioControlador):</h3>
<p>Recibe las solicitudes del usuario provenientes de la vista. Valida y procesa los datos enviados por la vista Interactúa con el modelo para realizar las operaciones necesarias en la base de datos. Retorna las respuestas adecuadas a la vista para mostrar mensajes de éxito o error.</p>
<p>Tu tarea consiste en implementar las clases UsuarioModelo, UsuarioVista y UsuarioControlador utilizando el patrón MVC. Además, debes crear una página que muestre el formulario de registro y que, al enviarlo, utilice el controlador para almacenar los datos del usuario en la base de datos.</p>
<hr>