<?php 
	$page = $_GET['page'];
	if( $page ){

		switch ($page) {
			case $page:
				if( file_exists("page/$page/$page.php") ){
					include "page/$page/$page.php";
				}else{
					include "404.php";
				}
			break;
			default:
				include "404.php";
			break;
		}
		
	} else {

		include "page/dashboard/dashboard.php";

	}

?>

<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog" id="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>
      <div class="contents"></div>
    </div>
  </div>
</div>