<template>
  <v-app>
    <router-view />
  </v-app>
</template>

<script>
import { mapActions } from 'vuex';
import { eventHub } from './event';

export default {
  data() {
    return {
      snackbar: {
        show: false,
        color: 'success',
        text: '',
      },
    };
  },
  watch: {
    snackbarGetter(val) {
      this.snackbar = Object.assign({}, val);
    },
  },
  mounted() {
    const self = this;

    eventHub.$on('eventoErro', (payload) => {
      self.notificarErro(payload);
    });
  },
  methods: {
    ...mapActions({
      notificarErro: 'app/setMensagemErro'
    }),
  },
};
</script>

<style scoped>
  .setting-fab {
    top: 50% !important;
    right: 0;
    border-radius: 0;
  }
</style>
