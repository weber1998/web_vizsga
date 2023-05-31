import Aszinkron from "./aszinkron.js";
import Views from "./view.js";

class Controller{
    constructor(){

        console.log("controller");

        const token = $('meta[name="csrf-token"]').attr("content");
        const aszinkron = new Aszinkron(token);

        let vegpont = "/tema";
        //$("#main").html("");
        aszinkron.adatBe(vegpont, this.megjelenit);
        
    }

    megjelenit(adat) {
        console.log(adat);
        new Views(adat, $("#main") );
    }
}

export default Controller;