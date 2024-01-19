function pindahPage(courseid) {
        window.location.href = 'detailCourse.php?courseid=' + courseid;
}
function openContent(evt, changeContent) {
  var i, tabContent, button;
  tabContent = document.getElementsByClassName("tabContent");
  for (i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
  }
  button= document.getElementsByClassName("button");
  for (i = 0; i < button.length; i++) {
    button[i].className = button[i].className.replace(" active", "");
  }
  document.getElementById(changeContent).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function toggleDropdown(){
    document.getElementById("profileDropdown").classList.toggle("show");
}
window.onclick = function(event){
    if(!event.target.matches('.dropbtn')){
        var dropdown = document.getElementById("profileDropdown");
        var i;
        for (i = 0; i < dropdown.length; i++){
            var openDropdown = dropdown[i];
            if(openDropdown.classList.contains('show')){
                openDropdown.classList.remove('show');
            } 
        }
    }
}
