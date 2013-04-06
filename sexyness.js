/***********************************************
* Step Carousel Viewer script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/

 
stepcarousel.setup({
galleryid: 'mygallery', //id of carousel DIV
beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
panelclass: 'panel', //class of panel DIVs each holding content
autostep: {enable:true, moveby:1, pause:3000},
panelbehavior: {speed:1000, wraparound:false, wrapbehavior:'slide', persist:true},
defaultbuttons: {enable: true, moveby: 1, leftnav: ['images/l2.png', -104, 0], rightnav: ['images/r2.png', 14, 0]},
statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
contenttype: ['inline'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
})

 