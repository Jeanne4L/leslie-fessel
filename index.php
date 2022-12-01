<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psycho</title>
    <link rel="icon" type="image/png" href="images/logo.png"/>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="section__content">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="logo personnage en tailleur">
                </a>
            </div>
            <nav id="top">
                <ul id="menu" class="closed">
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#job">Psychomotricité</a></li>
                    <li><a href="#prices">Tarifs</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <i class="fa-solid fa-bars" id="burger"></i>
        </div>
    </header>
    <main>
        <section id="hero">
            <video autoplay muted loop>
                <source src="images/hero.mp4" type="video/mp4">
            </video>
            <div class="section__content">        
                <h1>Leslie Fessel</h1>
                <h2>Psychomotricienne D.E.</h2> 
                <div class="button">
                    <a href="#contact">Prendre rendez-vous</a>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="section__content">
                <h2>Qui suis-je?</h2>
                <img src="images\portrait.jpg" alt="dessin portrait femme">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.<br/>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
            </div>
        </section>
        <section id="job">
            <div class="section__content">
                <h2>Psychomotricité</h2>
                <img src="images/psychomotricite__img.jpg" alt="enfants en équilibre qui jouent avec des balles">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.<br/>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
            </div>
        </section>
        <section id="prices">
            <div class="section__content">
                <h2>Mes tarifs</h2>
                <div class="cards">
                    <div class="card">
                        <div class="title">
                            <h3>Première séance</h3>
                        </div>
                        <div class="price">60€</div>
                        <div class="description">Séance de 60 minutes</div>
                    </div>
                    <div class="card">
                        <div class="title">
                            <h3>Bilan psychomoteur</h3>
                        </div>
                        <div class="price">280€</div>
                        <div class="description">3 séances de bilan + rédaction + séance de restitution du bilan</div>
                    </div>
                    <div class="card">
                        <div class="title">
                            <h3>Séance individuelle</h3>
                        </div>
                        <div class="price">45€</div>
                        <div class="description">Séance de 45 minutes</div>
                    </div>
                    <div class="card">
                        <div class="title">
                            <h3>Séance parents/enfant</h3>
                        </div>
                        <div class="price">70€</div>
                        <div class="description">Séance de 60 minutes</div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="section__content">
                <h2>Me contacter</h2>
                <div class="contact__content">
                    <div class="find-me">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2691.031174525458!2d1.3254950149550617!3d47.58663569735129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4a81d7a59590d%3A0x720b37fa25555560!2s5%20Avenue%20du%20Dr%20Jean%20Laigret%2C%2041000%20Blois!5e0!3m2!1sfr!2sfr!4v1669623251192!5m2!1sfr!2sfr"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        <div class="coords">
                            <div class="phone">
                                <p>06.98.50.41.84</p>
                            </div>
                            <div class="address">
                                <p>5 Avenue du docteur Jean Laigret</p>
                                <p>41000 Blois</p>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="form.php">
                        <input type="name" name="name" id="name" placeholder="Votre nom*" required>
                        <p id="name__error">Ce champ ne doit contenir que des lettres</p>
                        <input type="email" name="email" id="email" placeholder="Votre email*" required>
                        <p id="email__error">Cet email est invalide</p>
                        <textarea name="message" id="message" cols="30" rows="6" placeholder="Votre message*" required></textarea>
                        <input type="submit" value="Envoyer" id="send">
                        <p id="validSend">Votre message a bien été envoyé, je vous recontacte au plus vite.</p>
                        <p id="invalidSend">Une erreur est survenue, merci de réessayer plus tard.</p>

                        <?php
                            if(isset($_GET['status']) && !empty($_GET['status'])) {
                                if($_GET['status'] == 'ok') {
                                    echo "<script><document.querySelector('#validSend').style.display = 'block'</script>";
                                } else {
                                    echo "<script><document.querySelector('#invalidSend').style.display = 'block'</script>";
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>
        </section>
        <a href="#hero" id="up">
            <i class="fa-solid fa-circle-chevron-up"></i>
        </a>
    </main>
    <footer>
        <div class="footer__logo">
            <img src="images/logo.png" alt="logo personnage en tailleur">
            <p>Leslie Fessel</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>