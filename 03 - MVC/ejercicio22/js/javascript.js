/**
 * Javascript powered by JQuery
 * Do a Click Events
*/
import TaskController from "../controller/TaskController.js";

let taskController = new TaskController();


/**
 * Hide all Banners to show in display
 */
function hideAllBannersInfo(){
    $("#infoViewer").show().html("");
    document.getElementById("taskGetByID").style.display = "none";
    document.getElementById("taskCreateForm").style.display = "none";
    document.getElementById("taskEditForm").style.display = "none";
    document.getElementById("deleteTaskForm").style.display = "none";
}

hideAllBannersInfo();

$("#viewAllTask").on('click', function(){
    //reset a show values
    hideAllBannersInfo();
    var tasks = taskController.getAllTask();
    //Show in display
    var displayedTask = ""; //Save a HTML tasks
    function addTaskToShow(i){
        displayedTask = displayedTask + formatTaskInHTMLView(i);
    }
    tasks.forEach(addTaskToShow);
    $("#infoViewer").show().html(displayedTask);
});

$("#viewTask").on('click', function(){
    //reset a show values
    hideAllBannersInfo();
    document.getElementById("taskGetByID").style.display = "block";
});

$("#searchAndShowTaskByID").on('click', function(){
    //reset a show values
    hideAllBannersInfo();
    var idTask = document.getElementById("idTask").value;
    var tasks = taskController.getTaskByID(idTask);

    if(tasks === null || tasks === 'undefined'){
        $("#infoViewer").show().html("<h1>NOT FOUND</h1>");
    }else{
        var taskHTML = formatTaskInHTMLView(tasks);
        $("#infoViewer").show().html(taskHTML);
    }
});


$("#addTask").on('click', function(){
    //reset a show values
    hideAllBannersInfo();
    document.getElementById("taskCreateForm").style.display = "block";
});

$("#btnAddTask").on('click', function(){
    //reset a show values
    hideAllBannersInfo();
    var titulo = document.getElementById("nameTask").value;
    var descripcion = document.getElementById("descriptionTask").value;
    var isCompleted = document.getElementById("isComplete").value;
    var isCompleted = isCompleted == 'true';
    var fechaCreacion = document.getElementById("dateTask").value;

    var isInsert = taskController.addTask(titulo, descripcion, isCompleted, fechaCreacion);

    if (isInsert){
        $("#infoViewer").show().html("<h1>OK TO INSERT TASK: "+titulo+"</h1>");
    }else{
        $("#infoViewer").show().html("<h1>ERROR NOT INSERT TASK: "+titulo+"</h1>");
    }
});


$("#isComplete").on('click', function(){
    var isCompleted = document.getElementById("isComplete").value;

    if (isCompleted == 'false'){
        document.getElementById("isComplete").value = 'true';
    }else{
        document.getElementById("isComplete").value = 'false';
    }
}); 


$("#editTask").on('click', function(){
    //reset a show values
    hideAllBannersInfo();
    document.getElementById("taskEditForm").style.display = "block";
});


$("#isCompleteEdit").on('click', function(){
    var isCompleted = document.getElementById("isCompleteEdit").value;

    if (isCompleted == 'false'){
        document.getElementById("isCompleteEdit").value = 'true';
    }else{
        document.getElementById("isCompleteEdit").value = 'false';
    }
});

$("#btnEditTask").on('click', function(){
    //reset a show values
    hideAllBannersInfo();
    var id = document.getElementById("idTaskEdit").value;
    var titulo = document.getElementById("nameTaskEdit").value;
    var descripcion = document.getElementById("descriptionTaskEdit").value;
    var isCompleted = document.getElementById("isCompleteEdit").value;
    var isCompleted = isCompleted == 'true';
    
    var isEdit = taskController.editTask(id, titulo, descripcion, isCompleted);

    if(isEdit){
        $("#infoViewer").show().html("<h1>OK TO EDIT TASK: "+id+"</h1>");
    }else{
        $("#infoViewer").show().html("<h1>ERROR TO EDIT TASK: "+id+"</h1>");
    }
});


$("#deleteTask").on('click', function(){
    //reset a show values
    hideAllBannersInfo();
    document.getElementById("deleteTaskForm").style.display = "block";
});

$("#btnDeleteTask").on('click', function(){
    //reset a show values
    hideAllBannersInfo();
    var id = document.getElementById("idTaskDelete").value;

    var isEdit = taskController.deleteTask(id);

    if(isEdit){
        $("#infoViewer").show().html("<h1>OK TO DELETE TASK: "+id+"</h1>");
    }else{
        $("#infoViewer").show().html("<h1>NO DELETE: "+id+"</h1>");
    }    

});



/**
 * Enter a Task and return <HTML> format to show
 * @param {Task} task 
 * @returns str with HTML representation of object
 */
function formatTaskInHTMLView(task){
    var displayedTask = "";
    displayedTask = displayedTask + "<h2>Titulo: " + task.titulo + "</h2>";
    displayedTask = displayedTask + "<p>Descripción: " + task.descripcion + " Fecha: "+ task.fechaCreacion + "</p>" ;
    if (task.isCompleted){
        displayedTask = displayedTask + "<p>tarea completada</p><br>";
    }else{
        displayedTask = displayedTask + "<p>tarea no completada</p><br>";
    }
    return displayedTask;
}
