<template>
<q-page>
  <div class="row text-center">
    <div class="col-12 items-center text-bold">
      a)	FORMULARIO DE RENOVACIÓN N º2
    </div>
    <div class="col-12 flex flex-center">
      <q-uploader
        accept=".jpg, .png"
        @added="uploadFile"
        auto-upload
        max-files="1"
        label="Ingresar imagen para su producto"
        flat
        max-file-size="2000000"
        @rejected="onRejected"
        bordered
      />
    </div>
    <div class="col-12 items-center text-bold">
      b)	MATRÍCULA UNIVERSITARIA GESTIÓN SEMESTRE II/2020
    </div>
    <div class="col-12 flex flex-center">
      <q-uploader
        accept=".jpg, .png"
        @added="uploadFile"
        auto-upload
        max-files="1"
        label="Ingresar imagen para su producto"
        flat
        max-file-size="2000000"
        @rejected="onRejected"
        bordered
      />
    </div>
    <div class="col-12 items-center text-bold">
      c)	FORMULARIO DE ACTUALIZACIÓN DE INFORMACIÓN Nª1
    </div>
    <div class="col-12 flex flex-center">
      <q-uploader
        accept=".jpg, .png"
        @added="uploadFile"
        auto-upload
        max-files="1"
        label="Ingresar imagen para su producto"
        flat
        max-file-size="2000000"
        @rejected="onRejected"
        bordered
      />
    </div>
  </div>
</q-page>
</template>

<script>
import {useCounterStore} from "stores/example-store";

export default {
  name: `Antiguo`,
  data () {
    return {
      store:useCounterStore(),
    }
  },
  methods: {
    uploadFile (file) {
      let dialog = this.$q.dialog({
        message: 'Subiendo... 0%',
      })
      let percentage = 0
      const fd = new FormData()
      fd.append('file', file[0])
      return new Promise((resolve, reject) => {
        this.$api.post('upload',
          fd,
          {
            headers: { 'Content-Type': 'multipart/form-data' },
            onUploadProgress: (progressEvent) => {
              percentage = Math.round((progressEvent.loaded / progressEvent.total) * 100)
              dialog.update({
                message: `Subiendo... ${percentage}%`
              })
              if (percentage>=100){
                dialog.hide()
              }
            }
          })
          .then(res => {
            this.foto=res.data
            resolve(file)
          })
          .catch(err => reject(err))
      })
    },
    onRejected (rejectedEntries) {
      this.$q.notify({
        type: 'negative',
        message: `${rejectedEntries.length} el archivo paso las restricciones de validación`
      })
    },
  }
}
</script>

<style scoped>

</style>
