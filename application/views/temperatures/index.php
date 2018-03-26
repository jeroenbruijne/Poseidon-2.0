<?php
$user_id=$this->session->userdata('user_id');
 
if(!$user_id){
 
  //redirect('user/login_view');
}
?>

<h1>Temperaturen</h1>


<!-- <section class="col-lg-7 connectedSortable">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
            <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
            <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
            <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
        </ul>
        <div class="tab-content no-padding">
            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
        </div>
    </div>
</section> -->

<div id="container" style="width:100%; height:400px;"></div>

