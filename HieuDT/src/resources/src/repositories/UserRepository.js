import Repository from './BaseRepository';
const resource='/users';
export default {
    get(){
        return Repository.get(`${resource}`);
    },
    getById(id){
        return Repository.get(`${resource}/${id}`);

    },
    create(data){
        return Repository.post(`${resource}`,data)
    },
    update(data,id){
        return Repository.put(`${resource}/${id}`,data)

    },
    delete(id){
        return Repository.delete(`${resource}/${id}`)
    }



}