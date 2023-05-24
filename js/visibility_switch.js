function toggleBlock(id) {
  var text = document.getElementById(id);
  text.style.display = (text.style.display === "none") ? "block" : "none";
}
function toggleGrid(id) {
  var text = document.getElementById(id);
  text.style.display = (text.style.display === "none") ? "grid" : "none";
}
function switch_button(id) {
  var text = document.getElementById(id);
  if (screen.width > 1081) {
    text.style.display = (text.style.display === "none") ? "grid" : "none";
  } else {
    text.style.display = (text.style.display === "none") ? "block" : "none";
  }
}