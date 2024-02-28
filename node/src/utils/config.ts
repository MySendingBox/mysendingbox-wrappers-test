/** Mysendingbox api config */
export const config = {
  apiKey: process.env.MSB_API_KEY,
  host: process.env.MSB_API_HOST ? process.env.API_HOST : "http://localhost:8081/api",
}