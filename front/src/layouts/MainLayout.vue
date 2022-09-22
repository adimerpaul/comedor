<template>
  <q-layout view="lHh Lpr lFf" class="bg-grey-2">
    <q-header class="bg-grey-2">
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          color="primary"
          icon="menu"
          aria-label="Menu"
          @click="toggleLeftDrawer"
        />
        <q-toolbar-title class="text-bold text-primary">
        {{store.user.name}}
        </q-toolbar-title>
        <div class="row q-pt-xs">
          <q-btn round>
            <q-avatar size="38px">
              <q-img src="avatar.png"/>
            </q-avatar>
            <q-menu>
              <q-list style="min-width: 100px">
                <q-item clickable v-ripple active-class="my-menu-link">
                  <q-item-section avatar>
                    <q-icon color="primary" name="perm_contact_calendar" />
                  </q-item-section>
                  <q-item-section>{{store.user.name}}</q-item-section>
                </q-item>
                <q-separator />
                <q-item clickable v-ripple active-class="my-menu-link" @click="logout">
                  <q-item-section avatar>
                    <q-icon color="primary" name="logout" />
                  </q-item-section>
                  <q-item-section>Salir</q-item-section>
                </q-item>
              </q-list>
            </q-menu>
          </q-btn>
<!--          <div class="col-8">-->
<!--            <q-input dense rounded outlined v-model="search" placeholder="Buscar">-->
<!--              <template v-slot:prepend>-->
<!--                <q-icon name="search" />-->
<!--              </template>-->
<!--            </q-input>-->
<!--          </div>-->
<!--          <div class="col-2 flex flex-center">-->
<!--            <q-btn-->
<!--              flat-->
<!--              dense-->
<!--              round-->
<!--              color="primary"-->
<!--              icon="o_notifications"-->
<!--              aria-label="Notifications">-->
<!--              <q-badge color="primary" floating transparent>-->
<!--                4-->
<!--              </q-badge>-->
<!--            </q-btn>-->
<!--          </div>-->
<!--          <div class="col-2 flex flex-center">-->

<!--          </div>-->
        </div>
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
    >
      <q-list>
        <q-item-label class="q-pa-xs">
          <div class="row">
            <div class="col-3 flex flex-center">
              <!--              <q-avatar size="48px">-->
              <q-icon color="primary" size="40px" name="o_restaurant" />
              <!--              </q-avatar>-->
            </div>
            <div class="col-9">
              <div class="text-h6 text-bold " >Comedor</div>
              <div class="text-caption">v 1.0</div>
            </div>
          </div>
        </q-item-label>
        <q-separator />
        <q-toolbar class="bg-primary text-white shadow-2">
          <q-toolbar-title>Opciones</q-toolbar-title>
        </q-toolbar>
        <q-list bordered>
          <q-item clickable v-ripple active-class="my-menu-link" to="misDatos">
            <q-item-section avatar>
              <q-icon name="o_save" />
            </q-item-section>
            <q-item-section>MIS DATOS</q-item-section>
          </q-item>
          <q-item clickable v-ripple active-class="my-menu-link" to="antiguo">
            <q-item-section avatar>
              <q-icon name="o_fact_check" />
            </q-item-section>
            <q-item-section>1 POSTULANTES ANTIGUOS</q-item-section>
          </q-item>
          <q-item clickable v-ripple active-class="my-menu-link" to="nuevo">
            <q-item-section avatar>
              <q-icon name="o_dns" />
            </q-item-section>
            <q-item-section>2 POSTULANTES NUEVOS</q-item-section>
          </q-item>
          <q-item clickable v-ripple active-class="my-menu-link" to="repostulante">
            <q-item-section avatar>
              <q-icon name="o_ballot" />
            </q-item-section>
            <q-item-section>3 REPOSTULANTES</q-item-section>
          </q-item>
          <q-item clickable v-ripple active-class="my-menu-link" to="critico">
            <q-item-section avatar>
              <q-icon name="o_speaker_notes" />
            </q-item-section>
            <q-item-section>4 CASOS CRÍTICOS</q-item-section>
          </q-item>
          <q-item clickable v-ripple active-class="my-menu-link" to="deportista">
            <q-item-section avatar>
              <q-icon name="o_list_alt" />
            </q-item-section>
            <q-item-section>5 DEPORTISTAS</q-item-section>
          </q-item>
        </q-list>
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>

  </q-layout>
</template>

<script>
import {useCounterStore} from "stores/example-store";
import {date} from "quasar";
export default {
  name: 'MainLayout',
  data () {
    return {
      loading: false,
      url:process.env.API,
      leftDrawerOpen: false,
      search: '',
      store:useCounterStore(),
      menu:false,
      message:'',
    }
  },
  created() {
  },
  methods: {
    setCurrentConversation (index) {
      this.store.userChat=this.store.users[index]
      this.store.chats=[]
      this.$api.get('user/'+this.store.userChat.id).then(res=>{
        this.store.chats=res.data
        setTimeout(()=>{
        })
      })
    },
    logout(){
      this.$q.dialog({
        message:'¿Quieres cerrar sesión?',
        title:"Salir",
        ok:{
          push:true
        },
        cancel:{
          push:true,
          color:'negative'
        }
      }).onOk(()=>{
        this.$q.loading.show()
        this.$api.post('logout').then(res=>{
          this.$api.defaults.headers.common['Authorization']=''
          this.store.user={}
          this.store.negocio={}
          this.store.userChat={}
          localStorage.removeItem('tokenComedor')
          this.store.isLoggedIn=false
          this.$router.push('/login')
          this.$q.loading.hide()
        })
      })
    },
    toggleLeftDrawer () {
      this.leftDrawerOpen = !this.leftDrawerOpen
    }
  }
}
</script>
<style lang="sass">
.my-menu-link
  color: white
  background: #002147
</style>
