let address = document.querySelector('#address');
let div_address = document.querySelector('#listead');

// variable address -> l'input adresse de mon formulaire en html

let select = document.querySelector('#selection');
// variable select -> l'ul qui contiendra les adresses obtenus

address.addEventListener('input', displayadd);
// dès qu'un input est detecté dans le champ input la fonction displayadd est effectuer


function displayadd() {
select.innerHTML = "";
fetch("https://api-adresse.data.gouv.fr/search/?q=" + address.value + "&limit=5")
.then(response => response.json())
.then(data => {
    console.log(data.features);
    select.innerHTML = "";
    let listeadresse = data.features;
    if (address){
    listeadresse.forEach(e => {
        
        
        let li = document.createElement('li');
        select.appendChild(li);
        li.innerText = e.properties.label;
        div_address.classList.remove('adhidden');

        console.log(address.value);
        li.addEventListener('click', select_it);
        function select_it() {
            address.value = e.properties.label;
            div_address.classList.add('adhidden');
            select.innerHTML = "";
        }
    
    });
} else {
    select.innerHTML = "";
    div_address.classList.add('adhidden');
}

});

}

    
