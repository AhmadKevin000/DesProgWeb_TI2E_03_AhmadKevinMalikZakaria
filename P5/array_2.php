<!DOCTYPE html>
<html>
    <head>
        <title>Data Dosen</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: #f0f4f8;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .card {
                background: #fff;
                padding: 20px 30px;
                border-radius: 12px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                width: 320px;
            }
            h2 {
                text-align: center;
                color: #2c3e50;
                margin-bottom: 20px;
            }
            p {
                font-size: 16px;
                margin: 8px 0;
                color: #34495e;
            }
            span {
                font-weight: bold;
                color: #2980b9;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <h2>Data Dosen</h2>
            <?php
                $Dosen = [
                    'nama' => 'Elok Nur Hamdana',
                    'domisili' => 'Malang',
                    'jenis_kelamin' => 'Perempuan'
                ];

                echo "<p><span>Nama:</span> {$Dosen['nama']}</p>";
                echo "<p><span>Domisili:</span> {$Dosen['domisili']}</p>";
                echo "<p><span>Jenis Kelamin:</span> {$Dosen['jenis_kelamin']}</p>";
            ?>
        </div>
    </body>
</html>
