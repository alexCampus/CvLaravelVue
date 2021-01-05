<template>
    <b-container class="margin">
        <h2 class="bold text-left">{{ $t('navBar.resume', lang) }}</h2>
        <hr class="hr">
        <div class="margin">
            <b-button :class="{'w-100' : true, 'bgColor': true, 'overText': true}" v-on:click="download()"><i class="fas fa-download"></i> {{ $t('resume.download', lang) }}</b-button>
            <b-button :class="{'w-100' : true, 'bgColor': true, 'overText': true}" v-on:click="redirectToContact()"><i class="fas fa-envelope"></i> {{ $t('resume.contact', lang) }}
            </b-button>
        </div>

        <div class="margin">
            <h4 class="text-left"><i class="fas fa-graduation-cap"></i> {{ $t('resume.education', lang) }}</h4>
            <hr class="line">
            <div class="resumeContent text-left">
                <h5>Technicien Développeur</h5>
                <h6><em>Campus Numérique / Grenoble / Octobre 2016 - Mars 2018</em></h6>
                <hr>
                <p>
                    Formation de Technicien Développeur au Campus Numérique.<br>
                    Formation intensive de 6 mois sur les languages de base (HTML, CSS, JS, PHP, MYSQL, JAVA) suivie d'une alternance de 12 mois en entreprise.
                </p>
            </div>
        </div>
        <div class="margin">
            <h4 class="text-left"><i class="fas fa-flag"></i> {{ $t('resume.work', lang) }}</h4>
            <hr class="line">
            <div class="resumeContent text-left">
                <h5>Formateur Indépendant</h5>
                <h6><em>Campus Numérique / Grenoble / Janvier 2019 - Aujourd'hui</em></h6>
                <hr>
                <p>
                    J'interviens comme formateur au Campus Numérique sur les modules :</p>
                <ul>
                    <li>PHP</li>
                    <li>BDD</li>
                    <li>MySql</li>
                    <li>Git</li>
                    <li>Système & Réseaux</li>
                </ul>
            </div>
        </div>
        <hr class="line">
        <div class="resumeContent text-left">
            <h5>Développeur Fullstack</h5>
            <h6><em>Allibert Trekking / Grenoble / Août 2018 - Aujourd'hui</em></h6>
            <hr>
            <p>
                Je suis développeur web au sein du Service Informatique d'Allibert Trekking.
                J'interviens sur le système intranet de l'entreprise en PHP / Postgresql et j'ai mis en place de nouveaux développement sous Laravel.<br>
                J'effectue de la gestion de projet ainsi que de la mise en place de process de développement et CI grâce à Gitlab.
            </p>
        </div>
        <hr class="line">
        <div class="resumeContent text-left">
            <h5>Développeur Fullstack</h5>
            <h6><em>Eolas / Grenoble / Avril 2018 - Août 2018</em></h6>
            <hr>
            <p>
                Développeur web au sein du groupe Eolas, j'ai participé à différents projets à destination de l'entreprise en Symfony, VueJS et NodeJS.<br>
                J'ai eu la chance de suivre les projets auxquels j'étais affectés pendant mon alternance qui étaient des plateformes pour les municipalités ou bien des e-commerces.
            </p>
        </div>
        <hr class="line">
        <div class="resumeContent text-left">
            <h5>Apprenti Développeur</h5>
            <h6><em>Eolas / Grenoble / Mars 2017 - Mars 2018</em></h6>
            <hr>
            <p>
                J'ai effectué mon alternance chez Eolas, ce qui m'a permis de voir différents projets de différentes envergures.<br>
                J'ai ainsi pu devenir autonome sur le framework Symfony et Laravel ainsi que m'améliorer sur mes process d'entreprises et de gestion de projets.
            </p>
        </div>
        <div class="margin">
            <h4 class="text-left"><i class="fas fa-graduation-cap"></i> {{ $t('resume.skills', lang) }}</h4>
            <hr class="line">
            <div class="resumeContent text-center">
                <ul>
                    <li>Curieux</li>
                    <li>Autonome</li>
                    <li>Dynamique</li>
                    <li>Entreprenant</li>
                </ul>
            </div>
        </div>
    </b-container>
</template>

<script>
    export default {
        name: 'Resume',
        props: ['lang'],
        methods: {
            download: function() {
                var element = document.createElement('a');
                element.setAttribute('href', 'images/Cv.pdf');
                element.setAttribute('download', 'Alexandre_De_Pembroke_CV');
                element.style.display = 'none';
                document.body.appendChild(element);
                element.click();
                document.body.removeChild(element);
            },
            redirectToContact: function() {
                this.$emit('redirect', 'contact');
            }
        }
    };
</script>

<style scoped>
    .margin {
        margin-top: 5%;
        margin-bottom: 5%;
    }

    .line {
        width: 100%;
        border-top: #08aeac 1px dotted;
    }

    .hr {
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }

    .bgColor {
        border: none;
        background-color: #08aeac;
        max-width: 45%;
        -webkit-transition: ease-out 0.3s;
        -moz-transition: ease-out 0.3s;
        transition: ease-out 0.3s;
    }

    .bgColor:hover {
        box-shadow: inset 400px 0 0 0 #021533;
    }

    h4 {
        font-weight: bold;
        color: #08aeac;
        margin-bottom: -12px;
        border-left: solid #08aeac 5px;
        padding-left: 3%;
    }

    h5 {
        font-weight: bold;
    }

    h6 {
        color: #a0a0a0;
    }

    .resumeContent {
        border: double #dadada 8px;
        padding: 2%;
    }

    .overText {
        white-space: normal;
    }
</style>
