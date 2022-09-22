<template>
<q-page>
  <pre>{{store.user}}</pre>
</q-page>
</template>

<script>
import {useCounterStore} from "stores/example-store";

export default {
  name: `Repostulante`,
  data () {
    return {
      store:useCounterStore(),
    }
  },
}
</script>

<style scoped>

</style>
