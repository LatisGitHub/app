function getHello(req, res){
    res.status(200).send({
        "msg":"hola mundo controllers"
    })
}

module.exports = {
    getHello,
}