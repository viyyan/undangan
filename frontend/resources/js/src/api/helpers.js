//
// Api helpers
//
export const get = (url) => {
  return fetch(url);
};

export const post = (url, data) => {
  return fetch(
    url, 
    {
      method: 'POST',
      body: data,
      headers: {
        'Content-Type': 'application/json'
      }
    }
  );
};