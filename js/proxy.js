const selectElement = document.getElementById("sens");
const optionsContainer = document.querySelector(".option");


function updateOptions(selectedValue) {
  let htmlContent = '';
  
  if (selectedValue === '1') {
    htmlContent = `
      <div class="input">
        <label for="swapDir">Swap directory</label>
        <input type="text" id="swapDir" name="rep" placeholder="/var/spool/squid">
      </div>
      <div class="input">
        <label for="swapSize">Taille du swap directory</label>
        <input type="number" id="swapSize" name="stck" placeholder="9999 MB" min="0">
      </div>
      <div class="input">
        <label for="subDirCount">Nombre de sous-répertoire</label>
        <input type="number" id="subDirCount" name="srep" placeholder="16" min="0">
      </div>
      <div class="input">
        <label for="fileCount">Nombre de fichier</label>
        <input type="number" id="fileCount" name="file" placeholder="256" min="0">
      </div>`;
  } else if (selectedValue === '2') {
    htmlContent = `
      <div class="input">
        <label for="memorySize">Taille du mémoire:</label>
        <input type="number" id="memorySize" name="stck" placeholder="9999 MB" min="0">
      </div>`;
  }
  
  optionsContainer.innerHTML = htmlContent;
  optionsContainer.style.display = 'block';
}

selectElement.addEventListener('change', () => {
  updateOptions(selectElement.value);
});
