<template>
    <div id="home" class="card">
        <profilImage></profilImage>
        <h1 class="bold">{{ $t('home.welcome', getLang) }} <br><span class="color">Alexandre De Pembroke</span></h1>
        <h5 class="semiBold">{{ $t('home.title', getLang) }}</h5>
        <hr>
        <div class="card-body">

            <p class="card-text">{{ $t('home.about', getLang) }}</p>


        </div>
        <div class="socialIcons card-footer">
            <b-button target="_blank" href="https://www.linkedin.com/in/de-pembroke-alexandre/"><i class="fab fa-linkedin-in"></i></b-button>
            <b-button target="_blank" href="https://github.com/alexCampus"><i class="fab fa-github"></i></b-button>
        </div>
    </div>
</template>

<script>
import profilImage from './profilImage';

export default {
    name: 'Home',
    components: { profilImage },
    props: ['getLang'],
};
</script>

<style scoped>
.backgroundColor {
    background-color: #08aeac;
    color: #fff;
}

.backgroundColor a {
    color: #fff;
}

.backgroundColor a:hover {
    color: #084f4d;
}

.color {
    color: #08aeac;
}

.bold {
    font-weight: bold;
    letter-spacing: -3px;
}

.semiBold {
    font-weight: 400;
}

#home {
    width: 80%;
    min-width: 80%;
    background-color: #f0f0f0;
    /*max-height: 580px;*/
}

/*.socialIcons {*/
/*    margin-top: 3%;*/
/*    margin-bottom: 5%;*/
/*}*/

.socialIcons a:hover {
    background-color: #08aeac;
}

hr {
    height: 30px;
    border-style: solid;
    border-color: #8c8b8b;
    border-width: 1px 0 0 0;
    border-radius: 20px;
    max-width: 100%;
    opacity: 0.4;
}

hr:before {
    display: block;
    content: "";
    height: 30px;
    margin-top: -31px;
    border-style: solid;
    border-color: #8c8b8b;
    border-width: 0 0 1px 0;
    border-radius: 20px;
}

/*.alert {*/
/*    width: 95%;*/
/*    margin: auto;*/
/*}*/

/*@media screen and (min-width: 1530px) and (max-width: 1820px) {*/
/*#home {*/
/*max-height: 680px;*/
/*}*/
/*}*/
/*@media screen and (min-width: 1250px) and (max-width: 1529px) {*/
/*    #home {*/
/*        max-height: 740px;*/
/*    }*/
/*}*/

@media screen and (min-width: 1025px) and (max-width: 1249px) {
    #home {
        width: 80%;
        height: 85%;
    }
}

@media screen and (max-width: 1024px) {
    #home {
        width: 100%;
        max-height: 85%;
        padding-bottom: 1%;
        /*margin-bottom: 3%;*/
        margin-left: 0.5%;
    }
}
</style>
