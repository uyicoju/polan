<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktywności na świeżym powietrzu dla seniorów</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Aktywności na świeżym powietrzu dla seniorów</h1>
    </header>

    <nav>
        <ul>
            <li><a href="o-nas.html">O nas</a></li>
            <li><a href="aktywnosci.html">Aktywności</a></li>
            <li><a href="porady.html">Porady</a></li>
            <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
    </nav>

    <main>
        <section class="event-grid">
            <div class="event-card">
                <img src="images/banner1.jpg" alt="Spacer po lesie">
                <div class="content">
                    <h2>Spacer po lesie</h2>
                    <p>Dołącz do nas na relaksującym spacerze po lesie. Idealne dla wszystkich poziomów sprawności.</p>
                    <a href="spacer-po-lesie.html">Więcej informacji</a>
                </div>
            </div>
            <div class="event-card">
                <img src="images/banner2.jpg" alt="Joga w parku">
                <div class="content">
                    <h2>Joga w parku</h2>
                    <p>Popraw swoją elastyczność i równowagę podczas naszych zajęć jogi na świeżym powietrzu.</p>
                    <a href="joga-w-parku.html">Więcej informacji</a>
                </div>
            </div>
            <div class="event-card">
                <img src="images/banner3.jpg" alt="Wycieczka rowerowa">
                <div class="content">
                    <h2>Wycieczka rowerowa</h2>
                    <p>Odkryj piękno okolicy podczas naszej łagodnej wycieczki rowerowej dla seniorów.</p>
                    <a href="wycieczka-rowerowa.html">Więcej informacji</a>
                </div>
            </div>
            <div class="event-card">
                <img src="images/banner4.jpg" alt="Zajęcia ogrodnicze">
                <div class="content">
                    <h2>Zajęcia ogrodnicze</h2>
                    <p>Naucz się podstaw ogrodnictwa i ciesz się korzyściami z uprawy własnych roślin.</p>
                    <a href="zajecia-ogrodnicze.html">Więcej informacji</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <a href="polityka-prywatnosci.html">Polityka prywatności</a>
        <a href="regulamin.html">Regulamin</a>
    </footer>

    <div id="cookie-consent">
        <p>Ta strona używa plików cookie, aby zapewnić najlepsze wrażenia. Czy zgadzasz się na używanie plików cookie?</p>
        <button onclick="acceptCookies()">Akceptuję</button>
        <button onclick="rejectCookies()">Odrzucam</button>
    </div>

    <script>
        function acceptCookies() {
            document.getElementById('cookie-consent').style.display = 'none';
            // Here you would typically set a cookie to remember the user's choice
        }

        function rejectCookies() {
            document.getElementById('cookie-consent').style.display = 'none';
            // Here you would typically handle the rejection of cookies
        }
    </script>
</body>
</html>
