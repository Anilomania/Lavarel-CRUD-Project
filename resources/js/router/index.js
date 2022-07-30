import { createRouter, createWebHistory } from 'vue-router'

 import productIndex from '../components/products/index.vue'
import productNew from '../components/products/New.vue'
import notFound from '../components/notFound.vue'
import productEdit from '../components/product/edit.vue'


const routes = [

{
    path:'/',
    component: productIndex
},
{
    path:'/:pathMatch(.*)*',
    componet:notFound
},
{
    path:'/product/new',
    componest: productNew
},
{
    path: '/product/edit/.id',
    component: productEdit,
    props:true
}
]

const router = createRouter({
history: createWebHistory(process.env.BASE_URL),
routes,

})
export default router