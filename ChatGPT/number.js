function generateNumber() {
    var result = document.getElementById("result");
    var randomNum = Math.floor(Math.random() * 24) + 1;
    result.innerHTML = randomNum;
  }  