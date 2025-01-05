<?php  require_once('include/header.php');
if(!isset($_SESSION['email'])){
  header('location: signin.php');
}
?>
<div class="container-fluid mt-2">
     <div class="row">
           <div class="col-md-3 col-lg-3">
            <?php require_once('include/sidebar.php'); ?>
           </div>

        <?php 
         if(!isset($_SESSION['email']))
         {
            header('location: signin.php');
          }
         ?>
        
              <div class="col-md-9 col-lg-9">
                <div class="row">
				
		<!--contact-breadcumb-end-->	

		<div class ="col-3">	
			<div class="pagetitle">
			  <h1>Contact</h1>
			  <nav>
				<ol class="breadcrumb"  style="background-color:#fff!important;">
				  <li style="color: #6fd943;" class="breadcrumb-item"><a href="index.php">Home</a></li>
				  <li class="breadcrumb-item">Lead</li>
				 
				</ol>
			  </nav>
			</div>
		</div>	
		<div class ="col-3">	
			
		</div>	<div class ="col-3">	
			
		</div>	<div class ="col-3">	
			<div class="pagetitle" style="background-color:none!important;">
			 
			  <nav>
				<ol class="breadcrumb"  style="background-color:#fff!important;">
				<a href="add_new_contact.php" class="btn btn-sm btn-primary btn-icon m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="Grid View">
        <i class="fa fa-plus text-white"></i>
    </a>
				  <a href="contact.php" data-url="" data-size="lg" data-ajax-popup="true" data-bs-toggle="tooltip" data-title="Create New Contact" title="" class="btn btn-sm btn-primary btn-icon m-1" data-bs-original-title="Create">
                <i class="fa fa-list" aria-hidden="true"></i>

            </a>
				 
				</ol>
			  </nav>
			</div>
		</div>	
	
				  
				  
			<div class="col-md-12">

			
			  
				  <div class="dash-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
          
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        

   
          
                <div class="card">
                    <div class="card-body table-border-style">
                        <div class="table-responsive overflow_hidden">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns dataTable-empty"><div class="dataTable-top"><div class="dataTable-dropdown"><label><select class="dataTable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table id="datatable" class="table datatable align-items-center dataTable-table">
                                <thead class="thead-light">
                                    <tr><th scope="col" class="sort" data-sort="name" data-sortable="" style="width: 14.4101%;"><a href="#" class="dataTable-sorter">Name</a></th><th scope="col" class="sort" data-sort="budget" data-sortable="" style="width: 14.0232%;"><a href="#" class="dataTable-sorter">Parent</a></th><th scope="col" class="sort desc" data-sort="status" data-sortable="" style="width: 13.5397%;"><a href="#" class="dataTable-sorter">Status</a></th><th scope="col" class="sort" data-sort="completion" data-sortable="" style="width: 18.6654%;"><a href="#" class="dataTable-sorter">Date Start</a></th><th scope="col" class="sort" data-sort="completion" data-sortable="" style="width: 23.0174%;"><a href="#" class="dataTable-sorter">Assigned User</a></th><th scope="col" class="text-end" data-sortable="" style="width: 16.3443%;"><a href="#" class="dataTable-sorter">Action</a></th></tr>
                                </thead>
								
								
								
                                <tbody>
									<tr><td>
                                                                                                <span class="avatar">
                                                    <a href="http://localhost/storage/upload/profile/avatar.png" target="_blank">
                                                        <img class="rounded-circle" width="25%" src="http://localhost/storage/upload/profile/avatar.png" alt="a">
                                                    </a>
                                                </span>
                                            </td><td class="budget">
                                                <a href="#" data-size="md" data-url="https://localhost/crm/user/10" data-ajax-popup="true" data-title="User Details" class="action-item text-primary">
                                                    A
                                                </a>
                                            </td><td>
                                                <span class="budget"> A </span>
                                            </td><td>
                                                <span class="budget">faaysal@gmail.com</span>
                                            </td><td>
                                                    A
                                                </td><td>
                                                                                                            <span class="badge bg-success p-2 px-3 rounded">Active</span>
                                                                                                    </td><td class="text-end">
                                                                                                        
                                                            
                                                                                                                                                                <div class="action-btn bg-danger ms-2">
                                                            
                                                        </div>
                                                                                                    </td></tr>
								
								<!--<tr><td class="dataTables-empty" colspan="6">No entries found</td></tr>-->
								
								
								</tbody>
								
                            </table>
							
							</div><div class="dataTable-bottom"><div class="dataTable-info"></div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"></ul></nav></div></div>
                        </div>
                    </div>
                </div>
   
     

    </div>
				  
				  
				  
				  
				  
                </div>
           
                 
        
			 
			 
			 
			 
     </div>
  </div>
      <?php 
 require_once('include/footer.php');
?>