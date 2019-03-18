function toggleTeam(){
  // Toggle team;
  var exoButton = document.getElementById("exobutton");
  var afdButton = document.getElementById("afdbutton");
  var exoTeam = document.getElementById("teamExo");
  var afdTeam = document.getElementById("teamAfd");
  if(afdButton.classList.contains("teamButtonActive")){
    afdButton.classList.remove("teamButtonActive");
    exoButton.classList.add("teamButtonActive");
    afdTeam.style.display = "none";
    exoTeam.style.display = "";
  } else if(exoButton.classList.contains("teamButtonActive")){
    exoButton.classList.remove("teamButtonActive");
    afdButton.classList.add("teamButtonActive");
    exoTeam.style.display = "none";
    afdTeam.style.display = "";
  }
}
