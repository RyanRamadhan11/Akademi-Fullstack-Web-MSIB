class Gempa {
  constructor(lokasi, skala) {
    this.lokasi = lokasi;
    this.skala = skala;
  }
  dampak() {
    if (this.skala <= 2) {
      return "TIDAK TERASA";
    } else if (this.skala > 2 && this.skala <= 4) {
      return "BANGUNAN RETAK";
    } else if (this.skala > 4 && this.skala <= 6) {
      return "BANGUNAN ROBOH";
    }
    return "BANGUNAN ROBOH & BERPOTENSI TSUNAMI";
  }
  getLokasi() {
    return this.lokasi;
  }
  getSkala() {
    return this.skala;
  }
}

let daftarGempa = new Array(10);
daftarGempa[0] = new Gempa("Laut Utara", "1");
daftarGempa[1] = new Gempa("Laut Selatan", "2");
daftarGempa[2] = new Gempa("Laut Barat", "3");
daftarGempa[3] = new Gempa("Laut Timur", "4");
daftarGempa[4] = new Gempa("Perbatasan Utara", "5");
daftarGempa[5] = new Gempa("Perbatasan Selatan", "6");
daftarGempa[6] = new Gempa("Perbatasan Barat", "7");
daftarGempa[7] = new Gempa("Perbatasan Timur", "8");
daftarGempa[8] = new Gempa("Selat Utara", "9");
daftarGempa[9] = new Gempa("Selat Barat", "10");

function infoGempa(gempa) {
  let no = 1;
  for (g of gempa) {
    document.getElementById("tabel-gempa").innerHTML += `
        <tr>
            <th>${no++}</th>
            <td>${g.getLokasi()}</td>
            <td>${g.getSkala()}</td>
            <td>${g.dampak()}</td>
        </tr>
        `;
  }
}

infoGempa(daftarGempa);
