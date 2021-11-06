const baseUrl = process.env.NODE_ENV === "production" 
? 'https://boxity.id' 
: 'http://localhost:3000';

export default baseUrl;