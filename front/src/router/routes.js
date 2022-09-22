import Login from "pages/Login";
import Register from "pages/Register";
import IndexPage from "pages/IndexPage";
import MisDatos from "pages/MisDatos";
import Antiguo from "pages/Antiguo";
import Nuevo from "pages/Nuevo";
import Repostulante from "pages/Repostulante";
import Critico from "pages/Critico";
import Deportista from "pages/Deportista";

const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: IndexPage},
      { path: 'misDatos', component: MisDatos},
      { path: 'antiguo', component: Antiguo},
      { path: 'nuevo', component: Nuevo},
      { path: 'repostulante', component: Repostulante},
      { path: 'critico', component: Critico},
      { path: 'deportista', component: Deportista},
    ]
  },
  {
    path: '/login',
    component: Login,
  },
  {
    path: '/register',
    component: Register,
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
