<?php

add_action( 'admin_init', 'custom_theme_options', 1 );

function custom_theme_options() {

  $saved_settings = get_option( 'option_tree_settings', array() );
  
  



/*

* Start Register section
* The section title is theme option menu

*/

  $custom_settings = array(
    'sections'        => array(
    
    // it's for main header logo dynamic
      array(
          'id'        =>'logo', //section id for register
         'title'      => 'header settings'
      ),
      
      // it's for slider image dynamic
      array(
           'id'       =>'slider', //section id for register
         'title'      => 'Slider image'
      ),
      
      // it's for footer social links dynamic
      
      array(
           'id'       =>'footersocial', //section id for register
         'title'      => 'Social Link Change'
      ),
      
      // it's for advertisment dynamic
         array(
           'id'       =>'ads', //section id for register
         'title'      => 'Advertisment Settings'
      ),
      
           // it's for footer dynamic
         array(
           'id'       =>'footerd', //section id for register
         'title'      => 'Footer Edit'
      )
     


    ),
    
    
    
    
/*

* Start feild or type and id for dynamic extra

* All array is very imoprtant

*/
    
    'settings'        => array(
    
    // for header image
      array(
        'id'          => 'logo_uploader',
        'label'       => 'Upload Your Logo or main banner',
        'desc'        => 'Best size for logo is 1000px width, 150px height',
        'type'        => 'upload',
        'section'     => 'logo'
      ),
      
      // for slider image
      array(
        'id'          => 'sliderimagea', // image 1
        'label'       => '1. Upload Your Slider Image',
        'desc'        => 'Best size for slider image is 600px width, 300px height',
        'type'        => 'upload',
        'section'     => 'slider'
      ),
      
      array(
        'id'          => 'slidertexta', // text 1
        'label'       => '1. Write some text for image',
        'desc'        => 'Max count of text 27 word with space',
        'type'        => 'text',
        'section'     => 'slider'
      ),
      
      array(
        'id'          => 'sliderimageb', // image 2
        'label'       => '2. Upload Your Slider Image',
        'desc'        => 'Best size for slider image is 600px width, 300px height',
        'type'        => 'upload',
        'section'     => 'slider'
      ),
      
      array(
        'id'          => 'slidertextb', // text 2
        'label'       => '2. Write some text for image',
        'desc'        => 'Max count of text 27 word with space',
        'type'        => 'text',
        'section'     => 'slider'
      ),
     
    array(
        'id'          => 'sliderimagec', // image 3
        'label'       => '3. Upload Your Slider Image',
        'desc'        => 'Best size for slider image is 600px width, 300px height',
        'type'        => 'upload',
        'section'     => 'slider'
      ),
      
      array(
        'id'          => 'slidertextc', // text 3
        'label'       => '3. Write some text for image',
        'desc'        => 'Max count of text 27 word with space',
        'type'        => 'text',
        'section'     => 'slider'
      ),
      
    array(
        'id'          => 'sliderimaged', // image 4
        'label'       => '4. Upload Your Slider Image',
        'desc'        => 'Best size for slider image is 600px width, 300px height',
        'type'        => 'upload',
        'section'     => 'slider'
      ),
      
      array(
        'id'          => 'slidertextd', // text 4
        'label'       => '4. Write some text for image',
        'desc'        => 'Max count of text 27 word with space',
        'type'        => 'text',
        'section'     => 'slider'
      ),
    
    array(
        'id'          => 'sliderimagee', // image 5
        'label'       => '5. Upload Your Slider Image',
        'desc'        => 'Best size for slider image is 600px width, 300px height',
        'type'        => 'upload',
        'section'     => 'slider'
      ),
      
      array(
        'id'          => 'slidertexte', // text 5
        'label'       => '5. Write some text for image',
        'desc'        => 'Max count of text 27 word with space',
        'type'        => 'text',
        'section'     => 'slider'
      ),
    
    
    array(
        'id'          => 'sliderimagef', // image 6
        'label'       => '6. Upload Your Slider Image',
        'desc'        => 'Best size for slider image is 600px width, 300px height',
        'type'        => 'upload',
        'section'     => 'slider'
      ),
      
      array(
        'id'          => 'slidertextf', // text 6
        'label'       => '6. Write some text for image',
        'desc'        => 'Max count of text 27 word with space',
        'type'        => 'text',
        'section'     => 'slider'
      ),
    
    array(
        'id'          => 'sliderimageg', // image 7
        'label'       => '7. Upload Your Slider Image',
        'desc'        => 'Best size for slider image is 600px width, 300px height',
        'type'        => 'upload',
        'section'     => 'slider'
      ),
      
      array(
        'id'          => 'slidertextg', // text 7
        'label'       => '7. Write some text for image',
        'desc'        => 'Max count of text 27 word with space',
        'type'        => 'text',
        'section'     => 'slider'
      ),
      
    array(
        'id'          => 'sliderimageh', // image 8
        'label'       => '8. Upload Your Slider Image',
        'desc'        => 'Best size for slider image is 600px width, 300px height',
        'type'        => 'upload',
        'section'     => 'slider'
      ),
      
      array(
        'id'          => 'slidertexth', // text 8
        'label'       => '8. Write some text for image',
        'desc'        => 'Max count of text 27 word with space',
        'type'        => 'text',
        'section'     => 'slider'
      ),
    
    array(
        'id'          => 'sliderimagei', // image 9
        'label'       => '9. Upload Your Slider Image',
        'desc'        => 'Best size for slider image is 600px width, 300px height',
        'type'        => 'upload',
        'section'     => 'slider'
      ),
      
      array(
        'id'          => 'slidertexti', // text 9
        'label'       => '9. Write some text for image',
        'desc'        => 'Max count of text 27 word with space',
        'type'        => 'text',
        'section'     => 'slider'
      ),
    
    array(
        'id'          => 'sliderimagej', // image 10
        'label'       => '10. Upload Your Slider Image',
        'desc'        => 'Best size for slider image is 600px width, 300px height',
        'type'        => 'upload',
        'section'     => 'slider'
      ),
      
      array(
        'id'          => 'slidertextj', // text 10
        'label'       => '10. Write some text for image',
        'desc'        => 'Max count of text 300 word with space',
        'type'        => 'text',
        'section'     => 'slider'
      ),
    
    // footer social link dynamic
    
         array(
        'id'          => 'fsfb', // for facebook
        'label'       => 'Change your Facebook link on footer icon',
        'desc'        => 'Fill up only fb user id or name (it is unic so use any space or symbol does not work) http://facebook.com/',
        'type'        => 'text',
        'section'     => 'footersocial'
      ),
      
      array(
        'id'          => 'fstw', // for twitter
        'label'       => 'Change your Twitter link on footer icon',
        'desc'        => 'Fill up only twitter user id or name (it is unic so use any space or symbol does not work) http://twitter.com/',
        'type'        => 'text',
        'section'     => 'footersocial'
      ),
    
    array(
        'id'          => 'fsgp', // for google plus
        'label'       => 'Change your google plus link on footer icon',
        'desc'        => 'Fill up only google plus user id or name (it is unic so use any space or symbol does not work) http://plus.google.com/',
        'type'        => 'text',
        'section'     => 'footersocial'
      ),


       array(
        'id'          => 'adswds1', // for ads sidebar image 1
        'label'       => 'Change Advertisment background image on hompage after sidebar first widget',
        'desc'        => 'Best size for ads 400px width and 300px height',
        'type'        => 'upload',
        'section'     => 'ads'
      ),

       array(
        'id'          => 'adswdst1', // for ads sidebar text 1
        'label'       => 'Change After First widget text on first Advertisment',
        'desc'        => 'Fill up max word 100',
        'type'        => 'text',
        'section'     => 'ads'
      ),
      
      

          array(
        'id'          => 'footertextp', // for footer text area
        'label'       => '1. Edit Your text on footer',
        'desc'        => 'Write Footer text box minimum 500 word',
        'type'        => 'textarea',
        'section'     => 'footerd'
      ),


           array(
        'id'          => 'fcopy', // for copyright
        'label'       => '2. Edit Your Copyright text through in footer',
        'desc'        => 'Write Your Copyright name and year such as, mpmgroupbd 2017 if you do not write footer showed default copyright name Al Mamun 2017',
        'type'        => 'text',
        'section'     => 'footerd'
      ),

          array(
        'id'          => 'footerbg', // for background footer area
        'label'       => '3. Edit your background Footer area',
        'desc'        => 'Chose color or image or both for footer area background',
        'type'        => 'background',
        'section'     => 'footerd'
      ),

    
    
));

  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
} 
 ?>