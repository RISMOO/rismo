@extends('layouts.app')

@section('content')
<section class="parallax-container section scollspy z-depth-3 darken-4">
    <div class="row darken-4 center-align">
        <div class="col s12 m12">
                <div class="row">
                    <div class="col m6 offset-m3 s12">
                      <div class="card-panel z-depth-5 center-align"id="card2">
                        <h2 class="center-align titre">Titres</h2>
                        <h5 class="white-text center-align">Ici, vous trouverez tous les articles mis a jour et par ordre de parution
                        </h5>
                      </div>
                    </div>
                  </div>


            <!--MODAL AROPOS-->
            </p>
        </div>
    </div>
    <div class="parallax" width="100">
        <img src="{{ asset('img/header6.png ') }}" alt="deux">
    </div>
</section>
<section class="formation z-depth-5 darken-4 scrollspy" id="titre">
    <div class="container">
        <div class="text-center">
            <div class="center-align marg">
                <img src="{{ asset('img/Virage.png') }}" class="z-depth-5 circle responsive-img " alt="Contact Person"
                    id="logo1">
            </div>

                      </div>
                      <div class="row">
                        <div class="col s12 m4">
                          <div class="card">
                            <div class="card-image materialboxed"id="card1"data-caption="Vous serez redirigez vers le site de ouest France.fr" href="https://www.ouest-france.fr/bretagne/carhaix-plouguer-29270/carhaix-plouguer-des-ateliers-autour-du-numerique-a-pole-emploi-7138007?fbclid=IwAR3Pp301IpjaV0LqNV2I_E-G3K9nsjfS3G1nKeoH4WxSIp43oMl6q2ksnZY" >
                                <img src="img/titre.png" class="waves-light z-depth-5 darken-4">
                            </div>
                            <div class="card-action red-text">
                              <a href="https://www.ouest-france.fr/bretagne/carhaix-plouguer-29270/carhaix-plouguer-des-ateliers-autour-du-numerique-a-pole-emploi-7138007?fbclid=IwAR3Pp301IpjaV0LqNV2I_E-G3K9nsjfS3G1nKeoH4WxSIp43oMl6q2ksnZY"target="_blank"><span class="red-text">Lire L'article</span></a>
                            </div>
                          </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card">
                              <div class="card-image  materialboxed"id="card1"data-caption="Vous serez redirigez vers le site de ouest France.fr" href="https://www.ouest-france.fr/bretagne/carhaix-plouguer-29270/carhaix-plouguer-des-ateliers-autour-du-numerique-a-pole-emploi-7138007?fbclid=IwAR3Pp301IpjaV0LqNV2I_E-G3K9nsjfS3G1nKeoH4WxSIp43oMl6q2ksnZY" >
                                  <img src="img/crise.png" class="waves-light z-depth-5 darken-4">
                              </div>
                              <div class="card-action">
                                <a href="https://www.focusrh.com/strategie-rh/mobilite-interne-fidelisation-des-salaries/crise-motivationnelle-mi-carriere-comment-affronter-le-demon-de-midi-professionnel-33518.html?fbclid=IwAR1w508o4grt3mmwMP0Fl6rPDftSPTI6OVVTZCq3DPogq93ZVILycP9m7vg"target="_blank"><span class="red-text">Lire L'article</span></a>
                              </div>
                            </div>
                          </div>
                          <div class="col s12 m4">
                            <div class="card">
                              <div class="card-image  materialboxed"id="card1"data-caption="Vous serez redirigez vers le site de ouest France.fr" href="https://www.ouest-france.fr/bretagne/carhaix-plouguer-29270/carhaix-plouguer-des-ateliers-autour-du-numerique-a-pole-emploi-7138007?fbclid=IwAR3Pp301IpjaV0LqNV2I_E-G3K9nsjfS3G1nKeoH4WxSIp43oMl6q2ksnZY" >
                                  <img src="img/tran.png" class="waves-light z-depth-5 darken-4">
                              </div>
                              <div class="card-action">
                                <a href="https://travail-emploi.gouv.fr/formation-professionnelle/formation-des-salaries/transitions-collectives?fbclid=IwAR3vnyioucxQO2vNgjqhSRy2NdCE62aO3NN-NwGK86yEd3KgROYIYjLmzDI"target="_blank"><span class="red-text">Lire L'article</span></a>
                              </div>
                            </div>
                          </div>
                      </div>

                </div>

        </div>
    </div>
</section>
    @endsection
