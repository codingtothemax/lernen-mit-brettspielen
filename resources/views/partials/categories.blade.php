<div class="bg-white mb-4 shadow-lg">
    <div class="p-4">
        <h2 class="text-3xl">Unsere Kategorien</h2>
    </div>
</div>

@component('components.category')
    @slot('title', 'Kreativität')
    @slot('route', 'creativity')

    @slot('section')
        Brettspiele, die ein "Um die Ecke denken" erfordern, die zum Nachdenken anregen oder die neue
        Denkweisen erfordern.
    @endslot

    @slot('bullet_1', 'fördern schöpferisches Denken')
    @slot('bullet_2', 'erfordern bildhaftes Denken')
@endcomponent

@component('components.category')
    @slot('title', 'Sprache')
    @slot('route', 'language')

    @slot('section')
        Spiele, die den Wortschatz erweiteren und das Ausdruchsvermögen verbessern.
    @endslot

    @slot('bullet_1', 'kommunikative Spiele')
    @slot('bullet_2', 'Spiele rund um Sprache')
@endcomponent

@component('components.category')
    @slot('title', 'Zahlen und Rechnen')
    @slot('route', 'numbers')

    @slot('section')
        Spiele, in denen sich alles um Zahlen und Rechnen dreht.
    @endslot

    @slot('bullet_1', 'verbessern das Zahlenverständnis')
    @slot('bullet_2', 'helfen im Matheunterricht')
@endcomponent

@component('components.category')
    @slot('title', 'Geografie')
    @slot('route', 'places')

    @slot('section')
        Spiele, bei denen die Spieler ihre Umgebung und die Welt kennenlernen.
    @endslot

    @slot('bullet_1', 'erwerben von Geografiekenntnissen')
@endcomponent
