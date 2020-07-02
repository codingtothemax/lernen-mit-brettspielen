@extends('layouts.app')

@section('title', 'Home | Lernen mit Brettspielen')

@section('content')
    <h1 class="mb-3">Spielerisch die Welt entdecken</h1>

    <p>
        Hier stelle ich Spiele vor, die den Wortschatz erweitern und das Ausdrucksvermögen verbessern. Diese Spiele sind in der Regel schnell erklärt und bieten einen einfachen Einstieg.
        Dabei bieten sie aber auch eine ungeheure Vielfalt und erlauben es mit Wörtern und Sätzen zu "spielen".
    </p>

    <h2 class="mb-3">Deutschland und die Welt</h2>

    <p>
        Bei <strong>Reise um die Erde</strong> lernen die Spieler die großen Städte der Welt kennen.
    </p>
    <p>
        Mit dem Around-The-World-Ticket geht es los zu den schönsten und angesagtesten Städten auf der ganzen Welt.
        Jeder Spieler erhält seine acht ganz persönlichen Traumziele auf verdeckten Karten, die allein oder auch gelegentlich gemeinsam besucht werden sollen.
        Wer zuerst alle Städte auf der Liste bereist hat, gewinnt die Runde.
    </p>

    @component('components.game')
        @slot('title', 'Reise um die Erde')
        @slot('img', 'reise-um-die-erde.jpg')
        @slot('players', '2 bis 4 Spieler')
        @slot('playing_time', '20 Minuten')
        @slot('age', 'Ab 8 Jahren')

        @slot('teaser')
            Spielerisch die Welt entdecken und dabei zu den größten Städten der Welt reisen.
        @endslot

        @slot('url', 'https://amzn.to/2wtsR9V')
    @endcomponent

    <p>
        Eine Nummer kleiner nimmt uns das Spiel <strong>Europa</strong> mit auf eine Reise über unseren Kontinent.
    </p>
    <p>
        Mit Europa beginnt eine interessante und spannende Suche nach Europas Städten, Naturräumen und Gewässern.
        Im Spiel versucht jeder Spieler möglichst genau zu raten, wo der gesuchte Ort liegen könnte – und entscheidet dabei selbst, wie genau er tippen möchte.
    </p>

    @component('components.game')
        @slot('title', 'Europa')
        @slot('img', 'europa.jpg')
        @slot('players', '2 bis 6 Spieler')
        @slot('playing_time', '45 Minuten')
        @slot('age', 'Ab 10 Jahren')

        @slot('teaser')
            Originelles Geografie-Brettspiel, das Spaß und Wissen vereint.
        @endslot

        @slot('url', 'https://amzn.to/38zNKhM')
    @endcomponent

@endsection

@section('sidebar')
    @include('partials.categories')
@endsection
