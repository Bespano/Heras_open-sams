<!-- Fixed navbar -->

<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Administración</h1>
    <p>Asistencia Social</p>
  </div>
 
  <div class="row">
    <div class="col-md-5">
      <div class="page-header">
        <h2>Categorías</h2>
      </div>
      <div class="row">
        <div class="pull-right">
             <a href="administration/insert_category"><button type="button" class="btn btn-primary">Nueva categoría</button></a>
        </div>
      
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Categoría</th>
             <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
		
    	<?php foreach ($category as $category_item): ?>
				
	        <tr onclick="input" data-toggle="modal" href="#ViewCategory_Modal">
	            <td><?php echo $category_item['idCategory']; ?></td>
	            <td><?php echo $category_item['category_name']; ?></td>

	            <td>  	   


              <!-- Modal -->
                <div class="modal fade" id="ViewCategory_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalle Categoría</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <?php echo $category_item['idCategory']; ?>
                        <?php echo $category_item['category_name']; ?>
                        <?php echo $category_item['category_creationdate']; ?>
                        <?php echo $category_item['category_lastmodificationdate']; ?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                      </div>
                    </div>
                  </div>
                </div>    



           
            <?php /*Edit button*/ echo anchor('administration/edit_category/'.$category_item['idCategory'], '<button type="button" class="btn btn-warning">Editar</button>');?>
           
            <?php /*Delete button*/ $onclick = array('onclick'=>"return confirm('Confirmar borrado de la categoría nº ".$category_item['idCategory']." ?')");?> <?=anchor('administration/delete_category/'.$category_item['idCategory'], '<button type="button" class="btn btn-danger">Borrar</button>', $onclick);?>
				</td>

	        </tr>
        <?php endforeach; ?>

        

        </tbody>
      </table>
      </div>
    </div> <!-- class="col-nav 6" -->

    <div class="col-md-5 pull-right">
      <div class="page-header">
        <h2>Subcategorías</h2>
      </div>
      <div class="row">
        <div class="pull-right">
             <a href="administration/insert_subcategory"><button type="button" class="btn btn-primary">Nueva subcategoría</button></a>
        </div>
      
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Subcategoría</th>
             <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
    
      <?php foreach ($subcategory as $subcategory_item): ?>
        
          <tr>
              <td><?php echo $subcategory_item['idSubcategory']; ?></td>
              <td><?php echo $subcategory_item['subcategory']; ?></td>

              <td>       

           
            <?php /*Edit button*/ echo anchor('administration/edit_subcategory/'.$subcategory_item['idSubcategory'], '<button type="button" class="btn btn-warning">Editar</button>');?>
           
            <?php /*Delete button*/ $onclick = array('onclick'=>"return confirm('Confirmar borrado de la subcategoría nº ".$subcategory_item['idSubcategory']." ?')");?> <?=anchor('administration/delete_subcategory/'.$subcategory_item['idSubcategory'], '<button type="button" class="btn btn-danger">Borrar</button>', $onclick);?>
        </td>

          </tr>
        <?php endforeach; ?>

        

        </tbody>
      </table>
      </div>
    </div> <!-- class="col-nav 6" -->


    
</div>



</div> <!-- /container -->