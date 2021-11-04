import axios from 'axios';

// const API_BASE_URL = '';

const http = {
  request(method, url, data, headers = {}) {
    const apiData = data instanceof FormData ? data : JSON.stringify(data);
    const requestHeaders = Object.assign(
      {},
      {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      headers,
    );

    return axios.request({
      url,
      data: apiData,
      method,
      headers: requestHeaders,
    });
  },

  get(url, args = {}) {
    return this.request('get', url, args);
  },

  post(url, data, headers = {}) {
    return this.request('post', url, data, headers);
  },

  put(url, data, headers = {}) {
    return this.request('put', url, data, headers);
  },

  patch(url, data, headers = {}) {
    return this.request('patch', url, data, headers);
  },

  delete(url, data = {}, headers = {}) {
    return this.request('delete', url, data, headers);
  },

  api(method, url, data = {}, customHeaders = {}) {
    let headers = Object.assign({}, customHeaders);
    // const authData = auth.userData();
    // if (authData && authData.token) {
    //   headers = Object.assign({}, customHeaders, {
    //     Authorization: `Bearer ${authData.token}`,
    //   });
    // }
    return this.request(method, url, data, headers);
  },

  init() {
    axios.defaults.baseURL = API_BASE_URL;

    // Intercept the response and…
    // axios.interceptors.response.use(
    //   response => response,
    //   async error => {
    //     return Promise.reject(error);
    //   },
    // );
  },
};

export default http;
