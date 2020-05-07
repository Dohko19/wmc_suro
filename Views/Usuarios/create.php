<?php
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>Listado de usuarios
                    <div class="page-title-subheading">
                        En esta seccion puedes ver el listado de clientes, usuarios, crear usuarios y crear clientes (para crear clientes asegurate
                        de crear antes una marca y una sucursal a la que pertenecen)
                    </div>
                </div>
            </div>

        </div>
    </div>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>Crear Usuario</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span>Lista de Usuarios</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                <span>Crear/Ver Clientes</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Controls Types</h5>
                            <form  action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="position-relative form-group">
                                    <label for="nombre" class="">Nombre</label>
                                    <input v-model="nombre" name="nombre" id="nombre" placeholder="Nombre del Usuario" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="username" class="">Nombre de Usuario (username)</label>
                                    <input v-model="username" name="username" id="username" placeholder="Nombre de usuario" type="text" class="form-control">
                                    <small class="text-muted">*Con este nombre es con el que accederas al WMC</small>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="password" class="">Password</label>
                                    <input v-model="password" name="password" id="password" placeholder="Ingresa la Contraseña"
                                           type="password" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="permiso" class="">Rol</label>
                                    <input type="hidden" v-model="rol">
                                    <select v-model="rol" name="permiso" id="permiso" class="form-control" >
                                        <option disabled value="">Seleccione un elemento</option>
                                        <option v-for="permisos in permiso">{{permisos}}</option>
                                    </select></div>
                                <button class="mt-1 btn btn-primary" v-on:click="registrarUsuario()">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Groups</h5>
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                    <input placeholder="username" type="text" class="form-control"></div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><input aria-label="Checkbox for following text input" type="checkbox" class=""></span></div>
                                    <input placeholder="Check it out" type="text" class="form-control"></div>
                                <br>
                                <div class="input-group"><input placeholder="username" type="text" class="form-control">
                                    <div class="input-group-append"><span class="input-group-text">@example.com</span></div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">$</span><span class="input-group-text">$</span></div>
                                    <input placeholder="Dolla dolla billz yo!" type="text" class="form-control">
                                    <div class="input-group-append"><span class="input-group-text">$</span><span class="input-group-text">$</span></div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                    <input placeholder="Amount" step="1" type="number" class="form-control">
                                    <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Group Button Dropdown</h5>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-secondary">Button Dropdown</button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                    </div>
                                </div>
                                <input type="text" class="form-control"></div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Group Button Shorthand</h5>
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-secondary">To the Left!</button>
                                    </div>
                                    <input type="text" class="form-control"></div>
                                <br>
                                <div class="input-group"><input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary">To the Right!</button>
                                    </div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-danger">To the Left!</button>
                                    </div>
                                    <input placeholder="and..." type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-success">To the Right!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Group Sizing</h5>
                            <div>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend"><span class="input-group-text">@lg</span></div>
                                    <input type="text" class="form-control"></div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">@normal</span></div>
                                    <input type="text" class="form-control"></div>
                                <br>
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend"><span class="input-group-text">@sm</span></div>
                                    <input type="text" class="form-control"></div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Group Addon</h5>
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">To the Left!</span></div>
                                    <input type="text" class="form-control"></div>
                                <br>
                                <div class="input-group"><input type="text" class="form-control">
                                    <div class="input-group-append"><span class="input-group-text">To the Right!</span></div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">To the Left!</span></div>
                                    <input placeholder="and..." type="text" class="form-control">
                                    <div class="input-group-append"><span class="input-group-text">To the Right!</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Input Group Button</h5>
                            <div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-secondary">I'm a button</button>
                                    </div>
                                    <input type="text" class="form-control"></div>
                                <br>
                                <div class="input-group"><input type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-secondary">Button Dropdown</button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary">Split Button</button>
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle dropdown-toggle-split btn btn-outline-secondary"><span
                                                class="sr-only">Toggle Dropdown</span></button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                        </div>
                                    </div>
                                    <input placeholder="and..." type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary">I'm a button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
            <form class="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Checkboxes</h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox">Check this
                                                custom checkbox</label></div>
                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox2">Or this
                                                one</label></div>
                                        <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3" disabled="" class="custom-control-input"><label class="custom-control-label" for="exampleCustomCheckbox3">But
                                                not this disabled one</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Inline</h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" id="exampleCustomInline" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                              for="exampleCustomInline">An inline custom
                                                input</label></div>
                                        <div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" id="exampleCustomInline2" class="custom-control-input"><label class="custom-control-label"
                                                                                                                                                                                               for="exampleCustomInline2">and another one</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Radios</h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio">Select
                                                this custom radio</label></div>
                                        <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio2" name="customRadio" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio2">Or
                                                this one</label></div>
                                        <div class="custom-radio custom-control"><input type="radio" id="exampleCustomRadio3" disabled="" class="custom-control-input"><label class="custom-control-label" for="exampleCustomRadio3">But not this
                                                disabled one</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Form Select</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleCustomSelect" class="">Custom Select</label><select type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
                                                <option value="">Select</option>
                                                <option>Value 1</option>
                                                <option>Value 2</option>
                                                <option>Value 3</option>
                                                <option>Value 4</option>
                                                <option>Value 5</option>
                                            </select></div>
                                        <div class="position-relative form-group"><label for="exampleCustomMutlipleSelect" class="">Custom Multiple Select</label><select multiple="" type="select" id="exampleCustomMutlipleSelect"
                                                                                                                                                                          name="customSelect" class="custom-select">
                                                <option value="">Select</option>
                                                <option>Value 1</option>
                                                <option>Value 2</option>
                                                <option>Value 3</option>
                                                <option>Value 4</option>
                                                <option>Value 5</option>
                                            </select></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleCustomSelectDisabled" class="">Custom Select Disabled</label><select type="select" id="exampleCustomSelectDisabled" name="customSelect"
                                                                                                                                                                          disabled="" class="custom-select">
                                                <option value="">Select</option>
                                                <option>Value 1</option>
                                                <option>Value 2</option>
                                                <option>Value 3</option>
                                                <option>Value 4</option>
                                                <option>Value 5</option>
                                            </select></div>
                                        <div class="position-relative form-group"><label for="exampleCustomMutlipleSelectDisabled" class="">Custom Multiple Select Disabled</label><select multiple="" type="select"
                                                                                                                                                                                           id="exampleCustomMutlipleSelectDisabled"
                                                                                                                                                                                           name="customSelect" disabled="" class="custom-select">
                                                <option value="">Select</option>
                                                <option>Value 1</option>
                                                <option>Value 2</option>
                                                <option>Value 3</option>
                                                <option>Value 4</option>
                                                <option>Value 5</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<!--vuejs-->
    <script src="/assets/scripts/jquery-3.5.0.js"></script>
    <script type="text/javascript" src="/assets/scripts/main.js"></script>
    <script src="/assets/js/vue.min.js"></script>
    <script src="/assets/js/axios.min.js"></script>
<script>
    const app = new Vue({
        el: '#app',
        data (){
            return {
                nombre: '',
                permiso: ['Administrador', 'Moderador'],
                username: '',
                password: '',
                rol: '',
                errorMostrarMsjUser : [],
                errorUser: 0
            }
        },
        methods: {
            validarUsers()
            {
                this.errorUser = 0;
                this.errorMostrarMsjUser = [];
                if(!this.nombre) this.errorMostrarMsjUser.push("El nombre no puede estar vacio");
                if(!this.username) this.errorMostrarMsjUser.push("El nombre de usuario no puede estar vacio");
                if(!this.password) this.errorMostrarMsjUser.push("La contraseña es obligatoria");
                if(!this.rol) this.errorMostrarMsjUser.push("El Rol de usuario o Permisos es obligatorio");
                if(this.errorMostrarMsjUser.length) this.errorUser = 1;

                return this.errorUser;

            },
            registrarUsuario()
            {
                if(this.validarUsers())
                {
                    return;
                }
                let me = this;
                 axios.post('/Controllers/CreateUser', {
                     'nombre': this.nombre,
                     'username': this.username,
                     'pswd': this.password,
                     'rol': this.rol
                 }).then(res => {
                     alert("el usuario fue creado correctamente" + res)
                 }).catch(err => {

                 })
            }
        },
        mounted(){
            console.log('componente montado');
        }
    })
</script>
<style>
    .modal-content{
        width: 100% !important;
        position: absolute !important;
        margin-top: 100px;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color: red !important;
        font-weight: bold;
    }
    .modal-enter .modal-container,
    .modal-leave-active .modal-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
</style>
<!--endvuejs-->
