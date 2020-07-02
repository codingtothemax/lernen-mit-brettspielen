@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="mb-3">Gemeinsam Lernen mit Brettspielen</h1>

    <p>
        Brettspiele sind eine der besten Möglichkeiten Kindern und Jugendlichen Spass am Lernen zu vermitteln. Heute gibt es zahlreiche Spiele, mit denen sich spielerisch neue Fähigkeiten entwicklen und Wissen aufbauen lässt.
    </p>

    <p>
        Es gibt verschiedene Brettspiele für Kinder, die sich auf <a href="{{ url('spiele-zum-thema-zahlen-und-rechnen') }}" class="bg-blue-700 text-white hover:bg-blue-800">Mathematik</a>,
        <a href="{{ url('geografie') }}" class="bg-blue-700 text-white hover:bg-blue-800">Geographie</a>, Rechtschreibung, Lesen, <a href="{{ url('spiele-rund-um-sprache') }}" class="bg-blue-700 text-white hover:bg-blue-800">Sprechen</a> und vieles mehr konzentrieren. Dabei müssen Fähigkeiten wie Kommunikation, Gedächtnis, Strategie und kritisches Denken eingesetzt werden. </p>

    <p>
        Das Beste daran ist, dass Kinder nicht einmal wissen, dass sie all diese Fähigkeiten einsetzen, weil Brettspiele es zu einer unterhaltsamen Art des Lernens machen!
    </p>

    <h2 class="mb-3">Brettspiele in der Schule</h2>

    <p>
        Eltern, Lehrer und Betreuer können Brettspiele verwenden, um Kindern zu helfen, Vertrauen und bessere Kommunikationsfähigkeiten in so vielen Bereichen zu gewinnen. Sei es im Unterricht oder im Rahmen einer Freizeitgruppe, Spiele können vielseitig eingesetzt werden, um Kindern und Jugendlichen Kompetenzen und Wissen zu vermitteln.
    </p>

    <h2 class="mb-3">Tabu und Memory als klassische Beispiele</h2>

    <p>
        Zwei Beispiele, die viele von Euch kennen werden: Das klassische Memory hilft Kindern und auch Erwachsenen ganz nebenbei ihr Erinnerungsvermögen zu schulen und die Konzentration zu verbessern.
    </p>

    <p>
        Bei Tabu hingegen müssen Begriffe in kurzer Zeit erklärt werden. Der Clou hierbei, fünf Wörter sind tabu, dürfen bei der Erklärung nicht verwendet werden. Hier muss der Spieler um die Ecke denken und arbeitet so an seiner Kommunikationsfähigkeit sowie seiner Kreativität.
    </p>
@endsection

@section('sidebar')
    @include('partials.categories')
@endsection
