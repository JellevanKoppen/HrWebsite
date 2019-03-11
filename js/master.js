toggleTeam(){
  // Toggle team;
  var exoButton = document.getElementById("exobutton");
  var afdButton = document.getElementById("afdbutton");
  var exoTeam = document.getElementById("teamExo");
  var afdTeam = document.getElementById("teamafd");
  if(afdButton.classList.contains("teamButtonActive")){
    afdButton.classList.remove("teamButtonActive");
    exoButton.classList.add("teamButtonActive");
    afdTeam.
  } else if(exoButon.classList.contains("teamButtonActive")){
    exoButton.classList.remove("teamButtonActive");
    afdButton.classList.add("teamButtonActive");
  }
}
