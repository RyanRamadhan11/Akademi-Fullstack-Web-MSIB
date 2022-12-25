// Ryan Ramadhan || Kelompok 5 || Fullstack Web Developer

// function dengan 1 parameter
function hitung(paramValue) {
  var formKalkulator = document.getElementById("FormKalkulator_tgs5");
  var angka1 = parseFloat(formKalkulator.angka1.value);
  var angka2 = parseFloat(formKalkulator.angka2.value);

  // memanggil value button dengan parameter
  var button = paramValue.value;

  switch (button) {
    case "button_tambah":
      if (isNaN(angka1) || isNaN(angka2)) {
        alert("Data yang diinput harus berupa angka !!!");
      } else {
        var total = angka1 + angka2; //rumus
        formKalkulator.hasil.value = total; //penempatan hasil
      }
      break;

    case "button_kurang":
      if (isNaN(angka1) || isNaN(angka2)) {
        alert("Data yang diinput harus berupa angka !!!");
      } else {
        var total = angka1 - angka2; //rumus
        formKalkulator.hasil.value = total; //penempatan hasil
      }
      break;

    case "button_kali":
      if (isNaN(angka1) || isNaN(angka2)) {
        alert("Data yang diinput harus berupa angka !!!");
      } else {
        var total = angka1 * angka2; //rumus
        formKalkulator.hasil.value = total; //penempatan hasil
      }
      break;

    case "button_bagi":
      if (isNaN(angka1) || isNaN(angka2)) {
        alert("Data yang diinput harus berupa angka !!!");
      } else {
        var total = angka1 / angka2; //rumus
        formKalkulator.hasil.value = total; //penempatan hasil
      }
      break;

    case "button_pangkat":
      if (isNaN(angka1) || isNaN(angka2)) {
        alert("Data yang di input harus berupa angka !!!");
      } else {
        var total = Math.pow(angka1, angka2); //rumus
        formKalkulator.hasil.value = total; //penempatan hasil
      }
      break;
  }
}
