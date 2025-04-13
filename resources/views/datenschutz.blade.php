<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Datenschutzbestimmungen</title>
    <meta name="description" content="Erfahre, wie wir deine persönlichen Daten schützen und welche Maßnahmen wir für die Datensicherheit ergreifen.">
    <meta name="robots" content="noindex, follow">
    <link rel="icon" href="favicon.svg" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
{{--    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss"></script>--}}

</head>
<body>
<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8 bg-gray-900" aria-label="Global">
        <div class="flex lg:flex-1">
            <a  href="{{ url('/') }}" class="">
                <h1 class="text-blue-800 text-4xl font-serif font-extrabold">MaxaBit</h1>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button id="mobileMenuButtonOpen" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            {{--                <a href="{{ url('/') }}" class="text-sm/6 font-semibold text-white">Home</a>--}}
            <a href="{{ url('/entwicklung')}}" class="text-sm/6 font-semibold text-white">Entwicklung</a>
            <a href="{{ url('/kurse') }}" class="text-sm/6 font-semibold text-white">Kurse</a>
            <a href="{{ url('/ueberuns') }}" class="text-sm/6 font-semibold text-white">Über uns</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="{{ url('/kontakt') }}" class="text-sm/6 font-semibold text-white">Kontakt </a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" id="mobileDialog">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
            <div class="flex items-center justify-between" x-data="{ open: true }" x-show="open">
                <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                    <span class="text-blue-800 text-4xl font-serif font-extrabold">MaxaBit</span>
                </a>
                <button id="mobileMenuButtonClose" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/25">
                    <div class="space-y-2 py-6">
                        <a href="{{ url('/') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Home</a>
                        <a href="{{ url('/entwicklung') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Entwicklung</a>
                        <a href="{{ url('/kurse') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Kurse</a>
                        <a href="{{ url('/ueberuns') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800">Über uns</a>
                    </div>
                    <div class="py-6">
                        <a href="{{ url('/kontakt') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-gray-800">Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="ml-10 mt-40">

    <p class="font-normal md:font-bold text-lg">Datenschutzerklärung:</p> <br>
    <p><strong>Inhaltsübersicht</strong></p>
    <ul class="list-disc ml-10">
        <li>Verantwortlicher</li>
        <li>Übersicht der Verarbeitungen</li>
        <li>Rechtsgrundlagen</li>
        <li>Betroffenenrechte</li>
        <li>Sicherheit</li>
    </ul>

    <hr>
    <p class="mt-3 mb-4">
        Mit dieser Datenschutzerkl&auml;rung informiert die MaxaBit IT Solutions (im Folgenden: &bdquo;wir&ldquo; oder &bdquo;uns&ldquo;)
        dich &uuml;ber die Verarbeitung deiner personenbezogenen Daten (im Folgenden auch nur &bdquo;Daten&ldquo;)
        bei dem Besuch unserer Website und der Inanspruchnahme unserer Dienstleistungen. Ferner erh&auml;ltst du
        Informationen &uuml;ber die dir zustehenden Rechte. Datenschutz hat bei uns einen sehr hohen Stellenwert und wir halten uns
        selbstverst&auml;ndlich an die geltenden datenschutzrechtlichen Bestimmungen, insbesondere auch an die Europ&auml;ische
        Datenschutz-Grundverordnung (DSGVO), an das Bundesdatenschutzgesetz (BDSG) und an das Gesetz &uuml;ber den Datenschutz und
        den Schutz der Privatsph&auml;re in der Telekommunikation und bei digitalen Diensten (TDDDG).
    </p>

    <h3><strong>Verantwortlicher</strong></h3>
    <p>Bei Fragen zum Datenschutz kannst du uns gerne auch (formlos) unter den im Folgenden angegebenen Kontaktdaten kontaktieren:</p>

    <p class="mt-3">Parviz Mesbahi / MaxaBit IT-Solutions<br>Gallus Str. 80a&nbsp; <br>53227 Bonn<br>Deutschland</p>
    <p><br>E-Mail-Adresse: info(at)maxabit.de</p>
    <p>&nbsp;</p>
    <h3><strong>&Uuml;bersicht der Verarbeitungen</strong></h3>
    <p class="mb-3">Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten m&ouml;glich.
        Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder E-Mail-Adressen)
        erhoben werden, erfolgt dies, soweit m&ouml;glich, stets auf freiwilliger Basis. Diese Daten werden ohne deine ausdr&uuml;ckliche
        Zustimmung nicht an Dritte weitergegeben. Wir weisen darauf hin, dass die Daten&uuml;bertragung im Internet
        (z.B. bei der Kommunikation per E-Mail) Sicherheitsl&uuml;cken aufweisen kann. Ein l&uuml;ckenloser Schutz der Daten vor
        dem Zugriff durch Dritte ist nicht m&ouml;glich.
    </p>

    <h3><strong>Server-Log-Files</strong></h3>
    <p >Der Provider der Seiten erhebt und speichert automatisch Informationen in sogenannten Server-Log Files, die dein Browser automatisch an uns &uuml;bermittelt. Dies sind:</p>
    <ul class="list-disc ml-10">
        <li>Browsertyp/ Browserversion</li>
        <li>Verwendetes Betriebssystem</li>
        <li>Referrer URL</li>
        <li>Hostname des zugreifenden Rechners</li>
        <li>Uhrzeit der Serveranfrage</li>
    </ul>
    <p class="mt-3 mb-4">Diese Daten sind nicht bestimmten Personen zuzuordnen. Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht vorgenommen.
        Wir behalten uns vor, diese Daten nachträglich zu prüfen, wenn uns konkrete Anhaltspunkte für eine rechtswidrige Nutzung bekannt werden.
    </p>
    <h3><strong>Kontaktformular</strong></h3>
    <p class="mb-3">Du hast die Möglichkeit, auf unterschiedliche Weise mit uns in Kontakt zu treten. Bei deiner Kontaktaufnahme mit uns
        per E-Mail oder über ein Kontaktformular werden die von dir mitgeteilten Daten (deine E-Mail-Adresse, dein Vor- und Nachname,
        Telefonnummer optional) von uns gespeichert, um deine Fragen zu beantworten und dein Anliegen zu bearbeiten. Rechtsgrundlage
        ist insoweit Art. 6 Abs. 1 S. 1 lit. f) DSGVO. Unser berechtigtes Interesse liegt in der Herstellung und Aufrechterhaltung
        einer Kundenbeziehung. Soweit wir über unser Kontaktformular Eingaben abfragen, die nicht für eine Kontaktaufnahme erforderlich sind,
        haben wir diese stets als optional gekennzeichnet. Diese Angaben dienen uns zur Konkretisierung deiner Anfrage und zur verbesserten
        Abwicklung deines Anliegens. Eine Mitteilung dieser Angaben erfolgt ausdrücklich auf freiwilliger Basis und mit deiner Einwilligung,
        Art. 6 Abs. 1 S. 1 lit. a) DSGVO. Soweit es sich hierbei um Angaben zu Kommunikationskanälen (beispielsweise E-Mail-Adresse,
        Telefonnummer) handelt, willigst du außerdem ein, dass wir dich ggf. auch über diesen Kommunikationskanal kontaktieren,
        um dein Anliegen zu beantworten. Diese Einwilligung kannst du selbstverständlich jederzeit für die Zukunft widerrufen.
        Etwas anderes gilt nur dann, wenn der Inhalt deiner Kontaktaufnahmen unmittelbar dazu dient, eine zwischen uns bestehende
        Vertragsbeziehung durchzuführen. In diesen Fällen stützen wir die Verarbeitung deiner Daten auf Art. 6 Abs. 1 S. 1 lit. b) DSGVO.
        Deine im Zusammenhang mit der Kontaktaufnahme gespeicherten Daten werden gelöscht, sobald sie nicht mehr erforderlich sind
        und soweit keinen gesetzlichen Aufbewahrungspflichten unterliegen. Die Prüfung, ob eine Speicherung erforderlich ist, erfolgt
        mindestens jährlich.
    </p>
    <h3><strong>Betroffenenrechte</strong></h3>
    <p class="mb-3">
        Als von der Datenverarbeitung betroffene Person (Artikel 4 Nr. 1 DSGVO) hast du uns gegenüber zahlreiche Rechte,
        über die wir dich im Folgenden informieren möchten. Einzelheiten dazu findest du zudem in den Artikeln 15 bis 21 der DSGVO. <br>

        Zur Geltendmachung deiner Rechte wende dich bitte (gerne auch formlos) an oben genannte verantwortliche Stelle.
    </p>

    <h3><strong>Auskunftsrecht</strong></h3>
    <p class="mb-3">
        Du hast das Recht, von uns Auskunft darüber zu erhalten, ob und welche Daten wir über dich verarbeiten.
        Dies beinhaltet unter anderem auch Angaben dazu, wie lange und zu welchem Zweck wir die Daten verarbeiten,
        woher diese stammen und an welche Empfänger oder Empfänger-Kategorien wir diese weitergeben.
        Zudem kannst du von uns eine Kopie dieser Daten zur Verfügung gestellt bekommen.
    </p>


    <h3><strong>Recht auf Berichtigung</strong></h3>
    <p class="mb-3">
        Du hast das Recht, dass wir nicht oder nicht mehr zutreffende Angaben über dich unverzüglich berichtigen.
        Zudem kannst du eine Vervollständigung deiner unvollständigen personenbezogenen Daten verlangen. Wenn dies gesetzlich vorgeschrieben ist,
        informieren wir über diese Berichtigung auch Dritte, wenn wir deine Daten an diese weitergegeben haben.
    </p>

    <h3><strong>Recht auf Löschung („Recht auf Vergessenwerden“)</strong></h3>
    <p>
        Du hast das Recht, von uns die unverzügliche Löschung deiner personenbezogenen Daten zu verlangen,
        wenn einer der folgenden Gründe zutrifft:</p>
      <ul class="list-disc ml-10">
        <li>deine Daten sind für die Zwecke, für die sie erhoben oder auf sonstige Weise verarbeitet wurden,
            nicht mehr notwendig oder der Zweck ist erreicht;</li>
        <li>du widerrufst deine Einwilligung und es fehlt an einer anderweitigen Rechtsgrundlage für die Verarbeitung;</li>
        <li>du legst Widerspruch gegen die Verarbeitung ein und es liegen keine vorrangigen berechtigten Gründe für die Verarbeitung vor;</li>
        <li>deine personenbezogenen Daten wurden unrechtmäßig verarbeitet;</li>
        <li>die Löschung deiner personenbezogenen Daten ist zur Erfüllung einer rechtlichen Verpflichtung nach dem Unionsrecht oder dem Recht der Mitgliedstaaten erforderlich, dem wir unterliegen.</li>
    </ul>
    <p class="mb-3">
    Bitte beachte, dass dein Recht auf Löschung durch gesetzliche Bestimmungen eingeschränkt sein kann. Dazu gehören insbesondere die Einschränkungen,
    die in Artikel 17 DSGVO und § 35 Bundesdatenschutzgesetz (in der ab dem 25. Mai 2018 geltenden Fassung) aufgeführt sind.
    </p>


    <h3><strong>Recht auf Einschränkung der Verarbeitung (Sperrung)</strong></h3>
    <p>
        Du hast das Recht, von uns eine Einschränkung der Verarbeitung deiner personenbezogenen
        Daten zu verlangen, wenn eine der folgenden Voraussetzungen gegeben ist:</p>

    <ul class="list-disc ml-10">
        <li>du bestreitest die Richtigkeit deiner personenbezogenen Daten, und zwar für eine Dauer, die uns ermöglicht, die Richtigkeit der personenbezogenen Daten zu überprüfen;
        </li>
        <li>die Verarbeitung ist unrechtmäßig und du lehnst die Löschung der personenbezogenen Daten ab und verlangst stattdessen die Einschränkung der Nutzung deiner personenbezogenen Daten;</li>
        <li>wir benötigen deine personenbezogenen Daten für die Zwecke der Verarbeitung nicht länger, Du benötigen diese jedoch zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen, oder</li>
        <li>du hast Widerspruch gegen die Verarbeitung eingelegt, solange noch nicht feststeht, ob unsere berechtigten Gründe gegenüber dir überwiegen. </li>
        </ul>
    <p class="mb-3">
    Wenn du eine Einschränkung der Verarbeitung nach der vorgenannten Aufzählung erwirkt hast, werden wir dich unterrichten, bevor die Einschränkung aufgehoben wird.
    </p>

    <h3><strong>Widerrufsrecht bei Einwilligungen </strong></h3>
    <p class="mb-3">
        Du kannst deine uns gegenüber erteilten Einwilligungen jederzeit mit Wirkung für die Zukunft widerrufen.
        Dieser Widerruf kann in Form einer formlosen Mitteilung an die o.g. Kontaktadressen erfolgen. Dies gilt auch für Einwilligungen, die du uns vor Geltung der DSGVO (d. h. vor dem 25. Mai 2018) erteilt hast. Konsequenz eines Widerrufs ist in aller Regel, dass du unsere Leistung,
        im Rahmen derer wir dich um deine Einwilligung gebeten haben, nicht mehr oder nicht mehr in vollem Umfang nutzen kannst.
    </p>

    <h3><strong>Recht auf Datenübertragbarkeit </strong></h3>
    <p class="mb-3">
        Du hast das Recht, personenbezogene Daten, die dich betreffen und die du uns bereitgestellt hast,
        in einem strukturierten, gängigen und maschinenlesbaren Format zu erhalten und diese Daten anderen zu übermitteln.
        Einzelheiten und Einschränkungen kannst du Artikel 20 DSGVO entnehmen. Die Ausübung dieses Rechts lässt dein Recht auf Löschung unberührt.
    </p>

    <h3><strong>Recht auf Beschwerde bei der Aufsichtsbehörde </strong></h3>
    <p class="mb-3">
        Wenn du der Meinung bist, dass die Verarbeitung deiner Daten durch uns gegen geltendes Datenschutzrecht verstößt,
        hast du das Recht auf Beschwerde bei einer der zuständigen Aufsichtsbehörden, d.h. der jeweiligen Aufsichtsbehörde
        in dem Mitgliedstaat deines Aufenthaltsorts, deines Arbeitsplatzes oder des Orts des mutmaßlichen Datenschutzverstoßes.
    </p>
    <p class="mb-3">
        Landesbeauftragte für Datenschutz und Informationsfreiheit<br>
        Nordrhein-Westfalen <br>
        Postfach 20 04 44 <br>
        40102 Düsseldorf <br>
        Tel.: 0211/38424-0 <br>
        Fax: 0211/38424-10 <br>
        E-Mail: poststelle@ldi.nrw.de <br>
    </p>

    <h3><strong>Widerspruchsrecht nach Artikel 21 DSGVO </strong></h3>
    <p class="mb-3">
        Du hast nach Artikel 21 DSGVO insbesondere das Recht, aus Gründen, die sich aus deiner besonderen Situation ergeben,
        jederzeit gegen die Verarbeitung deiner Daten Widerspruch einzulegen, wenn wir diese Verarbeitung auf berechtigte Interessen gemäß Art.
        6 Abs. 1 S. 1 lit. f) DSGVO stützen. Legst du Widerspruch ein, werden wir deine personenbezogenen Daten nicht mehr verarbeiten,
        außer in zwei Fällen:<br>
    </p>
    <ul class="list-disc ml-10 mb-4">
        <li>wir können zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die deine Interessen, Rechte und Freiheiten überwiegen, oder</li>
        <li>die Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.</li>
    </ul>


    <h3><strong>Gültigkeit und Änderungen der Datenschutzerklärung </strong></h3>
    <p class="mb-3">
        Durch die Weiterentwicklung unserer Webseite oder die Implementierung neuer Technologien kann es notwendig werden,
        diese Datenschutzerklärung zu ändern. Wir behalten uns vor, jederzeit entsprechende Änderungen vorzunehmen. <br>
        Die Datenschutzerklärung ist aktuell gültig und datiert vom 01.03.2025.
    </p>

    <h3><strong>Deine Fragen zum Datenschutz </strong></h3>
    <p class="mb-3">
        Falls du noch Fragen zu dieser Datenschutzerklärung oder deinen Rechten hast, wende dich bitte an die o.g. Kontaktdaten.
    </p>

    <h3><strong>Urheberrecht </strong></h3>
    <p class="mb-3">
        Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht.
        Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes
        bedürfen der schriftlichen Zustimmung. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.
        Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere
        werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden,
        bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.
    </p>














    {{--    aus der Datenbank--}}
{{--    @if ($data->isEmpty())--}}
{{--        <p>No content available.</p>--}}
{{--    @else--}}
{{--        @foreach ($data as $item)--}}
{{--            <div>--}}
{{--                {!! $item->content  !!}--}}
{{--            </div>--}}
{{--            <hr>--}}
{{--        @endforeach--}}
{{--    @endif--}}
</div>

<!-- Footer -->
<footer class="mt-32 bg-gray-900 sm:mt-56">
    <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8 lg:py-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <a href="{{ url('/') }}" class="h-9 text-blue-500"> MaxaBit IT-Solutions </a>
            <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8 ">
                    <div>
                        <h3 class="text-sm/6 font-semibold text-blue-500"><a href="{{ url('/impressum') }}">Impressum</a></h3>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm/6 font-semibold text-blue-500"><a href="{{ url('/datenschutz') }}">Datenschutz</a></h3>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm/6 font-semibold text-blue-500"><a href="{{ url('/') }}"> </a></h3>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm/6 font-semibold text-blue-500"><a href="{{ url('/ueberuns') }}">Über Uns</a></h3>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm/6 font-semibold text-blue-500"><a href="{{ url('/kontakt') }}">Kontakt</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24">
            <p class="text-sm/6 text-gray-400 text-center">Copyright &copy; 2024 MaxaBit IT-Solutions, Inc. All rights reserved. <br> Kurse in: Köln - Bonn - Frankfurt</p>
        </div>
    </div>
</footer>


</body>
<script defer>
    const mobileDialog = document.getElementById("mobileDialog")
    const mobileMenuButtonOpen = document.getElementById("mobileMenuButtonOpen")
    const mobileMenuButtonClose = document.getElementById("mobileMenuButtonClose")
    mobileMenuButtonOpen.addEventListener("click", toggleMobileMenu)
    mobileMenuButtonClose.addEventListener("click", toggleMobileMenu)
    mobileDialog.style.visibility = "hidden"

    function toggleMobileMenu(){
        if(mobileDialog.style.visibility == "hidden") mobileDialog.style.visibility = "visible"
        else mobileDialog.style.visibility = "hidden"
    }
</script>
</html>
