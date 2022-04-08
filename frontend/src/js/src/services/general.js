import http from './index';
import endpoint from './endpoint';

// Contact
export const contact = data => http.post(endpoint.contact, data);

// Where to Buy
export const getStores = data => http.get(endpoint.stores, data);
