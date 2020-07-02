@extends('layouts.app')

@section('title', 'Home | Lernen mit Brettspielen')

@section('content')
    <h1 class="mb-3">Spiele rund um Sprache</h1>

    <p>
        Hier stelle ich Spiele vor, die den Wortschatz erweitern und das Ausdrucksvermögen verbessern. Diese Spiele sind in der Regel schnell erklärt und bieten einen einfachen Einstieg.
        Dabei bieten sie aber auch eine ungeheure Vielfalt und erlauben es mit Wörtern und Sätzen zu "spielen".
    </p>

    <h2 class="mb-3">Zurecht prämiert</h2>

    <p>
        Das Spiel des Jahres 2019 ist ebenso einfach wie begeisternd.
        <strong>Just One</strong> ist ein ideales Rate-Spiel für zwischendurch.
    </p>
    <p>
        Die Regeln sind schnell erklärt.
        Alle bis auf den aktiven Spieler schreiben 1 Hinweis auf Ihre Tafeln, vergleichen und sortieren dabei doppelte Hinweise aus. Schafft Ihr es mithilfe der übrigen Hinweise das Wort zu erraten?
    </p>

    @component('components.game')
        @slot('title', 'Just One')
        @slot('img', 'just-one.jpg')
        @slot('players', '3 bis 7 Spieler')
        @slot('playing_time', '20 Minuten')
        @slot('age', 'Ab 8 Jahren')

        @slot('teaser')
            Ein kooperatives Ratespiel für die ganze Familie. Schnell gespielt erzeugt es Suchtcharakter.
        @endslot

        @slot('url', 'https://amzn.to/2wtsR9V')
    @endcomponent

    <p>
        Ein weiterer Klassiker ist das Spiel <strong>Codenames</strong>. 2016 erhielt es die Auszeichnung zum Spiel des Jahres.
    </p>
    <p>
        Teilt euch in 2 Teams auf, bestimmt je einen Erklärer und fangt an. Welches Team schafft es zuerst mithilfe der Hinweiswörter die richtigen Codes zu entschlüsseln und seine Agenten zu finden?
    </p>

    @component('components.game')
        @slot('title', 'Codenames')
        @slot('img', 'codenames.jpg')
        @slot('players', '2 bis 8 Spieler')
        @slot('playing_time', '15 Minuten')
        @slot('age', 'Ab 8 Jahren')

        @slot('teaser')
            Bei Codenames heißt es bildhaft denken und beschreiben. Wer schafft es mit nur einem Hinweis seinem Team mehrere ausliegende Wörter zu erklären.
        @endslot

        @slot('url', 'https://amzn.to/38zNKhM')
    @endcomponent

    <h2 class="mb-3">Zwei Dauerbrenner</h2>

    <p>
        <strong>Tabu</strong> hat trotz seines Alters nichts von seinem Charme eingebüßt.
        Zwei Teams spielen gegeneinander und versuchen sich Begriffe zu erklären. Dabei sind allerdings auf jeder Begriffskarte 5 Wörter angegeben, die bei der Erklärung tabu sind.
    </p>

    @component('components.game')
        @slot('title', 'Tabu')
        @slot('img', 'tabu.jpg')
        @slot('players', 'Ab 4 Spielern')
        @slot('playing_time', 'Ab 20 Minuten')
        @slot('age', 'Ab 12 Jahren')

        @slot('teaser')
            Wer schafft es mehr Wörter in der vorgebenen Zeit zu erklären. Der Kniff -  bei der Erklärung sind 5 Begriffe tabu.
        @endslot

        @slot('url', 'https://amzn.to/2UZNKDI')
    @endcomponent

    <p>
        Ein Spiel darf natürlich nicht fehlen auf dieser List - <strong>Scrabble</strong>.
    </p>
    <p>
        Ein kniffliger Wortspaß für Sprachbegabte und solche, die es werden wollen.
        Die Spieler müssen Worte bilden, Buchstaben anlegen, Wörter untereinander verbinden, und eine möglichst hohe Punktzahl erreichen.
    </p>

    @component('components.game')
        @slot('title', 'Scrabble')
        @slot('img', 'scrabble.jpg')
        @slot('players', '2 bis 4 Spieler')
        @slot('playing_time', '60 Minuten')
        @slot('age', 'Ab 10 Jahren')

        @slot('teaser')
            Ein zeitloser Klassiker für bis zu 4 Spielern.
        @endslot

        @slot('url', 'https://amzn.to/2wtZ3tR')
    @endcomponent
@endsection

@section('sidebar')
    @include('partials.categories')
@endsection
