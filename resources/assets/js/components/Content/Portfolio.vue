<template>
    <b-container class="margin">
      <h2 class="bold text-left">{{$t('navBar.portfolio', lang)}}</h2>
      <hr class="hr">
<!--      <div class="imgCard">-->
<!--        <b-card title="Le Labo Bois"-->
<!--                img-src="images/lelabobois.png"-->
<!--                img-alt="Image"-->
<!--                img-bottom>-->
<!--          <p class="card-text">-->
<!--            <em>{{$t('portfolio.cardLeLaboBois', lang)}}</em>-->
<!--          </p>-->
<!--          <b-button href="http://www.lelabobois.fr" target="_blank" variant="info">{{$t('portfolio.buttonLink', lang)}}</b-button>-->
<!--        </b-card>-->
<!--      </div>-->

      <div class="imgCard">
        <b-card title="La Banda Tujumi"
                img-src="images/tujumi.jpg"
                img-alt="Image"
                img-bottom>
          <p class="card-text">
              <em>{{$t('portfolio.cardTujumi', lang)}}</em>
          </p>
          <b-button href="https://www.banda-tujumi.fr" target="_blank" variant="info">{{$t('portfolio.buttonLink', lang)}}</b-button>
        </b-card>
      </div>

      <div class="imgCard">
        <b-card title="Achat Ville"
                img-src="images/achatVille.jpg"
                img-alt="Image"
                img-bottom>
          <p class="card-text">
              <em>{{$t('portfolio.cardHAV', lang)}}</em>
          </p>
          <b-button href="https://www.achat-ville.com/" target="_blank" variant="info">{{$t('portfolio.buttonLink', lang)}}</b-button>
        </b-card>
      </div>

      <div class="imgCard">
        <b-card title="Boutiques Solo"
                img-src="images/logoEolas.png"
                img-alt="Image"
                img-bottom>
          <p class="card-text">
              <em>{{$t('portfolio.cardSolo', lang)}}</em>
          </p>
          <b-button href="https://www.miss-pieces.com/" target="_blank" variant="info" class="exampleWebSite">{{$t('portfolio.exampleLink', lang)}}</b-button>
          <b-button href="https://www.croque-montagne.fr" target="_blank" variant="info" class="exampleWebSite">{{$t('portfolio.exampleLink', lang)}}</b-button>
        </b-card>
      </div>
    </b-container>
</template>
<script>
    export default {
      name: 'Portfolio',
      props: ['lang']
    }
</script>

<style scoped>
  .margin {
    margin-top: 5%;
    margin-bottom: 5%;
  }
  .bold {
    font-weight: 400;
  }
  .hr {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
  }
  .imgCard {
    margin-top: 5%;
  }
  .exampleWebSite {
    margin-bottom: 1%;
  }
</style>
