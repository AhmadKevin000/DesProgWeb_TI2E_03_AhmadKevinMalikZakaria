<?php
// 1. INISIALISASI VARIABEL (Untuk menampung nilai input dan pesan error)
$input_bersih = "";
$email_input = "";
$nama_err = "";
$email_err = "";
$sukses_msg = "";

// 2. CEK APAKAH FORM SUDAH DISUBMIT
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- VALIDASI INPUT UMUM ---
    if (empty($_POST['input'])) {
        $nama_err = "Input tidak boleh kosong!";
    } else {
        $input = $_POST['input'];
        // Sanitasi input umum (keamanan XSS)
        $input_bersih = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }

    // --- VALIDASI EMAIL ---
    if (empty($_POST['email'])) {
        $email_err = "Email tidak boleh kosong!";
    } else {
        $email = $_POST['email'];
        
        // Validasi format email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_input = $email; // Email dianggap valid
        } else {
            $email_err = "Format email tidak valid.";
        }
    }

    // --- CEK KESUKSESAN AKHIR ---
    // Jika tidak ada error sama sekali, tampilkan pesan sukses
    if (empty($nama_err) && empty($email_err)) {
        $sukses_msg = "✅ Data berhasil diproses dan valid!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Validasi Aman</title>
    <style>
        .error { color: red; }
        .sukses { color: green; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Formulir Validasi Aman</h2>
    
    <div class="sukses"><?php echo $sukses_msg; ?></div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <label for="input">Input Umum:</label>
        <input 
            type="text" 
            name="input" 
            value="<?php echo htmlspecialchars($input_bersih); ?>"
        >
        <span class="error"><?php echo $nama_err; ?></span>
        <br><br>

        <label for="email">Email:</label>
        <input 
            type="text" 
            name="email" 
            value="<?php echo htmlspecialchars($email_input); ?>"
        >
        <span class="error"><?php echo $email_err; ?></span>
        <br><br>

        <input type="submit" value="Kirim Data">
    </form>

</body>
</html>