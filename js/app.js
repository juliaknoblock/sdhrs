var removePlaceholder = function(div) {
  var inputField = div.querySelector("input.gsc-input");

  // Change the placeholder
  inputField.placeholder = "Search San Diego Rabbits Site";

  // Remove the background
  inputField.style.background = "none";

  // The background will get re-attached on blur, so add an event that will also remove it on blur
  // Another way to do this would be to de-attach the element from the DOM and then re-attach again, hence wiping the listeners
  inputField.addEventListener("blur", function() {
    inputField.style.background = "none";
  });
};
