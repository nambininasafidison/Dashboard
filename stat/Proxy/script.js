const stck = document.getElementById("sens");
let option = document.querySelector(".option");

let check = 0;

stck.addEventListener("change", () => {
  if(document.querySelector("#sens").value == 1){
  option.innerHTML = `Swap directory : <input type="text" name="rep" id="" placeholder="/var/spool/squid" ><br>Taille du swap directory: <input type="number" name="stck" id="" placeholder="9999 MB" min="0"><br>Nombre de sous-répertoire : <input type="number" min="0" name="srep" id="" placeholder="16"><br>Nombre de fichier : <input type="number" min="0" name="file" id="" placeholder="256"><br>`;
  }
  else{
    option.innerHTML = `Taille du mémoire: <input type="number" name="stck" id="" placeholder="9999 MB" min="0"><br>`;
  }
  option.style.display = "block";
});

// stck2.addEventListener("change", () => {
//   option.innerHTML = `Taille du mémoire: <input type="number" name="stck" id="" placeholder="9999 MB" min="0"><br>`;
//   option.style.display = "block";
// });

const active = document.querySelector("button");

active.addEventListener("click", () => {
  if (check == 0) {
    active.textContent = "Desactive";
    check = 1;
  } else {
    active.textContent = "Active";
    check = 0;
  }
});
