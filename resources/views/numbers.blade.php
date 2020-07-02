@extends('layouts.app')

@section('title', 'Spiele zum Thema Zahlen und Rechnen')

@section('content')
    <h1 class="mb-3">Spiele zum Thema Zahlen und Rechnen</h1>

    <h2 class="mb-3">Für den Einstieg</h2>

    <p>
        Bei <strong>Uno</strong> lernen auch die Kleinen schon den Umgang mit Zahlen. Alles verpackt in ein rasantes Kartenspiel, was auch für Größere gut geeignet ist.
    </p>
    <p>
        Die Spieler legen abwechselnd passende Handkarten auf dem Kartenstapel ab und versuchen, möglichst als Erster alle Karten loszuwerden.
        Spezielle Aktionskarten bringen immer wieder neue Wendungen und lassen die Mitspieler alt aussehen.
    </p>

    @component('components.game')
        @slot('title', 'Uno')
        @slot('img', 'uno.jpg')
        @slot('players', '2 bis 10 Spieler')
        @slot('playing_time', '10 Minuten')
        @slot('age', 'Ab 7 Jahren')

        @slot('teaser')
            Eines der bekanntesten Kartenspiele. Einfache Regeln und kurze Spieldauer machen es zu einem beliebten Zeitvertreib.
        @endslot

        @slot('url', 'https://amzn.to/39N7cro')
    @endcomponent

    <p>
        Das zweite Spiel richtet sich auch an das junge Publikum. In <strong>ich lerne rechnen</strong> lernen wir in 6 verschiedenen Schwierigkeitsstufen:
        Zählen, Addieren, Subtrahieren, Zahlen erkennen, Zahlen lesen und Multiplizieren.
    </p>
    <p>
        Durch ein selbstkorrigierendes System kann sich das Kind auch alleine mit dem Spiel beschäfitgen.
    </p>

    @component('components.game')
        @slot('title', 'ich lerne rechnen')
        @slot('img', 'ich-lerne-rechnen.jpg')
        @slot('players', 'Ab 1 Spieler')
        @slot('playing_time', '10+ Minuten')
        @slot('age', 'Ab 4 Jahren')

        @slot('teaser')
            Die ersten Schritte im Rechnen werden hier spielerisch den Kindern vermittelt.
        @endslot

        @slot('url', 'https://amzn.to/324Ctnj')
    @endcomponent

@endsection

@section('sidebar')
    @include('partials.categories')
@endsection
