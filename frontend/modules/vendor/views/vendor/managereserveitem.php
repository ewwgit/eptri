<?php
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */

$this->title = 'Manage Reserve Items';

?>
  
              <div role="tabpanel" class="tab-pane" id="">
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Manage Reserve Items</h3>
                  
                  <div class="col-md-7" style="margin-top:1em;">
                    <form class="form-inline">
                      <div class="form-group">
                        <label for="usr">User Id</label>
                        <input type="email" class="form-control" id="usr" placeholder="">
                       
                      </div>
                
                    </form>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-4">
                    <div class="radio_buttons">
                      <form role="form">
                        <label class="radio-inline">
                          <input type="radio" name="optradio">
                          Reserved For </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio">
                         Reserved By </label>
                      </form><br>
                     
                             <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  
                </div>
                <div class="clearfix"></div>
                
                <div class="col-md-12">
                  <div class="display_rewards_table">
                  
                  <table class="table table-bordered">
                    <thead>
                      <tr style="background:#f5f5f5;">
                        <th><b>Product Name</b></th>
                        <th><b>Brand</b></th>
                        <th><b>Quantity Details</b></th>
                        <th><b>Reserved Count</b></th>
                        <th><b>Reserved For</b></th>
                        <th><b>Reserved By</b></th>
                        <th><b>Pick Up Date</b></th>
                        <th><b>Picked Flag</b></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>NJGD009</td>
                        <td>25</td>
                        <td>50</td>
                         <td>2</td>
                          <td>4</td>
                          <td>4</td>
                        <td>1-12-2015</td>
                        <td><i class="fa fa-check"></i></td>
                        <td><div class="submit_button"><a href="#"> Update</a></div></td>
                      </tr>
                     
                     <tr>
                        <td>NJGD009</td>
                        <td>25</td>
                        <td>50</td>
                         <td>2</td>
                          <td>4</td>
                          <td>4</td>
                        <td>1-12-2015</td>
                        <td><i class="fa fa-times"></i></td>
                        <td><div class="submit_button"><a href="#"> Update</a></div></td>
                      </tr>
                      
                      
                      <tr>
                        <td>NJGD009</td>
                        <td>25</td>
                        <td>50</td>
                         <td>2</td>
                          <td>4</td>
                          <td>4</td>
                        <td>1-12-2015</td>
                        <td><i class="fa fa-times"></i></td>
                        <td><div class="submit_button"><a href="#"> Update</a></div></td>
                      </tr>
                      
                      
                      <tr>
                        <td>NJGD009</td>
                        <td>25</td>
                        <td>50</td>
                         <td>2</td>
                          <td>4</td>
                          <td>4</td>
                        <td>1-12-2015</td>
                        <td><i class="fa fa-times"></i></td>
                        <td><div class="submit_button"><a href="#"> Update</a></div></td>
                      </tr>
                      
                      <tr>
                        <td>NJGD009</td>
                        <td>25</td>
                        <td>50</td>
                         <td>2</td>
                          <td>4</td>
                          <td>4</td>
                        <td>1-12-2015</td>
                        <td><i class="fa fa-times"></i></td>
                        <td><div class="submit_button"><a href="#"> Update</a></div></td>
                      </tr>
                      
                    </tbody>
                  </table>
                 </div>
                </div>
                	
                <div class="clearfix"></div>
                
              </div>