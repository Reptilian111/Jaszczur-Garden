<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Ogród Jaszczura</title>
  <link rel="icon" type="image/png" href="favicon.png" />
  <style>
    :root { --overlay: rgba(0,0,0,0.25); }

    html, body {
      height: 100%;
      margin: 0;
      overflow: hidden; /* brak przewijania */
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial;
      color: #fff;
    }

    .bg {
      position: fixed; inset: 0;
      background: url('background.jpg') center/cover no-repeat;
      z-index: -3;
    }

    .overlay {
      position: fixed; inset: 0;
      background: linear-gradient(to bottom, rgba(0,0,0,0.15), rgba(0,0,0,0.35));
      z-index: -2;
    }

    .fire {
      position: fixed; bottom: 0;
      width: 150px; height: 250px;
      background: radial-gradient(circle at 50% 80%, rgba(255,180,0,0.8) 0%, rgba(255,80,0,0.6) 40%, rgba(255,0,0,0.2) 70%, transparent 100%);
      filter: blur(25px);
      animation: flameMove 2s infinite alternate ease-in-out;
      opacity: 0.8; z-index: -1;
    }

    .fire::before, .fire::after {
      content: "";
      position: absolute; width: 100%; height: 100%;
      background: radial-gradient(circle at 50% 80%, rgba(255,220,120,0.7) 0%, rgba(255,140,0,0.5) 30%, rgba(255,0,0,0.2) 70%, transparent 100%);
      filter: blur(40px); opacity: 0.8;
      animation: flameFlicker 1.8s infinite alternate ease-in-out;
    }

    .fire::after { animation-delay: .6s; transform: scale(1.1); }
    .fire.left { left: 40px; }
    .fire.right { right: 40px; }

    @keyframes flameMove {
      0% { transform: scaleY(1) translateY(0); }
      50% { transform: scaleY(1.15) translateY(-5px); }
      100% { transform: scaleY(1) translateY(0); }
    }

    @keyframes flameFlicker {
      0% { opacity: 0.7; filter: blur(30px) brightness(1); }
      50% { opacity: 1; filter: blur(35px) brightness(1.3); }
      100% { opacity: 0.8; filter: blur(40px) brightness(0.9); }
    }

    .container {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      padding: 36px 16px;
      text-align: center;
      position: relative;
    }

    h1 {
      margin: 18px 0 0;
      font-weight: bold;
      font-size: clamp(28px, 6vw, 64px);
      text-shadow: 0 0 8px rgba(255,255,255,0.8);
      transition: text-shadow 0.3s;
    }

    h1:hover {
      text-shadow: 0 0 12px rgba(255,255,255,0.9),
                   0 0 20px rgba(255,150,0,0.8);
    }

    .bottom-link {
      position: absolute;
      bottom: 80px; /* ⬆️ unosi link wyżej */
    }

    .twitch-link {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      padding: 12px 20px;
      border-radius: 999px;
      background: rgba(0,0,0,0.45);
      backdrop-filter: blur(6px);
      color: #fff;
      font-weight: 600;
      font-size: 18px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.4);
      transition: all .14s ease;
    }

    .twitch-link:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }

    .twitch-logo {
      width: 24px;
      height: 24px;
      transition: transform 0.2s, filter 0.3s;
      filter: drop-shadow(0 0 4px rgba(186,104,200,0.8));
    }

    .twitch-link:hover .twitch-logo {
      transform: scale(1.1);
      filter: drop-shadow(0 0 10px rgba(186,104,200,1));
    }

    @media (max-width: 420px) {
      .twitch-link { font-size: 16px; padding: 10px 14px; }
      .fire { width: 90px; height: 160px; }
      .twitch-logo { width: 20px; height: 20px; }
      .bottom-link { bottom: 40px; } /* na telefonach też wyżej */
    }

  </style>
</head>
<body>
  <div class="bg"></div>
  <div class="overlay"></div>
  <div class="fire left"></div>
  <div class="fire right"></div>

  <main class="container">
    <header><h1>Ogród Jaszczura</h1></header>

    <footer class="bottom-link">
      <a class="twitch-link" href="https://twitch.tv/reptilianin_111" target="_blank" rel="noopener noreferrer">
        <svg class="twitch-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2400 2800" fill="#9146FF">
          <path d="M500 0L100 400v2000h600v400h400l400-400h600l800-800V0H500zm1800 1400l-400 400h-600l-400 400v-400H500V200h1800v1200zm-600-200h200V600h-200v600zm-600 0h200V600h-200v600z"/>
        </svg>
        Oglądaj na Twitchu
      </a>
    </footer>
  </main>
</body>
</html>
