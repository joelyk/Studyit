<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CapBuild</title>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
</head>
<body>
<header>
    <div class="logo">
        <p>
            <span>Cap</span>Build
        </p>
    </div>
    @include('navbar')
    <div class="toggle_menu">
        <span class="center-menu-bar"></span>
    </div>
</header>
<div class="contain">

    <div class="left">
        <h1 class="text-center">Inscription</h1>
        <h2> Informations personnelles</h2>
        <h5>vos informations personnelles seront sécurisées</h5>

    </div>
    <div class="right">
        <div class="top-right">
            <div class="progress-container">
                <div class="step-indicator active">1</div>Personnel
                <div class="step-indicator">2</div>Contacte
                <div class="step-indicator">3</div>Stage
            </div>
        </div>


        <form id="personneForm" action="{{ route('personnes.store') }}" method="POST" class="form-fieldset">
            @csrf
            <div class="form-step active" data-step="1">
                <fieldset>
                    <div class="form-group" id="group1">
                        <div>
                            <label for="first_name">Prénom :</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" required>
                        </div>
                        <div>
                            <label for="last_name">Nom :</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="age">Date de naissance :</label>
                        <input type="date" id="age" name="age" class="form-control" placeholder="jour">
                    </div>
                    <div class="form-group" #id="sexe1">
                        <label for="gender">Sexe :</label>
                        <label class="lab">
                            Masculin
                            <input type="radio" id="s1" name="gender" class="form-radio" value="masculin">
                        </label>
                        <label class="lab">
                            feminin
                            <input type="radio" id="s1" name="gender" class="form-radio" value="feminin">
                        </label>
                    </div>
                </fieldset>
            </div>

            <div class="form-step" data-step="2">
                <fieldset>
                    <div class="form-group" id="group2">
                        <div>
                            <label for="address">Adresse :</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>
                        <div>
                            <label for="phone_number">Numéro de téléphone :</label>
                            <input type="text" id="phone_number" name="phone_number" class="form-control" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="email">Adresse e-mail :</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </fieldset>
            </div>

            <div class="form-step" data-step="3">
                <fieldset>
                    <div class="form-group">
                        <label for="interests">Mot de passe :</label>
                        <input type="password" id="age" name="age" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="interests">Mot de passe :</label>
                        <input type="password" id="age" name="age" class="form-control">
                    </div>
                </fieldset>
            </div>

            <div class="button-container">
                <button type="button" class="btn" id="prevButton" onclick="showPrevStep()">Précédent</button>
                <button type="button" class="btn-primary" id="nextButton" onclick="showNextStep()">Suivant</button>
            </div>
            <button type="submit" class="btn btn-primary" id="submitButton" style="display: none;">Ajouter</button>
        </form>

    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        const formSteps = document.querySelectorAll('.form-step');
        const stepIndicators = document.querySelectorAll('.step-indicator');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');
        const submitButton = document.getElementById('submitButton');

        let currentStep = 1;

        updateProgress();

        function updateProgress() {
            const totalSteps = formSteps.length;
            const progressPercentage = ((currentStep - 1) / (totalSteps - 1)) * 100;
            updateStepIndicators();
        }

        function updateStepIndicators() {
            stepIndicators.forEach((indicator, index) => {
                if (index + 1 === currentStep) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }

        function showStep(step) {
            formSteps.forEach((stepElement) => {
                stepElement.classList.remove('active');
            });

            formSteps[step - 1].classList.add('active');

            prevButton.disabled = step === 1;
            nextButton.disabled = step === formSteps.length;

            if (step === formSteps.length) {
                submitButton.style.display = 'block';
                nextButton.style.display = 'none';
            } else {
                submitButton.style.display = 'none';
                nextButton.style.display = 'block';
            }

            currentStep = step;
            updateProgress();
        }

        function showPrevStep() {
            if (currentStep > 1) {
                showStep(currentStep - 1);
            }
        }

        function showNextStep() {
            if (currentStep < formSteps.length) {
                showStep(currentStep + 1);
            }
        }

        prevButton.addEventListener('click', showPrevStep);
        nextButton.addEventListener('click', showNextStep);
        // JavaScript pour la barre de progression et les étapes marquées
        var small_menu = document.querySelector('.toggle_menu')
        var menu = document.querySelector('.menu')
        small_menu.onclick=function(){
            small_menu.classList.toggle('active');
            menu.classList.toggle('responsive');
        }
    });
    </script>
    </body>
</html>
