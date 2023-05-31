class View {
    constructor(elem, szuloElem) {
        console.log("View");
        szuloElem.append(`

        
            <option value="${elem.id}">${elem.temanev}</option>
        
                                
     `);
                        
    }
}

class Views {
    #elem;
    constructor(elem, szuloElem) {

        console.log("view");

        this.#elem = elem;
    
        szuloElem.html('');
        szuloElem.append(`
        
        <select name="temak" id="temak">
            <option>Válassz Témát</option>
           
        </select>
                       
                                
         `);

         const szuloElemem = $('#temak')
         if (Array.isArray(elem)) {
             this.#elem.forEach(elemem => {
 
                 new View(elemem, szuloElemem);
 
             });
         }
    }
}

export default Views;