function verif() {
        erreur = 0;
        with(document.hey) {
             if(exampleInputName1.value == "" || exampleInputName2.value == "" || exampleInputEmail.value == "" || exampleInputCity1.value == "" ) {
                alert("Veuillez remplir le champs : nom_dun_champs");
                erreur = 1;
             }
        }
        if(erreur == 0) {
           return true;
        } else {
            return false;
        } 
}
function validateEmail(champ) {
  var email= /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  if (champ.value.match(email)) {
    
    champ.style.backgroundColor = "#B0F2B6";
  } else {
    alert("You have entered an invalid email address!");
    champ.style.backgroundColor = "#fba";
  }
  return false;
}
function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "#B0F2B6";

}
function verifname(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
   {
      surligne(champ, true);
    
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifForm(f)
{
   var pseudoOk = verifname(f.exampleInputName1);
  
   if(pseudoOk )
      return true;
   
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}