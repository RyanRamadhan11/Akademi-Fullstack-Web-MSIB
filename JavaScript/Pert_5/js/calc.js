// Ryan Ramadhan || Kelompok 5 || Fullstack Web Developer

// function dengan 1 parameter
function hitung(paramValue) {
  var formKalkulator = document.getElementById("FormKalkulator_tgs5");
  var a1 = parseFloat(formKalkulator.angka1.value);
  var a2 = parseFloat(formKalkulator.angka2.value);

  // memanggil value button dengan parameter
  var button = paramValue.value;

  switch (button) {
    case "button_tambah":
      if (isNaN(a1) || isNaN(a2)) {
        alert("Data yang diinput harus berupa angka!!");
      } else {
        var total = a1 + a2; //rumus
        formKalkulator.hasil.value = total; //penempatan hasil
      }
      break;

    case "button_kurang":
      if (isNaN(a1) || isNaN(a2)) {
        alert("Data yang diinput harus berupa angka!!");
      } else {
        var total = a1 - a2; //rumus
        formKalkulator.hasil.value = total; //penempatan hasil
      }
      break;

    case "button_kali":
      if (isNaN(a1) || isNaN(a2)) {
        alert("Data yang diinput harus berupa angka!!");
      } else {
        var total = a1 * a2; //rumus
        formKalkulator.hasil.value = total; //penempatan hasil
      }
      break;

    case "button_bagi":
      if (isNaN(a1) || isNaN(a2)) {
        alert("Data yang diinput harus berupa angka!!");
      } else {
        var total = a1 / a2; //rumus
        formKalkulator.hasil.value = total; //penempatan hasil
      }
      break;

    case "button_pangkat":
      if (isNaN(a1) || isNaN(a2)) {
        alert("Data yang di input harus berupa angka !!!");
      } else {
        var total = Math.pow(a1, a2); //rumus
        formKalkulator.hasil.value = total; //penempatan hasil
      }
      break;
  }
}
