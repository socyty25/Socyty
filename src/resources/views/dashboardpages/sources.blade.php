<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Socyty</title>

    <!-- CSS style and font-->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Particle JS --}}
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <link rel="stylesheet" href="{{ asset('build/assets/app-7ywPSvxu.css') }}">
    <script src="{{ asset('build/assets/app-CWUoBES6.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/navbar/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sources.css') }}">

    <script src="{{ asset('js/particlejs.js') }}" defer></script>
</head>
<body class="h-full">
    <div class="bg-cover bg-center">
        {{-- NavBar --}}
        <x-navbar.navbar></x-navbar.navbar>

        <!-- Main Content -->
        <main class="main-content" id="main-content">
            <!-- Your content -->
            <h2 class="main-title">Resources</h2>

            <!-- Instructions Box -->
            <div class="instruction-container">
                <div class="card-body">
                    <div class="cardtext">
                        <h2>Our games and simulations on Socyty are a great start! But if you're eager to dive deeper and truly understand the 'why' behind cybersecurity awareness, explore these insightful articles:</h2>

                        <ul class="link-buttons">
                            <li><a href="https://www.ibm.com/think/topics/cybersecurity" target="_blank" rel="noopener noreferrer">What is Cybersecurity?</a></li>
                            <li><a href="https://www.upguard.com/blog/cyber-threat#toc-1" target="_blank" rel="noopener noreferrer">What are Cyber Threats?</a></li>
                            <li><a href="https://www.sentinelone.com/cybersecurity-101/cybersecurity/cyber-security-best-practices/#cyber-security-best-practices" target="_blank" rel="noopener noreferrer">What are Security Best Practices?</a></li>
                            <li><a href="https://www.ibm.com/think/topics/data-privacy" target="_blank" rel="noopener noreferrer">What is Data Privacy?</a></li>
                            <li><a href="https://www.cisco.com/c/en/us/products/security/what-are-password-security-and-protection.html" target="_blank" rel="noopener noreferrer">What is Password Security?</a></li>
                            <li><a href="https://www.kaspersky.com/resource-center/definitions/what-is-social-engineering" target="_blank" rel="noopener noreferrer">What is Social Engineering?</a></li>
                            <li><a href="https://www.proofpoint.com/us/threat-reference/phishing" target="_blank" rel="noopener noreferrer">What is Phishing?</a></li>
                            <li><a href="https://www.ibm.com/think/topics/incident-response" target="_blank" rel="noopener noreferrer">What is Incident Response?</a></li>
                            <li><a href="https://www.cisco.com/site/us/en/learn/topics/security/what-is-device-security.html#jump-anchor-0" target="_blank" rel="noopener noreferrer">What is Device Security?</a></li>
                            <li><a href="https://www.garda.com/articles/the-complete-guide-to-workplace-security-protecting-your-people-and-assets" target="_blank" rel="noopener noreferrer">What is Workplace Security?</a></li>
                        </ul>
                        <br><br>
                        <h2>And if you're ready to get hands-on and explore cybersecurity in a more interactive way, check out these recommended learning platforms:</h2>
                        <ul class="link-buttons2">
                            <li><a href="https://tryhackme.com/" target="_blank" rel="noopener noreferrer">TryHackMe</a></li>
                            <li><a href="https://www.hackthebox.com/" target="_blank" rel="noopener noreferrer">Hack The Box</a></li>
                            <li><a href="https://picoctf.org/" target="_blank" rel="noopener noreferrer">picoCTF</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div class="container">
              <h5>© 2025 Socyty</h5>
            </div>
        </footer>
    </div>
</body>
</html>
