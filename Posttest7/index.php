<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopiloa Indonesia</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>HALO SELAMAT DATANG DI KOPILOA INDONESIA</h1>
        <p>Temukan Kelezatan Kopi Terbaik</p>
    </header>

    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#about">Tentang Kopiloa</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><button id="dark-mode-toggle">Dark</button>
            </li>
        </ul>
    </nav>

    <main>
        <section id="about" class="about">
            <h2>Tentang Kopiloa</h2>
            <p>Kopiloa Indonesia, Anggur merupakan sebuah tempat yang berada di Samarinda.
                Caffe ini menyajikan berbagai menu kopi dengan harga yang murah dan bersahabat dengan kantong Anda.
                Jika Anda mencari daftar harga menu Kopiloa Indonesia, Anggur, Anda berada di tempat yang tepat.</p>
            <img width="300px" src="tentang-kopiloa.jpg" alt="Tentang Kopiloa" class="about-image">
        </section>

        <section id="menu" class="menu">
            <h2>Menu Kopiloa</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Avocado Coffee</td>
                        <td>Rp 25,000</td>
                        <td><img width="200px" src="Avocado-Coffee.jpg" alt="Avocado Coffee" class="menu-image"></td>
                    </tr>
                    <tr>
                        <td>Americano</td>
                        <td>Rp 20,000</td>
                        <td><img width="200px" src="Americano.jpg" alt="Americano" class="menu-image"></td>
                    </tr>
                    <tr>
                        <td>Kopi Krim</td>
                        <td>Rp 22,000</td>
                        <td><img width="200px" src="Kopi-Krim.jpg" alt="Kopi Krim" class="menu-image"></td>
                    </tr>
                    <tr>
                        <td>Cappuccino</td>
                        <td>Rp 23,000</td>
                        <td><img width="200px" src="cappuccino.jpg" alt="Cappuccino" class="menu-image"></td>
                    </tr>

                </tbody>
            </table>
        </section>

        <section id="contact" class="contact">
            <h2>Kontak Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau ingin melakukan pemesanan, silakan hubungi kami melalui:</p>
            <address>
                Email: <a href="kopiloaindonesia@gmail.com">kopiloaindonesia@gmail.com</a><br>
                Instagram: <a href="@kopiloaindonesia">@kopiloaindonesia</a><br>
                Alamat: Jl. Anggur
            </address>
            <form>
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required><br>
            
                <label for="age">Usia:</label>
                <input type="number" id="age" name="age" min="1" max="120" placeholder="Masukkan usia Anda" required><br>
            
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan alamat email Anda" required><br>
            
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi Anda" required><br>
            
                <label for="address">Alamat:</label>
                <input type="text" id="address" name="address" placeholder="Masukkan alamat Anda"><br>
            
                <label for="phone">Telepon:</label>
                <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda"><br>
            
                <label for="gender">Jenis Kelamin:</label>
                <select id="gender" name="gender">
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select><br>
            
                <button type="submit">SUBMIT</button>
            </form>
            </section>

        </section>


    
    </main>

    <footer>
        <p>&copy; 2023 Kopiloa</p>
    </footer>

    <script>
        const toggleButton = document.getElementById('dark-mode-toggle');
        const body = document.body;

        toggleButton.addEventListener('click', function () {
            body.classList.toggle('dark-mode');
        });
    </script>
</body>

</html>
