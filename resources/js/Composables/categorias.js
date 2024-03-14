import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

export default function useCategorias () {
    const categoria  = ref([])
    const categorias =  ref([])

    const errors = ref('')
    const router = useRouter()
    
    const getCategorias = async () => {
        let response = await axios.get('/api/categorias')
        categorias.value = response.data.data;        
    }

    const getCategoria = async (id) => {
        let response = await axios.get(`/api/categorias/${id}`)
        categoria.value = response.data.data
    }

    const storeCategoria = async(data) =>{
        errors.value = ''
        try {
            await axios.post('/api/categorias', data)
            await router.push({ name: "categorias.index" })
        } catch (e) {
            if(e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value = e.response.data.errors
                }
            }
        }
    }

    const updateCategoria = async (id) => {
        errors.value = '';
        try{
            await axios.patch(`/api/categorias/${id}`, categoria.value);
            await  router.push({name: 'categorias.index'})
        }catch(e){
            if(e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value = e.response.data.errors
                }
            }
        }

        const destroyCategoria = async (id) => {
            await axios.delete(`/api/categorias/${id}`);
        }
    }
    
    return {
        errors,
        categoria,
        categorias,
        getCategoria,
        getCategorias,
        storeCategoria,
        updateCategoria,
        destroyCategoria
    }


}

