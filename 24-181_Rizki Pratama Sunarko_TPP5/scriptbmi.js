function hitungBMI(berat, tinggi) {
    tinggi /=100;
    var bmi = berat / (tinggi* tinggi);
    return bmi.toFixed(2);
}

function kategoriBMI(bmi) {
    if (bmi < 18.5) {
        return "Kurus"
    } else if (bmi >= 18.5 && bmi < 25) {
        return "Normal"
    } else if (bmi >= 25 && bmi < 30) {
        return "Gemuk"
    } else {
        return "Obesitas"
    }
}

function tampilkanBMI() {
    var berat = parseFloat(document.getElementById("berat").value);
    var tinggi = parseFloat(document.getElementById("tinggi").value);

    if (isNaN(berat) || isNaN(tinggi) || berat <= 0 || tinggi <=0) {
        alert("Masukkan berat dan tinggi yang valid. ")
    }

    var bmi = hitungBMI(berat, tinggi);
    var kategori = kategoriBMI(bmi);
    var hasil = "BMI Anda adalah " + bmi + ". Anda termasuk dalam kategori: " + kategori;
    document.getElementById("hasil").innerHTML = hasil;
}