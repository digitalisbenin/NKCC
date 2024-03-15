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
        <section class=" bg-[url('/images/Sanstitre1.jpg')]  lg:bg-cover mt-16 ">
            <!-- Bg Shape -->
            <div class="tc  w-full   ">

                <div class=" lg:mt-52 mt-32 lg:mr-6 lg:px-20 lg:w-2/3 bg-gray-800">
                    <h1 class="lg:text-4xl text-2xl font-serif text-left ml-9 mt-12 text-white ">
                        Médias et loisirs
                    </h1>
                    <p class="lg:text-2xl text-xl font-serif text-left ml-9 mt-4 text-white">
                        Pour les acteurs du secteur des médias et loisirs, l’expérience client est une priorité. C’est
                        un axe majeur de différenciation porté par les technologies numériques, les contenus et
                        l’exploitation des données.
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
            <div class="lg:flex   lg:h-54 lg:mx-24 mx-6">
                <div class="h-6 lg:h-0"></div>
                <div class="lg:w-1/3 ">
                    <div class="border-t-4 border-white lg:mt-6 ml-9 w-12"></div>
                    <h1 class="text-4xl font-serif text-left ml-9 mt-9 text-white">
                        +17 %



                    </h1>
                    <p class="text-white ml-9 mt-6 ">
                        d'évolution annuelle du marché de la publicité digitale en France, soit près de 4,9 Mds €
                    </p>
                    <p class="text-white ml-9 mt-9 mr-24">
                        Source : SRI 2019
                    </p>
                </div>
                <div class="lg:w-1/3 ">
                    <div class="border-t-4 border-white mt-6 ml-9 w-12"></div>
                    <h1 class="text-4xl font-serif text-left ml-9 mt-9 text-white">
                        +40,4 %




                    </h1>
                    <p class="text-white ml-9 mt-6 ">
                        de croissance prévue pour les activités de réalité virtuelle (VR) entre 2017 et 2022
                    </p>
                    <p class="text-white ml-9 mt-9 mr-24">
                        Source : étude NKCCG
                    </p>
                </div>
                <div class="lg:w-1/3 ">
                    <div class="border-t-4 border-white mt-6 ml-9 w-12"></div>
                    <h1 class="text-4xl font-serif text-left ml-9 mt-9 text-white">
                        2400
                        Mds $


                    </h1>
                    <p class="text-white ml-9 mt-6 ">
                        de CA mondial prévu pour l'industrie des médias et loisirs entre 2017 et 2022
                    </p>
                    <p class="text-white ml-9 mt-9 mr-24">
                        Source : étude NKCCG
                    </p>
                </div>
            </div>
        </section>
        <section class="bg-gray-200 ">
            <div class="lg:h-12 h-6"></div>

            <div class="lg:mx-24 lg:flex mx-6">
                <div class="lg:w-1/2 lg:mr-4">
                    <p class="text-black text-xl  ">
                        Nouveaux modes de consommation, expérience client, innovation :
                    </p>
                    <ul class="  text-black list-inside mt-9 text-lg ">
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-orange-700 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Le client est enfin roi

                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="w-3.5 h-3.5 me-2 text-orange-700  flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>

                            Les business modèles évoluent, les normes aussi


                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="w-3.5 h-3.5 me-2 text-orange-700 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            La France s'inscrit dans la tendance
                        </li>
                    </ul>
                </div>
                <div class="lg:w-1/2 mt-4 lg:mt-0">
                    <img src="images/damil-gettyimages-969437892-670155.avif" class="">
                </div>
            </div>
            <div class="h-6"></div>


        </section>
        <section class=" ">
            <!-- Bg Shape -->
            <div class=" lg:mx-24 mx-6">
                <div class="lg:h-24 h-6"></div>
                <h1 class="text-4xl font-serif text-left  text-black">
                    Médias et loisirs : une révolution en cours
                </h1>
                <h1 class="lg:text-2xl text-xl font-bold text-left mt-4 lg:w-2/4 text-black">
                    Le client est enfin roi
                </h1>

                <p class="text-black  mt-6 lg:w-2/4 text-lg">
                    La création de valeur ne s’appuie plus seulement sur la recherche de la meilleure combinaison entre
                    contenus et stratégies de distribution. Pour se démarquer, les acteurs du secteur des médias et du
                    divertissement se doivent de proposer une expérience client singulière ainsi valorisable.<br
                        class="mt-6">

                    De nouveaux modes de consommation ont fait leur apparition provoquant, notamment, une saturation de
                    l’offre et une perte de vitesse des marques traditionnelles.
                </p>
                <p class="text-black  mt-6 lg:w-2/4 text-lg">
                    La télévision, par exemple, est consommée de manière asynchrone grâce au replay et sur un large
                    éventail de supports physiques. Pour la musique, qui se consomme désormais majoritairement en ligne,
                    le streaming s’impose et fait évoluer les business models. Aujourd’hui par exemple, les labels font
                    surtout du profit avec les droits d’interprétation, qui constitue désormais la partie principale de
                    leurs revenus.<br class="mt-6">

                    Le numérique est à la fois source de changements et d’opportunités : l’innovation technologique (4D,
                    AR, VR,…) promet une expérience toujours plus immersive, susceptible de fidéliser l’utilisateur et
                    de fédérer des communautés.
                <h1 class="text-2xl font-bold text-left mt-4 lg:w-2/4 text-black">
                    Des contenus ciblés pour les consommateurs

                </h1>
                <p class="text-black  mt-4 lg:w-2/4 text-lg">
                    Le développement des accès internet, de la vidéo sur internet, de la publicité en ligne et des jeux
                    vidéo sont des moteurs de croissance.<br>

                    Les initiatives pour rassembler les consommateurs dans des communautés solides se multiplient,
                    notamment dans le secteur des médias. Les transformer en fans et cibler le contenu souhaité sont des
                    impératifs stratégiques. Les chaines de télévision et les groupes de télécommunications se
                    rapprochent et misent sur les contenus afin de se différencier. Par exemple, les amateurs de série
                    s’orientent plus facilement vers l’offre d’un opérateur alors que les fans de football préféreront
                    les contenus d’un autre. Ces industries sont désormais dans le même écosystème, liées par des
                    partenariats. Les utilisateurs et les fans sont alors soigneusement suivis, via leurs données.
                </p>
                <p class="text-black  mt-4 lg:w-2/4 text-lg">
                    L’analyse des données devient ainsi un levier stratégique pour les entreprises. Plus le consommateur
                    est intéressé plus il produit de données. Or, cette profusion d’informations permet de collecter
                    davantage de renseignements pour mieux appréhender les attentes et les souhaits des utilisateurs.
                    C’est également une manière de mieux cibler un public et de créer de nouvelles opportunités de
                    revenus.
                </p>
                <h1 class="text-2xl font-bold text-left mt-4 lg:w-2/4 text-black">
                    Les business models évoluent, les normes aussi
                </h1>
                <p class="text-black  mt-4 lg:w-2/4 text-lg">
                    Ces partenariats entre les acteurs du secteur des télécommunications et ceux des médias et loisirs
                    donnent une nouvelle dimension de deals aux proportions impressionnantes (megadeals).<br>

                    Les nouveaux leviers : données des utilisateurs, technologies ou encore expériences à faire vivre
                    aux clients permettent d’établir de nouveaux deals stratégiques axés sur la data, l’innovation et le
                    vécu.<br>

                    Les professionnels du jeu et des parcs d’attraction misent eux aussi sur les datas pour améliorer
                    l’expérience utilisateur et espérer contrer les effets de la conjoncture sociale et économique.
                </p>
                <p class="text-black  mt-4 lg:w-2/4 text-lg">
                    Pour ces professionnels des jeux de hasard, sociétés de paris, casinos et parcs d’attractions, la
                    complexité de la régulation et la lutte contre le blanchiment sont d’autres sujets majeurs.<br>

                    De nouvelles normes encadrent désormais tous ces nouveaux usages. L’environnement réglementaire des
                    acteurs du secteur des médias et loisirs se renforce aussi avec de nouvelles règlementations comme
                    IFRS 16 ou le RGPD (Le Règlement Général sur la Protection des Données, entré en vigueur en mai
                    2018, incitant les entreprises à plus de vigilance dans l’exploitation des données personnelles.).
                </p>
                <h1 class="text-2xl font-bold text-left mt-4 lg:w-2/4 text-black">
                    La France s’inscrit dans la tendance
                </h1>
                <p class="text-black  mt-4 lg:w-2/4 text-lg">
                    NKCCG a identifié quatre relais de croissance pour le secteur dans le monde : les services en ligne,
                    la publicité online, les jeux vidéo et la fourniture d’accès Internet.

                    Le marché des médias et loisirs français se trouve également dans une période charnière. Les revenus
                    des secteurs traditionnels ne cessent de baisser au profit des nouveaux entrants digitaux. En
                    France, le développement des accès internet, la vidéo sur internet, la publicité en ligne et les
                    jeux vidéo sont des moteurs de croissance.
                </p>
                <p class="text-black  mt-4 lg:w-2/4 text-lg">
                    Pour la première fois en 2016, la publicité sur internet a généré davantage de revenus que la
                    publicité télévisée. Les consommateurs continuent d’attacher autant d’importance aux deux
                    plateformes alors que les dépenses publicitaires deviennent de plus en plus efficaces.
                </p>

                <div class="h-24"></div>
            </div>
        </section>
        <section class="bg-red-600">
            <!-- Bg Shape -->
            <div class=" lg:h-44 lg:mx-24 mx-6">
                <div class="">
                    <div class="lg:h-9 h-6"></div>
                    <h1 class="lg:text-2xl text-xl font-bold text-left text-white mt-2">
                        Sports et Mega Events
                    </h1>
                    <a href="/#" class="flex gi lg:mt-4 w-52    text-black bg-white hover:bg-blue-700 block">
                        <span class="ml-4">Découvrir notre offre</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <div class="lg:h-9 h-6"></div>
                </div>

            </div>
        </section>
        <section class="bg-gray-200 ">
            <div class="h-9"></div>
            <div class="  shadow-solid-13  ">
                <h2 class="fk vj zp   pr text-xl kk wm qb mx-6 lg:mx-24 ">Nos clients témoignent
                </h2>
                <div class="w-full ">

                    <div class="lg:flex lg:mx-24 mx-6 justify-between ">
                        <div class=" ">
                            <img src="images/cq5dam.thumbnail.319.319.webp"
                                alt="marketing-digital-service-création-de-site-web" class="h-44 w-80">

                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                [Outil] FEC 4.0
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/cq5dam.thumbnai.webp"
                                alt="marketing-digital-service-création-de-site-web" class="h-44 w-80">

                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                [Outil] FEC 4.0
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/cq5da.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                [Outil] FEC 4.0
                            </p>

                        </div>
                        <div class="">
                            <div class="flex ">
                                <img src="images/cq5dam.tl.319.319.webp"
                                    alt="marketing-digital-service-création-de-site-web" class=" h-44 w-80 ">
                            </div>

                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                [Outil] FEC 4.0
                            </p>


                        </div>
                    </div>
                    <a href="/#"
                        class="lg:flex gi lg:mt-4 w-32  mr-auto ml-auto  text-white bg-orange-600 hover:bg-blue-700 block">
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
        <section class="bg-red-600">
            <!-- Bg Shape -->
            <div class=" lg:h-44 lg:mx-24 mx-6 ">
                <div class="">
                    <div class="h-9"></div>
                    <h1 class="lg:text-2xl text-xl font-bold text-left text-white mt-2">
                        Comment les entreprises peuvent tirer partie de la 5G ?
                    </h1>
                    <a href="/#" class="flex gi lg:mt-4 w-44    text-black bg-white hover:bg-blue-700 block">
                        <span class="ml-4">En savoir plus
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mt-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    <div class="h-9 lg:h-0"></div>
                </div>

            </div>
        </section>
        <section class="bg-gray-200 ">
            <div class="h-9"></div>
            <div class="  shadow-solid-13  ">
                <h2 class="fk vj zp   pr text-xl kk wm qb mx-6 lg:mx-24 ">Pour aller plus loin
                </h2>
                <div class="w-full ">

                    <div class="lg:flex lg:mx-24 mx-6 justify-between ">
                        <div class=" ">
                            <img src="images/cq5.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">

                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                [Outil] FEC 4.0
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/abhj.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">

                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                [Outil] FEC 4.0
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/cq5da.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                [Outil] FEC 4.0
                            </p>

                        </div>
                        <div class="">
                            <div class="flex ">
                                <img src="images/tnbyfvc.webp" alt="marketing-digital-service-création-de-site-web"
                                    class=" h-44 w-80 ">
                            </div>

                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                15/02/22
                            </p>
                            <p class=" text-sm  lg:text-lg   mt-4 text-gray-600">
                                [Outil] FEC 4.0
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
