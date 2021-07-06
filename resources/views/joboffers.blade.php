@extends('uk_layout')

@section('content')

<div class="row m-0 ">
  <div class="col">
    <div class="row contentbreakw100">
        <h1 class="textsizeu3 m-2">Stellenangebote</h1>
    </div>
    <div class="row m-0">
      <p class="textsizeu2">Du bist auf der Suche nach einem neuen Job? - Dann bist Du bei UNIKAT GmbH genau richtig. Wir suchen Lagermitarbeiter und Staplerfahrer (m/w/d) in NRW bewirb Dich jetzt und sichere dir deinen neuen neuen Job.
      <br>Hier findest Du alle wichtigen Informationen:</p>
    </div>
    <div class="row">
      <h2 class="textsize2u m-2"><b>Lagerhelfer (m/w/d) ab sofort in Vollzeit</b></h2>
    </div>

  <div class="row mt-2">
    <h2 class="textsize2u m-2">Ihre Aufgaben</h2>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Kommissionieren von Waren mittels Handscanner</li>
        <li>Verpacken nach Packvorschrift sowie Versandvorbereitung</li>
        <li>Etikettieren und Labeln der Pakete</li>
        <li>Durchführen von Qualitätskontrollen</li>
        <li>Bedienung des Handhubwagens zum innerbetrieblichen Transport</li>
      </ul>
    </div>

  </div>
  <div class="row mt-2">
    <h2 class="textsize2u m-2">Ihr Profil</h2>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Erste Erfahrung im Lagerbereich von Vorteil</li>
        <li>Scanner-Erfahrung oder grundlegende PC-Kenntnisse</li>
        <li>Zuverlässigkeit, Belastbarkeit sowie eine engagierte Arbeitsweise</li>
        <li>Bereitschaft zur Arbeit im 2- Schichtsystem</li>
      </ul>
    </div>

  </div>
  <div class="row mt-2">
    <h2 class="textsize2u m-2">Unser Angebot</h2>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Langfristige Einsatzmöglichkeit als Lagerhelfer bei einem namenhaften Logistikbetrieb</li>
        <li>Abwechslungsreiche und interessante Tätigkeiten</li>
        <li>Ein angenehmes und freundliches Betriebsklima</li>
        <li>Übertarifliche Bezahlung </li>
      </ul>
    </div>

  </div>
  <hr style="border: 2px solid black;">
  <div class="row ">
    <h2 class="textsize2u m-2"><b>Schlosser/Metallbauer (m/w/d) in Vollzeit</b></h2>
  </div>
  <div class="row mt-2">
    <h2 class="textsize2u m-2">Ihre Aufgaben</h2>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Herstellung von Metallbaukonstruktionen nach Zeichnung im Anlagenbau</li>
        <li>Montage einzelner Bauteile/Baugruppen, Behältern, Vorrichtungen und Apparaten anhand technischer Zeichnungen und Stücklisten</li>
        <li>Metallbearbeitung (Schweißen, Biegen oder Trennen)</li>
        <li>Erfahrung an Metallbearbeitungsmaschinen (Bohr-, Schleifmaschinen, Trennschleifer, Schweißgerät, Drehen, Sägen, Abkanten)</li>
        <li>Gelegentliche Montage- und Servicearbeiten bei Kunden</li>
      </ul>
    </div>

  </div>
  <div class="row mt-2">
    <h2 class="textsize2u m-2">Ihr Profil</h2>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Abgeschlossene Berufsausbildung im Metallbau oder im Schlosserhandwerk (Maschinenschlosser, Betriebsschlosser, Stahlbauschlosser oder ähnliches)</li>
        <li>Fundierte praktische Kenntnisse in der Metallverarbeitung zwingend erforderlich</li>
        <li>Erfahrung im Schweißen von Vorteil</li>
        <li>Teamfähigkeit</li>
        <li>Selbständige und zuverlässige Arbeitsweise</li>

      </ul>
    </div>

  </div>
  <div class="row mt-2">
    <h2 class="textsize2u m-2">Unser Angebot</h2>
    <div class="ml-2">
      <ul class="textsize2u">
        <li>Langfristige Einsatzmöglichkeit als Schlosser/Metallbauer</li>
        <li>Abwechslungsreiche und interessante Tätigkeiten</li>
        <li>Ein angenehmes und freundliches Betriebsklima</li>
        <li>Übertarifliche Bezahlung </li>
      </ul>
    </div>

  </div>
  <hr style="border: 2px solid black;">


  <div class="col-12 m-3">
    <h2 class="textsize1"><b>Haben wir Ihr Interesse geweckt? Dann freuen wir uns auf Ihre aussagekräftige Bewerbung</b></h2>
    <p class="textsize1u mt-4">Telefonisch sind wir wahrend unserer Offnungszeiten unter 01234567 erreichbar</p>
    <p class="textsize1u">Nutzen sie unser <b> <a id="contactformular" style="cursor:pointer;">Kontaktformular</a> </b></p>
    <p class="textsize1u">Oder schreibe uns einfach eine Email an <a href="mailto:info@unikat-deutschland.de" style="color:black;">info@unikat-deutschland.de</a> </p>
  </div>
</div>
@endsection

@section('additional_js')
<script type="text/javascript">
  $('#contactformular').click(function() {

    showContactModal()
    })
</script>
@endsection
