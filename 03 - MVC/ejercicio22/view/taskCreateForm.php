<div id="taskCreateForm">
  <h1>Agregar una nueva tarea:</h1>
  <br>    
  <input type="text" id="nameTask" placeholder="Ingrese el titulo de la tarea">
  <br>
  <input type="text" id="descriptionTask" placeholder="Ingrese la descripción de la tarea">
  <br>
  <label for="start">Inicio de tarea:</label>
  <input type="date" id="dateTask" value="2023-07-01"  min="2023-01-01" max="2099-12-31">
  <br>
  <input type="checkbox" id="isComplete" value="false">
  <label for="lblTaskIsComplete">Completada?</label><br>
  <button type="button" id="btnAddTask">Agregar Tarea</button>
  <br><br><br>
</div>