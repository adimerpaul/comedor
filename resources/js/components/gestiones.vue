<template>
    <div class="container" >
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableCaption" class="col-lg-12 col-12 layout-spacing" >
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <!--                                    <h4> i.Crear Comunicado</h4>-->
                                    <button type="button" style="margin-top:1em;margin-left:1em" class="btn btn-success mb-2 mr-2" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-plus"></i> Crear Gestion
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Crear</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <!--                                                        <svg> ... </svg>-->
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!--                                                    <p class="modal-text">-->
                                                    <!--                                                        Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.-->
                                                    <form method="post" @submit.prevent="store">
                                                        <div class="form-group">
                                                            <label for="t-text" >Gestion</label>
                                                            <input id="t-text" type="text" name="txt" v-model="dato.nombre" placeholder="Gestion" class="form-control" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tipo" >Tipo</label>
<!--                                                            <input id="tipo" type="text" name="txt" v-model="dato.tipo" placeholder="Tipo" class="form-control" required="">-->
                                                            <select name="tipo" id="tipo" class="form-control" v-model="dato.tipo">
                                                                <option value="NUEVOS">NUEVOS</option>
                                                                <option value="ANTIGUOS">ANTIGUOS</option>
                                                                <option value="REPOSTULANTES">REPOSTULANTES</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inicio" >Inicio</label>
                                                            <input id="inicio" type="date" name="txt" v-model="dato.inicio" placeholder="Inicio" class="form-control" required="">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fin" >Fin</label>
                                                            <input id="fin" type="date" name="txt" v-model="dato.fin" placeholder="Fin" class="form-control" required="">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancelar</button>
                                                            <button type="submit" class="btn btn-success">guardar</button>
                                                        </div>
                                                    </form>

                                                    <!--                                                    </p>-->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Crear</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <!--                                                        <svg> ... </svg>-->
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!--                                                    <p class="modal-text">-->
                                                    <!--                                                        Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.-->
                                                    <form method="post" @submit.prevent="update">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="t-text2" >Gestion</label>
                                                                <input id="t-text2" type="text" name="txt" v-model="dato.nombre" placeholder="Gestion" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tipo2" >Tipo</label>
<!--                                                                <input id="tipo2" type="text" name="txt" v-model="dato.tipo" placeholder="Tipo" class="form-control" required="">-->
                                                                <select name="tipo" id="tipo2" class="form-control" v-model="dato.tipo">
                                                                    <option value="NUEVOS">NUEVOS</option>
                                                                    <option value="ANTIGUOS">ANTIGUOS</option>
                                                                    <option value="REPOSTULANTES">REPOSTULANTES</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inicio2" >Inicio</label>
                                                                <input id="inicio2" type="date" name="txt" v-model="dato.inicio" placeholder="Inicio" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="fin2" >Fin</label>
                                                                <input id="fin2" type="date" name="txt" v-model="dato.fin" placeholder="Fin" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancelar</button>
                                                            <button type="submit" class="btn btn-success">guardar</button>
                                                        </div>
                                                    </form>

                                                    <!--                                                    </p>-->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table mb-4">
                                    <!--                                    <caption>List of all users</caption>-->
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Gestion</th>
                                        <th>Tipo</th>
                                        <th class="">Inicio</th>
                                        <th class="">Fin</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(i,index) in datos" :key="index">
                                        <td class="text-center">{{index+1}}</td>
                                        <td>  {{i.nombre}}</td>
<!--                                        <td :class="i.estado=='VISIBLE'?'text-success':'text-danger'">{{i.estado}}</td>-->
                                        <td> <small class="badge" :class="i.tipo=='NUEVOS'?'badge-success':i.tipo=='ANTIGUOS'?'badge-warning':i.tipo=='REPOSTULANTES'?'badge-info':''">{{i.tipo}}</small></td>
                                        <td>{{i.inicio}}</td>
                                        <td>{{i.fin}}</td>
<!--                                        <td class=""><span class="badge":class="i.color=='note-personal'?'badge-success':i.color=='note-work'?'badge-warning':i.color=='note-social'?'badge-secondary':i.color=='note-important'?'badge-danger':'badge-dark'">color</span></td>-->
                                        <td>
                                            <a @click="modificar(i)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
<!--                                            <a @click.prevent="mostrar(i)" v-if="i.estado=='OCULTO'" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>-->
<!--                                            <a @click.prevent="mostrar(i)" v-else href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg></a>-->
                                            <a @click="eliminar(i)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                        </td>
                                    </tr>
                                    <!--                                    <tr>-->
                                    <!--                                        <td class="text-center">1</td>-->
                                    <!--                                        <td class="text-success">Shaun Park</td>-->
                                    <!--                                        <td>johndoe@yahoo.com</td>-->
                                    <!--                                        <td class=""><span class=" shadow-none badge outline-badge-primary">Complete</span></td>-->
                                    <!--                                        <td>5 min ago</td>-->
                                    <!--                                    </tr>-->
                                    <!--                                    <tr>-->
                                    <!--                                        <td class="text-center">2</td>-->
                                    <!--                                        <td class="text-success">Andy King</td>-->
                                    <!--                                        <td>andyking@gmail.com</td>-->
                                    <!--                                        <td class=""><span class="badge outline-badge-secondary shadow-none">Pending</span></td>-->
                                    <!--                                        <td>10 min ago</td>-->
                                    <!--                                    </tr>-->
                                    <!--                                    <tr>-->
                                    <!--                                        <td class="text-center">3</td>-->
                                    <!--                                        <td class="text-success">Mary McDonald</td>-->
                                    <!--                                        <td>lisadoe@live.com</td>-->
                                    <!--                                        <td class=""><span class="badge outline-badge-info shadow-none">In Progress</span></td>-->
                                    <!--                                        <td>1 hour ago</td>-->
                                    <!--                                    </tr>-->
                                    <!--                                    <tr>-->
                                    <!--                                        <td class="text-center">4</td>-->
                                    <!--                                        <td class="text-success">Vincent Carpenter</td>-->
                                    <!--                                        <td>vinnyc@outlook.com</td>-->
                                    <!--                                        <td class=""><span class="badge outline-badge-danger shadow-none">Cancel</span></td>-->
                                    <!--                                        <td>1 day ago</td>-->
                                    <!--                                    </tr>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import { VueEditor } from "vue2-editor";
import axios from 'axios';
export default {
    data:function (){
        return {
            dato:{color:'note-personal'},
            datos:[],
            // content: ''
        }
    },
    created() {
        this.misdatos();
        // console.log('Component mounted.')
    },
    methods:{
        misdatos(){
            axios.get('/gestion').then(res=>{
                // console.log(res.data);
                this.datos=res.data;
                // res.data.forEach(r=>{
                //     console.log(r);
                //     this.datos.push(r);
                // })

            })
        },
        store(){
            axios.post('/gestion',this.dato).then(res=>{
                // this.datos=res.data;
                this.misdatos();
                this.$toast.open({
                    message: "Dato creado",
                    type: "success",
                    duration: 3000,
                    dismissible: true
                });
                this.dato={tipo:''};
                this.dato={color:'note-personal'};
                $('#exampleModal').modal('hide');
            })
        },
        mostrar(i){
            // console.log(i);
            axios.get('/gestion/'+i.id).then(res=>{
                this.misdatos();
                this.$toast.open({
                    message: "Datos Actualizados",
                    type: "success",
                    duration: 3000,
                    dismissible: true
                });
            })
        },
        modificar(i){
            $('#modificar').modal('show');
            this.dato=i;
        },
        update(){
            axios.put('/gestion/'+this.dato.id,this.dato).then(res=>{
                // this.datos=res.data;
                this.misdatos();
                $('#modificar').modal('hide');
                this.$toast.open({
                    message: "Dato modificado",
                    type: "warning",
                    duration: 3000,
                    dismissible: true
                });
                this.dato={color:'note-personal'};
            })
        },
        eliminar(i){
            this.$fire({
                title: 'Seguro de eliminar??',
                // text: "You won't be able to revert this!",
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si!'
            }).then((r) => {
                if (r.value){
                    axios.delete('/gestion/'+i.id).then(res=>{
                        this.misdatos();
                        // $('#modal-default').modal('hide');
                        this.$toast.open({
                            message: "Dato Eliminado",
                            type:"error",
                            duration: 3000,
                            dismissible: true
                        });
                        this.dato={color:'note-personal'};
                    })
                }
            })

        }
    },
    components: {
        VueEditor
    },
}
</script>

