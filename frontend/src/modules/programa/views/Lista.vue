<template>
  <div>
    <v-card>
      <v-card-text>
        <v-form
          ref="form"
          v-model="valid"
          lazy-validation
          autocomplete="off"
        >
          <v-row
            row
            wrap
          >
            <v-col
              xs4
              md="6"
              cols="12"
            >
              <v-select
                v-model="programa.banca"
                :items="bancas"
                label="Banca"
                item-text="name"
                return-object
                :rules="[rules.required]"
              />
            </v-col>
            <v-col
              xs4
              md="6"
              cols="12"
            >
              <v-select
                v-model="programa.orgao"
                :items="orgaos"
                label="Orgão"
                item-text="name"
                return-object
                :rules="[rules.required]"
              />
            </v-col>
          </v-row>
        </v-form>
      </v-card-text>
      <v-card-actions>
        <v-spacer/>
        <v-btn
          color="error"
          class="white--text mr-2 btn-danger"
          @click="limpar()"
        >
          Limpar
        </v-btn>
        <v-btn
          color="success"
          class="white--text mr-2"
          @click="cadastrarPrograma()"
        >
          Cadastrar
        </v-btn>
      </v-card-actions>
    </v-card>

    <v-card>
      <v-card-text>
        <v-row justify="center">
          <v-expansion-panels
            inset
            focusable
          >
            <v-expansion-panel
              v-for="(item,i) in programas"
              :key="i"
            >
              <v-expansion-panel-header
                class="font-weight-bold"
              >
                {{ item.banca.name }} - {{ item.orgao.name }} ({{item.orgao.initials}})
              </v-expansion-panel-header>
              <v-expansion-panel-content>
                <template>
                  <v-treeview
                    :items="item.assuntos"
                    item-key="id_assunto"
                    item-text="no_assunto"
                    item-children="filhos"
                    open-on-click
                    activatable
                    rounded
                    selected-color="success"
                  >
                    <template v-slot:label="{ item, open }">
                      <v-icon v-if="item.filhos.length">
                        {{ open ? 'folder_open' : 'folder' }}
                      </v-icon>
                      <v-icon v-else>
                        question_answer
                      </v-icon>
                      <span class="font-weight-bold">{{ item.no_assunto }}</span>
                      <v-chip
                        class="ma-2"
                        label
                      >
                        {{ item.quantidade_questoes }} questões
                      </v-chip>
                    </template>
                  </v-treeview>
                </template>
              </v-expansion-panel-content>
            </v-expansion-panel>
          </v-expansion-panels>
        </v-row>
      </v-card-text>
    </v-card>
  </div>
</template>

<script>
  import {mapGetters, mapActions} from 'vuex';


  export default {
    name: 'Lista',
    data() {
      return {
        valid: false,
        programa: {},
        rules: {
          required: value => !!value || 'Este campo é obrigatório',
        },
      };
    },
    computed: {
      ...mapGetters({
        programas: 'programa/programas',
        bancas: 'programa/bancas',
        orgaos: 'programa/orgaos',
      }),
    },
    mounted() {
      this.buscarBancasAction();
      this.buscarOrgaosAction();
    },
    methods: {
      ...mapActions({
        mensagemSucessoAction: 'app/setMensagemSucesso',
        buscarBancasAction: 'programa/buscarBancasAction',
        buscarOrgaosAction: 'programa/buscarOrgaosAction',
        cadastrarProgramaAction: 'programa/cadastrarProgramaAction',
        limparProgramaAction: 'programa/limparProgramaAction'
      }),
      abrirDialogPrograma() {
        this.dialogPrograma = true;
      },
      cadastrarPrograma() {
        if (!this.$refs.form.validate()) {
          return;
        }
        this.mensagemSucessoAction('Programa cadastrado com sucesso');
        this.cadastrarProgramaAction(this.programa);
        this.programa = {};
        this.$refs.form.reset();
      },
      limpar() {
        this.limparProgramaAction();
        this.programa = {};
        this.$refs.form.reset();
      }
    },
  };
</script>
