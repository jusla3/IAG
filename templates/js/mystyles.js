/**
 * mystyles.js
 *
 * This file may be used when you have "Styles" as one of the items in your toolbar.
 *
 * For a more comprehensive example, see the file ./ckeditor-[version]/styles.js
 *
 */
CKEDITOR.stylesSet.add( 'mystyles', [ 
 { 
   name: 'Hide on Phones', 
   element: 'p', 
   attributes: { 'class': 'hide-on-phones' } 
 }, {
   name: 'Left Aligned Photo',
   element: 'img',
   attributes: { 'class': 'align_left' }
 }, {
   name: 'Right Aligned Photo',
   element: 'img',
   attributes: { 'class': 'align_right' }
 }, {
   name: 'Centered Photo',
   element: 'img',
   attributes: { 'class': 'align_center' }
 }, {
   name: 'Create Button',
   element: 'a',
   attributes: { 'class': 'button' }
 }, 
    
    
    
    {
   name: 'Small Text',
   element: 'p',
   attributes: { 'class': 'small' }
 }, {
   name: 'Fadein',
   element: 'img',
   attributes: { 'class': 'fadein' }
 }, {
   name: 'Lightbox',
   element: 'img',
   attributes: { 'class': 'imagelightbox' }
 }, {
   name: 'Round Left Aligned Photo',
   element: 'img',
   attributes: { 'class': 'circle' }  
}
  
]);
