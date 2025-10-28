<x-navbar.navbarlayout>
        <h2 class="main-title">Simulations</h2>
        <p class="main-description">
            Experience hands-on simulations!
        </p>

        <!-- Features Section -->
        <div class="row">
            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/simulation/email" :active="request()->is('/simulation/email')">
                    <div class="feature-icon"><img src="{{ asset('img/iconsimulation.png') }}" alt="Game Icon"></div>
                    <div class="card-body">
                        <h5 class="card-title">Email Phishing</h5>
                        <p class="card-text">Analyze and determine whether the email is phishing or legitimate!</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/simulation/message" :active="request()->is('/simulation/message')">
                    <div class="feature-icon"><img src="{{ asset('img/iconsimulation.png') }}" alt="Game Icon"></div>
                    <div class="card-body">
                        <h5 class="card-title">SMS Phishing</h5>
                        <p class="card-text">Analyze and determine whether the SMS is phishing or legitimate!</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/simulation/pass-sec" :active="request()->is('/simulation/pass-sec')">
                    <div class="feature-icon"><img src="{{ asset('img/iconsimulation.png') }}" alt="Game Icon"></div>
                    <div class="card-body">
                        <h5 class="card-title">Password Security</h5>
                        <p class="card-text">Learn to make a password following secure password guidelines!</p>
                    </div>
                </x-dashboardlink.link>
            </div>
        </div>
</x-navbar.navbarlayout>
