<?php
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vendorproducts */

$this->title = 'Manage Reviews';

?>
                <div class="b-tabs-vertical__content-text">
                  <h3 class="f-tabs-vertical__title f-primary-b">Manage Reviews</h3>
                  <div class="col-md-10">
                    <div class="radio_buttons">
                      <form role="form">
                    
                         <div class="col-md-3">
                          <div class="form-group" >
                          <label>Select</label>
                            <select id="" class="form-control"  style="" >
                            <option value="">All</option>
                              <option value="">1 </option>
                              <option value="">2</option>
                              <option value="">3</option>
                              <option value="">4</option>
                              <option value="">5</option>
                            </select>
                          </div>
                   </div>      
                   
                        
                      </form>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12">
                  <div class="col-md-3 pull-right">
                        <div id="imaginary_container">
                          <div class="input-group stylish-input-group">
                            <input type="text" class="form-control"  placeholder="Customer Id" >
                            <span class="input-group-addon">
                            <button type="submit"> <span class="fa fa-search"></span> </button>
                            </span> </div>
                        </div>
                      </div>
                  </div>
                  
                  
                  <div class="col-md-12" style="margin-top:1em;">
                    <div class="display_rewards_table"></div>
                    <table class="table table-bordered">
                      <thead>
                        <tr style="background:#f5f5f5;">
                          <th><b>Customer Id</b></th>
                          <th><b>Rating</b></th>
                          <th><b>Review Comments</b></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>NJGD009</td>
                          <td style=" font-size:18px; color:#F90;"><div id="stars-existing" class="starrr" data-rating='4'></div></td>
                          <td>Choosing something decent from that vast array of choices is no mean feat. </td>
                          <td><a href="#" style="color:#8cc251; font-size:15px;">Reply</a></td>
                        </tr>
                        <tr>
                          <td>NJGD009</td>
                          <td style="font-size:18px; color:#F90;"><div id="stars-existing" class="starrr" data-rating='4'></div></td>
                          <td>Choosing something decent from that vast array of choices is no mean feat. </td>
                          <td><a href="#" style="color:#8cc251; font-size:15px;">Reply</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>