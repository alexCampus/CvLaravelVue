<template>
    <div class="content">
      <transition
        enter-active-class="animated fadeInLeft"

      >
        <Resume v-if="clickFromNav === 'resume'" @redirect="redirectFromResume" :lang="getLang"></Resume>
      </transition>
      <transition
        enter-active-class="animated fadeInLeft"

      >
        <Skills v-if="clickFromNav === 'skills'" :lang="getLang"></Skills>
      </transition>
      <transition
        enter-active-class="animated fadeInLeft"

      >
        <Portfolio v-if="clickFromNav === 'portfolio'" :lang="getLang"></Portfolio>
      </transition>
      <transition
        enter-active-class="animated fadeInLeft"

      >
        <Contact v-if="clickFromNav === 'contact'" :lang="getLang"></Contact>
      </transition>
    </div>
</template>

<script>
    import profilImage from './profilImage'
    import Resume from './Content/Resume'
    import Portfolio from './Content/Portfolio'
    import Skills from './Content/Skills'
    import Contact from './Content/Contact'
    export default {
  name: 'Content',
      props: ['clickFromNav', 'getLang'],
      components: {Contact, Skills, Portfolio, Resume, profilImage},
      data () {
        return {
          isVisible: false
        }
      },
      methods: {
        redirectFromResume: function (value) {
          this.clickFromNav = (value === 'contact') ? 'contact' : this.clickFromNav
        }
      }
    }
</script>

<style scoped>
  .content {
    margin-left: 1%;
    width: 45%;
    min-width: 45%;
    background-color: #f0f0f0;
    overflow-y: scroll;
    max-height: 655px;
  }
  /*@media screen and (min-width: 1530px) and (max-width: 1820px) {*/
    /*.content {*/
      /*max-height: 680px;*/
    /*}*/
  /*}*/
  @media screen and (min-width: 1250px) and (max-width: 1529px) {
    .content {
      max-height: 690px;
    }
  }
  @media screen and (min-width: 1025px) and (max-width: 1249px) {
    .content {
        width: 60%;
        max-height: 750px;
    }
  }
  @media screen and (max-width: 1024px) {
    .content {
      width: 100%;
      max-height: 85%;
      padding-bottom: 1%;
      /*margin-bottom: 3%;*/
      margin-left: 0.5%;
    }
  }
</style>
