import supabase from './supabase.js';

let contact = document.querySelector("#envoyer");
contact.addEventListener("click" , envoie);

export async function envoie() {
const { data, error } = await supabase
  .from('Contact')
  .insert([
    {
      civilite: "M",
      nom: "mouchon",
      prenom: "jean",
      message: "blabalbalblalbla",
      email: "jean.mouchon@hotmail.fr",
      
    }
  ])
}
console.log('fait');


// let { data: Contact, error } = await supabase
//   .from('Contact')
//   .select('*')
//   console.log(data);



// function envoie() {

// const url = "https://fhkdzoydzfbbdjonrxyz.supabase.co/rest/v1/Contact";
// fetch(url, {

// headers: {
//     "apikey" : "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTc5NTU0LCJleHAiOjE5NTgxNTU1NTR9.FS6rZAcAFxakmGrFgehK7Y-jKyoLFMR-8KWgvB47vCI",
//     "Authorization" : "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTc5NTU0LCJleHAiOjE5NTgxNTU1NTR9.FS6rZAcAFxakmGrFgehK7Y-jKyoLFMR-8KWgvB47vCI"
// }
// })
// .then(response => response.json())
// .then(data => {
// data.insert([

//     {
//       civilite: "M",
//       nom: "mouchon",
//       prenom: "jean",
//       message: "blabalbalblalbla",
//       email: "jean.mouchon@hotmail.fr"
//     }
//   ]);

// });
// }
