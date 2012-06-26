<?php
   class galerieRunonceJob extends Controller
   {
      public function __construct()
      {
         parent::__construct();
         $this->import('Database');
      }
      public function run()
      {
         if ($this->Database->tableExists('tl_layout')) {
            $this->Database->execute("UPDATE tl_layout SET sf_pathLevels=1");
            $this->Database->execute("UPDATE tl_layout SET sf_delay=200");
            $this->Database->execute("UPDATE tl_layout SET sf_speed='normal'");
            $this->Database->execute("UPDATE tl_layout SET sf_autoArrows='true'");
            $this->Database->execute("UPDATE tl_layout SET sf_dropShadows='true'");
            $this->Database->execute("UPDATE tl_layout SET sf_minWidth=12");
            $this->Database->execute("UPDATE tl_layout SET sf_maxWidth=27");
            $this->Database->execute("UPDATE tl_layout SET sf_extraWidth=1");
            $this->Database->execute("UPDATE tl_layout SET sf_hoverClass='sfHover'");
         }
      }
   }
   $objGalerieRunonceJob = new galerieRunonceJob();
   $objGalerieRunonceJob->run();
?>