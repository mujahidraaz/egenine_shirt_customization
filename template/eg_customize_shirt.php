  <div class="main-section">
    <div class="main-section-inner">
          <canvas id="c" width="324" height="320"></canvas>
          <div class="free-drawing" id="free-drawing">
            <canvas width="220" height="85" id="d"></canvas>
          </div>

            <div class="controls" id="controls">
              <button id="btn" style="display: none;">add To c</button>
              <h2>Who are you?</h2>
              <h5>Claim Your Word</h5>
              <div class="btn-main">
                <div class="left-btn sign_section">
                  <label>
                    <span>Sign</span>
                    <input type="radio" name="sign" value="Sign" />
                     <img src="<?php echo plugins_url( 'assets/images/new-sign.png' , dirname(__FILE__ )); ?>">
                  </label>
                </div>
                <div class="left-btn" id="text_section">
                  <label>
                    <span>Text</span>
                    <input type="radio" name="sign" value="Text" />
                     <img src="<?php echo plugins_url( 'assets/images/new-text.png' , dirname(__FILE__ )); ?>">
                  </label>
                </div>
              </div>
                    <button id="add_signature" onclick="CountinoueBtn()">
                     <img src="<?php echo plugins_url( 'assets/images/continue-icon.png' , dirname(__FILE__ )); ?>">
                   </button> 
           </div> 

            <!-- Brush Control Section Start -->
            <div class="controls brush_controls" id="brush_controls">
              <div class="back-btn"><button onclick="BrushBack()"> 
                <img src="<?php echo plugins_url( 'assets/images/back.png' , dirname(__FILE__ )); ?>">
              </button></div>
               <h2>Sign your word</h2>
              <h5>Select your Brush</h5>
              <div class="main-brush" id="main-brush">
                <div class="inner-brush">
                   <label>
                      <input type="radio" name="size" value="5" id="size" />
                      <span>Small</span>
                  </label>
                  <label>
                      <input type="radio" name="size" value="10"  id="size2" />
                      <span>Large</span>
                  </label> 
                </div> 
                  
              </div>
                <div class="brush-btn-main-top">
                <div class="brush-btn-main" id="brush_pin">
                   <button class="brush_pin" onclick="ToggleBrushClass()">
                    <img src="<?php echo plugins_url( 'assets/images/brush.png' , dirname(__FILE__ )); ?>">
                     <span>Brush</span>
                   </button> 
                   <button id="clear-canvas" class="btn btn-info" onclick="clearcanvas()">
                     <img src="<?php echo plugins_url( 'assets/images/clear-icon.png' , dirname(__FILE__ )); ?>">
                     <span>Clear</span>
                   </button>
                </div>   
               </div> 

                    <button id="freeDrawingExport">
                        <img src="<?php echo plugins_url( 'assets/images/continue-icon.png' , dirname(__FILE__ )); ?>">
                   </button> 

                   <button id="btn2" class="add_signature_brush">
                     <img src="<?php echo plugins_url( 'assets/images/continue-icon.png' , dirname(__FILE__ )); ?>">
                   </button> 
           </div> 
            <!-- Brush Control Section End -->

            <!-- IText Control Section Start -->
            <div class="input-text" id="input-text">
                <input type="text" placeholder="Enter text here..." id="text_mode" maxlength="15">
                <div class="back-btn"><button onclick="BrushBack()">
                 <img src="<?php echo plugins_url( 'assets/images/back.png' , dirname(__FILE__ )); ?>">
              </button></div>
                  <h2>Type your word</h2>
                 <button  id="add_signature" class="input_cont" onclick="inputCountinoue()">
                   <img src="<?php echo plugins_url( 'assets/images/continue-icon.png' , dirname(__FILE__ )); ?>">
                </button> 
            </div>
            <div class="controls brush_controls itext_controls" id="itext_controls">
              <div class="back-btn"><button onclick="BrushBackIText()">
               <img src="<?php echo plugins_url( 'assets/images/back.png' , dirname(__FILE__ )); ?>">
             </button>
           </div>
              <div class="main-brush itext-toggle" id="itext-toggle">
                <div class="inner-brush">
                   <label onclick="BrushBackIText()">
                      <img src="<?php echo plugins_url( 'assets/images/your-text.png' , dirname(__FILE__ )); ?>">
                      <span>your Text</span>
                  </label>
                  <label>
                     <img src="<?php echo plugins_url( 'assets/images/select-your-font.png' , dirname(__FILE__ )); ?>">
                      <select id="font-control" name="font-control">
                          <option>Select Your Font</option>
                          <option value="indie_flowerregular">Indie Flower</option>
                          <option value="satisfyregular">satisfy</option>
                          <option value="sacramentoregular">Sacramento</option>
                          <!-- <option value="rock_saltregular">rock salt</option> -->
                          <option value="yesteryearregular">yesteryear</option>
                      </select>
                  </label>
                </div> 
              </div>
                <button  id="shirt_cont" class="input_cont shirt_cont">
                   <img src="<?php echo plugins_url( 'assets/images/continue-icon.png' , dirname(__FILE__ )); ?>">
                </button> 
            <!-- IText Control Section End -->
      <?php  include_once('eg_emoji.php'); ?>
    </div>

     <?php  include_once('eg_itext.php'); ?>
     <?php  include_once('alert.php'); ?>
     <?php  include_once('eg_bgimg.php'); ?>
   </div>
     <?php  include_once('eg_shirt.php'); ?>
  </div>