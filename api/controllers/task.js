const {
    restart
} = require("nodemon");
const Task = require("../models/task");

async function createTask(req, res) {
    const task = new Task();
    const params = req.body;


    task.title = params.title;
    task.description = params.description;

    try {
        //insertar en mogodb
        const taskStore = await task.save();

        if (!taskStore) {
            restart.status(400).send({
                msg: "tarea no guardada"
            })
        } else {
            res.status(200).send({
                task: taskStore
            });
        }
    } catch (error) {
        res.status(500).send(error);

    }
}
async function getTasks(req, res) {
    try {
        const tasks = await Task.find().sort({ created_at: -1});
        if (!tasks) {
            res.status(400).send("error al obtener las tareas.");
        } else {
            res.status(200).send(tasks);
        }
    } catch (error) {
        restart.status(500).send(error);
    }
}

async function getTask(req, res) {
    const idTask = req.params.id;
    try {
        const task = await Task.findById(idTask);
        if (!task) {
            res.status(400).send("error al obtener las tareas.");
        } else {
            res.status(200).send(task);
        }
    } catch (error) {
        res.status(500).send(error);
    }
}

async function deleteTask(req, res) {
    const idTask = req.params.id;
    try {
        const task = await Task.deleteOne({_id: idTask});
        //const task = await Task.findByIdAndDelete(idTask);
        if (!task) {
            res.status(400).send("error al obtener las tareas.");
        } else {
            res.status(200).send("tarea borrada");
        }
    } catch (error) {
        res.status(500).send(error);
    }
}

async function updateTask(req, res) {
    const idTask = req.params.id;
    const cuerpo = req.body;
    try {
        const task = await Task.findByIdAndUpdate(idTask, cuerpo);
        //const task = await Task.findByIdAndDelete(idTask);
        if (!task) {
            res.status(400).send("no se ha podido modificar.");
        } else {
            res.status(200).send("tarea modificada");
        }
    } catch (error) {
        res.status(500).send(error);
    }
   
}
module.exports = {
    createTask,
    getTasks,
    getTask,
    deleteTask,
    updateTask
}