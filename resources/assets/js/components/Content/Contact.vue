<template>
    <b-container class="margin">
        <h2 class="bold text-left">{{ $t('navBar.contact', lang) }}</h2>
        <hr class="hr">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90008.9023757139!2d5.707518765787686!3d45.171341145662275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478a5ec8da794b57%3A0x42c2d8debaacfb4e!2s38420%20Le%20Versoud!5e0!3m2!1sfr!2sfr!4v1609860005676!5m2!1sfr!2sfr"
            width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="margin text-left mb-5">
            <h5><i class="fas fa-paper-plane"></i> {{ $t('contact.msg', lang) }}</h5>
            <hr class="line">
            <b-form @submit.prevent="sendForm" v-if="returnForm === ''">
                <b-form-input type="text" name="name" required :placeholder="$t('contact.placeholder.name', lang)" class="marginBottom" v-model="contactInfo.name">
                </b-form-input>
                <b-form-input type="email" name="email" required :placeholder="$t('contact.placeholder.email', lang)" class="marginBottom" v-model="contactInfo.email">
                </b-form-input>
                <b-form-input type="text" name="sujet" required :placeholder="$t('contact.placeholder.subject', lang)" class="marginBottom" v-model="contactInfo.sujet">
                </b-form-input>
                <b-form-textarea :rows="3" name="message" required class="marginBottom" v-model="contactInfo.message"></b-form-textarea>
                <!--                <div class="g-recaptcha" data-sitekey="6LddVy0aAAAAAMf7w4hI7tuPJ456cmAeLTl7XJrm"></div>-->
                <vue-recaptcha sitekey="6LddVy0aAAAAAMf7w4hI7tuPJ456cmAeLTl7XJrm" :loadRecaptchaScript="true" @verify="onVerify" @expired="onCaptchaExpired"
                               ref="recaptcha"></vue-recaptcha>
                <b-button type="submit" class="submit marginBottom">{{ $t('contact.submit', lang) }}</b-button>
            </b-form>
            <b-alert variant="success" show v-else>{{ $t('contact.returnForm', lang) }}</b-alert>
        </div>
    </b-container>
</template>

<script>
import axios from 'axios';
import VueRecaptcha from 'vue-recaptcha';

export default {
    name: 'Contact',
    props: ['lang'],
    components: { VueRecaptcha },
    data() {
        return {
            returnForm: '',
            contactInfo: {
                name: '',
                email: '',
                sujet: '',
                message: '',
                g_recaptcha_response: null,
            },
        };
    },
    methods: {
        onVerify(response) {
            this.contactInfo.g_recaptcha_response = response;
        },
        onCaptchaExpired: function() {
            this.$refs.recaptcha.reset();
        },
        sendForm: function() {
            var self = this;
            if (this.contactInfo.g_recaptcha_response !== null) {
                axios.post(window.location.href + 'api/contact', this.contactInfo).then(function(res) {
                    self.returnForm = res.data;
                }).catch(function(err) {
                    console.log('erreur', err);
                });
            }
        },
    },
};
</script>

<style scoped>
.margin {
    margin-top: 5%;
}

/*.marginBottom {*/
/*    margin-bottom: 3%;*/
/*}*/

.bold {
    font-weight: 400;
}

.hr {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}

.line {
    width: 100%;
    border-top: #08aeac 1px dotted;
}

h5 {
    font-weight: bold;
    color: #08aeac;
    margin-bottom: -12px;
}

a {
    text-decoration: underline;
    color: #000;
}

a:hover {
    color: #08aeac;
}

.submit {
    width: 100%;
    background-color: #08aeac;
    border: none;
}

.submit:hover {
    background-color: #e9432f;
}
</style>
