const express = require('express');
const HelloController = require("../controllers/hello")
const api = express.Router();

//Endpoints
api.get("/hello",HelloController.getHello);

module.exports = api;