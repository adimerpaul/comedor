<template>
  <q-layout view="lHh Lpr lFf" class="bg-grey-2">
    <!--    <q-page-container>-->
    <q-page>
      <div class="row">
        <div class="col-1 col-sm-4"></div>
        <div class="col-10 col-sm-4">
          <div class="text-subtitle1 text-center q-pt-xs text-grey">CUENTA</div>
          <div class="text-h2 text-center q-pa-xs text-black text-bold">Tu Cuenta</div>
          <q-card flat bordered>
            <q-card-section >
              <q-form class="q-pa-lg" @submit.prevent="login">
                <div class="row">
                  <div class="col-12">
                    <q-input outlined v-model="email" label="Email" type="email" required />
                  </div>
                  <div class="col-12 q-pt-lg">
                    <q-input outlined v-model="password" label="Contraseña" :type="typePassword?'password':'text'" required >
                      <template v-slot:append>
                        <q-icon @click="typePassword=!typePassword" :name="typePassword?'visibility':'visibility_off'" />
                      </template>
                    </q-input>
                  </div>
                  <div class="col-12 q-py-xs">
                    <q-checkbox v-model="remember" class="grey" label="Recuérdame" size="30px" />
                  </div>
                  <div class="col-12 q-pt-xs">
                    <q-btn size="22px" :loading="loading" class="full-width bold" color="primary" label="Iniciar Sesión" type="submit" no-caps />
                  </div>
                  <div class="col-12 q-pt-xs">
                    <q-btn to="register" size="22px" outline class="full-width bold" color="primary" label="Registrate" type="submit" no-caps />
                  </div>
                  <div class="col-12 text-center q-py-none">
                    <a href="" class="text-blue-8 ">¿Olvidaste tu contraseña?</a>
                  </div>
                </div>
              </q-form>
            </q-card-section>
          </q-card>
          <div class="text-subtitle1 text-center text-caption q-pt-lg text-grey">AL INICIAR SESIÓN, USTED ACEPTA LOS
            <a href="" class="text-blue-8 ">TÉRMINOS DEL SERVICIO</a> Y <a href="" class="text-blue-8 ">LA POLÍTICA DE PRIVACIDAD</a>
          </div>
        </div>
        <div class="col-1 col-sm-4"></div>
      </div>
    </q-page>
    <!--    </q-page-container>-->
  </q-layout>
</template>

<script>
import {useCounterStore} from "stores/example-store";
export default {
  name: `Login`,
  data () {
    return {
      email: '',
      password: '',
      remember:false,
      typePassword:true,
      loading:false,
      store:useCounterStore()
    }
  },
  mounted() {
    if (this.store.isLoggedIn){
      this.$router.push('/')
    }
  },
  methods:{

    login(){
      this.loading=true
      this.$api.post('login', {
        email: this.email,
        password: this.password,
      }).then(res => {
        this.$q.notify({
          message: 'Bienvenido',
          color: 'positive',
          icon: 'check_circle',
          position: 'top'
        })
        this.$router.push('/')
        this.store.user=res.data.user
        this.store.isLoggedIn=true
        this.$api.defaults.headers.common['Authorization'] = 'Bearer '+res.data.token
        localStorage.setItem('tokenComedor',res.data.token)
      }).catch(error => {
        console.log(error)
        this.$q.notify({
          message: error.response.data.message,
          color: 'negative',
          position: 'top',
          timeout: 2000
        })
      }).finally(()=>{
        this.loading=false
      })
    }
  }
}
</script>

<style scoped>
div.linea {
  position: relative;
  z-index: 1;
}
div.linea:before {
  border-top: 1px solid grey;
  content: "";
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  bottom: 0;
  width: 95%;
  z-index: -1;
}
div.linea span {
  background: #fff;
  padding: 0 10px;
  color: grey;
}
</style>
