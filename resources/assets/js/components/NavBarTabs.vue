<template>
  <div class="navBar">
    <b-nav tabs>
      <select-lang @lang="getLang"></select-lang>
      <b-nav-item @click="isActive('home')">
        <b-button :class="{'w-100' : true, 'bgColor': true , 'actif': this.isActif['home']}">{{ $t("navBar.home", lang) }}</b-button>
      </b-nav-item>
      <b-nav-item @click="isActive('resume')">
        <b-button :class="{'w-100' : true, 'bgColor': true , 'actif': this.isActif['resume']}">{{ $t("navBar.resume", lang) }}</b-button>
      </b-nav-item>
      <b-nav-item @click="isActive('skills')">
        <b-button :class="{'w-100' : true, 'bgColor': true , 'actif': this.isActif['skills']}">{{ $t("navBar.skills", lang) }}</b-button>
      </b-nav-item>
      <b-nav-item @click="isActive('portfolio')">
        <b-button :class="{'w-100' : true, 'bgColor': true , 'actif': this.isActif['portfolio']}">{{ $t("navBar.portfolio", lang) }}</b-button>
      </b-nav-item>
      <b-nav-item @click="isActive('contact')">
        <b-button :class="{'w-100' : true, 'bgColor': true , 'actif': this.isActif['contact']}">{{ $t("navBar.contact", lang) }}</b-button>
      </b-nav-item>
    </b-nav>
  </div>
</template>

<script>
export default {
  name: 'navBarTabs',
  data () {
    return {
      lang: 'fr',
      isActif: {
        home: false,
        resume: false,
        skills: false,
        portfolio: false,
        contact: false
      }
    }
  },
  methods: {
    isActive: function (param) {
      Object.keys(this.isActif).forEach(el => {
        this.isActif[el] = false
      })
      this.isActif[param] = !this.isActif[param]
      this.$emit('clicked', param)
    },
      getLang: function (value) {
          this.lang = value;
      }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .navBar {
    width: 100%;
    min-width: 19%;
  }
 .bgColor {
   border:none;
    background-color: #08aeac;
   -webkit-transition: ease-out 0.5s;
   -moz-transition: ease-out 0.5s;
   transition: ease-out 0.5s;
  }
  .bgColor:hover {
    box-shadow: inset 400px 0 0 0 #021533;
  }
  .bgColor.actif {
    background-color: #021533;
  }
</style>
