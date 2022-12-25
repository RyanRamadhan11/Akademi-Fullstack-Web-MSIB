function hitung(opr) {
    //tangkap request element2 form
    let forms = document.getElementById('calcForm');
    let a1 = parseFloat(forms.angka1.value);
    let a2 = parseFloat(forms.angka2.value);
    //cek apakah data yg diinput berupa angka atau tidak
    if (isNaN(a1) || isNaN(a2)) return alert('Harap masukkan angka!');
    //strukur kendali untuk mengoperasikan tombol2
    switch (opr) {
        case '+': total = a1 + a2; break;
        case '-': total = a1 - a2; break;
        case '*': total = a1 * a2; break;
        case '/': total = a1 / a2; break;
        case '^': total = Math.pow(a1, a2); break;
        default: total = 0; 
    }
    //menempatkan hasil operasi aritmatika pada element form hasil 
    forms.hasil.value = total;
}