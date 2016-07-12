Statesman Social Media Awards
==============================

## Site mothballed

Due to the cancellation of our Caspio contract, this site is mothballed. This `master` branch is as it was in it's last published iteration. There is a `mothball` branch that says the site is closed and that is what is published.

-----

## Mobile play
Pages are responsive via Bootstrap, and in some cases specific Caspio datapages were made and hidden/shown based on the media query.

## Social play
* Standard social buttons at the top of the page.
* will do specific share logo
* There is wording on the response page when a reader submits a nomination that they can copy 'n' paste to tweet. A specific tweet button per entry is difficult at this point because of the url structure of Caspio.

## Steps when you set up a project


* use `package.json` and `npm install`
* use `bower.json` and `bower install`
* use a public folder for the published files:
	* assets: images and other accces
	* dist: where js and css is compiled
	* fonts: for font-awesome
	* includes: files for metrics, advertising and other includes
* use a src for build components
	* js: for project specific files
	* less: for less css source files.
* use ftpush grunt task to publish public.
	* needs .ftppass file with credentials. gitignore that file.

At top of index is a php array to set page titles, sharing images, etc.

## Bits

To center a less-than-12-column page, add row-centered and col-centered classes to row and column divs, respectively.

