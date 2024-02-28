import msb from './index.js';

/** Accounts */
// CREATE AN ACCOUNT OK
// msb.account.create({
//   email: "user@mail.com",
//   name: "User Name",
// }).then((account) => {
//   console.log(account);
// }).catch((err) => {
//   console.log(err);
// });

// UPDATE AN ACCOUNT OK
msb.account.updateEmail("user_id", "user@mail.com")
.then((account) => {
  console.log(account);
}).catch((err) => {
  console.log(err);
});