<?php
get_header(); ?>
<div class="container" >
<div class="row">
<div class="col-md-8" style="background-color:blue;height:400px;">

</div>
<div class="col-md-4">
<div class="row" style="background-color:skyblue;height:200px;">
</div>
<div class="row" style="background-color:deepskyblue;height:200px;">
</div>
</div>
</div>
</div>
<br>
<div class="container-fluid" style="border-top: 5px solid navy;background-color:deepskyblue;height:150px;">
<div class="row justify-content-center" >
    <div class="col-4" style="border:1px solid black; height:150px;">
        <div class="row justify-content-center" >
            <button class="btn btn-danger col-sm-1">TOP</button>
            <div class="col-sm-1">B1</div>
            <div class="col-sm-1">B2</div>
            <div class="col-sm-1">B3</div>
            <div class="col-sm-1">TSC</div>
        </div>
        <div class="row-fluid justify-content-center" style="border:1px solid black; height:120px;">

        </div>
        </div>
    </div>
    <div class="row">
</div>
</div>
<div class="container-fluid" style="border-bottom: 5px solid navy;border-top: 5px solid navy;background-color:deepskyblue;height:150px;">
<div class="row justify-content-center" >
    <div class="col-4" style="border:1px solid black; height:140px;">
        <div class="row justify-content-center" >
            <div class="col-sm-1">TOP</div>
            <div class="col-sm-1">B1</div>
            <div class="col-sm-1">B2</div>
            <div class="col-sm-1">B3</div>
            <div class="col-sm-1">TSC</div>
        </div>
        <div class="row-fluid justify-content-center" style="border:1px solid black; height:120px;">

        </div>
        </div>
    </div>
    <div class="row">
</div>
</div>
<br>
<div class="container" >
<div class="row" style="background:blue; height:200px">
<p>
    マッチレポート
</p>
<hr />
</div>

<div class="row" style="background:skyblue; height:200px">
<p>
    お知らせ
</p>
</div>

<br>
<div class="row justify-content-center" style="text-align:center; height:600px; background:skyblue;">
<h1>
OFF THE PITCH
</h1>
</div>
<br>
<div class="row justify-content-center" style="text-align:center; height:600px; background:skyblue;">
<h1>
SNS
</h1>
</div>
<br>
<div class="row justify-content-center" style="text-align:center; height:600px; background:skyblue;">
<h1>
SPONSOR
</h1>
</div>
</div>
<br>
<div style="text-align:center; height:200px; background:skyblue;">
<br>
<div class="container">
<div class="col-offset-4 ">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="email">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Subscribe</button>
      </span>
    </div><!-- /input-group -->
  </div>
</div>
</div>

<?php
get_sidebar();
get_footer();
