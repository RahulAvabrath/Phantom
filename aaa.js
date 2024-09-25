const buttonsContainer = document.getElementById("buttonsContainer");

for (var i = 0; i < 5; i++) {
  const button = document.createElement("button");
  button.innerText = i;
  button.addEventListener("click", function() {
    console.log(i)
  })
  buttonsContainer.appendChild(button);
}