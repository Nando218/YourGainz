<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourGainz - Fitness Tracking App</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #000;
            color: #fff;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Background image and overlay */
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.5;
            background-image: url('https://res.cloudinary.com/doy4x4chv/image/upload/v1741720581/landing1_mimc34.png');
            background-size: cover;
            background-position: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,41,51,0.9));
            z-index: -1;
        }

        /* Container for all content */
        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
            z-index: 1;
        }

        /* Header styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .logo-your {
            color: #fff;
        }

        .logo-gainz {
            color: #fff700;
        }

        .login-btn {
            background-color: #fff700;
            color: #000;
            border: none;
            border-radius: 50px;
            padding: 10px 24px;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #e6de00;
        }

        /* Main content styles */
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .hero-text {
            margin-bottom: 30px;
        }

        .hero-text h1 {
            font-size: 42px;
            font-weight: bold;
            line-height: 1.2;
            margin-bottom: 10px;
        }

        .brand-highlight {
            color: #fff700;
            display: block;
            margin-top: 10px;
        }

        .description {
            max-width: 600px;
            margin: 0 auto 40px;
            line-height: 1.6;
            font-size: 16px;
            color: #f0f0f0;
        }

        .next-btn {
            background-color: #fff700;
            color: #000;
            border: none;
            border-radius: 50px;
            padding: 12px 40px;
            font-weight: bold;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .next-btn:hover {
            background-color: #e6de00;
        }

        /* Pagination dots */
        .pagination {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .dots {
            display: flex;
            gap: 8px;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #666;
        }

        .dot.active {
            background-color: #fff;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .logo {
                font-size: 24px;
            }

            .hero-text h1 {
                font-size: 32px;
            }

            .description {
                font-size: 14px;
                padding: 0 20px;
            }
        }

        @media (max-width: 480px) {
            .logo {
                font-size: 20px;
            }

            .login-btn {
                padding: 8px 16px;
                font-size: 14px;
            }

            .hero-text h1 {
                font-size: 28px;
            }

            .next-btn {
                padding: 10px 30px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Background image and overlay -->
    <div class="background"></div>
    <div class="overlay"></div>

    <!-- Main container -->
    <div class="container">
        <!-- Header with logo and login button -->
        <header>
            <div class="logo">
                <span class="logo-your">YOUR</span><span class="logo-gainz">GAINZ</span>
            </div>
<button class="login-btn" onclick="window.location.href='/login'">Log In</button>
        </header>

        <!-- Main content -->
        <main>
            <div class="hero-text">
                <h1>
                    Sigue todo tu progreso<br>
                    en el gimnasio con<br>
                    <span class="brand-highlight">YourGainz</span>
                </h1>
            </div>

            <p class="description">
                Aplicación de seguimiento de fitness diseñada para ayudarte a alcanzar tus 
                objetivos de fitness. YourGainz proporciona herramientas para registrar 
                ejercicios, seguir el progreso.
            </p>

            <button class="next-btn">Siguiente</button>
        </main>

        <!-- Pagination dots -->
        <div class="pagination">
            <div class="dots">
                <div class="dot active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>
<script>
    const slides = [
        {
            description: 'Aplicación de seguimiento de fitness diseñada para ayudarte a alcanzar tus objetivos de fitness. YourGainz proporciona herramientas para registrar ejercicios, seguir el progreso.',
            backgroundImage: 'https://res.cloudinary.com/doy4x4chv/image/upload/v1741720581/landing1_mimc34.png',
            activeDot: 0
        },
        {
            description: 'Esta innovadora aplicación te permite registrar tus entrenamientos, realizar un seguimiento detallado de tu evolución y documentar tu progreso con imágenes.',
            backgroundImage: 'https://res.cloudinary.com/doy4x4chv/image/upload/v1741720678/landing2_lp72bo.png',
            activeDot: 1
        },
        {
            description: 'Con YourGainz, además de realizar un seguimiento de tu progreso, podrás explorar y visualizar una amplia variedad de ejercicios.',
            backgroundImage: 'https://res.cloudinary.com/doy4x4chv/image/upload/v1741720941/landing3_k9et6u.png',
            activeDot: 2
        },
        {
            description: '¿Estás listo para llevar tus entrenamientos al siguiente nivel? Con YourGainz, empezar es fácil y completamente gratis. Regístrate ahora y descubre todo lo que necesitas para alcanzar tus objetivos de fitness.',
            backgroundImage: 'https://res.cloudinary.com/doy4x4chv/image/upload/v1741721100/landing4_nz90pv.png',
            activeDot: 3
        }
    ];

    let currentSlide = 0;
    const descriptionElement = document.querySelector('.description');
    const backgroundElement = document.querySelector('.background');
    const dots = document.querySelectorAll('.dot');

    document.querySelector('.next-btn').addEventListener('click', () => {
        if (currentSlide === slides.length - 1) {
            window.location.href = '/register';
            return;
        }
        
        currentSlide = (currentSlide + 1) % slides.length;
        
        const button = document.querySelector('.next-btn');
        button.textContent = currentSlide === slides.length - 1 ? 'Regístrate' : 'Siguiente';
        
        descriptionElement.textContent = slides[currentSlide].description;
        backgroundElement.style.backgroundImage = `url('${slides[currentSlide].backgroundImage}')`;
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === slides[currentSlide].activeDot);
        });
    });
</script>
</body>
</html>

