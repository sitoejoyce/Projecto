<?php
	include_once("../db.php");
	include_once("../header.php");

 ?>

<div class="main-panel">
          <div class="content-wrapper">





            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>

               
                </ul>
              </nav>
            </div>
           
			
			<div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lista dos Usuarios</h4>
                    <a href="users/add.php"><button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Add Usuarios</button></a>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Cod</th>
                          <th> Nome </th>
                          <th> Preço</th>
						  <th> Acção </th>
                        </tr> 
                      </thead>
					  
					  		<?php 
							 // faz a seleção do dados na Tabela	
								$data = mysqli_query($conectar, "SELECT * FROM products");
							 // lista os dados
								while($value = mysqli_fetch_array($data)){
									
									
							?>	
					  
                      <tbody>
                        <tr class="table-info">
                          <td> <?php echo $value['id'] ?></td>
                          <td> <?php echo $value['cod'] ?> </td>
                          <td> <?php echo $value['name'] ?> </td>
                          <td> <?php echo $value['price'] ?></td>
						  
						  <!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
						  <td>
							<a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"> Editar </a> - 
							<a class="btn btn-sm btn-danger " href="product/deleteQuery.php?id=<?php echo $value['id']; ?>">Apagar</a>
						  </td>
                        </tr>
						<?php  }?>	
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
			







		 </div>
			

<?php
include_once("../footer.php");  ?>