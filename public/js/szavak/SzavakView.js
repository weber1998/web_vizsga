class SzavakView {
    constructor(elem, szuloElem) {
        console.log("szavak View");
        szuloElem.append(`

       <div id="egySor">
            ${elem.angol}
            <input type="text" id=${elem.id} name="magyar">
            <p></p>
       </div>

     `);
                        
    }
}

class SzavakViews {
    #elem;
    constructor(elem, szuloElem) {

        console.log("Szavakview");

        this.#elem = elem;
    
        szuloElem.html('');
        szuloElem.append(`
        
        <div id="alap">

        </div>
                       
                                
         `);

         const szuloElemem = $('#alap')
         
        

         if (Array.isArray(elem)) {
             this.#elem.forEach(elemem => {
                
                 new SzavakView(elemem, szuloElemem);
 
             });
         }
    }
}

export default SzavakViews;