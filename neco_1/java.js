function seznam(list, inputField) { 
    var list = document.getElementById(list);
    var listItem = document.createElement("li");
    listItem.innerText = inputField.value; 
    list.appendChild(listItem);

    return false; 
  }