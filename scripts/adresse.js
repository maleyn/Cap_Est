/* script permettant de récupérer les adresses de l'api du gouvernement
    et de les afficher en dessous du champs adresse */

let address = document.querySelector('#address');
let div_address = document.querySelector('#listead');

// variable address -> l'input adresse du formulaire de contact

let select = document.querySelector('#selection');
// variable select -> l'ul qui contiendra les adresses obtenus (li)

address.addEventListener('input', displayadd);
// Dès qu'un input est detecté dans le champ input la fonction displayadd est effectuer

function displayadd() {
// Efface le contenu de l'ul à chaque appel de la fonction
select.innerHTML = "";

    fetch("https://api-adresse.data.gouv.fr/search/?q=" + address.value + "&limit=5")
    .then(response => response.json())
    .then(data => {

        let listeadresse = data.features;
    
        if (address){
            listeadresse.forEach(e => {
        
                let li = document.createElement('li');
                select.appendChild(li);
                li.innerText = e.properties.label;
                div_address.classList.remove('adhidden');

                li.addEventListener('click', select_it);

                // au click sur une adresse contenu dans les 'li' => rempli le champ adresse de cette adresse
                // et efface les 'li'

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


