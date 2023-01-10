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
          <span>Solutions numériques pour <strong>valoriser votre entreprise</strong> et <strong>automatiser les relations sociales et économiques</strong> avec les collaborateurs.</span>
          <ul>
            <li>Automatiser les processus de recrutement</li>
            <li>Former et informer les collaborateurs</li>
            <li>Valoriser la marque employeur</li>
            <li>Fidéliser les collaborateurs</li>
          </ul>
          <a class="btn" href="https://www.laformuleagile.com">En savoir +</a>
        </div>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="product product-boosttic">
        <div class="product-content">
          <h3>Boost'tic Créations</h3>
          <span>Conception, architecture et développement de <strong>médias et contenus pédagogiques digitalisés</strong>.</span>
          <ul>
            <li>Répondre aux besoins de digitalisation des formations</li>
            <li>Valoriser et transmettre des informations</li>
            <li>Présenter un patrimoine culturel</li>
            <li>Développer des supports innovants</li>
          </ul>
          <a class="btn" href="http://localhost:8000/creations">En savoir +</a>
        </div>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="product product-cnco">
        <div class="product-content">
          <h3>Compétences'n Co</h3>
          <span>Plateforme <strong>e-learning</strong> des <strong>formations professionnelles</strong> délivrées par les <strong>formateurs indépendants</strong>.</span>
          <ul>
            <li>Se former de façon ludique et efficace</li>
            <li>Bénéficier des compétences de professionnels reconnus</li>
            <li>Accèder de n'importe où et n'importe quand</li>
            <li>Faire le choix de formations Certifiées Qualiopi</li>
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

  .swiper {
    height: 100%;
  }

  .swiper-slide {
    height: 100%;
  }

  .product {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 100%;
  }

  .product-content {
    width: 424px;
    height: 512px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 32px;
    padding: 32px 24px;
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
    display: flex;
    flex-direction: column;
    gap: 8px;
    text-align: left;
    list-style: inside url("../images/icons/check.svg");
  }

  .product-lfa {
    background: url("../images/products/produit_laformuleagile.png") no-repeat;
    background-size: cover;
  }

  .product-boosttic {
    background: url("../images/products/produit_boosttic.png") no-repeat;
    background-size: cover;
  }

  .product-cnco {
    background: url("../images/products/produit_competencesnco.png") no-repeat;
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

    .product-content {
      height: 688px;
      margin: 8px;
    }

    .product span {
      height: 100%;
      max-height: 160px;
    }

    .product ul {
      height: 100%;
      max-height: 272px;
    }

    .product-lfa {
      clip-path: polygon(0 0,100% 0,calc(100% - 64px) 100%,0 100%);
      padding-right: 128px;
    }

    .product-boosttic {
      padding: 0 128px 0 64px;
      clip-path: polygon(64px 0, 100% 0, calc(100% - 64px) 100%, 0 100%);
    }

    .product-cnco {
      padding-left: 64px;
      clip-path: polygon(64px 0, 100% 0, 100% 100%, 0 100%);
    }

  }

  /* Extra large devices (large laptops and desktops, 1200px and up) */
  @media only screen and (min-width: 1200px) {

    .product-content {
      height: 656px;
      margin: 16px;
    }

    .product span {
      max-height: 128px;
    }

    .product ul {
      max-height: 272px;
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

  @media only screen and (min-width: 1400px) {

    .product-content {
      height: 576px;
    }

    .product span {
      max-height: 128px;
    }

    .product ul {
      max-height: 232px;
    }

  }

</style>