import Aszinkron from "../aszinkron.js";
import SzavakViews from "./SzavakView.js";

class Controller{
    constructor(){

        console.log("controller");

        const token = $('meta[name="csrf-token"]').attr("content");
        const aszinkron = new Aszinkron(token);
       
            //const id = ${event.target};
         //   console.log("id: " + id);
            let vegpont = "/szavak/tema/1";
            $("#article").html("");
            aszinkron.adatBe(vegpont, this.megjelenit);
    
        
    }

    megjelenit(adat) {
        console.log(adat);
        new SzavakViews(adat, $("#article") );
    }
}

export default Controller;