module.exports = {
  //purge: [],
  purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
     
      objectPosition: {
        bottom: 'bottom',
        center: 'center',
        left: 'left',
        right: 'right',
        'right-bottom': 'right bottom',
        'right-top': 'right top',
        top: 'top',
       'center-bottom': 'center bottom',
       'center-top': 'center top'
      }
      
    
  },
  variants: {
    extend: {},
  },
  plugins: [
   require('@tailwindcss/custom-forms')
  ],
}
