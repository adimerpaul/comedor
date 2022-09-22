<template>
  <q-page>
    <l-map ref="map" :zoom="15" :center="[-17.970371, -67.112303]" style="height: 500px">
      <l-tile-layer
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
        layer-type="base"
        name="OpenStreetMap"
      ></l-tile-layer>

      <l-marker :lat-lng="[-17.970371, -67.112303]" draggable> </l-marker>
    </l-map>
    <pre>{{store.user}}</pre>
  </q-page>
</template>

<script>
import {useCounterStore} from "stores/example-store";

import { LMap, LTileLayer, LMarker } from "@vue-leaflet/vue-leaflet";
import "leaflet/dist/leaflet.css";


export default {
  name: `MisDatos`,
  components: {
    LMap,
    LTileLayer,
    LMarker,
  },
  data () {
    return {
      store:useCounterStore(),
    }
  },
}
</script>

<style scoped>

</style>
