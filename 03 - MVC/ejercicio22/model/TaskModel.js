/**
 * Model to Task
 * NOT conected with DB
 * titulo str is a name 
 * descripcion str is a description
 * isCompleted bool ¿the task is over?
 * fechaCreacion str date to create
 */
export default class Task {
    constructor(titulo, descripcion, isCompleted, fechaCreacion) {
      this.titulo = titulo;
      this.descripcion = descripcion;
      this.isCompleted = isCompleted;
      this.fechaCreacion = fechaCreacion;
    }

}