<template>
  <swiper
      :modules="modules"
      :slides-per-view="mobile ? 1 : 3"
      :space-between="0"
      :pagination="mobile"
  >
    <swiper-slide>
      <div class="product product-lfa">
        <div class="product-content">
          <h3>La Formule Agile</h3>
          <span>La plateforme dédiée pour le <strong>recrutement</strong>, la <strong>montée en compétences</strong> des collaborateurs et la <strong>communication interne</strong> de votre organisation.</span>
          <ul>
            <li>Entreprise</li>
            <li>Agence d'intérim</li>
            <li>CSE</li>
            <li>Office de tourisme</li>
          </ul>
          <a class="btn" href="https://www.laformuleagile.com">En savoir +</a>
        </div>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="product product-boosttic">
        <div class="product-content">
          <h3>Boost'tic Créations</h3>
          <span>Le <strong>Booster</strong> d'<strong>innovation</strong> et d'<strong>information</strong> et des <strong>compétences</strong>.</span>
          <ul>
            <li>Péréniser l'information</li>
            <li>Améliorer les flux d'informations</li>
            <li>Garder la valeur ajoutée</li>
            <li>Automatisation de l'information</li>
          </ul>
          <a class="btn" href="http://localhost:8000/creations">En savoir +</a>
        </div>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="product product-cnco">
        <div class="product-content">
          <h3>Compétences'n Co</h3>
          <span>La plateforme d'<strong>e-learning</strong> des <strong>formateurs indépendants</strong>.</span>
          <ul>
            <li>Formations digitales innovantes</li>
            <li>Dans un environnement ludique</li>
            <li>Accessible partout et adaptée au mobile</li>
            <li>Certifiées Qualiopi</li>
          </ul>
          <a class="btn" href="https://www.competencesnco.com">En savoir +</a>
        </div>
      </div>
    </swiper-slide>
  </swiper>
</template>

<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination } from "swiper";

// Import Swiper styles
import 'swiper/css/bundle';

/**
 * @author Matthieu PAYS <matthieu.pays@boosttic.com>
 */
export default {
  name: "products",
  data() {
    return {
      /**
       * Used to know if you are on the phone
       */
      mobile: null,
      backgroundColor: '#c8decc'
    }
  },
  components: {
    Swiper,
    SwiperSlide,
  },
  methods: {
    /**
     * Checks if the user is on the phone
     */
    checkScreen() {
      this.mobile = window.innerWidth <= 991;
    }
  },
  created() {
    window.addEventListener('resize', this.checkScreen);
    this.checkScreen()
  },
  setup() {
    return {
      modules: [Pagination],
    };
  }
}
</script>

<style scoped>

  .swiper-slide {
    height: 100vh;
  }

  .product {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 100%;
  }

  .product-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 32px;
    padding: 24px 16px;
    margin: 16px;
    background-color: rgba(255,255,255,0.6);
    -webkit-transition: background-color 1000ms linear;
    -ms-transition: background-color 1000ms linear;
    transition: background-color 1000ms linear;
    border-radius: 16px;
  }

  .product span {
    max-width: 400px;
  }

  .product ul {
    text-align: left;
    list-style: inside url("../../public/build/images/icons/check.svg");
  }

  .product-lfa {
    background: url("../../public/build/images/produit_laformuleagile.png") no-repeat;
    background-size: cover;
  }

  .product-boosttic {
    background: url("../../public/build/images/produit_boosttic.png") no-repeat;
    background-size: cover;
  }

  .product-cnco {
    background: url("../../public/build/images/produit_competencesnco.png") no-repeat;
    background-size: cover;
  }

  /* Large devices (laptops/desktops, 992px and up) */
  @media only screen and (min-width: 992px) {

    .swiper-slide:nth-child(1) {
      width: calc(33vw + 68px) !important;
      margin-right: -66px;
    }

    .swiper-slide:nth-child(2) {
      width: calc(34vw + 136px) !important;
      margin: 0 -66px;
    }

    .swiper-slide:nth-child(3) {
      width: calc(33vw + 68px) !important;
      margin-left: -66px;
    }

    .product:before {
      opacity: 50%;
    }

    .product span {
      height: 100%;
      max-height: 168px;
    }

    .product ul {
      height: 100%;
      max-height: 256px;
    }

    .product-lfa {
      clip-path: polygon(0 0,100% 0,calc(100% - 128px) 100%,0 100%);
      padding-right: 128px;
    }

    .product-boosttic {
      padding: 0 128px;
      clip-path: polygon(128px 0, 100% 0, calc(100% - 128px) 100%, 0 100%);
    }

    .product-cnco {
      padding-left: 128px;
      clip-path: polygon(128px 0, 100% 0, 100% 100%, 0 100%);
    }

  }

  /* Extra large devices (large laptops and desktops, 1200px and up) */
  @media only screen and (min-width: 1200px) {

    .product span {
      max-height: 128px;
    }

    .product ul {
      max-height: 168px;
    }

  }

  @media only screen and (min-width: 1400px) {

    .product span {
      max-height: 128px;
    }

    .product ul {
      max-height: 128px;
    }

  }

</style>