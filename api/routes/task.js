const express = require('express');
const TaskController = require("../controllers/task")
const api = express.Router();

//Endpoints
api.post("/task",TaskController.createTask);
api.get("/task", TaskController.getTasks);

module.exports = api;