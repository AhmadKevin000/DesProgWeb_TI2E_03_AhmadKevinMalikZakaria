function validasiInput() {
    const nilai = document.getElementById('nilai').value;
    const peringatan = document.getElementById('peringatan');

    if (nilai === "") {
        peringatan.textContent = "Nilai tidak boleh kosong!";
        return false;
    }

    const angka = parseInt(nilai);
    if (angka < 0 || angka > 100) {
        peringatan.textContent = "Nilai harus di antara 0 dan 100!";
        return false;
    }

    // Jika valid
    peringatan.textContent = "";
    return true;
}
