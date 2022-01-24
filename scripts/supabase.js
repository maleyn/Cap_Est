const { createClient } = supabase;
supabase = createClient(
  'https://fhkdzoydzfbbdjonrxyz.supabase.co',
  'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTc5NTU0LCJleHAiOjE5NTgxNTU1NTR9.FS6rZAcAFxakmGrFgehK7Y-jKyoLFMR-8KWgvB47vCI'
);

let envoyer = document.querySelector("#envoyer");

envoyer.addEventListener("click", envoie);

async function envoie() {

  let gender;
 
  if(document.querySelector('#civilitee').checked){
    gender = 'Mme'
  } else {
    gender = 'M'
  }

  let namei = document.querySelector('#nom').value;
  let prenom = document.querySelector('#prenom').value;
  let email = document.querySelector('#email').value;
  let adresse = document.querySelector('#address').value;
  let message = document.querySelector('#message').value;
  let consent = document.querySelector('#consentement_checkbox').checked
  
  if(prenom && email && message && consent) {
    let { data } = await supabase
    .from('Contact')
    .insert([
    {

      civilite: gender,
      nom: namei,
      prenom: prenom,
      message: message,
      email: email,
      adresse: adresse
      
    }
    ])

  alert("Votre message à bien été envoyé !");
  document.getElementById("formulaire").reset();
  }
  if(!prenom || !email){
  alert("Le prénom et l'email sont obligatoire !");
  }
  if(!message){
  alert("Vous n'avez pas laissez de message  !");
  }
  if(!consent){
  alert("Vous devez cocher le consentement sur les données personnelles !");
  }

}



