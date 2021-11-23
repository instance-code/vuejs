import axios from 'axios';
axios.interceptors.request.use( (config) => {
  // clear request error
  config.headers.common['Cache-Control'] = 'no-cache';
  config.headers.common['Pragma'] = 'no-cache';

  // add csrf token
  const csrf_token = document.head.querySelector('meta[name="csrf-token"]');
  if (csrf_token) {
    config.headers.common['X-CSRF-TOKEN'] = csrf_token.content;
    config.headers.common['X-Requested-With'] = 'XMLHttpRequest';
  } else {
    console.warn('CSRF token not found');
  }

  // config.headers.Authorization = `Bearer ${auth.getToken}`;
  return config;
},  (error) => {
  return Promise.reject(error);
});

axios.interceptors.response.use(
  (response) => {
    return response;
  },
  async (error) => {
    return Promise.reject(error);
  }
);
export default axios;
