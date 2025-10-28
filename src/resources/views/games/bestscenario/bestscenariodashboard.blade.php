<x-gameslayout.dashboard>
    <h2 class="main-title">Best Scenario Game</h2>

    <!-- Instructions Box -->
    <div class="instruction-container">
        <div class="card-body">
            <p class="cardtext">Welcome to the Best Scenario Game!<br><br>

                Learn how to make safe and smart decisions in cybersecurity situations.<br><br>
                
                You'll be presented with a realistic security scenario and must choose the best course of action from three possible answers. To assist you, power-ups are available to help you make the right choice. After each question, you'll receive the correct answer along with an explanation.<br><br>

                Choose from three categories: Incident Response, Device Security, and Workplace Security. Select your category to begin the game!
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/bestscenario/incident-response" :active="request()->is('/games/bestscenario/incident-response')">
                <div class="feature-icon"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Incident Response</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/bestscenario/device-security" :active="request()->is('/games/bestscenario/device-security')">
                <div class="feature-icon"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Device Security</h5>
                </div>
            </x-dashboardlink.link>
        </div>

        <div class="col-md-4 m-2">
            <x-dashboardlink.link href="/games/bestscenario/workplace-security" :active="request()->is('/games/bestscenario/workplace-security')">
                <div class="feature-icon"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                <div class="card-body">
                    <h5 class="card-title">Workplace Security</h5>
                </div>
            </x-dashboardlink.link>
        </div>
    </div>
</x-gameslayout.dashboard>
