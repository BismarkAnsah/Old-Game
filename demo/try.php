<div id="group_combo" style="border:solid 5px green">     
<div style="width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;border:solid 5px red">
        
        <div class="group_combo" style="position:relative;top:-20px;">
      <br>
      &nbsp;
    
      <div class="rows row">
      <button class="codex">1st</button>
      <?php
        for($x = 0; $x < 10; $x++){
          ?>
            <button class="x11 code d min num hvr-pop"><b><?=$x?></b></button>
          <?php
        }
      ?>
      <div class="nums">
      <button class="cb1 codec">All</button>
      <button class="cb2 codec">Big</button>
      <button class="cb3 codec">Small</button>
      <button class="cb4 codec">Odd</button>
      <button class="cb5 codec">Even</button>
      <button class="cb6 codec">Clear</button>
      </div>
      </div>
      <br>

      
    </div>
  </div>
<p></p>
<div class="group_combo" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;border:solid 5px red">
        
        <div class="row">
          <div class="col-sm">
          <!--dropdown 1-->
            <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:solid 1px #eee">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">draw numbre 1</a>
          <a class="dropdown-item" href="#">draw numbre 2</a>
          <a class="dropdown-item" href="#">draw numbre 3</a>
        </div>
      </div>


          </div>
          <div class="col-sm">
          <div class="btn-group mr-2" role="group" aria-label="First group">
          <button type="button" class="btn coins">2</button>
          <button type="button" class="btn coins">1</button>
          <button type="button" class="btn coins">0.2</button>
          <button type="button" class="btn coins">0.1</button>
          <button type="button" class="btn coins">0.02</button>
          <button type="button" class="btn coins">0.01</button>
          <button type="button" class="btn coins">0.002</button>
          <button type="button" class="btn coins">0.001</button>
          </div>
          <p></p>
          <div class="btn-group mr-2" role="group" aria-label="First group">
          <button type="button" class="btn coins">x1</button>
          <button type="button" class="btn coins">x5</button>
          <button type="button" class="btn coins">x10</button>
          <button type="button" class="btn coins">x20</button>
          <button type="button" class="btn coins">x30</button>
          <button type="button" class="btn coins">x40</button>
          <button type="button" class="btn coins">x50</button>
          <button type="button" class="btn coins">x100</button>
          </div>
          </div>
          <div class="col-sm">
          <!---->
          <div class="btn-group mr-2" role="group" aria-label="First group">
          Bet Amt.<input type="text" placeholder="GHc 1" style="width:120px;position:relative;left:20px;border:solid 1px #eee">
          </div>
          <p></p>
          Mult. Bet.<div class="btn-group mr-2" role="group" aria-label="First group"  style="width:120px;position:relative;left:15px">
          <button type="button" class="btn coins">-</button>
          <button type="button" class="btn coins">1</button>
          <button type="button" class="btn coins">+</button>
          </div>

          </div>
        </div>
      <!--bet amount and buttons-->
        <div style="padding:10px">
        <span class="bets">At least <b>5</b> No.</span>    <span>Total: <b class="total">0</b></span>  
        </div>

        <div class="row d-flex justify-content-end" style="margin-right:20px;">
        <button type="button" class="btn btn-outline-secondary btnx">Add to cart</button>
        <button type="button" class="btn btn-outline-secondary btnx">Track</button>
        <button type="button" class="btn btn-outline-secondary btnx">Bet now</button>
        </div>

        </div><!--end of bet amount buttons-->
<p></p>
<div class="group_combo" style="padding:10px;width:100%;height:auto;border-radius:10px;background-color:#fff;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;display:block;border:solid 5px red">
        
        <div class="table-responsive">

        <div class="container card shadow d-flex justify-content-center mt-5">
            <!-- nav options -->
            <ul class="nav nav-pills mb-3 shadow-sm" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Example 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Example 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Example 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Example 4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Example 5</a>
              </li>
            </ul>

            <!-- content -->
            <div class="tab-content" id="pills-tabContent p-3">
              <!-- 1st card -->
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            
                <ul class="ccontent">
                  <li>
                    <div class="wrapp">
                      <div>login attempts</div>
                    </div>
                  </li>
                </ul>

              </div>
              <!-- 2nd card -->
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                
              <ul class="ccontent">
                  <li>
                    <div class="wrapp">
                      <div>login attempts</div>
                    </div>
                  </li>
                </ul>

              </div>
              <!-- 3nd card -->
              <div class="tab-pane fade third" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                
              <ul class="ccontent">
                  <li>
                    <div class="wrapp">
                      <div>Values</div>
                    </div>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        
        </div>

        </div><!--table-->
</div> 