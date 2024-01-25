import msb from './index.js';

/** Postcards */
// CREATE A POSTCARD OK
// msb.postcard.create({
//   description: "My first test postcard",
//   to: {
//     name: "John Doe",
//     company: "My Company",
//     address_line1: "1 rue du Louvre",
//     address_city: "Paris",
//     address_postalcode: "75000",
//     address_country: "France",
//   }, 
//   source_file_front: '<html>Test</html>',
//   source_file_front_type: 'html',
//   source_file_back: '<html>Test</html>',
//   source_file_back_type: 'html',
// }).then((postcard) => {
//   console.log(postcard);
// }).catch((err) => {
//   console.log(err);
// });

// FIND ALL POSTCARDS OK
// msb.postcard.findAll().then((postcards) => {
//   console.log(postcards);
// }).catch((err) => {
//   console.log(err);
// });

// FIND ONE POSTCARD OK
msb.postcard.findById("postcard_id").then((postcard) => {
  console.log(postcard);
}).catch((err) => {
  console.log(err);
});

// DELETE ONE POSTCARD OK
// msb.postcard.delete("postcard_id").then((postcard) => {
//   console.log(postcard);
// }).catch((err) => {
//   console.log(err);
// });