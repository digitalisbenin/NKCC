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
                                            class="lg:text-xl text-sm lg:mt-4  text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                            Transition écologique et sociétale</a>
                                        <p></p>
                                        <a href="/technologie"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('technologie') ? 'text-blue-700' : '' }}">
                                            Technologie et performance</a>
                                        <p></p>
                                        <a href="/culture"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('culture') ? 'text-blue-700' : '' }}">
                                            Culture et responsabilité d'entreprise</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Mécanisation et dynamisation de l’agriculture en <br> Afrique</a>
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
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Automatisation et dynamisation de l’élevage </a>
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
                        <li>
                            <button id="expertisesButton"
                                class="xl text-black whitespace-nowrap hover:text-orange-500 inline-block border-b-4 border-transparent hover:border-red-500 pb-1">
                                Secteur d’activités
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
                                        <h1 class="lg:text-2xl lg:mt-16">Secteur d’activités</h1>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Audit</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Etudes</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Comptabilité</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Management et organisation </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Stratégie </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Conduite de changement</a>
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
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Transformation digitale </a>
                                            <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Développement durable</a>
                                            <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Responsabilité Sociale de l’Entreprise (RSE) </a>
                                            <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Big data </a>
                                           
                                    </div>
                                    <div class="lg:ml-24 lg:mt-24">
                                        <a href="#"
                                            class="lg:text-2xl lg:mt-6 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}"></a>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Génie civil et BTP
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                            Ingénierie informatique 
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                            Représentation de groupes internationaux
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('transition') ? 'text-blue-700' : '' }}">
                                            Agriculture et élevage
                                        </a>
                                            <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Finances publiques </a>
                                            <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm  lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Conseils juridique et fiscal </a>
                                    </div>
                                </div>
                            </nav>
                        </li>
                        <li class="">
                            <button id="secteurButton"
                                class="xl text-black whitespace-nowrap hover:text-orange-500 inline-block border-b-4 border-transparent hover:border-red-500 pb-1">
                                Expertise
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
                                        <a href="/expertise"
                                            class="lg:text-2xl lg:mt-16 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('expertise') ? 'text-blue-700' : '' }}">Expertises</a>
                                        <p></p>
                                       
                                        <a href="/aeronautique"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Aéronautique, défense et sécurité</a>
                                        <p></p>
                                        <a href="/assurance"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('assurance') ? 'text-blue-700' : '' }}">
                                            Conseils juridique et fiscal</a>
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
                                            Ingénierie en énergie solaire</a>
                                        <p></p>
                                        <a href="/hotelle"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('hotelle') ? 'text-blue-700' : '' }}">
                                            Génie-civil</a>
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
                                            Passation des marchés publics
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Ingénierie en énergie solaire
                                        </a>
                                    </div>
                                    <div class="lg:ml-24">
                                        <h1 class="lg:text-2xl lg:mt-24"></h1>
                                        <a href="/techonologieservice"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('techonologieservice') ? 'text-blue-700' : '' }}">
                                            Technologie</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Ingénierie en système d’information</a>
                                        <p></p>
                                        <a href="/telecommunication"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('telecommunication') ? 'text-blue-700' : '' }}">
                                            Ingénierie réseaux</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Ingénierie en informatique
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Conseil agricole
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Conseil en production animale
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Ingénierie en technologie alimentaire
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Ingénierie industrielle
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('#') ? 'text-blue-700' : '' }}">
                                            Ingénierie en énergie électrique
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
                                            ABERME (Agence Béninoise d’Electrification<br> Rurale et de Maîtrise de
                                            l’Energie)</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Ministère de l’Economie et des Finances (MEF)</a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            BENINKASHER (urbanisation et promotion<br> immobilière)
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            B3C (urbanisation et promotion immobilière)
                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl lg:mt-4 text-sm text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            BENIN FISHER (pisciculture)
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
                                            CHRONOKASH (exploitation de carrière de granite<br> et concassage)

                                        </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            CEO (Centre d’Education Ouvrière)<br> (agriculture et agroforesterie)
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
                                            Bénin </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Togo </a>
                                        <p></p>
                                        <a href="#"
                                            class="lg:text-xl text-sm lg:mt-4 text-white hover:bg-orange-500 hover:px-2 whitespace-nowrap inline-block border-b-4 border-transparent hover:border-red-500 pb-1 {{ request()->is('aeronautique') ? 'text-blue-700' : '' }}">
                                            Union des Comores </a>
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

        <section class=" bg-[url('/images/blog-1.jpg')]  lg:bg-cover mt-16" w-800>
            {{--  <div class="bg-white">
                <p class="text-base mx-5 text-black"><strong>NKCCG  > </strong>
                <strong>
                    Et vous, quelle équation voulez-vous résoudre ?   >
                     </strong>    <strong>Création et préservation de valeur </strong>  </p>
            </div>  --}}


            <!-- Bg Shape -->
            <div class="tc  w-full   ">

                <div class="  lg:ml-6  lg:mt-72 lg:mr-6 lg:px-20 lg:w-2/3">
                    <h1
                        class=" text-4xl font-serif text-left ml-9 mr-14 mt-32 text-white inline-block bg-gray-800 px-4">
                        Transformation des business models
                    </h1>
                    <h1 class="text-xl font-serif text-left ml-9  text-white bg-gray-800 mr-32 px-4 inline-block">
                        Concevoir des business models à l’épreuve des disruptions
                    </h1>
                    <div class="ml-9  mt-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-9 h- text-white bg-black">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                        </svg>

                    </div>



                </div>

            </div>
            <div class="w-full bg-red-600 text-white px-auto mx-auto">
                <div class="grid gap-6 mb-6 md:grid-cols-3 mx-auto">
                    <div class="inline-block mt-5 ml-8">
                        <div class="border-t-2 border-white w-[3.5rem] h-[1rem] "></div>
                        <h1 class="text-4xl">51 %</h1>
                        <p class="my-2 text-xl">des dirigeants français optent en priorité pour la diversification de
                            leur offre

                        </p>
                        <p class="text-sm my-5">Source: Etude NKCCG - Global CEO Survey 2021</p>

                    </div>

                    <div class="inline-block mt-5 mx-4">
                        <div class="border-t-2 border-white w-[3.5rem] h-[1rem]"></div>
                        <h1 class="text-4xl">43 %</h1>
                        <p class="my-2 text-xl">des consommateurs attendent que les entreprises se soucient davantage
                            de l'environnement

                        </p>

                        <p class="text-sm my-5">Source : Etude NKCCG - Global CEO Survey 2021 - US findings</p>
                    </div>

                    <div class="inline-block mt-5 mx-4">
                        <div class="border-t-2 border-white w-[3.5rem] h-[1rem] "></div>
                        <h1 class="text-4xl">75 %</h1>
                        <p class="my-2 text-xl">des dirigeants américains déclarent s'inquiéter de la vitesse de
                            l'évolution technologique

                        </p>

                        <p class="text-sm my-5">Source : Etude NKCCG 2020 - Global Consumer Insights</p>
                    </div>



                </div>
            </div>
        </section>
        <section class="lg:w-1/2 lg:mx-8 mx-6">




            <div>

                <p class="text-gray-800 leading-relaxed  tracking-wide lg:mx-8 text-xl mb-5">De nouvelles tendances,
                    avec
                    un aspect sociétal et technologique de plus en plus prégnant, viennent transformer le marché. Elles
                    changent complètement la donne et peuvent être à l’origine d’une disruption qui oblige les
                    entreprises à repenser leur business model. </p>
                <p class="text-gray-800 leading-relaxed  tracking-wide lg:mx-8 text-xl mb-5">Il est possible
                    d’anticiper
                    ces évolutions, de devenir un acteur des disruptions à venir et d’en faire de véritables
                    opportunités. Trois conditions : avoir la volonté d’aller vers de nouvelles opportunités business,
                    savoir se mettre à la place de son client et être à l’écoute du marché pour en comprendre les
                    besoins latents. Une démarche structurée permettra de développer les modèles économiques ou
                    technologiques qui répondront le mieux à ces attentes.</p>


            </div>



        </section>
        <section class=" py-10">

            <div class=" bg-gray-100  py-10">


                <h2 class="lg:text-4xl text-2xl text-gray-800 lg:mx-8 py-1 lg:px-10 mb-5  mx-6">La disruption :
                    générateur de transformation
                </h2>

                <div class=" ">




                    <div class="grid gap-6 mb-6 md:grid-cols-2 mx-6 lg:mx-12 ">
                        <div class="mr-6 mt-1 ">

                            <div class="lg:mx-8 my-8">
                                <img class=" mb-5 " alt="" w- style="background-color: transparent;"
                                    src="/images/African_workplace.png">
                            </div>

                        </div>
                        <div class="">

                            <div class=" mt-1">



                                <p class="text-gray-800 leading-relaxed  tracking-wide lg:mx-8 text-xl mb-3">Parmi les
                                    grandes disruptions, on compte notamment celles liées à l’accélération de la
                                    digitalisation. Les entreprises qui souhaitent tirer parti de cette situation
                                    devront se positionner au plus tôt et être à la pointe de ces évolutions. </p>
                                <p class="text-gray-800 leading-relaxed  tracking-wide lg:mx-8 text-xl mb-3">Les
                                    technologies sont une des opportunités à disposition des entreprises pour développer
                                    de nouveaux business model, afin de faire évoluer leur métier historique et leur
                                    permettre d’être présentes sur de nouveaux marchés.</p>
                                <p class="text-gray-800 leading-relaxed  tracking-wide lg:mx-8 text-xl mb-3">Anticiper
                                    et
                                    se préparer à de telles disruptions demande une forte capacité d’analyse, mais
                                    l’enjeu justifie ces efforts : une plus grande différenciation sur des marchés très
                                    concurrentiels et une résilience accrue sur le long terme.</p>

                            </div>



                        </div>




                    </div>


                </div>



            </div>

        </section>
        <section class="">

            <div class=" ">

                <h1 class="lg:text-4xl text-2xl text-gray-800 lg:mx-5 mx-6 mb-5 lg:ml-20 ">Instaurer la confiance à
                    travers l’éthique et la
                    <br> transparence
                </h1>


                <div class="grid gap-6 mb-6 md:grid-cols-2 mx-6 lg:mx-12 ">
                    <div class="lg:mr-6 mt-5 ">

                        <div class=" lg:mt-15">

                            <P class="text-gray-800 mb-5 leading-relaxed  tracking-wide lg:mx-8 text-xl">La perte de
                                confiance dans les institutions caractérise l’environnement dans lequel évoluent les
                                entreprises. Cette crise se traduit en particulier par des attentes clients en forte
                                hausse sur les sujets de transparence, de durabilité et de conscience sociale. Les
                                dernières études révèlent que les consommateurs privilégient désormais les produits
                                traçables et respectueux de l’environnement, ainsi que les entreprises aux pratiques
                                durables.</P>
                        </div>

                        <div class=" lg:mt-15">

                            <P class="text-gray-800 mb-5 leading-relaxed  tracking-wide  lg:mx-8 text-xl">À un moment
                                aussi
                                crucial, il est nécessaire pour les entreprises de se réinventer et d'établir une
                                relation de confiance avec leurs clients potentiels. Cela se traduit par une
                                communication plus transparente, basée sur un discours de preuve (avec le suivi
                                d’indicateurs ESG par exemple), ou encore l’intégration du développement durable dans
                                les lancements produits et dans le calcul de leur retour sur investissement. Le business
                                model doit être en cohérence avec ces pratiques.</P>
                        </div>




                    </div>
                    <div class="">
                        <div class="lg:mx-8 my-8">
                            <img class=" mb-5 " alt="" w- style="background-color: transparent;"
                                src="/images/African_workplace.png">
                        </div>




                    </div>




                </div>


            </div>

        </section>
        <section class="bg-gray-200 ">
            <div class="lg:h-9"></div>
            <div class="  shadow-solid-13  ">
                <h2 class="fk vj zp   pr text-xl kk wm qb  mx-6 lg:mx-24 text-gray-500 ">Pour aller plus loin
                </h2>
                <div class="w-full ">

                    <div class="grid gap-6 mb-6 md:grid-cols-4 lg:mx-12 mx-6 ">
                        <div class=" ">
                            <img src="images/cq5dam.thumbnail.319.319.webp"
                                alt="marketing-digital-service-création-de-site-web" class="h-44 w-80">


                            <p class=" text-sm  lg:text-xl   mt-4 text-gray-600">
                                Prospérer à l’ère de la réinvention continue, 27e CEO Survey
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/cq5dam.thumbnai.webp"
                                alt="marketing-digital-service-création-de-site-web" class="h-44 w-80">


                            <p class=" text-sm  lg:text-xl   mt-4 text-gray-600">
                                Leviers de la satisfaction client : seconde édition
                            </p>

                        </div>
                        <div class=" ">
                            <img src="images/cq5da.webp" alt="marketing-digital-service-création-de-site-web"
                                class="h-44 w-80">

                            <p class=" text-sm  lg:text-xl   mt-4 text-gray-600">
                                Design éthique : comprendre notre impact
                            </p>

                        </div>

                    </div>

                </div>
                <div class="h-6"></div>
            </div>

        </section>

        <section class=" py-5">

            <div class=" ">

                <p class="text-xl font-bold text-gray-400 leading-relaxed  tracking-wide mx-6 lg:mx-8 mb-5 mt-8">
                    Quelles autres
                    équations voulez-vous résoudre ?</p>


                <div class="grid gap-6 mb-6 md:grid-cols-2 lg:mr-8 mx-6 lg:mx-0 lg:ml-8">
                    <div class=" mt-5 ">

                        <button
                            class="flex items-center justify-between bg-transparent h-12 text-black hover:bg-red-600 hover:text-white w-full px-4 border border-gray-400 mb-2">
                            <span class="font-bold text-xl ">Transition écologique et sociétale</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>



                        <button
                            class="flex items-center justify-between bg-transparent h-12 text-black hover:bg-red-600 hover:text-white w-full px-4 border border-gray-400 mb-2">
                            <span class="font-bold text-xl ">Culture et responsabilité d'entreprise</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>

                        <button
                            class="flex items-center justify-between bg-transparent h-12 text-black hover:bg-red-600 hover:text-white w-full px-4 border border-gray-400 mb-2">
                            <span class="font-bold text-xl ">Création et préservation de valeur </span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>

                        <button
                            class="flex items-center justify-between bg-transparent h-12 text-black hover:bg-red-600 hover:text-white w-full px-4 border border-gray-400 mb-2">
                            <span class="font-bold text-xl ">Croissance des entreprises familiales/ETI </span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>



















                    </div>
                    <div class="">
                        <div class=" lg:mt-5">

                            <button
                                class="flex items-center justify-between bg-transparent h-12 text-black hover:bg-red-600 hover:text-white w-full px-4 border border-gray-400 mb-2">
                                <span class="font-bold text-xl ">Technologie et performance</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>

                            <button
                                class="flex items-center justify-between bg-transparent h-12 text-black hover:bg-red-600 hover:text-white w-full px-4 border border-gray-400 mb-2">
                                <span class="font-bold text-xl ">Transparence et maîtrise des risques</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>

                            <button
                                class="flex items-center justify-between bg-transparent h-12 text-black hover:bg-red-600 hover:text-white w-full px-4 border border-gray-400 mb-2">
                                <span class="font-bold text-xl">Transformation des business models</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>

                            <button
                                class="flex items-center justify-between bg-transparent h-12 text-black hover:bg-red-600 hover:text-white w-full px-4 border border-gray-400 mb-2">
                                <span class="font-bold text-xl"> Startups et innovation </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>






                        </div>



                    </div>




                </div>


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
