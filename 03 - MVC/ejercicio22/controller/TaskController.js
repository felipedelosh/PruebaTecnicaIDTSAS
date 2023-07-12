// ViewModel Controller
import Task from "../model/TaskModel.js";

export default  class TaskController {

    constructor(model) {
      this.model = model;
      this.tempTask = this.deafultTask(); // Save a deafult task to show
    }


    deafultTask(){
        let task0 = new Task("A", "Make A", false, "2023-07-11");
        let task1 = new Task("B", "Make B", false, "2023-07-11");
        let task2 = new Task("C", "Make C", false, "2023-07-11");
        let task3 = new Task("D", "Make D", false, "2023-07-11");
        let task4 = new Task("E", "Make E", true, "2023-07-11");
        let task5 = new Task("F", "Make F", true, "2023-07-11");

        return [task0, task1, task2, task3, task4, task5];
    }

    /**
     * Get ALL task registred
     * @returns [Obj Task, Obj Task, Obj Task, Obj Task]
     */
    getAllTask(){
        let task = [];
        this.tempTask.forEach(element => task.push(element));
        return task;
    }

    /**
     * get a specify task
     * @param {*} id str and convert to int
     * @returns TasK Model
     */
    getTaskByID(id){
        let task = this.getAllTask();
        try {
            id = parseInt(id);
            return task[id];
        } catch (error) {
            console.error(error);
        }
          
        return null;
    }

    /**
     * insert Task and return status of insertion
     * @param {*} titulo str is a title of task
     * @param {*} descripcion str is a description of task
     * @param {*} isCompleted bool is a status of task
     * @param {*} fechaCreacion str is a date
     * @returns bool ¿is inserted?
     */
    addTask(titulo, descripcion, isCompleted, fechaCreacion){
        let lenArray = this.tempTask.length;
        let t = new Task(titulo, descripcion, isCompleted, fechaCreacion);
        this.tempTask.push(t);

        return lenArray < this.tempTask.length;
    }

    /**
     * Enter a Attribs of task and edit it
     * @param {*} id 
     * @param {*} titulo 
     * @param {*} descripcion 
     * @param {*} isCompleted 
     * @returns bool 
     */
    editTask(id, titulo, descripcion, isCompleted){
        var isEdit = false;

        try {
            id = parseInt(id);
            let t = this.tempTask[id];
            this.tempTask[id] = new Task(titulo, descripcion, isCompleted, t.fechaCreacion);
            isEdit = true;
        } catch (error) {
            console.error(error);
        }

        return isEdit;
    }


    /**
     * Enter a ID of task and delete
     * @param {*} id 
     * @returns bool ¿is delete?
     */
    deleteTask(id){
        var isDelete = false;

        try {
            id = parseInt(id);
            if (!isNaN(id)){
                delete this.tempTask[id];
                isDelete = true;
            }else{
                isDelete = false;
            }
        } catch (error) {
            console.error(error);
        }

        return isDelete;
    }
    
}