const User = require("../models/users");
const bcryptjs = require("bcryptjs");

//Función para insertar un usuario
async function register(req, res) {

    const user = new User();
    const { name, lastname, email, password } = req.body; //Lo que enviamos por POST

    const salt = await bcryptjs.genSalt(10);

    user.name = name; //campos del Json puesto en insomnia
    user.lastname = lastname;
    user.email = email;
    user.password = await bcryptjs.hashSync(password, salt);

    try {
        //Comprobar que el email esté ya registrado en la BBDD
        const foundEmail = await User.findOne({ email: email});
        if (foundEmail) throw { msg: "Email ya registrado"} ;
        
        //Insertar en MongoDB
        const userStore = await user.save();        

        if (!userStore) {
            res.status(400).send({ msg: "Usuario no guardado correctamente, datos erróneos"});
        } else {
            res.status(200).send({ user: userStore});
        }

    } catch(error) {
        res.status(500).send(error)
    }
    


}

module.exports = {
    register,
}
