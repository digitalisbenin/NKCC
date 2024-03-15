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
        <section class=" bg-gray-100  mt-16 ">


            <!-- Bg Shape -->
            <br>
            <br>
            <br>

            <div class="lg:w-1/3 lg:mx-12 mx-6">

                <div class="border-t-2 border-red-500"></div>

                <br>
                <h2 class="text-2xl text-red-500 font-bold">
                    Vous avez une question, un besoin ? Nos experts vous répondent
                </h2>
                <br>
                <p> En renseignant les champs ci-dessous, vous nous permettez de mieux comprendre votre besoin. </p>
                <br>


                <p> Les champs obligatoires sont marqués d'un astérisque(<span class="text-red-500">*</span>) </p>
                <br>
                <form action="" method="post">
                    <div class="mb-6">
                        <label for="nom" class="block mb-2 text-lg font-medium text-gray-900 ">Nom<span
                                class="text-red-500">*</span></label>
                        <input type="text" id="nom"
                            class="0 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                            placeholder="" required>
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-lg font-medium text-gray-900 ">Votre
                            adresse e-mail<span class="text-red-500">*</span></label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   "
                            placeholder="" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-lg font-medium text-gray-900 ">Téléphone</label>
                        <input type="number" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="">
                    </div>
                    <div class="mb-6">
                        <label for="email"
                            class="block mb-2 text-lg font-medium text-gray-900 ">Organisation/Entreprise</label>
                        <input type="text" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-lg font-medium text-gray-900 ">Votre
                            fonction</label>
                        <input type="text" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="">
                    </div>
                    <div class="mb-6">
                        <label for="email"
                            class="block mb-2 text-lg font-medium text-gray-900 ">Pays/Territoire<span
                                class="text-red-500">*</span></label>
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-lg  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            required>
                            <option selected>Veuillez sélectionner le pays/territoire</option>
                            <option value="za">Afrique du Sud</option>
                            <option value="al">Albanie</option>
                            <option value="dz">Algérie</option>
                            <option value="de">Allemagne</option>
                            <option value="xa">Amérique centrale</option>
                            <option value="ad">Andorra</option>
                            <option value="ao">Angola</option>
                            <option value="ag">Antigua</option>
                            <option value="an">Antilles néerlandaises</option>
                            <option value="sa">Arabie Saoudite</option>
                            <option value="ar">Argentine</option>
                            <option value="am">Arménie</option>
                            <option value="aw">Aruba</option>
                            <option value="w1">Asia Pacific Customs and Trade</option>
                            <option value="cs">Asie centrale et Caucase</option>
                            <option value="au">Australie</option>
                            <option value="at">Autriche</option>
                            <option value="az">Azerbaïdjan</option>
                            <option value="bs">Bahamas
                            </option>
                            <option value="bh">Bahreïn
                            </option>
                            <option value="bd">Bangladesh</option>
                            <option value="bb">Barbade</option>
                            <option value="be">Belgique
                            </option>
                            <option value="bm">Bermudes
                            </option>
                            <option value="by">Biélorussie
                            </option>
                            <option value="bo">Bolivie
                            </option>
                            <option value="bq">Bonaire</option>
                            <option value="ba">Bosnie Herzégovine
                            </option>
                            <option value="bw">Botswana</option>
                            <option value="br">Brésil
                            </option>
                            <option value="bg">Bulgarie
                            </option>
                            <option value="bf">Burkina Faso</option>
                            <option value="bi">Burundi</option>
                            <option value="bj">Bénin
                            </option>
                            <option value="kh">Cambodge
                            </option>
                            <option value="cm">Cameroon</option>
                            <option value="ca">Canada</option>
                            <option value="cv">Cap-Vert
                            </option>
                            <option value="cb">Caraïbes
                            </option>
                            <option value="cl">Chili</option>
                            <option value="cn">Chine
                            </option>
                            <option value="cy">Chypre</option>
                            <option value="xg">Cisjordanie et Gaza</option>
                            <option value="co">Colombie</option>
                            <option value="km">Comoros</option>
                            <option value="cg">Congo (Brazzaville)</option>
                            <option value="cd">Congo (dém.rep.)</option>
                            <option value="kr">Corée du Sud</option>
                            <option value="cr">Cost Rica</option>
                            <option value="ci">Cote d'Ivoire</option>
                            <option value="hr">Croatie</option>
                            <option value="dk">Danemark</option>
                            <option value="dj">Djibouti</option>
                            <option value="eg">Egypte</option>
                            <option value="ae">Emirats Arabes Unis</option>
                            <option value="ec">Equateur</option>
                            <option value="es">Espagne</option>
                            <option value="ee">Estonie</option>
                            <option value="et">Ethiopie</option>
                            <option value="c1">Europe centrale et orientale</option>
                            <option value="fj">Fidji</option>
                            <option value="fi">Finlande</option>
                            <option value="fr">France</option>
                            <option value="w4">Francophone Afrique</option>
                            <option value="pf">French Polynesia</option>
                            <option value="ga">Gabon</option>
                            <option value="gm">Gambie</option>
                            <option value="gh">Ghana</option>
                            <option value="gi">Gibraltar</option>
                            <option value="gl">Groenland</option>
                            <option value="gr">Grèce</option>
                            <option value="gt">Guatemala</option>
                            <option value="xc">Guernesey</option>
                            <option value="gn">Guinée</option>
                            <option value="gw">Guinée Bissau</option>
                            <option value="gq">Guinée Équatoriale</option>
                            <option value="gy">Guyane
                            </option>
                            <option value="ge">Géorgie</option>
                            <option value="hn">Honduras</option>
                            <option value="hk">Hong Kong RAS, Chine</option>
                            <option value="hu">Hongrie</option>
                            <option value="mh">Iles Marshall
                            </option>
                            <option value="in">Inde</option>
                            <option value="id">Indonésie</option>
                            <option value="iq">Irak</option>
                            <option value="ie">Irlande</option>
                            <option value="is">Islande</option>
                            <option value="il">Israël</option>
                            <option value="it">Italie
                            </option>
                            <option value="w2">Italy (Tax and Legal Services)</option>
                            <option value="jm">Jamaïque
                            </option>
                            <option value="jp">Japon
                            </option>
                            <option value="xd">Jersey</option>
                            <option value="jo">Jordanie
                            </option>
                            <option value="kz">Kazakhstan</option>
                            <option value="ke">Kenya</option>
                            <option value="kg">Kirghizistan
                            </option>
                            <option value="ks">Kosovo</option>
                            <option value="kw">Koweit
                            </option>
                            <option value="la">Laos</option>
                            <option value="lv">Lettonie
                            </option>
                            <option value="lb">Liban
                            </option>
                            <option value="lr">Liberia</option>
                            <option value="ly">Libye
                            </option>
                            <option value="li">Liechtenstein</option>
                            <option value="lt">Lituanie
                            </option>
                            <option value="lu">Luxembourg</option>
                            <option value="mo">Macao RAS, Chine
                            </option>
                            <option value="mk">Macédoine du Nord
                            </option>
                            <option value="mg">Madagascar</option>
                            <option value="my">Malaisie
                            </option>
                            <option value="mv">Maldives</option>
                            <option value="ml">Mali</option>
                            <option value="mt">Malte
                            </option>
                            <option value="ma">Maroc
                            </option>
                            <option value="mq">Martinique</option>
                            <option value="mu">Maurice
                            </option>
                            <option value="mr">Mauritanie
                            </option>
                            <option value="mx">Mexique
                            </option>
                            <option value="md">Moldavie
                            </option>
                            <option value="mc">Monaco (Principality of)</option>
                            <option value="gx">Mondial
                            </option>
                            <option value="mn">Mongolie
                            </option>
                            <option value="me">Monténégro
                            </option>
                            <option value="mz">Mozambique</option>
                            <option value="na">Namibie
                            </option>
                            <option value="np">Nepal</option>
                            <option value="ni">Nicaragua</option>
                            <option value="ne">Niger</option>
                            <option value="ng">Nigeria</option>
                            <option value="no">Norvège
                            </option>
                            <option value="nz">Nouvelle-Zélande
                            </option>
                            <option value="om">Oman</option>
                            <option value="ug">Ouganda</option>
                            <option value="uz">Ouzbékistan</option>
                            <option value="p1">PRTM Japan</option>
                            <option value="pk">Pakistan</option>
                            <option value="pa">Panama</option>
                            <option value="pg">Papouasie Nouvelle Guinée</option>
                            <option value="py">Paraguay</option>
                            <option value="nl">Pays-Bas
                            </option>
                            <option value="ph">Philippines</option>
                            <option value="pl">Pologne</option>
                            <option value="pr">Porto Rico</option>
                            <option value="pt">Portugal</option>
                            <option value="w3">NKCCG China IAS</option>
                            <option value="g1">NKCCG Google</option>
                            <option value="pe">Pérou</option>
                            <option value="qa">Qatar</option>
                            <option value="rm">Remediation</option>
                            <option value="ro">Roumanie</option>
                            <option value="uk">Royaume-Uni</option>
                            <option value="rw">Rwanda</option>
                            <option value="m1">Région du Moyen-Orient
                            </option>
                            <option value="cf">République centrafricaine
                            </option>
                            <option value="do">République dominicaine</option>
                            <option value="cz">République tchèque</option>
                            <option value="sm">Saint Marin</option>
                            <option value="kn">Saint-Christophe-et-Niévès</option>
                            <option value="lc">Sainte Lucie</option>
                            <option value="sv">Salvador</option>
                            <option value="st">Sao Tome et Principe</option>
                            <option value="rs">Serbie</option>
                            <option value="sc">Seychelles</option>
                            <option value="sl">Sierra Leone</option>
                            <option value="sg">Singapour</option>
                            <option value="sk">Slovaquie</option>
                            <option value="si">Slovènie</option>
                            <option value="so">Somalie</option>
                            <option value="sd">Soudan</option>
                            <option value="lk">Sri Lanka</option>
                            <option value="ch">Suisse</option>
                            <option value="sr">Suriname</option>
                            <option value="se">Suède</option>
                            <option value="sn">Sénégal</option>
                            <option value="tj">Tadjikistan</option>
                            <option value="tz">Tanzanie</option>
                            <option value="tw">Taïwan</option>
                            <option value="td">Tchad</option>
                            <option value="s2">TerritoriesandLanguagesOthers_NKCCGCountryS2</option>
                            <option value="zz">Territory</option>
                            <option value="th">Thaïlande</option>
                            <option value="tg">Togo</option>
                            <option value="tt">Trinité-et-Tobago</option>
                            <option value="tn">Tunisie</option>
                            <option value="tm">Turkménistan</option>
                            <option value="tr">Turquie</option>
                            <option value="ua">Ukraine</option>
                            <option value="uy">Uruguay</option>
                            <option value="ve">Venezuela</option>
                            <option value="vn">Vietnam</option>
                            <option value="ye">Yémen</option>
                            <option value="zm">Zambie</option>
                            <option value="zw">Zimbabwe</option>
                            <option value="sz">eSwatini/Swaziland</option>
                            <option value="er">Érythrée</option>
                            <option value="us">États-Unis</option>
                            <option value="im">Île de Man</option>
                            <option value="ky">Îles Caïmans
                            </option>
                            <option value="sb">Îles Salomon</option>
                            <option value="tc">Îles Turques-et-Caïques</option>
                            <option value="vi">Îles Vierges américaines</option>
                            <option value="vg">Îles Vierges britanniques
                            </option>
                            <option value="jg">Îles anglo-normandes</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-lg font-medium text-gray-900 ">Objet de votre
                            demande<span class="text-red-500">*</span></label>
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            required>
                            <option selected>--Choisir--</option>
                            <option value="Recrutement">Recrutement</option>
                            <option value="Demande de prestation">Demande de prestation</option>
                            <option value="Autre demande">Autre demande</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-lg font-medium text-gray-900 ">Sujet de votre
                            demande<span class="text-red-500">*</span></label>
                        <input type="text" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-lg font-medium text-gray-900 ">Précisez ou
                            commentez votre demande<span class="text-red-500">*</span></label>
                        <textarea id="message" rows="3"
                            class="block p-2.5 w-full text-lg text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="" required></textarea>
                    </div>
                    <span>Les informations recueillies lors de votre visite sur ce site sont protégées par le Règlement
                        (UA) 2016/679 du Parlement Africain et du Conseil relatif à la protection des personnes
                        physiques à l’égard du traitement des données à caractère personnel et à la libre circulation de
                        ces données (le « RGPD »), ainsi que par la loi n° 78-17 du 6 janvier 1978 relative à
                        l'Informatique, aux Fichiers et aux Libertés, dans sa dernière version en vigueur. Ces
                        informations sont également confidentielles, et ne sont en aucun cas destinées à être diffusées
                        à des tiers, notamment à des fins de prospection commerciale. En nous soumettant votre adresse
                        e-mail, vous reconnaissez avoir pris connaissance de notre Déclaration de confidentialité, et
                        vous donnez votre consentement exprès quant à l’utilisation que nous ferons de ces données au
                        regard de cette déclaration. Si vous veniez à changer d’avis concernant la réception des
                        informations que nous vous proposons, vous pouvez nous envoyer un message en nous adressant le
                        formulaire de réclamation ; de même si vous souhaitez exercer vos droits d’accès, de
                        rectification, d’effacement et/ou d’opposition de vos données, il vous suffit de nous l'indiquer
                        en nous adressant le formulaire de réclamation.</span>
                    <br>
                    <br>
                    <button type="button"
                        class="py-2.5 px-5 me-2 mb-2 text-lg font-medium text-gray-900 focus:outline-none bg-white border border-gray-200 hover:bg-gray-500 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200 ">Cancel</button>

                    <button type="submit"
                        class="py-2.5 px-5 me-2 mb-2 text-lg font-medium text-white focus:outline-none bg-orange-500 border border-gray-200 hover:bg-orange-600 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200 ">Soumettre</button>
                </form>

            </div>

        </section>
        <br>



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
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
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
