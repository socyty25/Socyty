<x-gameslayout.dashboard>
    <h2 class="main-title">True or False Game</h2>

    <!-- Instructions Box -->
    <div class="instruction-container">
        <div class="card-body">
            <p class="cardtext">Welcome to the True or False Game!<br><br>

                Enhance your cybersecurity awareness by testing your knowledge with quick, engaging statements.<br><br>

                You'll be presented with a statement and must choose whether the statement is true or false. To assist you, power-ups are available to help you answer correctly. After each question, you'll receive the correct answer along with an explanation.<br><br>
                
                Choose from three categories: Password Security, Social Engineering, and Phishing. Select your category to begin the game!
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trueorfalse/password-security" :active="request()->is('/games/trueorfalse/password-security')">
                <div class="feature-icon"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Password Security</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trueorfalse/social-engineering" :active="request()->is('/games/trueorfalse/social-engineering')">
                <div class="feature-icon"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Social Engineering</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trueorfalse/phishing" :active="request()->is('/games/trueorfalse/phishing')">
                <div class="feature-icon"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Phishing</h5>
                </div>
            </x-dashboardlink.link>
        </div>
    </div>
</x-gameslayout.dashboard>
