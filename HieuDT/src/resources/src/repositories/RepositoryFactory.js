
import UserRepository from './UserRepository';

const repositories={
    users: UserRepository
    //other repo
};
export  default {
    get: name => repositories[name],// ~ get(name){ return repositories[name]}
}