Statesman Social Media Awards
==============================




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

