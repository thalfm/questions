<template>
  <v-app-bar
    color="primary"
    fixed
    dark
    text
    app
    clipped-left
  >
    <div class="toolbar-logo theme--dark primary darken-1">
      <img
        :src="require('@/assets/icon.png')"
        alt="Logo do Sistema"
        max-width="200"
      >
    </div>
    <v-toolbar-title class="ml-10">
      {{ $route.meta.title }}
    </v-toolbar-title>
  </v-app-bar>
</template>
<script>
import { mapGetters, mapActions } from 'vuex';
import Util from '../util';
import MxFiltros from '@/modules/shared/mixins/filters';

export default {
  name: 'AppToolbar',
  mixins: [
    MxFiltros,
  ],

  data() {
    return {
      appTitle: process.env.VUE_APP_TITLE,
    };
  },
};
</script>

<style lang="sass" scoped>
  .toolbar-logo
    display: flex
    padding: 5px
    margin-left: -18px !important
    width: 258px
    height: 64px
    position: relative
    @media #{map-get($display-breakpoints, 'sm-and-down')}
      height: 56px
      width: 122px
      margin-left: -17px !important

    .button-drawer
      position: absolute
      top: 10px
      right: -28px
      @media #{map-get($display-breakpoints, 'sm-and-down')}
        .button-drawer
          top: 4px

  .toolbar-logo
    img
      margin: 10px 15px
      height: 36px
      @media #{map-get($display-breakpoints, 'sm-and-down')}
        height: 28px
        margin-top: 10px !important

</style>
