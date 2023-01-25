const express = require("express");
const UserController = require("../controllers/users")
const api = express.Router();

//Endpoints ----------------

//Registrar usuario
api.post("/user", UserController.register);


module.exports = api;