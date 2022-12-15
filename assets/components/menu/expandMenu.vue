<template>
  <img width="40" height="40" src="/build/images/icons/burger.svg" alt="Menu" class="phone-btn" @click="display">
  <div class="menu" :class="{ displayed: isDisplayed }">
    <nav>
      <ul class="nav">
        <li><a href="http://localhost:8000"><span>Accueil</span></a></li>
        <li>
          <span>Nos produits</span>
          <ul class="sub-nav">
            <li><a href="https://www.laformuleagile.com"><span>La Formule Agile</span></a></li>
            <li><a href="https://www.competencesnco.com"><span>Competences'n Co</span></a></li>
            <li><a href="http://localhost:8000"><span>Boost'tic Créations</span></a></li>
          </ul>
        </li>
        <li><a href="http://localhost:8000/contact"><span>Nous contacter</span></a></li>
      </ul>
    </nav>
    <span class="copyright">Copyright © 2021-2023 Boost'tic</span>
  </div>
</template>

<script>
export default {
  name: "expandMenu",
  data() {
    return {
      isDisplayed: false
    }
  },
  methods: {
    display() {
      this.isDisplayed = !this.isDisplayed
    }
  }
}
</script>

<style scoped>

.menu {
  display: none;
  position: absolute;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  gap: 80px;
  color: #353431;
  background-color: #FFFFFF;
  top: 0;
  left: 0;
  width: 100%;
  height: calc(100% - 56px);
  margin-top: 56px;
  z-index: 1;
}

.menu.displayed {
  display: flex;
}

.menu nav {
  height: 100%;
}

.nav {
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 64px;
  width: 100%;
  height: 100%;
  text-align: center;
}

.nav span {
  width: 100%;
}

.sub-nav {
  display: none;
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {

}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {

}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {

  .phone-btn {
    display: none;
  }

  .menu {
    position: static;
    display: flex;
    flex-direction: row;
    background: none;
    color: #FFFFFF;
    margin: 0;
    height: 100%;
  }

  .nav {
    flex-direction: row;
  }

  .nav li {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
  }

  .nav li:hover .sub-nav {
    display: flex;
  }

  .sub-nav {
    position: absolute;
    top: 100%;
    left: 0;
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
    padding: 16px 0;
    background-color: #FFFFFF;
    color: #0a0a0a;
    width: 256px;
  }

  .copyright {
    display: none;
  }

}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {

}

</style>