alert("salamat menunaikan ibadah puasa")

document.getElementById("myButton").addEventListener("click", () => {
  document.getElementById("para").innerHTML = "PARAGRAF INI BISA BERUBAH";
});

let baru = ["brandon", "brook"];
let tim = ["john", "jerry", "josh", "jaha"];

console.log(tim);

// Cara 1: Spread Operator
tim = [tim[0], tim[1], ...baru, tim[2], tim[3]]
// Cara 2: Splice()
// tim.splice(2, 0, baru[0], baru[1])

console.log(tim)