function getResponse() {
    const question = document.getElementById("input-field").value;
    const answer = Math.random() < 0.5 ? "ㄱㄱ" : "ㄴㄴ";
    document.getElementById("response").innerHTML = `${question}? <br> ${answer}`;
  }  