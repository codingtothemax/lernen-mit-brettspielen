@extends('layouts.app')

@section('title', 'Kreative Brettspiele')

@section('content')
    <h1 class="mb-3">Kreative Spiele</h1>

    <p>
        Brett- und Kartenspiele können ein ungeheuren Zauber verbreiten. Sie regen unseren Geist an, verblüffen uns und fördern unsere Fantasie.
        Diese Spiele arbeiten oft mit Bildern und unserer Vorstellungskraft.
    </p>

    <h2 class="mb-3">"Bildhafte" Spiele</h2>

    <p>
        Die ersten drei Spiele, die ich vorstellen möchte arbeiten mit Bildern und regen dabei unsere Vorstellungskraft an.
        Bei <strong>Concept</strong> seher wir vor uns einen großen Spielplan mit Bildern und Symbolen. Ein Spieler versucht nun durch Platzieren von mehreren Spielmarkern einen Begriff zu erklären.
    </p>
    <p>
        Wer als Erster den gesuchten Begriff richtig errät, erhält die Siegpunkte. Es wird über 12 Runden gespielt. Wer dann die meisten Siegpunkte sammeln konnte, ist der Gewinner.
    </p>

    @component('components.game')
        @slot('title', 'Concept')
        @slot('img', 'concept.jpg')
        @slot('players', '4 bis 16 Spieler')
        @slot('playing_time', '40 Minuten')
        @slot('age', 'Ab 10 Jahren')

        @slot('teaser')
            In Concept kommunizieren die Spieler ausschließlich über Symbole, die flexibel miteinander
            kombiniert werden. So ist es tatsächlich möglich stumm zu kommunizieren!
        @endslot

        @slot('url', 'https://amzn.to/2SYhzCb')
    @endcomponent

    <p>
        Das zweite Spiel, das ich hier vorstellen möchte, hat den Namen <strong>Silhouette</strong>.
        Um bei Silhouette erfolgreich zu sein, bedarf es einer gehörigen Portion Fantasie und Kreativität.
    </p>
    <p>
        Aus zwei Silhouetten muss ein Begriff gebildet werden. Ob eine Lösung von den Mitspielern akzeptiert wird, oder nicht, hängt nur allzu oft von der richtigen Begründung ab.
    </p>

    @component('components.game')
        @slot('title', 'Silhouette')
        @slot('img', 'silhouette.jpg')
        @slot('players', '2 oder mehr Spieler')
        @slot('playing_time', '40 Minuten')
        @slot('age', 'Ab 8 Jahren')

        @slot('teaser')
            Das Spiel für jeden, der clever kombiniert und gerne um die Ecke denkt.
            Da wird die Katze gemeinsam mit der Wäscheleine zur „Katzenwäsche" oder der Hai mit der Lampe sogar zum „Hai-Light"!
        @endslot

        @slot('url', 'https://amzn.to/324Ctnj')
    @endcomponent

    <p>
        <strong>Dixit</strong> ist ein Spiel für Menschen mit Fantasie. In jeder Runde schlüpft ein anderer in die Rolle des Erzählers. Er überlegt sich zu einer der sechs Handkarten eine treffende Aussage.
        Diese kann aus einem oder mehreren Worten bestehen, es kann ein Zitat sein, ein Auszug oder eine Variation aus einem berühmten Werk.

        Die Mitspieler suchen entsprechend der Bedeutung aus ihren Handkarten jeweils diejenige aus von der sie glauben, das sie am besten zu der Vorgabe passt.
    </p>
    <p>
        Welche Karte wurde von dem Erzähler ausgewählt? Welche Karte kommt dieser am nächsten? Nicht zu viel verraten und nicht zu wenig, das ist die Kunst.
    </p>

    @component('components.game')
        @slot('title', 'Dixit')
        @slot('img', 'dixit.jpg')
        @slot('players', '2 bis 6 Spieler')
        @slot('playing_time', 'Ab 30 Minuten')
        @slot('age', 'Ab 8 Jahren')

        @slot('teaser')
            Ein liebevoll gestaltetes Spiel was jede Menge Fantasie erfordert. Schnell zu erklären ist es für jede Altersgruppe gut geeignet.
        @endslot

        @slot('url', 'https://amzn.to/2V5Ivm3')
    @endcomponent

    <h2 class="text-xl mb-3">Der Klassiker</h2>

    <p>
        Ein Klassiker darf natürlich nicht fehlen - <strong>Activity</strong>
    </p>
    <p>
        Die Grundlage des Spiels ist nach wie vor eine Mischung aus kreativen Spielelementen, die Activity so beliebt machen. Begriffe müssen gezeichnet, pantomimisch dargestellt oder umschrieben und von den Mitspielern erraten werden.
    </p>

    @component('components.game')
        @slot('title', 'Activity')
        @slot('img', 'activity.jpg')
        @slot('players', '3 bis 16 Spieler')
        @slot('playing_time', '60 Minuten')
        @slot('age', 'Ab 12 Jahren')

        @slot('teaser')
            Ein zeitloser Klassiker für große Gruppen. Keine Erklärung notwendig, es kann direkt losgespielt werden.
        @endslot

        @slot('url', 'https://amzn.to/3bMOwtV')
    @endcomponent
@endsection

@section('sidebar')
    @include('partials.categories')
@endsection
