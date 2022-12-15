<template>
  <img decoding="async" loading="lazy" width="32" height="32" src="{{ asset('build/images/icons/burger.svg') }}" alt="Menu">
  <ul>
    <li><a href="{{ path('home') }}"><span>Accueil</span></a></li>
    <li>
      <span>Nos produits</span>
      <ul>
        <li><a target="_blank" href="https://www.laformuleagile.com"><span>La Formule Agile</span></a></li>
        <li><a target="_blank" href="https://www.competencesnco.com"><span>Compétences'n Co</span></a></li>
        <li><a href=""><span>Boost'tic Créations</span></a></li>
      </ul>
    </li>
    <li><a href=""><span>Nous contactez</span></a></li>
  </ul>
</template>

<script>
export default {
  name: "menu",
  mounted() {
    console.log('bonjour')
  }
}
</script>

<style scoped>

</style>