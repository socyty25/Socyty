<x-navbar.navbarlayout>
    @if (session('error'))
        <script>
            window.errorMessage = `{{ session('error') }}`;
            window.errorTitle = 'Error';
        </script>
    @endif

    <h2 class="main-title">Assessments</h2>
        <p class="main-description">
            Evaluate your knowledge and awareness!
        </p>

        <!-- Features Section -->
        <div class="row">
            <div class="col-md-4">
                <x-dashboardlink.link href="/assessment/pretest" :active="request()->is('assessment.pretest')">
                    <div class="feature-icon"><img src="{{ asset('img/iconassessment.png') }}" alt="Game Icon"></div>
                    <div class="card-body">
                        <h5 class="card-title">Pre-test</h5>
                        <p class="card-text">Measure your knowledge before starting the games and simulations!</p>
                        <p>Note: You can only take once</p>
                    </div>
                </x-dashboardlink.link>
            </div>

            <div class="col-md-4">
                <x-dashboardlink.link href="/assessment/posttest" :active="request()->is('assessment.posttest')">
                    <div class="feature-icon"><img src="{{ asset('img/iconassessment.png') }}" alt="Game Icon"></div>
                    <div class="card-body">
                        <h5 class="card-title">Post-test</h5>
                        <p class="card-text">See how much you've learned after completing the games and simulations!</p>
                    </div>
                </x-dashboardlink.link>
            </div>
        </div>
</x-navbar.navbarlayout>
