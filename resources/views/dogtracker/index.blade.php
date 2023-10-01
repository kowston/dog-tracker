@extends('layouts.app')
@section('content')

    <div class="main-layout">
        <header class="hero">
            <h1>AllerGuard Dog Health</h1>
            <h2>Tracking Allergies for Optimal Canine Care</h2>
        </header>
        <main class="welcome">
            <div class="welcome-text">
                <p><strong>Pinpoint Causes and Symptoms of Allergies</strong></p>
                <p>Allergy Tracker is the perfect app for keeping your dog healthy and happy. Our app helps you to track your dog's allergies, pinpointing the causes and symptoms of any allergies they may have. With our app, you can easily monitor your dog's allergies and make sure they are getting the best care possible.</p>
            </div>
            <div class="welcome-img">
                <form action="/track-dog.php">
                    <button>Start Tracking {{ $dogName."'s" }} Allergies</button>
                </form>
            </div>
            <div class="points">
                <div class="environments">
                    <h2>Environment</h2>
                    <p>track your dogs's environment such as where they have taken a walk, has their bedding changed, have any certains visitors been over.</p>
                </div>

                <div class="symptoms">
                    <h2>Symptoms</h2>
                    <p>Track the symptoms your dog is showing, excesive licking, scratching, rubbing, pacing, panting etc.</p>
                </div>
            </div>
        </main>
        <footer class="footer">
            <p>footer</p>
        </footer>
    </div>
@stop

