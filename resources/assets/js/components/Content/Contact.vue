<template>
  <b-container class="margin">
    <h2 class="bold text-left">{{ $t("navBar.contact", lang) }}</h2>
    <hr class="hr">
    <iframe class="margin" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11248.72112053201!2d5.73345491977539!3d45.18344675000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1532417953139" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="margin text-left">
      <h5><i class="fas fa-map-marked-alt"></i> {{ $t("contact.adress", lang) }}</h5>
      <hr class="line">
      <address>12 Rue de Montroux<br>
      38420 Domène<br>
      France</address>
    </div>
    <div class="margin text-left">
      <h5><i class="fas fa-phone-square"></i> {{ $t("contact.phone", lang) }}</h5>
      <hr class="line">
      <p><a href="tel:+33626254358">+33 6 26 25 43 58</a></p>
    </div>
    <div class="margin text-left">
      <h5><i class="fas fa-envelope"></i> {{ $t("contact.mail", lang) }}</h5>
      <hr class="line">
      <p><a href="mailto:alex.depem@hotmail.fr">alex.depem@hotmail.fr</a></p>
    </div>
    <div class="margin text-left">
      <h5><i class="fas fa-paper-plane"></i> {{ $t("contact.msg", lang) }}</h5>
      <hr class="line">
      <b-form @submit.prevent="sendForm" v-if="returnForm === ''">
        <b-form-input type="text" name="name" required :placeholder="$t('contact.placeholder.name', lang)" class="marginBottom" v-model="contactInfo.name">
        </b-form-input>
        <b-form-input type="email" name="email" required :placeholder="$t('contact.placeholder.email', lang)" class="marginBottom" v-model="contactInfo.email">
        </b-form-input>
        <b-form-input type="text" name="sujet" required :placeholder="$t('contact.placeholder.subject', lang)" class="marginBottom" v-model="contactInfo.sujet">
        </b-form-input>
        <b-form-textarea :rows="3" name="message" required class="marginBottom" v-model="contactInfo.message"></b-form-textarea>
        <b-button type="submit" class="submit marginBottom">{{$t('contact.submit', lang)}}</b-button>
      </b-form>
      <b-alert variant="success" show v-else>{{$t('contact.returnForm', lang)}}</b-alert>
    </div>
  </b-container>
</template>

<script>
  import axios from 'axios'
    export default {
        name: 'Contact',
        props: ['lang'],
        data () {
          return {
              returnForm: '',
              contactInfo: {
                  name: '',
                  email: '',
                  sujet: '',
                  message: ''
              }
          }
        },
        methods: {
          sendForm: function () {
              var self = this;
              axios.post(window.location.href + '/contact', this.contactInfo).then( function (res) {
                 self.returnForm = res.data
              }).catch( function (err) {
                  console.log('erreur', err)
              })
          }
        }
    }
</script>

<style scoped>
  .margin {
    margin-top: 5%;
  }
  .marginBottom {
    margin-bottom: 3%;
  }
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
    text-underline-color: #08aeac;
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
