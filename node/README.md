# Mysendingbox-node wrapper test app

## Prerequisites

You must have node.js 18LTS at least installed with the node manager of your choice (recommanded : [nvm](https://github.com/nvm-sh/nvm) or [nvm-windows](https://github.com/coreybutler/nvm-windows))

## Test your wrapper locally

Pull the wrapper from your git repository then run : 

```bash
npm i
# then
npm pack # wrapper root path
# or
npm pack --pack-destination ../path-of-your-choice
``` 

Then back in the test app and fill the **mysendingbox** dependency version with the corresponding path of your previously packed wrapper.

Don't forget to create your .env at the root folder by simply copy/past/rename the given sample.

The API host var is fallback by default to http://localhost:8081/api in order to avoid to test by default on the production env inherited by the wrapper package.

**Reminder : the api key is in your msb account**

Run `npm i` and `npm run build` and try the existing exemples running one of the following commands :
```bash
npm run test:accounts
npm run test:invoices
npm run test:letters
npm run test:postcards
```

Feel free to edit these shortcuts in the [package.json](./package.json) at your convenience

## Test your production wrapper

Simply avoid the pack part, remove the mysendingbox line from your package.json dependencies and run :

```bash
npm i mysendingbox
```
It will install the package from the npm repository.

To come back to a local pack replace the mysendingbox package version by your pack path and rerun `npm i`