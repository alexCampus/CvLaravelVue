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
                <h5>{{ $t('resume.campusTitle', lang) }}</h5>
                <h6><em>{{ $t('resume.campusName', lang) }}</em></h6>
                <hr>
                <p>
                    {{ $t('resume.campusContent1', lang) }}<br>
                    {{ $t('resume.campusContent2', lang) }}
                </p>
            </div>
        </div>
        <div class="margin">
            <h4 class="text-left"><i class="fas fa-flag"></i> {{ $t('resume.work', lang) }}</h4>
            <hr class="line">
            <div class="resumeContent text-left">
                <h5>{{ $t('resume.workExp1.title1', lang) }}</h5>
                <h6><em>{{ $t('resume.workExp1.subTitle1', lang) }}</em></h6>
                <hr>
                <p>
                    {{ $t('resume.workExp1.content1', lang) }}</p>
                <ul>
                    <li>PHP</li>
                    <li>BDD</li>
                    <li>MySql</li>
                    <li>Git</li>
                    <li>{{ $t('resume.workExp1.modContent1', lang) }}</li>
                </ul>
            </div>
        </div>
        <hr class="line">
        <div class="resumeContent text-left">
            <h5>{{ $t('resume.workExp2.title1', lang) }}</h5>
            <h6><em>{{ $t('resume.workExp2.subTitle1', lang) }}</em></h6>
            <hr>
            <p>
                {{ $t('resume.workExp2.content1', lang) }}<br>
                J{{ $t('resume.workExp2.content2', lang) }}
            </p>
        </div>
        <hr class="line">
        <div class="resumeContent text-left">
            <h5>{{ $t('resume.workExp3.title1', lang) }}</h5>
            <h6><em>{{ $t('resume.workExp3.subTitle1', lang) }}</em></h6>
            <hr>
            <p>
                {{ $t('resume.workExp3.content1', lang) }}<br>
                {{ $t('resume.workExp3.content2', lang) }}
            </p>
        </div>
        <hr class="line">
        <div class="resumeContent text-left">
            <h5>{{ $t('resume.workExp4.title1', lang) }}</h5>
            <h6><em>{{ $t('resume.workExp4.subTitle1', lang) }}</em></h6>
            <hr>
            <p>
                {{ $t('resume.workExp4.content1', lang) }}<br>
                {{ $t('resume.workExp4.content2', lang) }}
            </p>
        </div>
        <div class="margin">
            <h4 class="text-left"><i class="fas fa-graduation-cap"></i> {{ $t('resume.skills', lang) }}</h4>
            <hr class="line">
            <div class="resumeContent text-center">
                <ul>
                    <li>{{ $t('resume.skill.content1', lang) }}</li>
                    <li>{{ $t('resume.skill.content2', lang) }}</li>
                    <li>{{ $t('resume.skill.content3', lang) }}</li>
                    <li>{{ $t('resume.skill.content4', lang) }}</li>
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
            element.setAttribute('href', '/images/Cv.pdf');
            element.setAttribute('download', 'Alexandre_De_Pembroke_CV');
            element.style.display = 'none';
            document.body.appendChild(element);
            element.click();
            document.body.removeChild(element);
        },
        redirectToContact: function() {
            this.$emit('redirect', 'contact');
        },
    },
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
