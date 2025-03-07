// Navbar links dropdown behavior handling
const highJewelryLink = document.querySelector("#highJewelryDropdownMenuLink");
const jewelryLink = document.querySelector("#jewelryDropdownMenuLink");
const mariageCelebrationLink = document.querySelector(
  "#mariageCelebrationDropdownMenuLink"
);
const watchmakingLink = document.querySelector("#watchmakingDropdownMenuLink");
const knowHowLink = document.querySelector("#knowHowDropdownMenuLink");
const servicesLink = document.querySelector("#servicesDropdownMenuLink");

const dropdownMenu = document.querySelector(".dropdown-menu");

function displayDropdownItem() {
  switch (dropdownLink) {
    case dropdownLink == highJewelryLink:
      dropdownMenu.innerHTML = `
        <a class="dropdown-item" href="#">Ensemble en Diamant</a>
        <a class="dropdown-item" href="#">Héritage de la Reine</a>
      `;
      break;

    case dropdownLink == jewelryLink:
      dropdownMenu.innerHTML = `
        <a class="dropdown-item" href="#">Colliers</a>
        <a class="dropdown-item" href="#">Bracelets</a>
        <a class="dropdown-item" href="#">Bagues</a>
        <a class="dropdown-item" href="#">Boucles d'oreilles</a>
      `;
      break;

    case dropdownLink == mariageCelebrationLink:
      dropdownMenu.innerHTML = `
         <a class="dropdown-item" href="#">Le classique</a>
        <a class="dropdown-item" href="#">Le baroque</a>
      `;
      break;

    case dropdownLink == watchmakingLink:
      dropdownMenu.innerHTML = `
         <a class="dropdown-item" href="#">Montres classiques</a>
        <a class="dropdown-item" href="#">Accessoires montre</a>
      `;
      break;

    case dropdownLink == knowHowLink:
      dropdownMenu.innerHTML = `
        <a class="dropdown-item" href="#">Notre Expertise</a>
        <a class="dropdown-item" href="#">Diamant</a>
      `;
      break;

    case dropdownLink == servicesLink:
      dropdownMenu.innerHTML = `
        <a class="dropdown-item" href="#">Service à domicile</a>
        <a class="dropdown-item" href="#">Service après-vente</a>
        <a class="dropdown-item" href="#">Réparation et entretien</a>
      `;
      break;
  }
}

document.addEventListener("hover", displayDropdownItem());
