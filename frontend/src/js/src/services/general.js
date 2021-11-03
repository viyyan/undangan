import http from './index';
import endpoint from './endpoint';

// Contact
export const contact = data => http.post(endpoint.contact, data);

// Quiz
export const submitQuiz = data => http.post(endpoint.submitQuiz, data);
export const submitQuizUser = data => http.post(endpoint.submitQuizUser, data);
