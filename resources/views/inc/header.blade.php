<header>
    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 15px 20px;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            border-bottom: 2px solid #0f3460;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            margin: 10px;
        }
        
        .navbar a {
            text-decoration: none;
            color: white;
            font-weight: 600;
            font-size: 18px;
            padding: 12px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .navbar a:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }

        .navbar-left {
            display: flex;
            gap: 20px;
        }

        .navbar-right {
            display: flex;
            gap: 15px;
        }

        .navbar-right a {
            font-size: 16px;
            padding: 10px 14px;
            background-color: #87CEEB;
            color: #000;
        }
    </style>
    
    <nav class="navbar">
        <div class="navbar-left">
            <a href="/">Sākums</a>
            <a href="/aktivitates">Aktivitātes</a>
            <a href="/kategorijas">Kategorijas</a>
            <a href="/nodarbibas">Nodarbības</a>
            <a href="/vaditaji">Vadītāji</a>
            <a href="/pieteikumi">Pieteikumi</a>
            <a href="/dalibnieki">Dalībnieki</a>
        </div>
        <div class="navbar-right">
            <a href="/login">Pieslēgties</a>
            <a href="/register">Reģistrēties</a>
        </div>
    </nav>
</header>