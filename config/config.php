<?php

return array(
   /**
    * KCFinder configration
    */
   'kcfinder' => array(
      'paths' => array(
         'filebrowserBrowseUrl'      => URL::to_asset('/bundles/ckeditor/kcfinder/browse.php?type=files'),
         'filebrowserImageBrowseUrl' => URL::to_asset('/bundles/ckeditor/kcfinder/browse.php?type=images'),
         'filebrowserFlashBrowseUrl' => URL::to_asset('/bundles/ckeditor/kcfinder/browse.php?type=flash'),
         'filebrowserUploadUrl'      => URL::to_asset('/bundles/ckeditor/kcfinder/upload.php?type=files'),
         'filebrowserImageUploadUrl' => URL::to_asset('/bundles/ckeditor/kcfinder/upload.php?type=images'),
         'filebrowserFlashUploadUrl' => URL::to_asset('/bundles/ckeditor/kcfinder/upload.php?type=flash')
      )
   )
);