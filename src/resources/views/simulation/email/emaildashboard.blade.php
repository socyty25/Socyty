<x-simulation.dashboard>
    <h2 class="main-title">Email Phishing Simulation</h2>

    @if(session('error'))
        <script>
            window.errorMessage = `{{ session('error') }}`;
            window.errorTitle = 'Error';
        </script>
    @endif

    <div class="instruction-container">
        <div class="card-body">
            <p class="cardtext">Welcome to the Email Phishing Simulation!<br><br>
                
                Sharpen your ability to spot and identify phishing emails.<br><br>

                You'll be presented with realistic email scenarios and must determine whether each email is phishing or legitimate. After making your choice, you'll receive the correct answer along with an explanation to enhance your understanding.<br><br>

                Choose from five difficulty levels and start the simulation when you're ready!<br><br>
                
                <span style="color: red;">Note: You can interact with the elements of the email</span>
            </p>
        </div>
    </div>

    <div class="row-sim">
        @foreach (range(1, 5) as $level)
            <div class="col-md-4 m-2">
                <x-dashboardlink.link2
                    href="{{ url('/simulation/email/' . $level) }}"
                    :active="request()->is('/simulation/email/' . $level)"
                >
                    <div class="feature-icon"><img src="{{ asset('img/iconsimulation.png') }}" alt="Game Icon"></div>
                    <div class="card-body-sim">
                        <h5 class="card-title-sim">Level {{ $level }}</h5>
                    </div>
                </x-dashboardlink.link2>
            </div>
        @endforeach
    </div>
</x-simulation.dashboard>
