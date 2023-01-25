const User = require("../models/user");
const bcryptjs = require("../bcryptjs");
const jwt = require("../models/jwt");


//inserta un usuario
async function register(req, res) {
    // console.log("register registrando usuario");
    const user = new User();
    
    const { name, lastname, email, password } = req.body;

    const salt = await bcrytjs.genSallt(10);

    user.name = name;
    user.lastname = lastname;
    user.email = email;
    user.password = await bcrytjs.hash(password, salt);



    try {
        //comprobar que el email este ya registrado 
        const foundEmail = await User.finOne({ email: email });
        if (foundEmail) throw { msg: "email ya registrado" };
        
        //insertar en mongodb
        const userStore = await user.save();

        if (!userStore) {
            restart.status(400).send({
                msg: "usuario no guardada"
            })
        } else {
            res.status(200).send({
                user: userStore
            });
        }
    } catch (error) {
        res.status(500).send(error);

    }
}

async function login(req, res) {
    const { email, password } = req.body;

    try {
        //comprobar que el email este ya registrado 
        //const foundEmail = await User.finOne({ email: email });
       const user = await User.findOne({ email: email });
       if (!user) throw { msg: "email o contraseña no encontrado" };
       const passwordSucess = await bcryptjs.compare(password, user.password);
       if (!passwordSucess) throw { msg: " email o contraseña incorrectos"}
    
       res.status(200).send({ token: jwt.createToken(user, "12h")});
    } catch (error) {
        res.status(500).send(error);

    }
}

module.exports = {
    register,
    login
};