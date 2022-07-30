require('./bootstrap');
 
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/dist/sweetalert2.css'

isWindows.Swal = Swal;
const toast = Swal.mixin({
toast:true,
position:'top-end',
showConfirmButton:false,
timer: 3000 ,
timeprogressBar:true,
}
);
isWindows.toast = toast;

import { createApp } from "vue";

import router from "./router";

import App from "./components/App.vue"
import isWindows from 'cross-env/src/is-windows';

createApp(App).mount("#App")