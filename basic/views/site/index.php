<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<header class="header">
    <h2 class="header__title-first">Hello, I am</h2>
    <h1 class="header__title-second">PHP/Wordpress <br/> Developer</h1>
    <p class="header__description">Moją pasją jest tworzenie dynamicznych, interaktywnych i responsywnych strony WWW <br /> zgodnych z wymaganiami pozycjonowania SEO.</p>
    <button class="header__btn">Zobacz więcej</button>
</header>
<section class="exp">
    <div class="logo">
        <h1 class="logo__number">3+</h1>
        <h2 class="logo__desc">LATA DOŚWIADCZENIA</h2>
    </div>
    <div class="main">
        <p class="main__title">Moje doświadczenie</p>
        <h2 class="main__title-second">Specjalizuję się w tworzeniu aplikacji webowych oraz stron WWW opartych na silniku WordPress.</h2>
        <!-- one column -->
        <div class="main__column">
            <p class="main__title-post">HTML5, CSS3, JavaScript, jQuery, GULP, Nunjucks, SASS, Bootstrap</p>
            <p class="main__desc-post">Języki programowania po stronie klienta nie są mi obce. Wykonane strony są płynne i responsywne oraz dopasowują się do każdego urządzenia mobilnego.</p>
        </div>

        <!-- two column -->
        <div class="main__column">
            <p class="main__title-post">PHP + PDO, Laravel, Laravel Collective, Ajax, Visual Basic</p>
            <p class="main__desc-post">Jednym z moich ulubionych języków do komunikowania się z serwerami jest PHP. Framework Laravel nie jest mi obcy, tak jak tworzenie programów desktopowych tworzonych w Visual Basic.</p>
        </div>

        <!-- three column -->
        <div class="main__column">
            <p class="main__title-post">MySQL, Oracle</p>
            <p class="main__desc-post">Miałem do czynienia z wieloma bazami danych, ale najwięcej pracowałem przy bazach danych takich jak MySQL i Oracle.</p>
        </div>

        <!-- four column -->
        <div class="main__column">
            <p class="main__title-post">WordPress, Elementor Pro, Divi</p>
            <p class="main__desc-post">Silnik WordPress najczęściej wykorzystywany jest przeze mnie do tworzenia dynamicznych stron WWW dla klientów indywidualnych jak i dużych firm. Strony są zoptymalizowane pod wymagania SEO.</p>
        </div>
    </div>
</section>

<!-- section jobs -->

<section class="jobs">
    <div class="jobs__description">
        <h2 class="jobs__title">Doświadczenie</h2>
        <button class="jobs__btn">Download CV</button>
    </div>
    <div class="jobs__menu-first">
        <p class="jobs__name">Entsolve Sp. z o.o.</p>
        <p class="jobs__carier">PHP Developer</p>
        <p class="jobs__desc">Posiadam duże doświadczenie w tworzeniu unikalnych i autorskich projektach w języku PHP. Programowanie imperatywne i obiektowe są mi dobrze znane.</p>
    </div>
    <div class="jobs__menu-second">
        <p class="jobs__name">OptiCom.Solutions</p>
        <p class="jobs__carier">Junior WordPress Developer</p>
        <p class="jobs__desc">Bardzo duże doświadczenie w tworzeniu stron WWW opartych o silnik WordPress. Podstawowa umiejętność tworzenia wtyczek do silnka WordPress. Nie są mi obce buildery takie jak Elementor Pro czy Divi.</p>
    </div>
    <div class="jobs__menu-third">
        <p class="jobs__name">Leaders Sp. z o.o.</p>
        <p class="jobs__carier">Junior Affiliate Manager</p>
        <p class="jobs__desc">Posiadam doświadczenie w tworzeniu kampanii reklamowych i pozycjonowania. Wiedza z zakresu kampanii CPC, CPL, CPA, email marketing, afiliacji bądź social media nie jest mi obca.</p>
    </div>
</section>

<!-- section finish project -->

<section class="projects">
    <div class="left">
        <h2 class="left__title">Zrealizowane projekty</h2>
        <p class="left__desc">Oprócz stron internetowych opartych o silnik WordPress, realizuję także indywidualne projekty klientów, często pisane od zera.</p>
        <p class="left__finish">29 <span class="left__desc-finish">ukończone projekty</span></p>
        <p class="left__happy-clients">42 <span class="left__desc-happy-clients">ukończone projekty</span></p>
    </div>
    <div class="right">
        <h2 class="right__title">Wykształcenie i certyfikaty</h2>
        <p class="right__desc">W 2020 roku obroniłem tytuł Inżyniera na Politechnice, natomiast w lipcu 2021 obroniłem tytuł Magistra. Obydwa tytuły dotyczą kierunku Informatyka.</p>
        <p>Posiadane certyfikaty:</p>
        <p>– Cisco CCNA Routing and Switching: Introduction to Networks</p>
        <p>– Certyfikat spawania światłowodów</p>
        <p>– Certyfikat tworzenia szablonów stron WWW w Adobe Photoshop</p>
    </div>
</section>

<!-- section title to my -->

<section class="title">
    <h2 class="title__my">Moje projekty</h2>
</section>

<!-- section my -->

<section class="my">
    <div class="my__item">
        <a href="#" class=""><img src="img/simple.png" alt="my__img"><img></a>

        <a href="#" class=""><img src="img/simple.png" alt="my__img"><img></a>

        <a href="#" class=""><img src="img/simple.png" alt="my__img"><img></a>

        <a href="#" class=""><img src="img/simple.png" alt="my__img"><img></a>

        <a href="#" class=""><img src="img/simple.png" alt="my__img"><img></a>

    </div>
</section>

<!-- section contact -->

<section class="contact">
    <div class="left-contact">
        <h2 class="left-contact__title">Kontakt</h2>
        <p class="left-contact__desc">Jeżeli potrzebujesz strony internetowej bądź chcesz nawiązać współpracę, to skontaktuj się ze mną za pomocą formularza bądź adresu email.</p>
        <p class="left-contact__number">(+48) 555-555-555​</p>
    </div>
    <div class="right-contact">
        <h2 class="right-contact__title">Formularz kontaktowy​</h2>
        <form>
            <input type="text" class="right-contact__name" placeholder="Imię"><br />
            <input type="email" class="right-contact__email" placeholder="E-mail"><br />
            <input type="textarea" class="right-contact__description" placeholder="Twoja wiadomość...">
            <button class="right-contact__send" type="submit">Wyślij zgłoszenie</button>
        </form>
    </div>
</section>
