import { ref } from "vue"
import axios from 'axios'
import { useRouter } from 'vue-router'

axios.defaults.baseURL = "http://127.0.0.1:8000/api/users";

export default function useUsers(){
    const users = ref([]);
    const user = ref([]);
    const errors = ref({})
    const router = useRouter();

    const getUsers =async() => {
        const reponse =await axios.get("http://127.0.0.1:8000/api/users");
        users.value = reponse.data.data;
    };


    const getUser = async (id) => {
        const response = await axios.get("http://127.0.0.1:8000/api/users/" + id)
        user.value = response.data.data
    };

    // Crear user
    const storeUser = async (data) =>{
        try{
            await axios.post("http://127.0.0.1:8000/api/agregarusers/", data);
            await router.push({ name: "userIndex" });
        }catch(error){
            if(error.response.status === 422){
                errors.value = error.response.data.errors;
            }
        }
    }

    // Actualizar user
    const updateUser =async (id) =>{
        try {
            await axios.put("http://127.0.0.1:8000/api/users/" + id, user.value);
            await router.push({ name: "userIndex" });
        } catch(error) {
            if(error.response.status === 422){
                errors.value = error.response.data.errors;
            }
        }
    }

    const destroyUser = async (id) => {
        if(!window.confirm("Confirmar")){
            return;
        }
        await axios.delete("http://127.0.0.1:8000/api/users/" + id);
        await getUsers();
    }

    return{
        user,
        users,
        getUser,
        getUsers,
        storeUser,
        updateUser,
        destroyUser,
        errors,
    };
}