<?php include '../header.php'; ?>
    <h2>Kontak Saya</h2>
    <p>Silakan hubungi saya melalui form di bawah ini.</p>

    <form action="send_message.php" method="POST">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Pesan:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
<?php include '../footer.php'; ?>