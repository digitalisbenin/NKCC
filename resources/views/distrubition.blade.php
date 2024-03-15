<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NKCCG</title>
    <link rel="icon" href="favicon.ico">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'b eh': darkMode === true }">
    <!-- ===== Header Start ===== -->

    <header class="g s r vd ya  " :class="{ 'hh sm _k dj bl ll': stickyMenu }"
        @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false">
        <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
            <div class="vd to/4 tc wf yf">

                <a href="/">
                    <img class="om h-7 lg:h-16" src="images/logo_nkccg.png" alt="Logo Light" height="60" />

                </a>

                <!-- Hamburger Toggle BTN -->
                <button class="po rc" @click="navigationOpen = !navigationOpen">
                    <span class="rc i pf re pd">
                        <span class="du-block h q vd yc">
                            <span class="rc i r s eh um tg te rd eb ml jl dl"
                                :class="{ 'ue el': !navigationOpen }"></span>
                            <span class="rc i r s eh um tg te rd eb ml jl fl"
                                :class="{ 'ue qr': !navigationOpen }"></span>
                            <span class="rc i r s eh um tg te rd eb ml jl gl"
                                :class="{ 'ue hl': !navigationOpen }"></span>
                        </span>
                        <span class="du-block h q vd yc lf">
                            <span class="rc eh um tg ml jl el h na r ve yc"
                                :class="{ 'sd dl': !navigationOpen }"></span>
                            <span class="rc eh um tg ml jl qr h s pa vd rd"
                                :class="{ 'sd rr': !navigationOpen }"></span>
                        </span>
                    </span>
                </button>
                <!-- Hamburger Toggle BTN -->
            </div>

            <div class="vd wo/4 sd  qo f ho oo wf yf" :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }">
                <nav>
                    <ul class="tc _o sf yo cg ">
                        <li>
                            <button id="enjeuxButton"
                                class="xl text-black whitespace-nowrap hover:text-orange-500 inline-block border-b-4 border-transparent hover:border-red-500 pb-1">
                                Enjeux
                            </button>
                            <nav id="enjeuxNav"
                                class="fixed z-10 h-screen bg-slate-800 w-full top-16 text-slate-100 left-0 p-8 shadow-lg"
                                style="display: none;">
                                <button id="closeEnjeuxNav" class="float-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <div class="lg:flex">
                                    <div>
                                        <h1 class="lg:text-2xl text-sm lg:mt-16">Enjeux</h1>
                                        <a href="/transition"
                                            class="lg:text-xl text-sm lg:mt-4  text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Transition écologique et sociétale</a>
                                        <p></p>
                                        <a href="/technologie"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Technologie et performance</a>
                                        <p></p>
                                        <a href="/culture"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Culture et responsabilité d'entreprise</a>
                                    </div>
                                    <div class="lg:ml-24">
                                        <h1 class="lg:text-2xl lg:mt-24"></h1>
                                        <a href="/transparence"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('transparence') ? 'text-blue-700' : '' }}">
                                            Transparence et maîtrise des risques
                                        </a>
                                        <p></p>
                                        <a href="/creation"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('creation') ? 'text-blue-700' : '' }}">
                                            Création et préservation de valeur</a>

                                    </div>
                                    <div class="lg:ml-24">
                                        <h1 class="lg:text-2xl lg:mt-24"></h1>
                                        <a href="/transformation"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('transformation') ? 'text-blue-700' : '' }}">
                                            Transformation des business models</a>
                                        <p></p>
                                        <a href="/croissance"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('croissance') ? 'text-blue-700' : '' }}">
                                            Croissance des ETI</a>
                                        <p></p>
                                        <a href="/startups"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('startups') ? 'text-blue-700' : '' }}">
                                            Startups et innovation</a>
                                    </div>
                                </div>
                            </nav>
                        </li>
                        <li class="">
                            <button id="secteurButton"
                                class="xl text-black whitespace-nowrap hover:text-orange-500 inline-block border-b-4 border-transparent hover:border-red-500 pb-1">
                                Secteur d'activité
                            </button>
                            <nav id="secteurNav"
                                class="fixed z-10 h-screen bg-slate-800 w-full top-16 text-slate-100 left-0 p-8 shadow-lg"
                                style="display: none;">
                                <button id="closeSecteurNav" class="float-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <div class="lg:flex">
                                    <div>
                                        <h1 class="lg:text-2xl lg:mt-16">Votre secteur</h1>
                                        <a href="/aeronautique"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Aéronautique, défense et sécurité</a>
                                        <p></p>
                                        <a href="/assurance"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('assurance') ? 'text-blue-700' : '' }}">
                                            Assurance</a>
                                        <p></p>
                                        <a href="/automobile"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('automobile') ? 'text-blue-700' : '' }}">
                                            Automobile</a>
                                        <p></p>
                                        <a href="/banque"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('banque') ? 'text-blue-700' : '' }}">
                                            Banques et marchés de capitaux
                                        </a>
                                        <p></p>
                                        <a href="/distrubition"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('distrubition') ? 'text-blue-700' : '' }}">
                                            Distribution et biens de consommation
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Education
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Ressources Naturelles
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Santé
                                        </a>
                                    </div>
                                    <div class="lg:ml-24">
                                        <h1 class="lg:text-2xl lg:mt-24"></h1>
                                        <a href="/energie"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('energie') ? 'text-blue-700' : '' }}">
                                            Énergie et ressources</a>
                                        <p></p>
                                        <a href="/hotelle"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('hotelle') ? 'text-blue-700' : '' }}">
                                            Immobilier et hôtellerie</a>
                                        <p></p>
                                        <a href="/industrie"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('industrie') ? 'text-blue-700' : '' }}">
                                            Industries de santé
                                        </a>
                                        <p></p>
                                        <a href="/ingenerie"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('ingenerie') ? 'text-blue-700' : '' }}">
                                            Ingénierie et construction

                                        </a>
                                        <p></p>
                                        <a href="/media"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('media') ? 'text-blue-700' : '' }}">
                                            Médias et loisirs
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Développement économique et Industriel
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Sciences de la Vie
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Service Public
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Mines et minéraux
                                        </a>
                                    </div>
                                    <div class="lg:ml-24">
                                        <h1 class="lg:text-2xl lg:mt-24"></h1>
                                        <a href="/techonologieservice"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('techonologieservice') ? 'text-blue-700' : '' }}">
                                            Technologie</a>
                                        <p></p>
                                        <a href="/assurance"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('assurance') ? 'text-blue-700' : '' }}">
                                            Assurance</a>
                                        <p></p>
                                        <a href="/telecommunication"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('telecommunication') ? 'text-blue-700' : '' }}">
                                            Télécommunications</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Administration
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Agriculture
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Chimie
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            L’eau
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Services
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Transport
                                        </a>

                                    </div>
                                </div>
                            </nav>
                        </li>
                        <li>
                            <button id="expertisesButton"
                                class="xl text-black whitespace-nowrap hover:text-orange-500 inline-block border-b-4 border-transparent hover:border-red-500 pb-1">
                                Expertises
                            </button>
                            <nav id="expertisesNav"
                                class="fixed z-10 h-screen bg-slate-800 w-full top-16 text-slate-100 left-0 p-8 shadow-lg"
                                style="display: none;">
                                <button id="closeExpertisesButton" class="float-right ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <div class="lg:flex">
                                    <div>
                                        <a href="/expertise"
                                            class="lg:text-2xl lg:mt-16 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('expertise') ? 'text-blue-700' : '' }}">Expertises</a>
                                        <p></p>
                                        <a href="/organisations"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('organisations') ? 'text-blue-700' : '' }}">
                                            Conseil aux organisations</a>
                                        <p></p>
                                        <a href="/gestion"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('gestion') ? 'text-blue-700' : '' }}">
                                            Conseil en gestion des risques</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Conseil en stratégie
                                        </a>
                                    </div>
                                    {{--  <a href="#"
        class="text-xl mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
        Expertise juridique et fiscale
        </a>  --}}
                                    <div class="lg:ml-24 lg:mt-24">
                                        <a href="#"
                                            class="lg:text-2xl lg:mt-6 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}"></a>
                                        <a href="/transaction"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                            Transactions
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                            Etudes
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                            Formations
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                            Développement durable
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                            Prestations de services
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </li>

                        <li><a href="/solutions"
                                class="xl  text-black hover:text-orange-500 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('solutions') ? 'text-blue-700' : '' }}">Solutions
                                digitales</a>
                        </li>
                        <li>
                            <button id="sidenavButton"
                                class="xl text-black whitespace-nowrap hover:text-orange-500 inline-block border-b-4 border-transparent hover:border-red-500 pb-1">
                                Qui sommes-nous ?
                            </button>
                            <nav id="sidenavNav"
                                class="fixed z-10 h-screen bg-slate-800 w-full top-16 text-slate-100 left-0 p-8 shadow-lg"
                                style="display: none;">
                                <button id="closeSidenavButton" class="float-right ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <div class="lg:flex">
                                    <div>
                                        <a href="/a-propos"
                                            class="lg:text-2xl mg:mt-16 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('a-propos') ? 'text-blue-700' : '' }}">
                                            Qui sommes-nous ?</a>
                                            <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Actualités et perspectives</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Stratégie</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Raison d’être et valeurs</a>
                                    </div>
                                    <div class="lg:ml-24">
                                        <h1 class="lg:text-2xl lg:mt-24"></h1>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Agir collectivement pour un impact<br> positif
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            CEthique et conformité</a>

                                    </div>
                                    <div class="lg:ml-24">
                                        <h1 class="lg:text-2xl lg:mt-24"></h1>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Gouvernance</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Publications institutionnelles</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Où nous trouver ?</a>
                                    </div>
                                </div>
                            </nav>
                        </li>
                        <li>
                            <button id="sidepartButton"
                                class="xl text-black whitespace-nowrap hover:text-orange-500 inline-block border-b-4 border-transparent hover:border-red-500 pb-1">
                                Partenaire
                            </button>
                            <nav id="sidepartNav"
                                class="fixed z-10 h-screen bg-slate-800 w-full top-16 text-slate-100 left-0 p-8 shadow-lg"
                                style="display: none;">
                                <button id="closeSidepartButton" class="float-right ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>

                                <div class="lg:flex">
                                    <div>
                                        <h1 class="lg:text-2xl lg:mt-16">Nos Partenaire</h1>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Université d’Abomey-Calavi (UAC)</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Université Catholique de l’Afrique de l’Ouest
                                            (UCAO)</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Ministère de l’Economie et des Finances (MEF)</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Direction Générale du Trésor et de la Comptabilité <br>Publique (DGTCP)
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Direction Générale des Impôts (DGI)
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Direction Générale de l’Economie (DGE) (DGE)
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Direction Générale des Douanes (DGD)
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Ministère de la Communication et de la Poste (MCP)
                                        </a>
                                    </div>
                                    <div class=" lg:ml-12">
                                        <h1 class="lg:text-2xl lg:mt-24"></h1>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Ministère de la Santé (MS-BENIN)</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Ministère de la Culture et du Tourisme (BENIN)</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Société Nationale des Eaux du Bénin (SONEB)
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Société Béninoise des Manutentions Portuaires (SOBEMAP)

                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Office National de Sécurité Alimentaire
                                            <br>(Ex-ONASA)
                                        </a>
                                        <p></p>
                                        <a href="/distrubition"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            La Générale des Assurances du Bénin (GAB-S.A)
                                        </a>
                                        <p></p>
                                        <a href="/distrubition"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Bureau Béninois du Droit d’Auteur et des Droits
                                        </a>
                                        <p></p>
                                        <a href="/distrubition"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Hight Technology Stores SARL (HTS)
                                        </a>

                                    </div>
                                    <div class="lg:ml-12">
                                        <h1 class="lg:text-2xl lg:mt-24"></h1>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            MIC </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Maison de la Société Civile (MdSC) </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            BENIN MARINA HOTEL </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Entreprise RODINGOR
                                        </a>
                                        <p></p>
                                        <a href="/distrubition"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Bureau Béninois du <br> Droit d’Auteur et des Droits<br>
                                            Voisins (BUBEDRA)
                                        </a>
                                        <p></p>
                                        <a href="/distrubition"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Entreprise HAD SERVICES
                                        </a>
                                        <p></p>
                                        <a href="/distrubition"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Société EMINENCE PRESTATIONS
                                        </a>
                                    </div>


                                </div>
                            </nav>
                        </li>
                        <li>
                            <button id="sidenavaButton"
                                class="xl text-black whitespace-nowrap hover:text-orange-500 inline-block border-b-4 border-transparent hover:border-red-500 pb-1">
                                Carrières
                            </button>
                            <nav id="sidenavaNav"
                                class="fixed z-10 h-screen bg-slate-800 w-full top-16 text-slate-100 left-0 p-8 shadow-lg"
                                style="display: none;">
                                <button id="closeSidenavaButton" class="float-right ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>

                                <div class="lg:flex">
                                    <div>
                                        <h1 class="lg:text-2xl text-sm lg:mt-16">Carrières</h1>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Pourquoi faire le choix de NKCCG ?</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Quel métier est fait pour moi ?</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Échanger avec nos collaborateurs</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Postuler</a>
                                    </div>

                                </div>
                            </nav>
                        </li>

                        <li><a href="/contact"
                                class="xl text-black hover:text-orange-500 inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('contact') ? 'text-blue-700' : '' }}">Contact

                            </a>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>
    </header>

    <!-- ===== Header End ===== -->

    <main>
        <section class=" bg-[url('/images/blog-1.jpg')]  lg:bg-cover mt-16 ">
            <!-- Bg Shape -->
            <div class="tc  w-full   ">

                <div class=" lg:mt-52 mt-44 lg:mr-6 lg:px-20 lg:w-2/3 bg-gray-800">
                    <h1 class="lg:text-4xl text-2xl font-serif text-left ml-9 mt-12 text-white ">
                        Distribution et biens de consommation
                    </h1>
                    <p class="lg:text-2xl text-xl font-serif text-left ml-9  text-white">

                        Plus avertis, plus exigeants et en quête de sens, les attentes des consommateurs changent et
                        obligent les acteurs du secteur à se transformer. Pour y répondre, de nouveaux modèles de
                        distribution émergent, avec toujours plus de services, de personnalisation et des gammes de
                        produits activement remaniées.


                    </p>
                    <div class="ml-9 mb-6 mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-9 h- text-white bg-black">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                        </svg>

                    </div>


                </div>

            </div>

        </section>
        <section class=" bg-red-500">
            <!-- Bg Shape -->
            <div class="lg:flex   lg:h-54 lg:mx-24">
                <div class="h-6 lg:h-0"></div>
                <div class="lg:w-1/3 ">
                    <div class="border-t-4 border-white lg:mt-6 ml-9 w-12"></div>
                    <h1 class="text-4xl font-serif text-left ml-9 mt-9 text-white">
                        31 %


                    </h1>
                    <p class="text-white ml-9 mt-6 ">
                        des consommateurs achètent des produits en ligne au moins une fois par semaine
                    </p>
                    <p class="text-white ml-9 mt-9 mr-24">
                        Source : étude NKCCG
                    </p>
                </div>
                <div class="lg:w-1/3 ">
                    <div class="border-t-4 border-white mt-6 ml-9 w-12"></div>
                    <h1 class="text-4xl font-serif text-left ml-9 mt-9 text-white">
                        51 %



                    </h1>
                    <p class="text-white ml-9 mt-6 ">
                        des détaillants constatent un déclin de l'enseigne physique dans leur stratégie de distribution
                    </p>
                    <p class="text-white ml-9 mt-9 mr-24">
                        Source : étude NKCCG
                    </p>
                </div>
                <div class="lg:w-1/3 ">
                    <div class="border-t-4 border-white mt-6 ml-9 w-12"></div>
                    <h1 class="text-4xl font-serif text-left ml-9 mt-9 text-white">
                        91 %


                    </h1>
                    <p class="text-white ml-9 mt-6 ">
                        des Français perçoivent l'importance de consommer des produits respectueux de l'environnement
                    </p>
                    <p class="text-white ml-9 mt-9 mr-24">
                        Source : étude NKCCG
                    </p>
                </div>
            </div>
        </section>
        <section class="bg-gray-200 ">
            <div class="h-12"></div>
            <div class="lg:flex">
                <div class="lg:mx-24 mx-6 lg:w-1/2">
                    <p class="text-black text-xl  ">
                        Les nouveaux modèles de distribution impliquent des transformations, de nouvelles stratégies et
                        des investissements pour les acteurs du secteur. NKCCG les accompagne.
                    </p>
                    <ul class="  text-black list-inside mt-9 text-lg ">
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-orange-700 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Le triomphe de l’omnicanal
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="w-3.5 h-3.5 me-2 text-orange-700  flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            La qualité de l’expérience vécue
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-orange-700 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            La data client : un potentiel encore largement inexploité
                        </li>

                    </ul>

                </div>
                <div class="mx-6  lg:w-1/2 mt-4 lg:mt-0">
                    <img src="images/damil-gettyimages-1020592850-670.avif"
                        alt="marketing-digital-service-création-de-site-web" class="lg:h-96 mb-9">
                </div>
                <div class="h-6"></div>
            </div>

        </section>
        <section class=" ">
            <!-- Bg Shape -->
            <div class=" lg:mx-24 mx-6">
                <div class="lg:h-24 h-6"></div>
                <h1 class="lg:text-4xl text-2xl font-serif text-left lg:w-2/4 text-black">
                    Distribution et biens de consommation : digital et expérience client
                </h1>
                <h1 class="text-2xl font-bold text-left mt-4 lg:w-2/4 text-black">
                    Le triomphe de l’omnicanal
                </h1>

                <p class="text-black  mt-6 lg:w-2/4 text-lg">
                    Entrée de nouveaux concurrents, ouvertures dominicales, consommateurs moins fidèles mais plus
                    exigeants et avisés, poids grandissant du m-commerce et des réseaux sociaux : l’environnement
                    concurrentiel du secteur est en pleine mutation. Les frontières entre enseignes physiques et pure
                    players s’effacent au profit d’une porosité des canaux de distribution et d’une hybridation des
                    modèles. Les acteurs du secteur sont tous à la recherche de la proposition de valeur qui fera la
                    différence et s’emploient pour cela à utiliser le digital et les data collectées au service d’une
                    meilleure connaissance du client, de la qualité du produit, de l’efficacité de la supply chain et de
                    la transformation du business model.
                </p>
                <p class="text-black  mt-6 lg:w-2/4 text-lg">
                    Tous ces enjeux sont structurés autour du même objectif : le déploiement d’un dispositif omnicanal
                    pour offrir une expérience optimale, à la fois en ligne et en réseaux physiques. Mais la marque et
                    la qualité du produit, son origine et sa fabrication influent sur l’acte d’achat du consommateur,
                    toujours plus exigeant.
                </p>
                <p class="text-black  mt-6 lg:w-2/4 text-lg">
                    C’est pourquoi la connaissance du client et la compréhension de ses attentes constituent un élément
                    essentiel dans la prise de décisions stratégiques, tant sur l’offre produit (bio, local,
                    responsable, vegan) que sur les modalités d’achat. Pour plus d’agilité et pour préserver leurs
                    marges, les acteurs du secteur doivent notamment réfléchir à la rationalisation de leurs
                    portefeuilles de marques et d’enseignes.
                </p>
                <h1 class="text-2xl font-bold text-left mt-4 lg:w-2/4 text-black">
                    Améliorer la qualité de l’expérience vécue
                </h1>
                <p class="text-black  mt-6 lg:w-2/4 text-lg">
                    Surinformés, en recherche d’autonomie dans leurs parcours d’achat, mais désireux d’y être conseillés
                    au bon moment, les consommateurs sont toujours plus exigeants. L’expérience vécue doit être à la
                    hauteur des promesses et des attentes.
                </p>

                <p class="text-black  mt-4 lg:w-2/4 text-lg">
                    L’arrivée de ces nouveaux acteurs chamboule l’ensemble des segments d’activité des banques, des
                    solutions de paiement à la banque de financement en passant par l’assurance. Si les parts de marché
                    des FinTech restent généralement confidentielles, ces dernières obligent les acteurs traditionnels à
                    s’adapter et à repenser leur offre pour demeurer compétitifs mais aussi réfléchir à leur rôle dans
                    ce nouvel écosystème.
                </p>
                <h1 class="text-2xl font-bold text-left mt-4 lg:w-2/4 text-black">
                    La menace de la cybercriminalité
                </h1>
                <p class="text-black  mt-4 lg:w-2/4 text-lg">
                    De nouveaux fondamentaux s’imposent à tous les acteurs. Le premier portant sur l’amélioration de
                    l’expérience client afin de répondre aux attentes de plus en plus grandes des consommateurs. Au cœur
                    de cette transformation, le digital dans les points de vente et le mobile s’imposent comme les
                    principaux liens entre les consommateurs, les enseignes et les marques et contribuent ainsi à
                    ré-enchanter l’expérience vécue.
                </p>
                <h1 class="text-2xl font-bold text-left mt-4 lg:w-2/4 text-black">
                    La data client : un potentiel encore largement inexploité
                </h1>
                <p class="text-black  mt-4 lg:w-2/4 text-lg">
                    La qualité de l’expérience proposée, la définition de l’offre, du produit ou encore d’un meilleur
                    parcours d’achat reposent notamment sur la connaissance intime que l’enseigne ou la marque ont du
                    client. L’explosion du big data et l’émergence des analyses prédictives permettent de mieux cerner
                    et prévoir son comportement. Seules les entreprises réellement « data driven » pourront s’appuyer
                    sur cette connaissance client pour créer de la valeur.
                </p>
                <p class="text-black  mt-4 lg:w-2/4 text-lg">
                    Le challenge est important car si la technologie est disponible, le pilotage par la donnée nécessite
                    de lourds investissements et pose, en outre, des enjeux règlementaires et de sécurité.
                </p>
                <div class="h-24"></div>
            </div>
        </section>
        <section class="bg-gray-200 ">
            <div class="h-9"></div>
            <div class="  shadow-solid-13  ">
                <h2 class="fk vj zp   pr text-xl kk wm qb mx-6 lg:mx-24 ">Nos clients témoignent
                </h2>
                <div class="w-full ">

                    <div class="lg:flex  mx-6 lg:mx-24  justify-between ">
                        <div class=" ">
                            <img src="images/tsr.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                Black Friday 2023 : une édition prometteuse malgré l’inflation
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/1.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                M&A explorer : distribution, biens de la consommation et loisirs
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/2.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">

                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                Global Consumer Insights Survey : s'adapter face à l’instabilité
                            </p>

                        </div>
                        <div class="">
                            <div class="flex ">
                                <img src="images/3.webp" alt="marketing-digital-service-création-de-site-web"
                                    class=" h-44 w-80 ">
                            </div>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                Dans l'agro-alimentaire aussi, “pas d’ESG, pas d’argent”
                            </p>


                        </div>
                    </div>
                    <a href="/#"
                        class="flex gi lg:mt-4 w-32  mr-auto ml-auto  text-white bg-orange-600 hover:bg-blue-700 block">
                        <span class="ml-9">Voir plus</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
                <div class="h-6"></div>
            </div>

        </section>
        <section class="bg-gray-200 ">
            <div class="h-9"></div>
            <div class="  shadow-solid-13  ">
                <div class="border-t-2 border-gray-300   mx-24 "></div>
                <h2 class="fk vj zp   pr text-xl kk wm qb mt-6  mx-6 lg:mx-24 ">Accompagner Pernod Ricard dans
                    l'adoption d'un
                    nouveau CRM
                </h2>
                <div class=" ">

                    <div class="lg:flex mx-6 lg:mx-24 lg:w-1/3 lg:justify-between ">
                        <div class=" ">
                            <img src="images/8.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                Accompagner Pernod <br> Ricard dans l'adoption d'un <br> nouveau CRM
                            </p>

                        </div>



                    </div>

                </div>
                <div class="h-6"></div>
            </div>

        </section>
        <section class="bg-white ">
            <div class="h-9"></div>
            <div class="  shadow-solid-13  ">
                <h2 class="fk vj zp   pr text-xl kk wm qb mx-6 lg:mx-24 ">Pour aller plus loin
                </h2>
                <div class="w-full ">

                    <div class="lg:flex mx-6 lg:mx-24 justify-between ">
                        <div class=" ">
                            <img src="images/4.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">

                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                Black Friday 2023 : une édition prometteuse malgré l’inflation
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/5.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">

                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                M&A explorer : distribution, biens de la consommation et loisirs
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/6.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                Global Consumer Insights Survey : s'adapter face à l’instabilité
                            </p>

                        </div>
                        <div class="">
                            <div class="flex ">
                                <img src="images/7.webp" alt="marketing-digital-service-création-de-site-web"
                                    class=" h-44 w-80 ">
                            </div>

                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                Dans l'agro-alimentaire aussi, “pas d’ESG, pas d’argent”
                            </p>


                        </div>
                    </div>
                    <a href="/#"
                        class="flex gi lg:mt-4 w-32  mr-auto ml-auto  text-white bg-orange-600 hover:bg-blue-700 block">
                        <span class="ml-9">Voir plus</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
                <div class="h-6"></div>
            </div>

        </section>
        <section class="mt-2 bg-black  flex items-center justify-center">
            <div class="h-16 flex">
                <h1 class="lg:text-3xl text-xl font-serif text-white mt-4">
                    Suivez-nous !
                </h1>
                <img src="images/follow_linkedin.webp" class="lg:h-9 lg:w-9 w-6 h-6 ml-6 mt-4">
                <img src="images/follow_twitter.png" class="lg:h-9 lg:w-9 w-6 h-6 ml-2 mt-4">
                <img src="images/follow_youtube.webp" class="lg:h-9 lg:w-9 w-6 h-6 ml-2 mt-4">
                <img src="images/follow_instagram.webp" class="lg:h-9 lg:w-9 w-6 h-6 ml-2 mt-4">
            </div>
        </section>
        <section class=" lg:h-64 ">
            <div class="h-16 bg-yellow-600">
                <h1 class="text-3xl font-serif text-black mx-16">
                    Contactez-nous
                </h1>

            </div>
            <div class="flex items-center">
                <div class="flex lg:mx-16 mt-6">
                    <div class="flex ">
                        <img src="images/fr-france-800xage.jpg" alt="marketing-digital-service-création-de-site-web"
                            class=" ">
                    </div>
                    <div class=" ">
                        <h1 class="text-2xl mx-6 font-serif text-black">Nom</h1>
                        <p class="mx-6 text-sm  lg:text-sm  mt-2 text-gray-600">
                            Post
                        </p>
                        <h1 class="text-xl mx-6 font-bold text-black">Email</h1>
                    </div>

                </div>

            </div>
        </section>


    </main>
    <!-- ===== Footer Start ===== -->
    <footer class=" bg-gray-700 lg:h-96">

        <!-- Footer Top -->
        <h1 class="text-xl ml-16 text-white ">
            NKC CONSULTING GROUP
        </h1>
        <div class="bb ze ki xn 2xl:ud-px-0 mt-6">
            <nav>
                <ul class="tc _o sf yo cg ep">
                    <li><a href="/"
                            class=" text-white xl hover:text-orange-500  {{ request()->is('/') ? 'text-blue-700' : '' }}  ">
                            Enjeux</a>
                    </li>

                    <li class="c i" x-data="{ dropdown: false }">
                        <a href="/solutions-numeriques"
                            class="tc wf yf bg  xl text-white hover:text-orange-500 {{ request()->is('solutions-numeriques') ? 'text-blue-700' : '' }} ">
                            Secteur d'activité
                        </a>


                        <!-- Dropdown End -->
                    </li>
                    <li><a href="/a-propos"
                            class="  xl text-white hover:text-orange-500 {{ request()->is('a-propos') ? 'text-blue-700' : '' }} ">Expertises
                        </a></li>
                    <li><a href="/contact"
                            class="xl  text-white hover:text-orange-500 {{ request()->is('contact') ? 'text-blue-700' : '' }}">Solutions
                            digitales</a>
                    </li>
                    <li><a href="/a-propos"
                            class=" xl text-white hover:text-orange-500 {{ request()->is('a-propos') ? 'text-blue-700' : '' }} ">
                            Qui sommes-nous ?</a></li>

                    <li><a href="/#"
                            class="xl text-white hover:text-orange-500 {{ request()->is('contact') ? 'text-blue-700' : '' }}">Partenaires

                        </a>
                    </li>
                    <li><a href="/contact"
                            class="xl text-white hover:text-orange-500 {{ request()->is('contact') ? 'text-blue-700' : '' }}">Carrières
                        </a>
                    </li>

                    <li><a href="/#"
                            class="xl text-white hover:text-orange-500 {{ request()->is('contact') ? 'text-blue-700' : '' }}">Contact

                        </a>
                    </li>

                </ul>
            </nav>
        </div>
        <div class="   mt-2 bg-white lg:mx-16 border border-line"></div>
        <p class="text-white  mt-6 lg:mx-48  text-sm mx-6">
            © 2012 - 2024 NKCCG. Tous droits réservés "NKCCG" fait référence au
            réseau NKCCG <br>et/ou à une ou plusieurs de ses entités membres, dont chacune constitue une entité
            juridique
            distincte. Pour plus <br> d'information, rendez-vous sur le site www.nkccg.com
        </p>
        <div class="lg:flex lg:mx-48 lg:mt-9 mt-4 mx-6">
            <h1 class="text-sm   text-white ">
                Alerte à la fraude
            </h1>
            <h1 class="text-sm   text-white lg:ml-6 ">
                Contactez-nous
            </h1>
            <h1 class="text-sm   text-white lg:ml-6 ">
                Déclaration d’accessibilité
            </h1>
            <h1 class="text-sm   text-white lg:ml-6 ">
                Déclaration de confidentialité
            </h1>
        </div>
        <div class="lg:flex lg:mx-48 lg:mt-9 mt-4 mx-6">
            <h1 class="text-sm   text-white ">
                Informations légales
            </h1>
            <h1 class="text-sm   text-white lg:ml-6 ">
                Information sur les cookies
            </h1>
            <h1 class="text-sm   text-white lg:ml-6 ">
                Paramétrer les cookies
            </h1>

        </div>
        </div>

    </footer>
    <!-- Footer Top -->


    <!-- Footer Bottom -->

    <!-- ===== Footer End ===== -->

    <!-- ====== Back To Top Start ===== -->
    <button class="xc wf xf ie ld vg sr gh tr g sa ta _a bg-orange-500 mb-9 mr-6 lg:mr-0 "
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ 'uc': scrollTop }">
        <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
        </svg>
    </button>


</html>
<!-- ====== Back To Top End ===== -->

<script>
    //  Pricing Table
    const setup = () => {
        return {
            isNavOpen: false,
            showModalModele: false,

            billPlan: 'monthly',

            plans: [{
                    name: 'Starter',
                    price: {
                        monthly: 29,
                        annually: 29 * 12 - 199,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
                {
                    name: 'Growth Plan',
                    price: {
                        monthly: 59,
                        annually: 59 * 12 - 100,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
                {
                    name: 'Business',
                    price: {
                        monthly: 139,
                        annually: 139 * 12 - 100,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
            ],
        };
    };
    toggleModalModele() {
        this.showModalModele = !this.showModalModele;
    },
</script>
<script defer src="js/bundle.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const enjeuxButton = document.getElementById('enjeuxButton');
        const enjeuxNav = document.getElementById('enjeuxNav');
        const closeEnjeuxNav = document.getElementById('closeEnjeuxNav');

        enjeuxButton.addEventListener('click', function() {
            enjeuxNav.style.display = 'block';
        });

        closeEnjeuxNav.addEventListener('click', function() {
            enjeuxNav.style.display = 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const secteurButton = document.getElementById('secteurButton');
        const secteurNav = document.getElementById('secteurNav');
        const closeSecteurNav = document.getElementById('closeSecteurNav');

        secteurButton.addEventListener('click', function() {
            secteurNav.style.display = 'block';
        });

        closeSecteurNav.addEventListener('click', function() {
            secteurNav.style.display = 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const sidenavButton = document.getElementById('sidenavButton');
        const sidenavNav = document.getElementById('sidenavNav');
        const closeSidenavButton = document.getElementById('closeSidenavButton');

        sidenavButton.addEventListener('click', function() {
            sidenavNav.style.display = 'block';
        });

        closeSidenavButton.addEventListener('click', function() {
            sidenavNav.style.display = 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const expertisesButton = document.getElementById('expertisesButton');
        const expertisesNav = document.getElementById('expertisesNav');
        const closeExpertisesButton = document.getElementById('closeExpertisesButton');

        expertisesButton.addEventListener('click', function() {
            expertisesNav.style.display = 'block';
        });

        closeExpertisesButton.addEventListener('click', function() {
            expertisesNav.style.display = 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const sidepartButton = document.getElementById('sidepartButton');
        const sidepartNav = document.getElementById('sidepartNav');
        const closeSidepartButton = document.getElementById('closeSidepartButton');

        sidepartButton.addEventListener('click', function() {
            sidepartNav.style.display = 'block';
        });

        closeSidepartButton.addEventListener('click', function() {
            sidepartNav.style.display = 'none';
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const sidenavaButton = document.getElementById('sidenavaButton');
        const sidenavaNav = document.getElementById('sidenavaNav');
        const closeSidenavaButton = document.getElementById('closeSidenavaButton');

        sidenavaButton.addEventListener('click', function() {
            sidenavaNav.style.display = 'block';
        });

        closeSidenavaButton.addEventListener('click', function() {
            sidenavaNav.style.display = 'none';
        });
    });
</script>
</body>

</html>
