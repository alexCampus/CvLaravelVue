<template>
  <b-container class="margin">
    <h2 class="bold text-left">{{$t('navBar.skills', lang)}}</h2>
    <hr class="hr">

    <div class="margin">
      <h4 class="text-left"><i class="fas fa-users"></i> {{$t('skills.professionnal', lang)}}</h4>
      <hr class="line">

      <div class="bar">
        <b-badge class="float-right" variant="light">70%</b-badge>
        <b-progress-bar :value='70' variant="success" show-progress class="height">Js</b-progress-bar>
      </div>
      <div class="bar">
        <b-badge class="float-right" variant="light">60%</b-badge>
        <b-progress-bar :value='60' variant="primary" show-progress class="height">VueJs</b-progress-bar>
      </div>
      <div class="bar">
        <b-badge class="float-right" variant="light">50%</b-badge>
        <b-progress-bar :value='50' variant="info" show-progress class="height">Php</b-progress-bar>
      </div>
    </div>

    <div class="margin">
      <h4 class="text-left"><i class="fas fa-desktop"></i> {{$t('skills.software', lang)}}</h4>
      <hr class="line">

      <div class="bar">
        <b-badge class="float-right" variant="light">70%</b-badge>
        <b-progress-bar :value='70' variant="success" show-progress class="height">Js</b-progress-bar>
      </div>
      <div class="bar">
        <b-badge class="float-right" variant="light">60%</b-badge>
        <b-progress-bar :value='60' variant="primary" show-progress class="height">VueJs</b-progress-bar>
      </div>
      <div class="bar">
        <b-badge class="float-right" variant="light">50%</b-badge>
        <b-progress-bar :value='50' variant="info" show-progress class="height">Php</b-progress-bar>
      </div>
    </div>

    <div class="margin">
      <h4 class="text-left"><i class="fas fa-code"></i> {{$t('skills.code', lang)}}</h4>
      <hr class="line">

      <div class="bar">
        <b-badge class="float-right" variant="light">70%</b-badge>
        <b-progress-bar :value='70' variant="success" show-progress class="height">Js</b-progress-bar>
      </div>
      <div class="bar">
        <b-badge class="float-right" variant="light">60%</b-badge>
        <b-progress-bar :value='60' variant="primary" show-progress class="height">VueJs</b-progress-bar>
      </div>
      <div class="bar">
        <b-badge class="float-right" variant="light">50%</b-badge>
        <b-progress-bar :value='50' variant="info" show-progress class="height">Php</b-progress-bar>
      </div>
    </div>
  </b-container>
</template>

<script>
    export default {
      name: 'Skills',
      props: ['lang']
    }
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
    margin-bottom: 10%;
  }
  h4 {
    font-weight: bold;
    color: #08aeac;
    margin-bottom: -12px;
    border-left: solid #08aeac 5px;
    padding-left: 3%;
  }
  .bar {
    margin-top: 4%;
    margin-bottom: 1%;
  }
  .height {
    height: 2.1rem;
  }
</style>
