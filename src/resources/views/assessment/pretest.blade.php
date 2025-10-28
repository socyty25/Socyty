<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assessment</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <link rel="stylesheet" href="{{ asset('build/assets/app-7ywPSvxu.css') }}">
    <script src="{{ asset('build/assets/app-CWUoBES6.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/multiplechoice.css') }}">
    <script src="{{ asset('js/particlejs.js') }}" defer></script>
    <script src="{{ asset('js/error.js') }}" defer></script>
</head>
<body id="main-content">
    <div class="container">
        @if (session('error'))
            <script>
                window.errorMessage = `{{ session('error') }}`;
                window.errorTitle = 'Error';
            </script>
        @endif

        <div id="game" class="justify-center flex-column">
            <div id="hud">
                <div id="items">
                    <div class="gametitle">
                        <h1>Pre-test Assessment</h1>
                    </div>
                    <div class="items2">
                        <p id="progresstext" class="questiontext">Question</p>
                        <p id="scoretext" class="scoretext" style="display: none;">Score: 0</p>
                    </div>
                </div>
            </div>

            <div class="questioncontainer">
                <h2 id="question">What is the answer to this question?</h2>
            </div>

            <div class="choice-wrapper2">
                @php
                    $letters = ['A', 'B', 'C', 'D'];
                    $initialChoices = $questions->first()->choices ?? [];
                @endphp

                @foreach ($initialChoices as $index => $choice)
                    <div class="choice-container2">
                        <p class="choice-letter">{{ $letters[$index] }}.</p>
                        <p class="choice-desc"
                           data-number="{{ $index + 1 }}"
                           data-choice-id="{{ $choice->id }}">
                           {{ $choice->choice_text }}
                        </p>
                    </div>
                @endforeach
            </div>

            <div class="buttons">
                <button id="submitbutton">Submit</button>
                <button id="nextbutton" style="display: none;">Next</button>

                <form id="finish-form" action="{{ route('assessment.pretest.complete') }}" method="POST" style="display: none;">
                    @csrf
                    <input type="hidden" id="userAnswers" name="answers">
                    <button type="submit" id="finishbutton">Finish</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const questions = @json($questions);
    </script>
    
    <script src="{{ asset('js/assessment/pretest.js') }}" defer></script>
</body>
</html>
