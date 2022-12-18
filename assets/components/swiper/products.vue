<template>
  <swiper
      :modules="modules"
      :slides-per-view="mobile ? 1 : 3"
      :space-between="mobile ? 50 : 0"
      :pagination="mobile"
  >
    <swiper-slide>
      <div class="product product-lfa">
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
    </swiper-slide>
    <swiper-slide>
      <div class="product product-boosttic">
        <h3>Boost'tic Créations</h3>
        <span>Le <strong>Booster</strong> d'<strong>innovation</strong> et d'<strong>information</strong> et des <strong>compétences</strong>.</span>
        <ul>
          <li>Péréniser l'information</li>
          <li>Améliorer les flux d'informations</li>
          <li>Garder la valeur ajoutée</li>
          <li>Automatisation de l'information</li>
        </ul>
        <a class="btn" href="">En savoir +</a>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="product product-cnco">
        <h3>Compétences'n Co</h3>
        <span>La plateforme d'<strong>e-learning</strong> des <strong>formateurs indépendants</strong>.</span>
        <ul>
          <li>Formations digitales innovantes</li>
          <li>Dans un environnement ludique</li>
          <li>Accessible partout et adaptée au mobile</li>
          <li>Certifiés Qualiopi</li>
        </ul>
        <a class="btn" href="https://www.competencesnco.com">En savoir +</a>
      </div>
    </swiper-slide>
  </swiper>
</template>

<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination } from "swiper";

// Import Swiper styles
import 'swiper/css/bundle';

export default {
  name: "products",
  data() {
    return {
      mobile: null,
      slide: null
    }
  },
  components: {
    Swiper,
    SwiperSlide,
  },
  methods: {
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
    height: 80vh;
  }

  .product {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 32px;
    padding: 16px;
    text-align: center;
    height: 100%;
  }

  .product span {
    max-width: 400px;
  }

  .product ul {
    text-align: left;
    list-style: inside url("../../../public/build/images/icons/check.svg");
  }

  .product-lfa {
    background-color: rgba(155, 194, 161, 0.55);
  }

  .product-boosttic {
    background-color: #FEDE97;
  }

  .product-cnco {
    background-color: #CCDBF0;
  }

  /* Large devices (laptops/desktops, 992px and up) */
  @media only screen and (min-width: 992px) {

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
      margin-right: -64px;
      padding-right: 128px;
    }

    .product-boosttic {
      margin: 0 -64px;
      padding: 0 128px;
      clip-path: polygon(128px 0, 100% 0, calc(100% - 128px) 100%, 0 100%);
    }

    .product-cnco {
      padding-left: 128px;
      margin-left: -66px;
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