import Controller from "./controller.js";
import SzavakController from "./szavak/SzavakController.js";

class App {
    constructor() {

        console.log("app");

        new Controller();
        new SzavakController();
    }  
}

$(function () {
    new App();
});








