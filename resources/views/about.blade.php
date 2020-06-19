<!-- This extends the layout to this page so that I don't have to place the header in each page individually -->
@extends('layouts.general')
<!-- This section changes the title from the page -->
<!-- Even though the <title> is in the <head> you can still use it like his -->
@section('title')
Boosted Delivery | Producten Lijst
@endsection

<!-- This is where the body starts and since there is a yield in the layout you can just create a section and start adding content -->
@section('content')
<div class="about">
    <div class="about__inhoud row">
        <div class="about__rij col-10 offset-1 col-md-4 offset-md-2">
            <h1 class="about__title ">Wie zijn wij?</h1>
            <p class="about__content">Wij zijn twee jongens die het een tof idee vonden om een subscriptie website te maken
                alleen moesten we daar een product voor verzinnen, dus dachten wij waarom niet iets dat alle jongeren drinken:
                Energie Drank!
            </p>
            <p class="about__content">
                Wij waren in Maart 2020 begonnen met onderzoek en snel daarna
                Waren we begonnen met het uitwerken van designs en functionaleit.
            </p>
            <p class="about__content">
                De reden dat wij voor dit product hadden gekozen was net zoals we net hadden gezegd, omdat heel veel
                jongeren dit product gebruiken, maar de andere reden voor onze keuze is, dat we mensen willen helpen
                met hun een extra boost te geven om de dag door te komen of energie vragende activiteiten te doen.
            </p>
        </div>
        <div class="about__img col-10 offset-1 col-md-5 offset-md-0">
            <img src="{{URL::to('/')}}/img/logo/logo_wit.png" alt="Logo">
        </div>
    </div>

    <div class="about__how row">
        <h1 class="col-12">Hoe werkt onze service?</h1>
        <p class="about__how__text col-10 offset-1 col-md-8 offset-md-2">
            Wij hebben 2 categoriën voor onze abonnementen: Weekelijks en Maandelijks.
            In deze categoriën kan je 1 van de 3 abonnementen kiezen: Basic, Boosted Extreme.
            Wanneer je een abonnement hebt gekozen kunt u uw eigen PowerCrate samenstellen met
            een keuze uit 8 verschillende merken energie drank. Elke PowerCrate heeft zijn eigen limiet
            van hoeveel blikjes u kunt kiezen, dus wanneer u dit limiet heeft bereikt kunt u naar
            de volgende pagina, waar u uw PowerCrate nog 1 keer na kan checken of alle keuzes te wens zijn.
            Om naar de betalings pagina te gaan heeft u een account nodig, als u deze heeft zult uw een bestel formulier
            zien waar u uw gegevens kunt invullen om de bestelling af te ronden. Na het invullen en betallen krijgt u een
            verificatie pagina te zien dat u vertelt of de besteling gelukt is of niet en wanneer uw eerst volgende bezorging is.
        </p>
    </div>

    <div class="about__powercrate row">
        <div class="about__powercrate__image col-10 offset-1 col-md-5 offset-md-2">
            <img src="{{URL::to('/')}}/images/powercrate_idea.jpg" alt="dry-ice_drink">
        </div>

        <div class="about__powercrate__content col-10 offset-1 col-md-4 offset-md-0">
            <h1>Wat is een PowerCrate?</h1>
            <p class="about__powercrate__content__text">
                De PowerCrate is een aangepaste koeler in onze huistijl die gevuld is met uw gekozen producten.
                Wij hebben gekozen voor een koeler, zodat de energie drank koel is wanneer wij het bezorgen bij u thuis.
                Ook vullen wij de PowerCrate met droog ijs zodat de koeler hetzelfde effect krijgt als de afbeeling hiernaast,
                dit zorgt ervoor dat het altijd een show is wanneer u de PowerCrate open maakt.
            </p>
        </div>
    </div>

    <div class="about__return row">
        <h1 class="col-12">Retouren?</h1>
        <p class="about__return__text col-10 offset-1 col-md-8 offset-md-2">Heeft u de PowerCrate ontvangen, maar bent u toch niet blij met het product? Dan kunt uw de PowerCrate terug sturen naar:
          <br>  <span class="about__return__text__address">Dintelstraat 15, 1078 VN Amsterdam, Nederland</span>
        </p>
    </div>
</div>
@endsection
