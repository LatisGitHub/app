const express = require("express");
const TaskController = require("../controllers/tasks")
const api = express.Router();

//Endpoints ----------------

//Crear tarea
api.post("/task", TaskController.createTask);

//Consultar todas las tareas
api.get("/task", TaskController.getTasks);

//Consultar una tarea
api.get("/task/:id", TaskController.getTask);

//Borrar tarea por id
api.delete("/task/:id", TaskController.deleteTask);

//Modificar tarea por id
api.put("/task/:id", TaskController.updateTask);

module.exports = api;