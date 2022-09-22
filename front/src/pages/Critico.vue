<template>
<q-page>
  <pre>{{store.user}}</pre>
</q-page>
</template>

<script>
import {useCounterStore} from "stores/example-store";

export default {
  name: `Critico`,
  data () {
    return {
      store:useCounterStore(),
    }
  },
}
</script>

<style scoped>

</style>
