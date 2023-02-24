function search() {
  let searchValue = document.getElementById("search-bar").value;

  if (["cats", "Cats Of PUPQC", "CATS"].includes(searchValue)) {
    window.location.href = "product/cats.php";
  }

  if (["pup est", "PUP Est", "PUP EST"].includes(searchValue)) {
    window.location.href = "product/estpup.php";
  }

  if (["isko", "Iskolar Ng Bayan", "ISKOLAR NG BAYAN"].includes(searchValue)) {
    window.location.href = "product/isko.php";
  }

  if (["isko iska", "Isko, Iska", "ISKO, ISKA"].includes(searchValue)) {
    window.location.href = "product/iskoiska.php";
  }

  if (["iskolar", "ISKOLAR", "Iskolar"].includes(searchValue)) {
    window.location.href = "product/iskolar.php";
  }

  if (["mula sayo", "Mula Sayo", "MULA SAYO"].includes(searchValue)) {
    window.location.href = "product/mulasayo.php";
  }

  if (["pupian", "Pupian", "PUPIAN"].includes(searchValue)) {
    window.location.href = "product/pupian.php";
  }

  if (["pupqc", "Pupqc", "PUPQC"].includes(searchValue)) {
    window.location.href = "product/pupqc.php";
  }

  if (
    ["lanyard1", "Mula Sayo Para Sa Bayan", "MULA SAYO PARA SA BAYAN"].includes(
      searchValue
    )
  ) {
    window.location.href = "product/lanyard1.php";
  }

  if (
    [
      "lanyard2",
      "Country's First Polytechnic University",
      "COUNTRY'S FIRST POLYTECHNIC UNIVERSITY",
    ].includes(searchValue)
  ) {
    window.location.href = "product/lanyard2.php";
  }

  if (
    ["lanyard3", "PUP Light Of The Nation", "PUP LIGHT OF THE NATION"].includes(
      searchValue
    )
  ) {
    window.location.href = "product/lanyard3.php";
  }
}
