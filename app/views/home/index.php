<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESCOM - Team Esport Mobile Legends Madagascar</title>
    <meta name="description" content="Rejoignez l'élite de Mobile Legends à Madagascar avec l'équipe GESCOM">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Rajdhani', sans-serif;
            background: #0a0a0f;
            color: #ffffff;
            line-height: 1.6;
            overflow-x: hidden;
            position: relative;
        }

        /* Background avec logo de l'équipe */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at center, rgba(255, 215, 0, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(0, 162, 255, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 20% 80%, rgba(255, 0, 128, 0.05) 0%, transparent 50%),
                linear-gradient(135deg, #0a0a0f 0%, #1a0f2e 50%, #0f1a2e 100%);
            z-index: -2;
        }

        /* Logo GESCOM en arrière-plan */
        body::after {
            content: 'G';
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Orbitron', monospace;
            font-size: 40vw;
            font-weight: 900;
            color: rgba(255, 215, 0, 0.02);
            z-index: -1;
            pointer-events: none;
            animation: logoFloat 8s ease-in-out infinite;
        }

        @keyframes logoFloat {
            0%, 100% { transform: translate(-50%, -50%) scale(1) rotate(0deg); }
            50% { transform: translate(-50%, -45%) scale(1.05) rotate(2deg); }
        }

        /* Particules Mobile Legends */
        .ml-particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .ml-particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: linear-gradient(45deg, #ffd700, #ff6b35);
            border-radius: 50%;
            animation: mlFloat 8s ease-in-out infinite;
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        @keyframes mlFloat {
            0%, 100% { 
                transform: translateY(0px) rotate(0deg);
                opacity: 0.3;
            }
            50% { 
                transform: translateY(-30px) rotate(180deg);
                opacity: 1;
            }
        }

        /* Navigation avec effet Mobile Legends */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(10, 10, 15, 0.95);
            backdrop-filter: blur(15px);
            z-index: 1000;
            padding: 1rem 0;
            border-bottom: 2px solid rgba(255, 215, 0, 0.3);
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background: rgba(10, 10, 15, 0.98);
            box-shadow: 0 5px 30px rgba(255, 215, 0, 0.2);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-family: 'Orbitron', monospace;
            font-size: 1.8rem;
            font-weight: 900;
            background: linear-gradient(45deg, #ffd700, #ff6b35, #00a2ff);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: logoGradient 3s ease-in-out infinite;
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
        }

        @keyframes logoGradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-links a::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #ffd700, #ff6b35);
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: #ffd700;
            text-shadow: 0 0 15px rgba(255, 215, 0, 0.8);
        }

        .nav-links a:hover::before {
            width: 100%;
        }

        /* Section Hero avec animations Mobile Legends */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            background: 
                radial-gradient(circle at 30% 20%, rgba(255, 215, 0, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(0, 162, 255, 0.1) 0%, transparent 50%);
        }

        .hero-content {
            max-width: 900px;
            padding: 0 2rem;
            animation: heroAppear 2s ease-out;
        }

        @keyframes heroAppear {
            0% {
                opacity: 0;
                transform: translateY(50px) scale(0.9);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .hero h1 {
            font-family: 'Orbitron', monospace;
            font-size: 5rem;
            font-weight: 900;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #ffd700, #ff6b35, #00a2ff, #ff0080);
            background-size: 400% 400%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: heroGradient 4s ease-in-out infinite;
            text-shadow: 0 0 30px rgba(255, 215, 0, 0.5);
            position: relative;
        }

        .hero h1::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.2) 50%, transparent 70%);
            animation: shine 3s ease-in-out infinite;
        }

        @keyframes heroGradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes shine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease-out 0.5s both;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 0.9;
                transform: translateY(0);
            }
        }

        .btn {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(45deg, #ffd700, #ff6b35);
            color: #000;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            animation: buttonPulse 2s ease-in-out infinite;
        }

        @keyframes buttonPulse {
            0%, 100% { box-shadow: 0 0 20px rgba(255, 215, 0, 0.4); }
            50% { box-shadow: 0 0 30px rgba(255, 215, 0, 0.8); }
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.6);
        }

        /* Sections */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .definition {
            padding: 100px 0;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }

        .definition h2 {
            font-family: 'Orbitron', monospace;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 2rem;
            color: #ffd700;
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.5);
        }

        .definition p {
            font-size: 1.2rem;
            line-height: 2;
            text-align: center;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Section Équipe */
        .team {
            padding: 100px 0;
            position: relative;
        }

        .team h2 {
            font-family: 'Orbitron', monospace;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #ffd700;
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.5);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .team-member {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 2px solid rgba(255, 215, 0, 0.2);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .team-member::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 215, 0, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .team-member:hover::before {
            left: 100%;
        }

        .team-member:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: rgba(255, 215, 0, 0.6);
            box-shadow: 0 15px 40px rgba(255, 215, 0, 0.3);
        }

        .team-member img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 1rem;
            border: 3px solid #ffd700;
            object-fit: cover;
        }

        .team-member h3 {
            font-family: 'Orbitron', monospace;
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #ffd700;
        }

        .team-member p {
            color: #00a2ff;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Section Vidéos */
        .videos {
            padding: 100px 0;
            background: rgba(0, 0, 0, 0.3);
        }

        .videos h2 {
            font-family: 'Orbitron', monospace;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #ffd700;
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.5);
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .video-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 2px solid rgba(255, 215, 0, 0.2);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.4s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 215, 0, 0.6);
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.3);
        }

        .video-card iframe {
            width: 100%;
            height: 200px;
            border: none;
        }

        .video-card h3 {
            padding: 1rem;
            font-family: 'Orbitron', monospace;
            color: #ffd700;
            font-size: 1.1rem;
        }

        .video-card p {
            padding: 0 1rem 1rem;
            opacity: 0.8;
            font-size: 0.9rem;
        }

        /* Footer */
        .footer {
            background: rgba(0, 0, 0, 0.6);
            padding: 50px 0 20px;
            border-top: 2px solid rgba(255, 215, 0, 0.3);
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-brand h3 {
            font-family: 'Orbitron', monospace;
            color: #ffd700;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .footer-links h4,
        .footer-contact h4 {
            color: #00a2ff;
            margin-bottom: 1rem;
            font-family: 'Orbitron', monospace;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links a,
        .footer-contact p {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s ease;
            opacity: 0.8;
        }

        .footer-links a:hover {
            color: #ffd700;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-icons a {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #ffd700, #ff6b35);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.6);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 215, 0, 0.2);
            opacity: 0.8;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 3rem;
            }
            
            .nav-links {
                display: none;
            }
            
            body::after {
                font-size: 60vw;
            }
            
            .team-grid,
            .video-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Animations d'apparition au scroll */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Particules Mobile Legends -->
    <div class="ml-particles" id="mlParticles"></div>

    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="logo">🔥 GESCOM eSport</div>
            <ul class="nav-links">
                <li><a href="/">Accueil</a></li>
                <li><a href="#team">Équipe</a></li>
                <li><a href="#videos">Vidéos</a></li>
                <li><a href="/login">Connexion</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1>GESCOM eSport</h1>
            <p>La première équipe professionnelle Mobile Legends de Madagascar. 🇲🇬</p>
            <a href="/auth/register" class="btn btn-primary">Rejoindre l'équipe</a>
        </div>
    </section>

    <section class="definition fade-in">
        <div class="container">
            <h2>Qui sommes-nous ?</h2>
            <p>GESCOM est une structure eSport dédiée à Mobile Legends Bang Bang, basée à Madagascar. Notre objectif est de faire briller les talents malgaches sur la scène internationale et d'offrir une plateforme sérieuse aux joueurs passionnés.</p>
        </div>
    </section>

    <section class="team fade-in" id="team">
        <div class="container">
            <h2>Notre Équipe</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="https://via.placeholder.com/80x80/ffd700/000000?text=A" alt="Alpha">
                    <h3>Alpha</h3>
                    <p>Tank / Leader</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/80x80/ff6b35/000000?text=B" alt="Beta">
                    <h3>Beta</h3>
                    <p>Assassin</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/80x80/00a2ff/000000?text=G" alt="Gamma">
                    <h3>Gamma</h3>
                    <p>Marksman</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/80x80/ff0080/000000?text=D" alt="Delta">
                    <h3>Delta</h3>
                    <p>Mage</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/80x80/8a2be2/000000?text=E" alt="Echo">
                    <h3>Echo</h3>
                    <p>Support</p>
                </div>
            </div>
        </div>
    </section>

    <section class="videos fade-in" id="videos">
        <div class="container">
            <h2>Dernières Vidéos</h2>
            <div class="video-grid">
                <div class="video-card">
                    <iframe src="" allowfullscreen></iframe>
                    <h3></h3>
                    <p>Revivez notre victoire décisive en finale du tournoi Madagascar Cup 2024</p>
                </div>
                <div class="video-card">
                    <iframe src="" allowfullscreen></iframe>
                    <h3></h3>
                    <p>Notre coach analyse les stratégies gagnantes de la saison en cours</p>
                </div>
                <div class="video-card">
                    <iframe src="" allowfullscreen></iframe>
                    <h3></h3>
                    <p>Dans les coulisses de notre préparation pour le championnat international</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <h3>GESCOM eSport</h3>
                    <p>Team Mobile Legends - Madagascar</p>
                    <div class="social-icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-youtube'></i></a>
                        <a href="#"><i class='bx bxl-twitch'></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li><a href="#team">Équipe</a></li>
                        <li><a href="#videos">Vidéos</a></li>
                        <li><a href="/login">Connexion</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Contact</h4>
                    <p><i class='bx bx-envelope'></i> contact@gescom.mg</p>
                    <p><i class='bx bx-globe'></i> www.gescom.mg</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 GESCOM. Tous droits réservés. Fiers de représenter Madagascar sur la scène eSport.</p>
            </div>
        </div>
    </footer>

    <script>
        // Créer les particules Mobile Legends
        function createMLParticles() {
            const container = document.getElementById('mlParticles');
            const particleCount = 30;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'ml-particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 8 + 's';
                particle.style.animationDuration = (Math.random() * 4 + 4) + 's';
                container.appendChild(particle);
            }
        }

        // Effet navbar au scroll
        function handleNavbarScroll() {
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }

        // Animation des éléments au scroll
        function handleScrollAnimations() {
            const elements = document.querySelectorAll('.fade-in');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            elements.forEach(el => observer.observe(el));
        }

        // Smooth scroll pour les liens d'ancrage
        function handleSmoothScroll() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        }

        // Effet de parallaxe sur le logo
        function handleLogoParallax() {
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallax = document.body;
                const speed = scrolled * 0.1;
                
                if (parallax.style.setProperty) {
                    parallax.style.setProperty('--scroll', speed + 'px');
                }
            });
        }

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            createMLParticles();
            handleNavbarScroll();
            handleScrollAnimations();
            handleSmoothScroll();
            handleLogoParallax();
        });

        // Effet de typing sur le titre (optionnel)
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.textContent = '';
            
            function type() {
                if (i < text.length) {
                    element.textContent += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            type();
        }

        // Animation des cartes d'équipe
        document.querySelectorAll('.team-member').forEach((member, index) => {
            member.style.animationDelay = (index * 0.2) + 's';
            member.style.animation = 'fadeInUp 0.6s ease-out forwards';
        });
    </script>
</body>
</html>