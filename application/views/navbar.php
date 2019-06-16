<nav class="navbar  navbar-expand-lg navbar-light  scrolling-navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url("Welcome")?>">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url("Info/statistique")?>">Evaluation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url("Liste?idCateg=1")?>">Santé</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url("Liste?idCateg=2")?>">Politique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url("Liste?idCateg=3")?>">Science</a>
            </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url("Info/declarerMalade")?>">SOS</a>
            </li>

        </ul>

    </div>
</nav>