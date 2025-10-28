<x-navbar.navbarlayout>
        @if (session('error'))
            <script>
                window.errorMessage = `{{ session('error') }}`;
                window.errorTitle = 'Error';
            </script>
        @endif

        @if (session('success'))
            <script>
                window.successMessage = `{{ session('success') }}`;
                window.successTitle = 'Success';
            </script>
        @endif


        <h2 class="main-title">Socyty: Building a Secure Society</h2>
        <p class="main-description">
            Welcome to Socyty, your engaging platform for learning cybersecurity awareness! Learn easily, interactively, and track your progress as you learn. #SecureSocyty
        </p>

        <!-- Features Section -->
        <div class="row">
            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/games" :active="request()->is('/games')">
                    <div class="feature-icon"><img src="{{ asset('img/icongames.png') }}" alt="Game Icon"></div>
                    <div class="card-body">
                        <h5 class="card-title">Games</h5>
                        <p class="card-text">Play our interactive games, including trivia, true or false, and best scenario challenges, covering a variety of cybersecurity topics!</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/simulation" :active="request()->is('/simulation')">
                    <div class="feature-icon"><img src="{{ asset('img/iconsimulation.png') }}" alt="Game Icon"></div>
                    <div class="card-body">
                        <h5 class="card-title">Simulations</h5>
                        <p class="card-text">Experience hands-on simulations focused on email phishing, SMS phishing, and password security!</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4 m-2">
                <x-dashboardlink.link href="/assessment" :active="request()->is('/assessment')">
                    <div class="feature-icon"><img src="{{ asset('img/iconassessment.png') }}" alt="Game Icon"></div>
                    <div class="card-body">
                        <h5 class="card-title">Assessments</h5>
                        <p class="card-text">Evaluate your cybersecurity knowledge with our pre-test and post-test to track your progress and improvement!</p>
                    </div>
                </x-dashboardlink.link>
            </div>
        </div>
</x-navbar.navbarlayout>
