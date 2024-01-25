import msb from './index.js';

/** Letters */
// CREATE A LETTER OK
// msb.letter.create({
//   description: "My first test letter",
//   to: {
//     name: "John Doe",
//     company: "My Company",
//     address_line1: "1 rue du Louvre",
//     address_city: "Paris",
//     address_postalcode: "75000",
//     address_country: "France",
//   },
//   from: {
//     name: "John Doe",
//     company: "My Company",
//     address_line1: "1 rue du Louvre",
//     address_city: "Paris",
//     address_postalcode: "75000",
//     address_country: "France",
//   },
//   color: "bw",
//   postage_type: "prioritaire",
//   source_file: '<html>Test</html>',
//   source_file_type: "html",
//   content: "My letter content",
//   content_type: "text",
//   variables: {
//     nom: "wrapper variable test"
//   }
// }, 'paper').then((letter: any) => {
//   console.log(letter);
// }).catch((err: any) => {
//   console.log(err);
// });

// GET ALL LETTERS OK
msb.letter.findAll().then((letters) => {
  console.log(letters);
}).catch((err) => {
  console.log(err);
});

// GET A LETTER OK
// msb.letter.findById("letter_id").then((letter) => {
//   console.log(letter);
// }).catch((err) => {
//   console.log(err);
// });

// DELETE A LETTER OK
// msb.letter.delete("letter_id").then((letter) => {
//   console.log(letter);
// }).catch((err) => {
//   console.log(err);
// });