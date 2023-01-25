const { urlencoded } = require('express');
const express = require('express')
const app = express();


app.use(express.json());
app.use(express.urlencoded({ extended: true}));
//cargar rutas
const task_routes = require("./routes/task")
const user_routes = require("./routes/user")
//rutas base
app.use("/api", task_routes);
app.use("/api", user_routes);



module.exports = app;