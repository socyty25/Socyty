<x-gameslayout.dashboard>
    <h2 class="main-title">Trivia Game</h2>

    <!-- Instructions Box -->
    <div class="instruction-container">
        <div class="card-body">
            <p class="cardtext">Welcome to the Trivia Game!<br><br>

                You'll be presented with multiple-choice questions, each with four answer choices and only one is correct. To assist you, power-ups are available to help you make the right choice. After each question, you'll receive the correct answer along with an explanation.<br><br>

                Choose from three categories: Cyber Threats, Security Best Practices, and Data Privacy. Select your category to begin the game!
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trivia/cyber-threat" :active="request()->is('/games/trivia/cyber-threats')">
                <div class="feature-icon"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Cyber Threats</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trivia/security-best-practice" :active="request()->is('/games/trivia/security-best-practices')">
                <div class="feature-icon"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Security Best Practices</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/trivia/data-privacy" :active="request()->is('/games/trivia/data-privacy')">
                <div class="feature-icon"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Data Privacy</h5>
                </div>
            </x-dashboardlink.link>
        </div>
    </div>
</x-gameslayout.dashboard>
