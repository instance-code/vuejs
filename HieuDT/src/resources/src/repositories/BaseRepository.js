import axios from 'axios';
const baseDomain="http://localhost:82";
const baseURL=`${baseDomain}/api`
export  default axios.create({
    baseURL,
    headers:{
        Authorization: 'Bearer {token}'
      }
})