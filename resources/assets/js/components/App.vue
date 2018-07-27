<template>
  <div id="site">
    <NavBar @clicked="onClickChild" @lang='getLang' class="isNavBar"></NavBar>
    <NavBarTabs @clicked="onClickChild" @lang='getLang' class="isNavBarTabs"></NavBarTabs>
    <home :getLang="lang"></home>
    <transition
      enter-active-class="animated zoomInLeft"
      leave-active-class="animated zoomOutLeft"
    >
      <Content :clickFromNav="dataFromNav" v-show="contentIsVisible" :getLang="lang"></Content>
    </transition>
  </div>
</template>

<script>
export default {
  name: 'app',
  components: {
  },
  data () {
    return {
        lang:'fr',
      dataFromNav: '',
      contentIsVisible: false
    }
  },
  methods: {
    getLang: function (value) {
        this.lang = value;
    },
    onClickChild: function (value) {
      if (value !== 'home') {
        this.contentIsVisible = true
          if (document.body.clientWidth >= 1250) {
              document.getElementById('site').style.marginLeft = '0%'
          } else if (document.body.clientWidth <= 1024) {
              document.getElementById('home').style.display = 'none'
          }
      } else {
        this.contentIsVisible = false
          if (document.body.clientWidth >= 1250) {
            document.getElementById('site').style.marginLeft = '15%'
          } else if (document.body.clientWidth <= 1024) {
              document.getElementById('home').style.display = 'block'
          }
      }
      this.dataFromNav = value
    }
  }
}
</script>

<style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
  body {
    font-family: 'Montserrat', sans-serif;
    background-image: url("../../img/back.jpg");
  }
  #site {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 15%;
    margin-left: 15%;*
    margin-bottom: 5%;
    max-width: 65%;
    max-height: 580px;
    display: inline-flex;
  }
  .isNavBarTabs {
    display: none;
  }
  /*@media screen and (min-width: 1530px) and (max-width: 1820px) {*/
      /*#site {*/
        /*max-height: 680px;*/
        /*margin-top: 5%;*/
      /*}*/
  /*}*/
  @media screen and (min-width: 1250px) and (max-width: 1529px) {
      #site {
        max-height: 740px;
        margin-top: 5%;
      }
  }
  @media screen and (min-width: 1025px) and (max-width: 1249px) {
      #site {
        margin-left: -10%;
        max-width: 80%;
        max-height: 750px;
        margin-top: 5%;
      }
  }
  @media screen and (max-width: 1024px) {
    #site  {
      margin-left: -1%;
      max-width: 100%;
      max-height: 900px;
      display: block;
      margin-top: 0%;
    }
    .isNavBar {
      display: none;
    }
    .isNavBarTabs {
      display: block;
    }
  }
</style>
