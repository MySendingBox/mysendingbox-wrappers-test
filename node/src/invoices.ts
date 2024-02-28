import msb from './index.js';

/** Invoices */
// FIND ONE INVOICE OK
msb.invoice.findById('invoice_id')
.then((invoice) => {
  console.log(invoice);
})
.catch((err) => {
  console.log(err);
});