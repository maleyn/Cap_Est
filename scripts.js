address = document.querySelector('#address');

fetch('https://api-adresse.data.gouv.fr/search/?q=8+bd+du+port')
.then(response => response.json())
.then(data => {

    test = data.results;
    console.log(test);

});